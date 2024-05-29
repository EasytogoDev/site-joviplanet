<?php 

	$codigoFORNECEDOR = addslashes(trim(@$_GET['codigo']));
	$query_fornecedores = mysqli_query($conexao, 'SELECT codigoFORNECEDOR, nomeFORNECEDOR, empresaFORNECEDOR, telefoneFORNECEDOR, emailFORNECEDOR, siteFORNECEDOR, ramoFORNECEDOR, apresentacaoFORNECEDOR, ativoFORNECEDOR
                                                  FROM tb0006_fornecedores WHERE codigoFORNECEDOR = "'.$codigoFORNECEDOR.'" ');
	$fornecedores = mysqli_fetch_assoc($query_fornecedores);
	
?>
                    <div class="title-block">
                        <h3 class="title"> Visualizar </h3>
                        <p class="title-description"> Visualize o possivel fornecedor </p>
                    </div>
					  
					
					<section class="section">
                        <div class="row sameheight-container">
						
					 
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                  
                                <div class="form-group"> <label class="control-label">Empresa</label> 
                                <input name="nome" value="<?php echo $fornecedores['empresaFORNECEDOR']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>
                                                    
                                <div class="form-group"> <label class="control-label">Nome</label> 
                                <input name="nome" value="<?php echo $fornecedores['nomeFORNECEDOR']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>
                                                    
                                                <div class="form-group"> <label class="control-label">E-mail</label> 
                                <input name="nome" value="<?php echo $fornecedores['emailFORNECEDOR']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>
                                                    
                                                <div class="form-group"> <label class="control-label">Telefone</label> 
                                <input name="nome" value="<?php echo $fornecedores['telefoneFORNECEDOR']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>

                                                <div class="form-group"> <label class="control-label">Ramo</label> 
                                <input name="nome" value="<?php echo $fornecedores['ramoFORNECEDOR']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>
                                                  
                                                <div class="form-group"> <label class="control-label">Site</label> 
                                <input name="nome" value="<?php echo $fornecedores['siteFORNECEDOR']; ?>" type="text" class="form-control underlined" id="nome" readonly="readonly"> </div>
                                    
                                  <?php if(!$fornecedores['apresentacaoFORNECEDOR']){ ?>
                                    <div class="form-group"> <label class="control-label">Arquivo de Apresentção</label> 
                                    <a href="<?php echo $fornecedores['apresentacaoFORNECEDOR'];?>" target="_blank">Arquivo</a></div>
                                  <?php }?>

									 
                            </div>
							 
                            


             
                        </div>
                    </section>
					