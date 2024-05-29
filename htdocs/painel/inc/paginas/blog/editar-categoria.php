<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$slug = tiracento($titulo);
$vinculo = $_POST['vinculo'];

$query = mysqli_query($conexao, "
UPDATE tb080_categorias SET 
nomeCATEGORIA = '".$titulo."',
	slugCATEGORIA = '".$slug."',
		vinculoCATEGORIA = '".$vinculo."'
			 WHERE codigoCATEGORIA = '".$codigo."'
");


if($query){
		echo '<script>alert("Categoria alterada com sucesso!");top.location.href="?make='.$make.'&acao=editar-categoria&codigo='.$codigo.'";</script>';
		}else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			

}else{
	
	$codigoCATEGORIA = addslashes(trim(@$_GET['codigo']));
	$query_categorias = mysqli_query($conexao, 'SELECT * FROM tb080_categorias WHERE codigoCATEGORIA = "'.$codigoCATEGORIA.'" ');
	$categorias = mysqli_fetch_assoc($query_categorias);
	
?>
<div class="title-block">
                        <h3 class="title"> Alterar </h3>
                        <p class="title-description"> Altere a categoria </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
						<input name="codigo" type="hidden" value="<?php echo $categorias['codigoCATEGORIA']; ?>" />
						
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Seleção de categorias</p>
                    </div>
                                  <div class="form-group"> <label class="control-label">Nome</label> <input name="titulo" value="<?php echo $categorias['nomeCATEGORIA']; ?>" type="text" class="form-control underlined" id="titulo" placeholder="Coloque o nome do serviço"> </div>
                                  
                                             
                                    
									 
                                        <div class="form-group"> <label class="control-label">Pai</label> 
										
										<select name="vinculo" class="form-control underlined" id="vinculo">
										
										<option value="0">Selecione</option>
										
										
										
										<?php
										$query_categoria = mysqli_query($conexao, "SELECT * FROM tb080_categorias WHERE ativoCATEGORIA='1' ") or die(mysqli_error());
										while($categoria = mysqli_fetch_assoc($query_categoria)){?>
									
									<?php if($categorias['codigoCATEGORIA']!==$categoria['codigoCATEGORIA']){  ?>	
										
							<option value="<?php echo $categoria['codigoCATEGORIA']; ?>" <?php if($categorias['vinculoCATEGORIA']==$categoria['codigoCATEGORIA']){ echo' selected="selected"'; } ?>><?php echo $categoria['nomeCATEGORIA']; ?></option>
							
										<?php } } ?>
						</select>
						</div>
                                </div>
								 </div>
                                 </div>
                              
								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" ></div>
							</div>
							</div>
							</form>


             
                        </div>
                    </section>
					<?php } ?>