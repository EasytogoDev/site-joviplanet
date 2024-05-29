<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

$codigo = $_LANCAMENTO['codigo'];
$titulo = $_LANCAMENTO['titulo'];
$imagem = $_LANCAMENTO['imagem'];
$arquivo = $_LANCAMENTO['arquivo'];
$data = date("Y-m-d");


$query = mysqli_query($conexao, "
UPDATE tb0005_lancamentos SET 
nomeLANCAMENTO = '".$titulo."',
	imagemLANCAMENTO = '".$imagem."',
		arquivoLANCAMENTO = '".$arquivo."',
			dataLANCAMENTO = '".$data."' WHERE codigoLANCAMENTO = '".$codigo."'
");


if($query){
		echo '<script>alert("Post alterado com sucesso!");top.location.href="?make='.$make.'&acao=editar&codigo='.$codigo.'";</script>';
		}else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
}else{
	
	$codigoLANCAMENTO = addslashes(trim(@$_GET['codigo']));
	$query_lancamentos = mysqli_query($conexao, 'SELECT * FROM tb0005_lancamentos WHERE codigoLANCAMENTO = "'.$codigoLANCAMENTO.'" ');
	$lancamentos = mysqli_fetch_assoc($query_lancamentos);
	
?>
<div class="title-block">
                        <h3 class="title"> Alterar </h3>
                        <p class="title-description"> Altere o post </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
						<input name="codigo" type="hidden" value="<?php echo $lancamentos['codigoLANCAMENTO']; ?>" />
						
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Conteudo da página de atuação</p>
                    </div>
                                  <div class="form-group"> <label class="control-label">Titulo</label> <input name="titulo" value="<?php echo $lancamentos['nomeLANCAMENTO']; ?>" type="text" class="form-control underlined" id="titulo" placeholder="Coloque o nome do serviço"> </div>
                                  <script>
								  function limpaImagem(){
									  
									  document.getElementById('imagem').value ='';
								  }
								  </script>     
                                  <div class="form-group"> <label class="control-label">Imagem | <a href="javascript:;" onclick="limpaImagem();">Limpar Campo de imagem</a></label>
                                             
                                    <input name="imagem" type="text" class="form-control underlined" id="imagem" value="<?php echo $lancamentos['imagemLANCAMENTO']; ?>"  placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>
								
									<div class="form-group"> <label class="control-label">Arquivo | <a href="javascript:;" onclick="limpaImagem();">Limpar Campo de imagem</a></label>
                                             
										<input name="imagem" type="text" class="form-control underlined" id="imagem" value="<?php echo $lancamentos['arquivoLANCAMENTO']; ?>"  placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>
		 
									</div>
								
                                </div>
								</div>

								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" ></div>
							</div>
							
							</form>


             
                        </div>
                    </section>
					<?php } ?>