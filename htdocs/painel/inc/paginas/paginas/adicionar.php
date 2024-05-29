<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 

$titulo = $_POST['titulo'];
$tituloen = $_POST['tituloen'];
$tituloes = $_POST['tituloes'];
$slug = tiracento($titulo);
$slugen = tiracento($tituloen);
$sluges = tiracento($tituloes);
$subtitulo = $_POST['subtitulo'];
$subtituloen = $_POST['subtituloen'];
$subtituloes = $_POST['subtituloes'];
$conteudo = $_POST['conteudo'];
$conteudoen = $_POST['conteudoen'];
$conteudoes = $_POST['conteudoes'];
$imagem = $_POST['imagem'];
$description = $_POST['description'];
$descriptionen = $_POST['descriptionen'];
$descriptiones = $_POST['descriptiones'];
$menuheader = $_POST['menuheader'];
$menufooter = $_POST['menufooter'];
$ordem = $_POST['ordem'];


$query = mysqli_query($conexao, "
INSERT INTO  tb0060_paginas (
tituloPAGINA,
tituloenPAGINA,
tituloesPAGINA,
slugPAGINA,
slugenPAGINA,
slugesPAGINA,
subtituloPAGINA,
subtituloenPAGINA,
subtituloesPAGINA,
conteudoPAGINA,
conteudoenPAGINA,
conteudoesPAGINA,
imagemPAGINA,
descriptionPAGINA,
descriptionenPAGINA,
descriptionesPAGINA,
ordemPAGINA,
menuheaderPAGINA,
menufooterPAGINA,
ativoPAGINA
)
VALUES (
'".$titulo."',
'".$tituloen."',
'".$tituloes."',
'".$slug."',
'".$slugen."',
'".$sluges."',
'".$subtitulo."',
'".$subtituloen."',
'".$subtituloes."',
'".$conteudo."',
'".$conteudoen."',
'".$conteudoes."',
'".$imagem."',
'".$description."',
'".$descriptionen."',
'".$descriptiones."',
'".$ordem."',
'".$menuheader."',
'".$menufooter."',
'1'
);
");


if($query)
		{
		echo '<script>alert("Serviço inserido com sucesso!");top.location.href="?make=paginas";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{

?>
                <div class="title-block">
                    <h3 class="title"> Adicionar </h3>
                    <p class="title-description"> Adicione uma nova página </p>
                </div>
				<form action="" method="post">
				    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    <div class="title-block">
                                        <p class="title-description"> Conteúdo da página de página</p>
                                    </div>
                                    <div class="form-group"> <label class="control-label">Titulo</label> <input name="titulo" type="text" class="form-control underlined" id="titulo" placeholder="Coloque o nome do serviço"> </div>
                                    <div class="form-group"> <label class="control-label">Titulo (EN)</label> <input name="tituloen" type="text" class="form-control underlined" id="tituloen" placeholder="Coloque o nome do serviço (en)"> </div>
                                    <div class="form-group"> <label class="control-label">Titulo (ES)</label> <input name="tituloes" type="text" class="form-control underlined" id="tituloes" placeholder="Coloque o nome do serviço (es)" > </div>
                                    <div class="form-group"> <label class="control-label">SubTitulo</label> <input name="subtitulo" type="text" class="form-control underlined" id="subtitulo" placeholder="Coloque a breve descrição do serviço"> </div>
                                    <div class="form-group"> <label class="control-label">SubTitulo (EN)</label> <input name="subtituloen" type="text" class="form-control underlined" id="subtituloen" placeholder="Coloque a breve descrição do serviço (en)"> </div>
                                    <div class="form-group"> <label class="control-label">SubTitulo (ES)</label> <input name="subtituloes" type="text" class="form-control underlined" id="subtituloes" placeholder="Coloque a breve descrição do serviço (es)"> </div>    
                                    <div class="form-group"> <label class="control-label">Background</label>     
                                        <input name="imagem" type="text" class="form-control underlined" id="imagem"   placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> 
                                    </div>    
                                    <div class="form-group">  
                                        <label class="control-label">Conteúdo</label>   
                                        <textarea class="ckeditor" cols="80" id="editor1" name="conteudo" rows="10"></textarea>                
                                    </div>
                                    <div class="form-group">  
                                        <label class="control-label">Conteúdo (EN)</label>   
                                        <textarea class="ckeditor" cols="80" id="editor1" name="conteudoen" rows="10"></textarea>                
                                    </div>
                                    <div class="form-group">  
                                        <label class="control-label">Conteúdo (ES)</label>   
                                        <textarea class="ckeditor" cols="80" id="editor1" name="conteudoes" rows="10"></textarea>                
                                    </div>

                                    <div class="form-group"> <label class="control-label">Menu cabeçalho</label>
                                        <select name="menuheader" class="form-control underlined" id="menuheader">
                                            <option value="">Selecione a opção</option>
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                    </div>

                                    <div class="form-group"> <label class="control-label">Menu Rodapé</label>
                                        <select name="menufooter" class="form-control underlined" id="menufooter">
                                            <option value="">Selecione a opção</option>
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
                                    </div>
									
                                    <div class="form-group"> <label class="control-label">Ordem</label> <input name="ordem" type="text" class="form-control underlined" id="ordem" placeholder=""> </div>
                                    
                                </div>
							</div>     
							<div class="col-md-12">
                                <div class="card card-block "> 
                                    <div class="title-block">
                                        <p class="title-description"> SEO - Dados para otimização</p>
                                    </div>
                                    <div class="form-group"> <label class="control-label">Meta-tags Description</label> <input name="description" type="text"  class="form-control underlined" id="description" placeholder="Descrição para buscadores"> </div>

                                    <div class="form-group"> <label class="control-label">Meta-tags Description (EN)</label> <input name="descriptionen" type="text"  class="form-control underlined" id="descriptionen" placeholder="Descrição para buscadores"> </div>

                                    <div class="form-group"> <label class="control-label">Meta-tags Description (ES)</label> <input name="descriptiones" type="text"  class="form-control underlined" id="descriptiones" placeholder="Descrição para buscadores"> </div>
										 
                                    
                                </div>
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