<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

    $codigo = $_POST['codigo'];
    $titulo = $_POST['titulo'];
    $tituloen = $_POST['tituloen'];
    $tituloes = $_POST['tituloes'];
    $subtitulo = $_POST['subtitulo'];
    $subtituloen = $_POST['subtituloen'];
    $subtituloes = $_POST['subtituloes'];
    $video = $_POST['video'];
    $videoen = $_POST['videoen'];
    $videoes = $_POST['videoes'];
    $imagem = $_POST['imagem'];
    $imagemen = $_POST['imagemen'];
    $imagemes = $_POST['imagemes'];
    $check1 = $_POST['check1'];
    $check1en = $_POST['check1en'];
    $check1es = $_POST['check1es'];
    $check2 = $_POST['check2'];
    $check2en = $_POST['check2en'];
    $check2es = $_POST['check2es'];
    $check3 = $_POST['check3'];
    $check3en = $_POST['check3en'];
    $check3es = $_POST['check3es'];
    $check4 = $_POST['check4'];
    $check4en = $_POST['check4en'];
    $check4es = $_POST['check4es'];
    $botao = $_POST['botao'];
    $botaoen = $_POST['botaoen'];
    $botaoes = $_POST['botaoes'];


    $query = mysqli_query($conexao, "
    UPDATE tb085_destaques SET 
    tituloDESTAQUE = '".$titulo."',
    tituloenDESTAQUE = '".$tituloen."',
    tituloesDESTAQUE = '".$tituloes."',
    subtituloDESTAQUE = '".$subtitulo."',
    subtituloenDESTAQUE = '".$subtituloen."',
    subtituloesDESTAQUE = '".$subtituloes."',
    videoDESTAQUE = '".$video."',
    videoenDESTAQUE = '".$videoen."',
    videoesDESTAQUE = '".$videoes."',
    imagemDESTAQUE = '".$imagem."',
    imagemenDESTAQUE = '".$imagemen."',
    imagemesDESTAQUE = '".$imagemes."',
    check1DESTAQUE = '".$check1."',
    check1enDESTAQUE = '".$check1en."',
    check1esDESTAQUE = '".$check1es."',
    check2DESTAQUE = '".$check2."',
    check2enDESTAQUE = '".$check2en."',
    check2esDESTAQUE = '".$check2es."',
    check3DESTAQUE = '".$check3."',
    check3enDESTAQUE = '".$check3en."',
    check3esDESTAQUE = '".$check3es."',
    check4DESTAQUE = '".$check4."',
    check4enDESTAQUE = '".$check4en."',
    check4esDESTAQUE = '".$check4es."',
    botaoDESTAQUE = '".$botao."',
    botaoenDESTAQUE = '".$botaoen."',
    botaoesDESTAQUE = '".$botaoes."'
    WHERE codigoDESTAQUE = '".$codigo."'
    ");


if($query){
		echo '<script>alert("Serviço alterado com sucesso!");top.location.href="?make=destaques&acao=home&codigo='.$codigo.'";</script>';
		}else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{
	
	$codigoDESTAQUE = addslashes(trim(@$_GET['codigo']));
	$query_DESTAQUEs = mysqli_query($conexao, 'SELECT * FROM tb085_destaques WHERE codigoDESTAQUE = "'.$codigoDESTAQUE.'" ');
	$atuacoes = mysqli_fetch_assoc($query_DESTAQUEs);
	
?>
                <div class="title-block">
                    <h3 class="title"> Adicionar </h3>
                    <p class="title-botao"> Adicione uma nova página </p>
                </div>
				<form action="" method="post">
                <input name="codigo" type="hidden"  id="codigo" value="<?php echo $atuacoes['codigoDESTAQUE'];?>">
				    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    <div class="title-block">
                                        <p class="title-botao"> Conteúdo da página de página</p>
                                    </div>
                                    <div class="form-group"> <label class="control-label">Titulo</label> <input name="titulo" type="text" class="form-control underlined" id="titulo" placeholder="Coloque o nome do serviço" value="<?php echo $atuacoes['tituloDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">Titulo (EN)</label> <input name="tituloen" type="text" class="form-control underlined" id="tituloen" placeholder="Coloque o nome do serviço (en)" value="<?php echo $atuacoes['tituloenDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">Titulo (ES)</label> <input name="tituloes" type="text" class="form-control underlined" id="tituloes" placeholder="Coloque o nome do serviço (es)" value="<?php echo $atuacoes['tituloesDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">SubTitulo</label> <input name="subtitulo" type="text" class="form-control underlined" id="subtitulo" placeholder="Coloque a breve descrição do serviço"value="<?php echo $atuacoes['subtituloDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">SubTitulo (EN)</label> <input name="subtituloen" type="text" class="form-control underlined" id="subtituloen" placeholder="Coloque a breve descrição do serviço (en)"value="<?php echo $atuacoes['subtituloenDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">SubTitulo (ES)</label> <input name="subtituloes" type="text" class="form-control underlined" id="subtituloes" placeholder="Coloque a breve descrição do serviço (es)"value="<?php echo $atuacoes['subtituloesDESTAQUE'];?>"> </div>    
                                    <div class="form-group"> <label class="control-label">imagem</label>     
                                        <input name="imagem" type="text" class="form-control underlined" id="imagem" placeholder="" onclick="openKCFinder(this)" readonly="readonly" value="<?php echo $atuacoes['imagemDESTAQUE'];?>"/> 
                                    </div>
                                    <div class="form-group"> <label class="control-label">imagem (EN)</label>     
                                        <input name="imagemen" type="text" class="form-control underlined" id="imagemen" placeholder="" onclick="openKCFinder(this)" readonly="readonly" value="<?php echo $atuacoes['imagemenDESTAQUE'];?>"/> 
                                    </div>
                                    <div class="form-group"> <label class="control-label">imagem (ES)</label>     
                                        <input name="imagemes" type="text" class="form-control underlined" id="imagemes" placeholder="" onclick="openKCFinder(this)" readonly="readonly" value="<?php echo $atuacoes['imagemesDESTAQUE'];?>"/> 
                                    </div>

                                    <div class="form-group"> <label class="control-label">check1</label> <input name="check1" type="text" class="form-control underlined" id="titulo" placeholder="Coloque o nome do serviço" value="<?php echo $atuacoes['check1DESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">check1 (EN)</label> <input name="check1en" type="text" class="form-control underlined" id="check1en" placeholder="Coloque o nome do serviço (en)" value="<?php echo $atuacoes['check1enDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">check1 (ES)</label> <input name="check1es" type="text" class="form-control underlined" id="check1es" placeholder="Coloque o nome do serviço (es)" value="<?php echo $atuacoes['check1esDESTAQUE'];?>"> </div>

                                    <div class="form-group"> <label class="control-label">check2</label> <input name="check2" type="text" class="form-control underlined" id="check2" placeholder="Coloque o nome do serviço" value="<?php echo $atuacoes['check2DESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">check2 (EN)</label> <input name="check2en" type="text" class="form-control underlined" id="check2en" placeholder="Coloque o nome do serviço (en)" value="<?php echo $atuacoes['check2enDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">check2 (ES)</label> <input name="check2es" type="text" class="form-control underlined" id="check2es" placeholder="Coloque o nome do serviço (es)" value="<?php echo $atuacoes['check2esDESTAQUE'];?>"> </div>

                                    <div class="form-group"> <label class="control-label">check3</label> <input name="check3" type="text" class="form-control underlined" id="check3" placeholder="Coloque o nome do serviço" value="<?php echo $atuacoes['check3DESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">check3 (EN)</label> <input name="check3en" type="text" class="form-control underlined" id="check3en" placeholder="Coloque o nome do serviço (en)" value="<?php echo $atuacoes['check3enDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">check3 (ES)</label> <input name="check3es" type="text" class="form-control underlined" id="check3es" placeholder="Coloque o nome do serviço (es)" value="<?php echo $atuacoes['check3esDESTAQUE'];?>"> </div>

                                    <div class="form-group"> <label class="control-label">check4</label> <input name="check4" type="text" class="form-control underlined" id="check4" placeholder="Coloque o nome do serviço" value="<?php echo $atuacoes['check4DESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">check4 (EN)</label> <input name="check4en" type="text" class="form-control underlined" id="check4en" placeholder="Coloque o nome do serviço (en)" value="<?php echo $atuacoes['check4enDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">check4 (ES)</label> <input name="check4es" type="text" class="form-control underlined" id="check4es" placeholder="Coloque o nome do serviço (es)" value="<?php echo $atuacoes['check4esDESTAQUE'];?>"> </div>

                                    <div class="form-group"> <label class="control-label">Vídeo</label> <input name="video" type="text" class="form-control underlined" id="video" placeholder="Coloque o link do serviço" value="<?php echo $atuacoes['videoDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">Vídeo (EN)</label> <input name="videoen" type="text" class="form-control underlined" id="videoen" placeholder="Coloque o link do serviço (en)" value="<?php echo $atuacoes['videoenDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">Vídeo (ES)</label> <input name="videoes" type="text" class="form-control underlined" id="videoes" placeholder="Coloque o link do serviço (es)" value="<?php echo $atuacoes['videoesDESTAQUE'];?>"> </div>

                                    <div class="form-group"> <label class="control-label">Botão</label> <input name="botao" type="text" class="form-control underlined" id="botao" placeholder="Coloque o nome do serviço" value="<?php echo $atuacoes['botaoDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">Botão (EN)</label> <input name="botaoen" type="text" class="form-control underlined" id="botaoen" placeholder="Coloque o nome do serviço (en)" value="<?php echo $atuacoes['botaoenDESTAQUE'];?>"> </div>
                                    <div class="form-group"> <label class="control-label">Botão (ES)</label> <input name="botaoes" type="text" class="form-control underlined" id="botaoes" placeholder="Coloque o nome do serviço (es)" value="<?php echo $atuacoes['botaoesDESTAQUE'];?>"> </div>
                                </div>
							</div>     
							<div class="col-md-12">
                                
								<div class="form-group"> 
                                <input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar"></div>
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