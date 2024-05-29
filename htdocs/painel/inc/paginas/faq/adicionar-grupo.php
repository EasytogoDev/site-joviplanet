<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 


$nome = $_POST['nome'];

$query = mysqli_query($conexao, "
INSERT INTO tb084_grupo_faq (
nomeGRUPOFAQ,
ativoGRUPOFAQ
)
VALUES (
'".$nome."',
'1'
);
");


			
if($query)
		{
		echo '<script>alert("Categoria inserida com sucesso!");top.location.href="?make='.$make.'&acao=grupos";</script>';
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
                        <p class="title-description"> Seleção de grupo</p>
                    </div>
                                  <div class="form-group"><label class="control-label">Nome</label> <input name="nome"  type="text" class="form-control underlined" id="nome" placeholder="Coloque o nome do grupo"> </div>
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