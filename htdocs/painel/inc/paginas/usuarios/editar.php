<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

$codigoUSUARIO = $_POST['codigo'];
$nomeUSUARIO = $_POST['nome'];
$sobrenomeUSUARIO = $_POST['sobrenome'];
$emailUSUARIO = $_POST['email'];
$senhaUSUARIO = $_POST['senha'];
$resenhaUSUARIO = $_POST['re-senha'];
$ativoUSUARIO = '1';


if($senhaUSUARIO==""){
$alterasenha = "";	
}else{
	if($senhaUSUARIO==$resenhaUSUARIO){
$alterasenha = "senhaUSUARIO = '".$senhaUSUARIO."',";

	}else{
		
			echo '<script>alert("Senhas não conferem!");top.location.href="javascript:;history.back(-1);";</script>';
			exit();
	}	
}

$query = mysqli_query($conexao, "
UPDATE tb0301_usuarios SET 
	nomeUSUARIO = '".$nomeUSUARIO."',
		sobrenomeUSUARIO = '".$sobrenomeUSUARIO."',
			emailUSUARIO = '".$emailUSUARIO."',
				$alterasenha
						ativoUSUARIO = '1' WHERE codigoUSUARIO = '".$codigoUSUARIO."'
");


if($query){
		echo '<script>alert("Usuário alterado com sucesso!");top.location.href="?make='.$make.'&acao=editar&codigo='.$codigoUSUARIO.'";</script>';
		}else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{
	
	$codigoUSUARIO = addslashes(trim(@$_GET['codigo']));
	$query_usuarios = mysqli_query($conexao, 'SELECT * FROM tb0301_usuarios WHERE codigoUSUARIO = "'.$codigoUSUARIO.'" ');
	$usuarios = mysqli_fetch_assoc($query_usuarios);
	
?>
<div class="title-block">
                        <h3 class="title"> Alterar </h3>
                        <p class="title-description"> Altere o usuario </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
						<input name="codigo" type="hidden" value="<?php echo $usuarios['codigoUSUARIO']; ?>" />
						
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Conteudo da página de página</p>
                    </div>
                                
                                   
                                    
                                    
                                    
                                    <div class="form-group">
                                      <label class="control-label">Nome</label>
                                      <input name="nome" value="<?php echo $usuarios['nomeUSUARIO']; ?>" type="text" class="form-control underlined" id="nome" placeholder="Coloque o nome da Usuário" />
                                    </div>
                                  <div class="form-group">
                                      <label class="control-label">Sobrenome</label>
                                    <input name="sobrenome" value="<?php echo $usuarios['sobrenomeUSUARIO']; ?>" type="text" class="form-control underlined" id="sobrenome" placeholder="Coloque o Sobrenome do Usuário" />
                                    </div>
                                  <div class="form-group">
                                      <label class="control-label">E-mail</label>
                                    <input name="email" value="<?php echo $usuarios['emailUSUARIO']; ?>" type="email" class="form-control underlined" id="email" placeholder="Coloque o email de Usuário" />
                                    </div>
                                  <div class="form-group">
                                    <label class="control-label">Senha</label>
                                    <input name="senha"   type="password" class="form-control underlined" id="senha" placeholder="Nova a senha Aqui!!!" />
                                    </div>
									
									 <div class="form-group">
                                    <label class="control-label">Confirmar Senha</label>
                                    <input name="re-senha"   type="password" class="form-control underlined" id="re-senha" placeholder="Repita a senha Aqui!!!" />
                                    </div>
                                 
									
                                    
                                </div>
								 </div>
								
                                  </div>
                                
                                
                              
                                 
                             
                           
								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" ></div>
							</div>  </div>
							
							</form>
  </div>

								 </div>
             
                        </div>
                    </section>
					<?php } ?>