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
UPDATE tb0011_licencas SET 
nomeLICENCA = '".$nome."',
	slugLICENCA = '".$slug."',
		imagemLICENCA = '".$imagem."',
			siteLICENCA = '".$site."',
				usuarioLICENCA = '".$usuario."',
					dataLICENCA = '".$data."',
						ativoLICENCA = '1' WHERE codigoLICENCA = '".$codigo."'
");


if($query){
		echo '<script>alert("Licença alterado com sucesso!");top.location.href="?make=licencas&acao=editar&codigo='.$codigo.'";</script>';
		}else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{
	
	$codigoLICENCA = addslashes(trim(@$_GET['codigo']));
	$query_licencas = mysqli_query($conexao, 'SELECT * FROM tb0011_licencas WHERE codigoLICENCA = "'.$codigoLICENCA.'" ');
	$licencas = mysqli_fetch_assoc($query_licencas);
	
?>
<div class="title-block">
                        <h3 class="title"> Alterar </h3>
                        <p class="title-description"> Altere a página </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
						<input name="codigo" type="hidden" value="<?php echo $licencas['codigoLICENCA']; ?>" />
						
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Conteudo da página de página</p>
                    </div>
                                  <div class="form-group"> <label class="control-label">Nome</label> 
								  <input name="nome" value="<?php echo $licencas['nomeLICENCA']; ?>" type="text" class="form-control underlined" id="nome" placeholder="Coloque o nome da Licença"> </div>
                                       
                                  <div class="form-group"> <label class="control-label">Imagem</label>
                                             
                                    <input name="imagem" type="text"
    class="form-control underlined" id="imagem" value="<?php echo $licencas['imagemLICENCA']; ?>"  placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>
                                             
                                             
                                  <div class="form-group"> <label class="control-label">Site</label> <input name="site" value="<?php echo $licencas['siteLICENCA']; ?>" type="text" class="form-control underlined" id="site" placeholder="http://www.site.com.br"> </div>
									
                                    
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