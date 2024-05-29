<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

    $codigo = $_POST['codigo'];    
    $grupo = $_POST['grupo'];
    $pergunta = $_POST['pergunta'];
    $resposta = $_POST['resposta'];
    $perguntaen = $_POST['perguntaen'];
    $respostaen = $_POST['respostaen'];
    $perguntaes = $_POST['perguntaes'];
    $respostaes = $_POST['respostaes'];

    $query = mysqli_query($conexao, "
    UPDATE tb084_faq SET  
    grupoFAQ = '".$grupo."',
    perguntaFAQ = '".$pergunta."',
    respostaFAQ = '".$resposta."',
    perguntaenFAQ = '".$perguntaen."',
    respostaenFAQ = '".$respostaen."',
    perguntaesFAQ = '".$perguntaes."',
    respostaesFAQ = '".$respostaes."'
    WHERE codigoFAQ = '".$codigo."'
    ");


    if($query){
        echo '<script>alert("F.A.Q alterado com sucesso!");top.location.href="?make=faq&acao=editar&codigo='.$codigo.'";</script>';
    }else{
        echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
    }

			
			

}else{
	
	$codigoFAQ = addslashes(trim(@$_GET['codigo']));
	$query_FAQS = mysqli_query($conexao, 'SELECT 
    codigoFAQ, grupoFAQ, perguntaFAQ, respostaFAQ, perguntaenFAQ, respostaenFAQ, perguntaesFAQ, respostaesFAQ, ativoFAQ 
    FROM tb084_faq WHERE codigoFAQ = "'.$codigoFAQ.'" ');
	$dadosfaq = mysqli_fetch_assoc($query_FAQS);
	
?>
                <div class="title-block">
                    <h3 class="title"> Editar </h3>
                </div>
				<form action="" method="post">
                    <input name="codigo" type="hidden"  id="codigo" value="<?php echo $dadosfaq['codigoFAQ'];?>">
				    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block ">

                                    <div class="form-group"> <label class="control-label">Pergunta</label> <input name="pergunta" type="text" class="form-control underlined" id="pergunta" value="<?php echo $dadosfaq['perguntaFAQ'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">Resposta</label><textarea class="ckeditor" cols="80" id="resposta" name="resposta" rows="10" ><?php echo $dadosfaq['respostaFAQ'];?></textarea> </div>


                                    <div class="form-group"> <label class="control-label">Pergunta (EN)</label> <input name="perguntaen" type="text" class="form-control underlined" id="perguntaen" value="<?php echo $dadosfaq['perguntaenFAQ'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">Resposta (EN)</label><textarea class="ckeditor" cols="80" id="respostaen" name="respostaen" rows="10"><?php echo $dadosfaq['respostaenFAQ'];?></textarea></div>


                                    <div class="form-group"> <label class="control-label">Pergunta (ES)</label> <input name="perguntaes" type="text" class="form-control underlined" id="perguntaes" value="<?php echo $dadosfaq['perguntaesFAQ'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">Resposta (ES)</label><textarea class="ckeditor" cols="80" id="respostaes" name="respostaes" rows="10" ><?php echo $dadosfaq['respostaesFAQ'];?></textarea></div>    


                                    <div class="form-group"> <label class="control-label">Bloco</label>
                                        <select name="grupo" class="form-control underlined" id="grupo">
 
                                        <?php
                                        $query_grupos = mysqli_query($conexao, "SELECT codigoGRUPOFAQ, nomeGRUPOFAQ, ativoGRUPOFAQ FROM tb084_grupo_faq WHERE ativoGRUPOFAQ='1' ") or die(mysqli_error());

                                        while($grupos = mysqli_fetch_assoc($query_grupos)){?>


                                        <option value="<?php echo $grupos['codigoGRUPOFAQ']; ?>" <?php if($grupos['codigoGRUPOFAQ']==$dadosfaq['grupoFAQ']){echo 'selected="selected"';}?> >
                                        <?php echo $grupos['nomeGRUPOFAQ']; ?>
                                        </option>

                                        <?php } ?> 

 
                                        </select>
						            </div>
                                
                                
                                
                                </div>

							</div>
                            
                            
							<div class="col-md-12">
                                
								<div class="form-group"> 
									<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" ></div>
							    </div>
                            
				</form>
                         
                        </div>
                    </section>
					<?php } ?>