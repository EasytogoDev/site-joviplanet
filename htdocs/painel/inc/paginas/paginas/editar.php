<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

    $codigo = $_POST['codigo'];
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
UPDATE tb0060_paginas SET 
tituloPAGINA = '".$titulo."',
tituloenPAGINA = '".$tituloen."',
tituloesPAGINA = '".$tituloes."',
slugPAGINA = '".$slug."',
slugenPAGINA = '".$slugen."',
slugesPAGINA = '".$sluges."',
subtituloPAGINA = '".$subtitulo."',
subtituloenPAGINA = '".$subtituloen."',
subtituloesPAGINA = '".$subtituloes."',
imagemPAGINA = '".$imagem."',
conteudoPAGINA = '".$conteudo."',
conteudoenPAGINA = '".$conteudoen."',
conteudoesPAGINA = '".$conteudoes."',
descriptionPAGINA = '".$description."',
descriptionenPAGINA = '".$descriptionen."',
descriptionesPAGINA = '".$descriptiones."',
menuheaderPAGINA = '".$menuheader."',
menufooterPAGINA = '".$menufooter."',
ordemPAGINA = '".$ordem."'
WHERE codigoPAGINA = '".$codigo."'
");


if($query){
		echo '<script>alert("Serviço alterado com sucesso!");top.location.href="?make=paginas&acao=home&codigo='.$codigo.'";</script>';
		}else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{
	
	$codigoPAGINA = addslashes(trim(@$_GET['codigo']));
	$query_PAGINAs = mysqli_query($conexao, 'SELECT * FROM tb0060_paginas WHERE codigoPAGINA = "'.$codigoPAGINA.'" ');
	$atuacoes = mysqli_fetch_assoc($query_PAGINAs);
	
?>
                <div class="title-block">
                    <h3 class="title"> Alterar </h3>
                </div>
				<form action="" method="post">
                <input name="codigo" type="hidden"  id="codigo" value="<?php echo $atuacoes['codigoPAGINA'];?>">
				    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="form-group"> <label class="control-label">Titulo</label> <input name="titulo" type="text" class="form-control underlined" id="titulo" placeholder="" value="<?php echo $atuacoes['tituloPAGINA'];?>"></div>
                                    <div class="form-group"> <label class="control-label">Titulo (EN)</label> <input name="tituloen" type="text" class="form-control underlined" id="tituloen" placeholder="" value="<?php echo $atuacoes['tituloenPAGINA'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">Titulo (ES)</label> <input name="tituloes" type="text" class="form-control underlined" id="tituloes" placeholder="" value="<?php echo $atuacoes['tituloesPAGINA'];?>" > </div>
                                    <div class="form-group"> <label class="control-label">SubTitulo</label> <input name="subtitulo" type="text" class="form-control underlined" id="subtitulo" placeholder="" value="<?php echo $atuacoes['subtituloPAGINA'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">SubTitulo (EN)</label> <input name="subtituloen" type="text" class="form-control underlined" id="subtituloen" placeholder="" value="<?php echo $atuacoes['subtituloenPAGINA'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">SubTitulo (ES)</label> <input name="subtituloes" type="text" class="form-control underlined" id="subtituloes" placeholder="" value="<?php echo $atuacoes['subtituloesPAGINA'];?>"> </div>    
                                    <div class="form-group"> <label class="control-label">Background</label>     
                                        <input name="imagem" type="text" class="form-control underlined" id="imagem" placeholder="" onclick="openKCFinder(this)" readonly="readonly" value="<?php echo $atuacoes['imagemPAGINA']?>"/> 
                                    </div>    
                                    <div class="form-group">  
                                        <label class="control-label">Conteúdo</label>   
                                        <textarea class="ckeditor" cols="80" id="editor1" name="conteudo" rows="10"><?php echo $atuacoes['conteudoPAGINA'];?></textarea>                
                                    </div>
                                    <div class="form-group">  
                                        <label class="control-label">Conteúdo (EN)</label>   
                                        <textarea class="ckeditor" cols="80" id="editor1" name="conteudoen" rows="10"><?php echo $atuacoes['conteudoenPAGINA'];?></textarea>                
                                    </div>
                                    <div class="form-group">  
                                        <label class="control-label">Conteúdo (ES)</label>   
                                        <textarea class="ckeditor" cols="80" id="editor1" name="conteudoes" rows="10"><?php echo $atuacoes['conteudoesPAGINA'];?></textarea>                
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
									
                                    <div class="form-group"> <label class="control-label">Ordem</label> <input name="ordem" type="text" class="form-control underlined" id="ordem" value="<?php echo $atuacoes['ordemPAGINA'];?>"> </div>
                                    
                                </div>
							</div>     
							<div class="col-md-12">
                                <div class="card card-block "> 
                                    <div class="title-block">
                                        <p class="title-description"> SEO - Dados para otimização</p>
                                    </div>
                                    <div class="form-group"> <label class="control-label">Meta-tags Description</label> <input name="description" type="text"  class="form-control underlined" id="description" placeholder="" value="<?php echo $atuacoes['descriptionPAGINA'];?>"> </div>

                                    <div class="form-group"> <label class="control-label">Meta-tags Description (EN)</label> <input name="descriptionen" type="text"  class="form-control underlined" id="descriptionen" placeholder="" value="<?php echo $atuacoes['descriptionenPAGINA'];?>"> </div>

                                    <div class="form-group"> <label class="control-label">Meta-tags Description (ES)</label> <input name="descriptiones" type="text"  class="form-control underlined" id="descriptiones" placeholder="" value="<?php echo $atuacoes['descriptionesPAGINA'];?>"> </div>
										 
                                    
                                </div>
								<div class="form-group"> 
                                <input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar">
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