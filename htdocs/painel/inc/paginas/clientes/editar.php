<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$slug = tiracento($nome);
$imagem = $_POST['imagem'];
$site = $_POST['site'];
$usuario = $usuario['codigoUSUARIO'];
$data = date("Y-m-d");


$query = mysqli_query($conexao, "
UPDATE tb0171_clientes SET 
nomeCLIENTE = '".$nome."',
	slugCLIENTE = '".$slug."',
		imagemCLIENTE = '".$imagem."',
			siteCLIENTE = '".$site."',
				usuarioCLIENTE = '".$usuario."',
					dataCLIENTE = '".$data."',
						ativoCLIENTE = '1' WHERE codigoCLIENTE = '".$codigo."'
");


if($query){
		echo '<script>alert("Cliente alterado com sucesso!");top.location.href="?make=clientes&acao=editar&codigo='.$codigo.'";</script>';
		}else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{
	
	$codigoCLIENTE = addslashes(trim(@$_GET['codigo']));
	$query_clientes = mysqli_query($conexao, 'SELECT * FROM tb0171_clientes WHERE codigoCLIENTE = "'.$codigoCLIENTE.'" ');
	$clientes = mysqli_fetch_assoc($query_clientes);
	
?>
<div class="title-block">
                        <h3 class="title"> Alterar </h3>
                        <p class="title-description"> Altere a página </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
						<input name="codigo" type="hidden" value="<?php echo $clientes['codigoCLIENTE']; ?>" />
						
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Conteudo da página de página</p>
                    </div>
                                  <div class="form-group"> <label class="control-label">Nome</label> 
								  <input name="nome" value="<?php echo $clientes['nomeCLIENTE']; ?>" type="text" class="form-control underlined" id="nome" placeholder="Coloque o nome da Cliente"> </div>
                                       
                                  <div class="form-group"> <label class="control-label">Imagem</label>
                                             
                                    <input name="imagem" type="text"
    class="form-control underlined" id="imagem" value="<?php echo $clientes['imagemCLIENTE']; ?>"  placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>
                                             
                                             
                                  <div class="form-group"> <label class="control-label">Site</label> <input name="site" value="<?php echo $clientes['siteCLIENTE']; ?>" type="text" class="form-control underlined" id="site" placeholder="http://www.site.com.br"> </div>
									
                                    
                                </div>
								 </div>
								
                                  </div>
                                
                                
                              
                                 
                             
                           
								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" ></div>
							</div>  </div>
							
							</form>


             
                        </div>
                    </section>
					<?php } ?>