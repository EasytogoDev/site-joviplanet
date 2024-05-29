<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

$codigo = $_POST['codigo'];
$cliente = $_POST['cliente'];
$imagem = $_POST['imagem'];
$nome = $_POST['nome'];
$slug = tiracento($nome);
$texto = $_POST['texto'];
$usuario = $usuario['codigoUSUARIO'];
$data = date("Y-m-d");


$query = mysqli_query($conexao, "
UPDATE tb0172_depoimentos SET 
clienteDEPOIMENTO = '".$cliente."',
	imagemDEPOIMENTO = '".$imagem."',
		nomeDEPOIMENTO = '".$nome."',
			slugDEPOIMENTO = '".$slug."',
				textoDEPOIMENTO = '".$texto."',
					usuarioDEPOIMENTO = '".$usuario."',
						dataDEPOIMENTO = '".$data."',
							ativoDEPOIMENTO = '1' WHERE codigoDEPOIMENTO = '".$codigo."'
");


if($query){
		echo '<script>alert("Depoimento alterado com sucesso!");top.location.href="?make=depoimentos&acao=editar&codigo='.$codigo.'";</script>';
		}else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{
	
	$codigoDEPOIMENTO = addslashes(trim(@$_GET['codigo']));
	$query_depoimentos = mysqli_query($conexao, 'SELECT * FROM tb0172_depoimentos WHERE codigoDEPOIMENTO = "'.$codigoDEPOIMENTO.'" ');
	$depoimentos = mysqli_fetch_assoc($query_depoimentos);
	
?>
<div class="title-block">
                        <h3 class="title"> Alterar </h3>
                        <p class="title-description"> Altere o depoimento </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
						<input name="codigo" type="hidden" value="<?php echo $depoimentos['codigoDEPOIMENTO']; ?>" />
						
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Conteudo da página de página</p>
                    </div>
                          <div class="form-group"> <label class="control-label">Cliente</label> 
										
										<select name="cliente" class="form-control underlined" id="cliente">
										<?php
										$query_categoria = mysqli_query($conexao, "SELECT * FROM tb0171_clientes WHERE ativoCLIENTE='1' ") or die(mysqli_error());
										while($categoria = mysqli_fetch_assoc($query_categoria)){?>
										
										
							<option value="<?php echo $categoria['codigoCLIENTE']; ?>" <?php if($servicos['clienteDEPOIMENTO']==$categoria['codigoCLIENTE']){ echo' selected="selected"'; } ?>><?php echo $categoria['nomeCLIENTE']; ?></option>
							
										<?php } ?>
						</select>
						</div>        
                                       
                                  <div class="form-group"> <label class="control-label">Imagem</label>
                                             
                                    <input name="imagem" type="text"
    class="form-control underlined" id="imagem" value="<?php echo $depoimentos['imagemDEPOIMENTO']; ?>"  placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>
                                             <div class="form-group"> <label class="control-label">Nome</label> 
								  <input name="nome" value="<?php echo $depoimentos['nomeDEPOIMENTO']; ?>" type="text" class="form-control underlined" id="nome" placeholder="Coloque o nome da Depoimento"> </div>
                                             
                                  
                                  
                                  
                                   <div class="form-group"> <label class="control-label">Depoimento</label> <textarea class="ckeditor" cols="80" id="editor1" name="texto" rows="10"><?php echo $depoimentos['textoDEPOIMENTO']; ?></textarea></div>
									
                                    
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