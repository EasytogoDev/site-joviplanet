<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 

$pergunta = $_POST['pergunta'];
$perguntaen = $_POST['perguntaen'];
$perguntaes = $_POST['perguntaes'];
$resposta = $_POST['resposta'];
$respostaen = $_POST['respostaen'];
$respostaes = $_POST['respostaes'];

$query = mysqli_query($conexao, "
INSERT INTO  tb084_faq (
perguntaFAQ,
perguntaenFAQ,
perguntaesFAQ,
respostaFAQ,
respostaenFAQ,
respostaesFAQ,
ativoFAQ
)
VALUES (
'".$pergunta."',
'".$perguntaen."',
'".$perguntaes."',
'".$resposta."',
'".$respostaen."',
'".$respostaes."',
'1'
);
");


if($query)
		{
		echo '<script>alert("F.A.Q inserido com sucesso!");top.location.href="?make=faq";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{

?>
                <div class="title-block">
                    <h3 class="title"> Adicionar </h3>
                    <p class="title-botao"> Adicione uma nova página </p>
                </div>
				<form action="" method="post">
				    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    <div class="title-block">
                                        <p class="title-botao"> Conteúdo da página de página</p>
                                    </div>
                                    <div class="form-group"> <label class="control-label">Pergunta</label> <input name="pergunta" type="text" class="form-control underlined" id="pergunta" placeholder="Coloque o nome do serviço"> </div>
                                    <div class="form-group"> <label class="control-label">Pergunta (EN)</label> <input name="perguntaen" type="text" class="form-control underlined" id="perguntaen" placeholder="Coloque o nome do serviço (en)"> </div>
                                    <div class="form-group"> <label class="control-label">Pergunta (ES)</label> <input name="perguntaes" type="text" class="form-control underlined" id="perguntaes" placeholder="Coloque o nome do serviço (es)" > </div>
                                    <div class="form-group"> <label class="control-label">Resposta</label><textarea class="ckeditor" cols="80" id="resposta" name="resposta" rows="10" value=""></textarea> </div>
                                    <div class="form-group"> <label class="control-label">Resposta (EN)</label><textarea class="ckeditor" cols="80" id="respostaen" name="respostaen" rows="10" value=""></textarea></div>
                                    <div class="form-group"> <label class="control-label">Resposta (ES)</label><textarea class="ckeditor" cols="80" id="respostaes" name="respostaes" rows="10" value=""></textarea></div>    
                                
                                    <div class="form-group"> <label class="control-label">Bloco</label>
                                        <select name="categoria" class="form-control underlined" id="categoria">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                        </select>
						            </div>
                                
                                </div>
							</div>
                            
                            
							<div class="col-md-12">
                                
								<div class="form-group"> 
									<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Adicionar" ></div>
							    </div>
                            
				</form>
                          <!--  <div class="col-md-6">
                                <div class="card card-block sameheight-item">
                                    <div class="title-block">
                                        <h3 class="title"> Underlined Inputs Validation </h3>
                                    </div>
                                    <form role="form">
                                        <div class="form-group has-success"> <label class="control-label" for="inputSuccess1">Input with success</label> <input type="text" class="form-control underlined" id="inputSuccess1"> <span class="has-success">Success message.</span> </div>
                                        <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning1">Input with warning</label> <input type="text" class="form-control underlined" id="inputWarning1"> <span class="has-warning">Warning message.</span> </div>
                                        <div class="form-group has-error">
                                        <label class="control-label" for="inputError1">Input with error</label> <input type="text" class="form-control underlined" id="inputError1"> <span class="has-error">Error message.</span> </div>
                                        <div class="form-group has-success  has-feedback">
                                        <label class="control-label" for="inputSuccess2">Input with success icon</label> <input type="text" class="form-control underlined" id="inputSuccess2"> <span class="fa fa-check form-control-feedback"></span> </div>
                                        <div class="form-group has-warning  has-feedback"> <label class="control-label" for="inputWarning2">Input with warning icon</label> <input type="text" class="form-control underlined" id="inputWarning2"> <span class="fa fa-exclamation form-control-feedback"></span>                                            </div>
                                        <div class="form-group has-error  has-feedback"> <label class="control-label" for="inputError2">Input with error icon</label> <input type="text" class="form-control underlined" id="inputError2"> <span class="fa fa-times form-control-feedback"></span> </div>
                                    </form>
                                </div>
                            </div>-->
                        </div>
                    </section>
					<?php } ?>