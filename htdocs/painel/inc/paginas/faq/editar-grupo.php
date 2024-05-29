<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

$codigo = $_POST['codigo'];
$nome = $_POST['nome']; 

$query = mysqli_query($conexao, " UPDATE tb084_grupo_faq SET nomeGRUPOFAQ = '".$nome."' WHERE codigoGRUPOFAQ = '".$codigo."' ");


		if($query){
			
			echo '<script>alert("Grupo alterado com sucesso!");top.location.href="?make='.$make.'&acao=editar-grupo&codigo='.$codigo.'";</script>';

		}else{
			
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';

		}


}else{
	
	$codigoGRUPOFAQ = addslashes(trim(@$_GET['codigo']));
	$query_grupofaqs = mysqli_query($conexao, 'SELECT codigoGRUPOFAQ,nomeGRUPOFAQ,ativoGRUPOFAQ FROM tb084_grupo_faq WHERE codigoGRUPOFAQ = "'.$codigoGRUPOFAQ.'" ');
	$grupofaqs = mysqli_fetch_assoc($query_grupofaqs);
	
?>
<div class="title-block">
                        <h3 class="title"> Alterar </h3>
                        <p class="title-description"> Altere a Grupo das F.A.Qs </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
						<input name="codigo" type="hidden" value="<?php echo $grupofaqs['codigoGRUPOFAQ']; ?>" />
						
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Seleção de grupo de F.A.Q.s</p>
                    </div>
                                  <div class="form-group"> <label class="control-label">Nome</label> 
								  <input name="nome" value="<?php echo $grupofaqs['nomeGRUPOFAQ']; ?>" type="text" class="form-control underlined" id="nome" placeholder="Coloque o nome do grupo"> </div>
                                  
                                             
                                    
									 
                                       
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