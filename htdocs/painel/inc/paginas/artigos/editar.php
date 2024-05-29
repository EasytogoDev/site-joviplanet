<?php

if (@$_POST['btn_salvar'] == 'Alterar') {

	$codigo = $_POST['codigo'];
    $titulo = $_POST['titulo'];
    $slug = tiracento($titulo);
    $video = $_POST['video'];
    $imagem = $_POST['imagem'];
	$imagemen = $_POST['imagemen'];
	$imagemes = $_POST['imagemes'];
	$destaque = $_POST['destaque'];
	$destaqueen = $_POST['destaqueen'];
	$destaquees = $_POST['destaquees'];
	$background = $_POST['background'];
	$backgrounden = $_POST['backgrounden'];
	$backgroundes = $_POST['backgroundes'];
    $mapa = $_POST['mapa'];
    $conteudo = $_POST['conteudo'];
	$conteudoen = $_POST['conteudoen'];
	$conteudoes = $_POST['conteudoes'];
    $data = $_POST['data'];
	$dataen = $_POST['dataen'];
	$dataes = $_POST['dataes'];
    $categoria = $_POST['categoria'];
	$ordem = $_POST['ordem'];
    $keyworks = $_POST['keyworks'];
    $description = $_POST['description'];   
    $usuario = $usuario['codigoUSUARIO'];
    $datacriacao = date("Y-m-d");
	$datalimite = $_POST['datalimite'];


$query = mysqli_query($conexao, "
UPDATE  tb081_posts SET
tituloPOST = '" . $titulo . "',
slugPOST = '" . $slug . "',
videoPOST = '" . $video . "',
imagemPOST = '" . $imagem . "',
imagemenPOST = '" . $imagemen . "',
imagemesPOST = '" . $imagemes . "',
destaquePOST = '" . $destaque . "',
destaqueenPOST = '" . $destaqueen . "',
destaqueesPOST = '" . $destaquees . "',
backgroundPOST = '" . $background . "',
backgroundenPOST = '" . $backgrounden . "',
backgroundesPOST = '" . $backgroundes . "',
mapaPOST = '" . $mapa . "',
conteudoPOST = '" . $conteudo . "',
conteudoenPOST = '" . $conteudoen . "',
conteudoesPOST = '" . $conteudoes . "',
dataPOST = '" . $data . "',
dataenPOST = '" . $dataen . "',
dataesPOST = '" . $dataes . "',
datalimitePOST = '" . $datalimite . "',
categoriaPOST = '" . $categoria . "',
ordemPOST = '" . $ordem . "',
keyworksPOST = '" . $keyworks . "',
descriptionPOST = '" . $description . "',
usuarioPOST = '" . $usuario . "'
WHERE codigoPOST = '" . $codigo . "'
");

	if ($query) {

		echo '<script>alert("Alterado com sucesso!");top.location.href="?make=' . $make . '&acao=editar&codigo=' . $codigo . '";</script>';

	} else {

		echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';

	}




} else {


	$tipo = addslashes(trim(@$_GET['tipo']));
	$codigoPOST = addslashes(trim(@$_GET['codigo']));
	$query_posts = mysqli_query($conexao, 'SELECT * FROM tb081_posts WHERE codigoPOST = "' . $codigoPOST . '" ');
	$posts = mysqli_fetch_assoc($query_posts);

	?>
	<div class="title-block">
		<?php if ($tipo == 'new') { ?>
			<h3 class="title"> Novo </h3>
			<p class="title-description">Adicione um posts </p>
		<?php } else { ?>

			<h3 class="title"> Editar </h3>
			<p class="title-description"> Edite um posts </p>
		<?php } ?>
		<form action="" method="post" id="Artigo">

		<section class="section">
			<div class="row sameheight-container">

				<input name="codigo" type="hidden" value="<?php echo $posts['codigoPOST']; ?>" />


				<div class="col-md-12">
					<div class="card card-block ">

						<div class="title-block">
							<p class="title-description"> Conteudo da página de atuação</p>
						</div>
						<div class="form-group">
							<label class="control-label">Titulo</label>
							<input name="titulo"value="<?php echo $posts['tituloPOST']; ?>" type="text" class="form-control underlined" id="titulo" placeholder="Coloque o nome do serviço">
						</div>
						<div class="form-group">
							<label class="control-label">Video</label>
							<input name="video" value="<?php echo $posts['videoPOST']; ?>" type="text" class="form-control underlined" id="video" placeholder="Coloque link do youtube">
						</div>
						<script>
							function limpaImagem(imagem) {

								document.getElementById(imagem).value = '';
								
							}

							function limpaDestaque(destaque) {

								document.getElementById(destaque).value = '';

							}

							function limpabackground(background) {

								document.getElementById(background).value = '';

							}
						</script>
						<div class="form-group">
							<label class="control-label">Imagem 700x500 | <a href="javascript:;" onclick="limpaImagem('imagem');">Limpar Campo de imagem</a></label>
							<input name="imagem" type="text" class="form-control underlined" id="imagem" value="<?php echo $posts['imagemPOST']; ?>" placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly" />
						</div>

						<div class="form-group">
							<label class="control-label">Imagem (EN) 700x500 | <a href="javascript:;" onclick="limpaImagem('imagemen');">Limpar Campo de imagem</a></label>
							<input name="imagemen" type="text" class="form-control underlined" id="imagemen" value="<?php echo $posts['imagemenPOST']; ?>" placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly" />
						</div>

						<div class="form-group">
							<label class="control-label">Imagem (ES) 700x500 | <a href="javascript:;" onclick="limpaImagem('imagemes');">Limpar Campo de imagem</a></label>
							<input name="imagemes" type="text" class="form-control underlined" id="imagemes" value="<?php echo $posts['imagemesPOST']; ?>" placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly" />
						</div>

						<div class="form-group">
							<label class="control-label">Destaque 400x400 | <a href="javascript:;" onclick="limpaDestaque('destaque');">Limpar Campo de imagem</a></label>
							<input name="destaque" type="text" class="form-control underlined" id="destaque" value="<?php echo $posts['destaquePOST']; ?>" placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly" />
						</div>

						<div class="form-group">
							<label class="control-label">Destaque (EN) 400x400 | <a href="javascript:;" onclick="limpaDestaque('destaqueen');">Limpar Campo de imagem</a></label>
							<input name="destaqueen" type="text" class="form-control underlined" id="destaqueen" value="<?php echo $posts['destaqueenPOST']; ?>" placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly" />
						</div>

						<div class="form-group">
							<label class="control-label">Destaque (ES) 400x400 | <a href="javascript:;" onclick="limpaDestaque('destaquees');">Limpar Campo de imagem</a></label>
							<input name="destaquees" type="text" class="form-control underlined" id="destaquees" value="<?php echo $posts['destaqueesPOST']; ?>" placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly" />
						</div>

						<div class="form-group">
							<label class="control-label">Background 630 x 500 | <a href="javascript:;" onclick="limpabackground('background');">Limpar Campo de imagem</a></label>
							<input name="background" type="text" class="form-control underlined" id="background" value="<?php echo $posts['backgroundPOST']; ?>" placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly" />
						</div>

						<div class="form-group">
							<label class="control-label">Background (EN) 630 x 500 | <a href="javascript:;" onclick="limpabackground('backgrounden');">Limpar Campo de imagem</a></label>
							<input name="backgrounden" type="text" class="form-control underlined" id="backgrounden" value="<?php echo $posts['backgroundenPOST']; ?>" placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly" />
						</div>
						
						<div class="form-group">
							<label class="control-label">Background (ES) 630 x 500 | <a href="javascript:;" onclick="limpabackground('backgroundes');">Limpar Campo de imagem</a></label>
							<input name="backgroundes" type="text" class="form-control underlined" id="backgroundes" value="<?php echo $posts['backgroundesPOST']; ?>" placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly" />
						</div>


						<div class="form-group"> 
							<label class="control-label">Mapa</label>
							<input name="mapa" type="text" class="form-control underlined" id="mapa" value="<?php echo $posts['mapaPOST'];?>" placeholder="informe a localizacao"/>
						</div>


						<div class="form-group">
							<label class="control-label">Conteúdo</label>
							<textarea class="ckeditor" cols="80" id="editor1" name="conteudo" rows="10"><?php echo $posts['conteudoPOST']; ?></textarea>
						</div>

						<div class="form-group">
							<label class="control-label">Conteúdo (EN)</label>
							<textarea class="ckeditor" cols="80" id="editor1" name="conteudoen" rows="10"><?php echo $posts['conteudoenPOST']; ?></textarea>
						</div>

						<div class="form-group">
							<label class="control-label">Conteúdo (ES)</label>
							<textarea class="ckeditor" cols="80" id="editor1" name="conteudoes" rows="10"><?php echo $posts['conteudoesPOST']; ?></textarea>
						</div>

						<div class="form-group">
							<label class="control-label">Data do Evento</label>
							<input name="data" value="<?php echo $posts['dataPOST']; ?>" type="text" class="form-control underlined" id="data" placeholder="Coloque a data do evento"></input>
							<input name="dataen" value="<?php echo $posts['dataenPOST']; ?>" type="text" class="form-control underlined" id="dataen" placeholder="Coloque a data do evento (inglês)"></input>
							<input name="dataes" value="<?php echo $posts['dataesPOST']; ?>" type="text" class="form-control underlined" id="dataes" placeholder="Coloque a data do evento (espanhol)"></input>
						</div>

						<div class="form-group">
							<label class="control-label">Data Limite</label>
							<input name="datalimite" value="<?php echo $posts['datalimitePOST']; ?>" type="datetime-local" class="datepicker" id="datalimite" placeholder=""></input>
						</div>



					</div>
				</div>






				<div class="col-md-12">
					<div class="card card-block">

						<div class="title-block">
							<p class="title-description"> cadastro de auxiliares</p>
						</div>
						<div class="form-group"> <label class="control-label">Categoria</label>
							<select name="categoria" class="form-control underlined" id="categoria">
								<?php $query_categoria = mysqli_query($conexao, "SELECT * FROM tb080_categorias WHERE ativoCATEGORIA='1' ") or die();
								while ($categoria = mysqli_fetch_assoc($query_categoria)) { ?>
								<option value="<?php echo $categoria['codigoCATEGORIA']; ?>" <?php if ($posts['categoriaPOST'] == $categoria['codigoCATEGORIA']) {
									echo ' selected="selected"';} ?>><?php echo $categoria['nomeCATEGORIA']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group"> 
                    		<label class="control-label">Ordem</label> 
                    		<input name="ordem" type="text" class="form-control underlined" id="ordem" placeholder="Coloque a ordem em que este posts será lançado" value="<?php echo $posts['ordemPOST'];?>">
                		</div>

					</div>
				</div>
				



				<div class="col-md-12">
					<div class="card card-block ">

						<div class="title-block">
							<p class="title-description"> SEO - Dados para otimização</p>
						</div>
						<div class="form-group">
							<label class="control-label">Meta-tags Keyworks</label>
							<input name="keyworks" value="<?php echo $posts['keyworksPOST']; ?>" type="text" class="form-control underlined" id="keyworks" placeholder="Tags separadas por virgulaas (tag1, tag2...)">
						</div>
						<div class="form-group">
							<label class="control-label">Meta-tags Description</label>
							<input name="description" type="text" value="<?php echo $posts['descriptionPOST'];?>" class="form-control underlined" id="description" placeholder="Descrição para buscadores">
						</div>
					</div>
					<input name="btn_salvar" type="hidden" value="Alterar">
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="btn_salvara" value="<?php if ($tipo == 'new') { echo 'Adicionar';} else { echo 'Alterar';} ?>">
					</div>
				</div>

	</form>



	</div>
	</section>
<?php } ?>