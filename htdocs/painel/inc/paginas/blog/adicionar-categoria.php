<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 


$titulo = $_POST['titulo'];
$slug = tiracento($titulo);
$vinculo = $_POST['vinculo'];

$query = mysqli_query($conexao, "
INSERT INTO tb080_categorias (
nomeCATEGORIA,
	slugCATEGORIA,
		vinculoCATEGORIA,
			ativoCATEGORIA
)
VALUES (
'".$titulo."',
	'".$slug."',
		'".$vinculo."',
			'1'
);
");


			
if($query)
		{
		echo '<script>alert("Categoria inserida com sucesso!");top.location.href="?make='.$make.'&acao=categorias";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			

}else{
 
	
?>
<div class="title-block">
                        <h3 class="title"> Adicionar </h3>
                        <p class="title-description"> Adicione a categoria </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
 						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Seleção de categorias</p>
                    </div>
                                  <div class="form-group"> <label class="control-label">Nome</label> <input name="titulo"  type="text" class="form-control underlined" id="titulo" placeholder="Coloque o nome do serviço"> </div>
                                  
                                             
                                    
									 
                                        <div class="form-group"> <label class="control-label">Pai</label> 
										
										<select name="vinculo" class="form-control underlined" id="vinculo">
										<option value="0">Selecione</option>
										<?php
										$query_categoria = mysqli_query($conexao, "SELECT * FROM tb080_categorias WHERE ativoCATEGORIA='1' ") or die(mysqli_error());
										while($categoria = mysqli_fetch_assoc($query_categoria)){?>
										
										
							<option value="<?php echo $categoria['codigoCATEGORIA']; ?>" ><?php echo $categoria['nomeCATEGORIA']; ?></option>
							
										<?php } ?>
						</select>
						</div>
                                </div>
								 </div>
                               </div>  
                              
								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Adicionar" ></div>
							</div>
							</div>
							</form>


             
                        </div>
                    </section>
					<?php } ?>