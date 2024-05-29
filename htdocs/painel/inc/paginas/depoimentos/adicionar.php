<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 

$cliente = $_POST['cliente'];
$imagem = $_POST['imagem'];
$nome = $_POST['nome'];
$slug = tiracento($nome);
$texto = $_POST['texto'];
$usuario = $usuario['codigoUSUARIO'];
$data = date("Y-m-d");


$query = mysqli_query($conexao, "
INSERT INTO  tb0172_depoimentos (
clienteDEPOIMENTO,
	imagemDEPOIMENTO,
		nomeDEPOIMENTO,
			slugDEPOIMENTO,
				textoDEPOIMENTO,
					usuarioDEPOIMENTO,
						dataDEPOIMENTO,	
							ativoDEPOIMENTO
)
VALUES (
'".$cliente."',
	'".$imagem."',
		'".$nome."',
			'".$slug."',
				'".$texto."',
					'".$usuario."',
						'".$data."',
							'1'
);
");


if($query)
		{
		echo '<script>alert("Depoimentos inserido com sucesso!");top.location.href="?make=depoimentos";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{

?>
<div class="title-block">
                        <h3 class="title"> Adicionar </h3>
                        <p class="title-description"> Adicione uma Depoimento </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						 
						
                            <div class="col-md-12">
                                <div class="card card-block ">
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
    class="form-control underlined" id="imagem"  placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>
                                             
                                             <div class="form-group"> <label class="control-label">Nome</label> 
								  <input name="nome"   type="text" class="form-control underlined" id="nome" placeholder="Coloque o nome da Depoimento"> </div>
                                  <div class="form-group"> <label class="control-label">Depoimento</label> <textarea class="ckeditor" cols="80" id="editor1" name="texto" rows="10"><?php echo $servicos['conteudoSERVICO']; ?></textarea></div>
									
                                    
                                </div>
								 </div>
								
                                  </div>
                                
                                
                              
                                 
                             
                            
								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Adicionar" ></div>
							</div>  </div>
							
							</form>


             
                        </div>
                    </section>
					<?php } ?>