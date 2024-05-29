<?php 

	$codigoATENDIMENTO = addslashes(trim(@$_GET['codigo']));
	$query_atendimentos = mysqli_query($conexao, 'SELECT * FROM tb0101_atendimentos WHERE codigoATENDIMENTO = "'.$codigoATENDIMENTO.'" ');
	$atendimentos = mysqli_fetch_assoc($query_atendimentos);
	
?>
<div class="title-block">
                        <h3 class="title"> Visualizar </h3>
                        <p class="title-description"> Visualize a mensagem </p>
                    </div>
					  
					
					<section class="section">
                        <div class="row sameheight-container">
						
					 
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Mensagens do site <?php echo $atendimentos['dataATENDIMENTO']; ?></p>
                    </div>
                                  
								   <div class="form-group"> <label class="control-label">Empresa</label> 
								  <input name="nome" value="<?php echo $atendimentos['empresaATENDIMENTO']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>
                                       
								  
								  <div class="form-group"> <label class="control-label">Nome</label> 
								  <input name="nome" value="<?php echo $atendimentos['nomeATENDIMENTO']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>
                                       
                                  <div class="form-group"> <label class="control-label">E-mail</label> 
								  <input name="nome" value="<?php echo $atendimentos['emailATENDIMENTO']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>
                                       
                                  <div class="form-group"> <label class="control-label">Telefone</label> 
								  <input name="nome" value="<?php echo $atendimentos['telefoneATENDIMENTO']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>
                                         
                                  <!-- <div class="form-group"> <label class="control-label">Departamento</label> 
								  <input name="nome" value="<?php echo $atendimentos['departamentoATENDIMENTO']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div> -->
                                       
                                     
                                  <div class="form-group"> <label class="control-label">Assunto</label> 
								  <input name="nome" value="<?php echo $atendimentos['assuntoATENDIMENTO']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>
                                       
                                 
                                             
                                  <div class="form-group"> <label class="control-label">Mesagem</label>
								  
								     <textarea  class="form-control underlined" cols="80"     rows="10" readonly="readonly"><?php echo $atendimentos['mensagemATENDIMENTO']; ?></textarea>    </div>
									 
									    
									
                                    
                                </div>
							 
                            


             
                        </div>
                    </section>
					