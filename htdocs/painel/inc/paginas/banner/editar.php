<?php

if (@$_POST['btn_salvar'] == 'Alterar') {

	$codigoBANNER = $_POST['codigoBANNER'];
	$identificadorBANNER = $_POST['identificadorBANNER'];
	$tituloBANNER = $_POST['tituloBANNER'];
	$subtituloBANNER = $_POST['subtituloBANNER'];
	$linkBANNER = $_POST['linkBANNER'];
	$imagemBANNER = $_POST['imagemBANNER'];
	$imagemenBANNER = $_POST['imagemenBANNER'];
	$imagemesBANNER = $_POST['imagemesBANNER'];
	$imagemobileBANNER = $_POST['imagemobileBANNER'];
	$imagemobileenBANNER = $_POST['imagemobileenBANNER'];
	$imagemobileesBANNER = $_POST['imagemobileesBANNER'];
	$posicaoBANNER = $_POST['posicaoBANNER'];
	$ordemBANNER = $_POST['ordemBANNER'];

	$query = mysqli_query($conexao, "
	UPDATE tb0030_banners SET
	tituloBANNER = '" . $tituloBANNER . "',
	identificadorBANNER = '" . $identificadorBANNER . "',
	linkBANNER = '" . $linkBANNER . "',
	imagemBANNER = '" . $imagemBANNER . "',
	imagemenBANNER = '" . $imagemenBANNER . "',
	imagemesBANNER = '" . $imagemesBANNER . "',
	imagemobileBANNER = '" . $imagemobileBANNER . "',
	imagemobileenBANNER = '" . $imagemobileenBANNER . "',
	imagemobileesBANNER = '" . $imagemobileesBANNER . "',
	ordemBANNER = '" . $ordemBANNER . "',
	subtituloBANNER = '" . $subtituloBANNER . "'
	WHERE codigoBANNER = '" . $codigoBANNER . "'");



	if ($query) {

		echo '<script>alert("Alterado com sucesso!");top.location.href="?make=' . $make . '&acao=editar&codigo=' . $codigoBANNER . '";</script>';

	} else {

		echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';

	}




} else {


	$tipo = addslashes(trim(@$_GET['tipo']));
	$codigoBANNER = addslashes(trim(@$_GET['codigo']));
	$query_banner = mysqli_query($conexao, 'SELECT * FROM tb0030_banners WHERE codigoBANNER = "' . $codigoBANNER . '" ');
	$banner = mysqli_fetch_assoc($query_banner);

	?>
	<div class="title-block">
		<?php if ($tipo == 'new') { ?>
			<h3 class="title"> Novo </h3>
			<p class="title-description">Adicione um banner </p>
		<?php } else { ?>

			<h3 class="title"> Editar </h3>
			<p class="title-description"> Edite um banner </p>
		<?php } ?>
	</div>
	<form action="" method="post" id="Banner">

		<section class="section">
			<div class="row sameheight-container">


				<input name="codigoBANNER" type="hidden" id="codigoBANNER" value="<?php echo $banner['codigoBANNER']; ?>">



				<div class="col-md-8">
					<div class="card card-block ">

						<div class="title-block">
							<p class="title-description"> Conteudo da página de banner</p>
						</div>


						<div class="form-group"> <label class="control-label">Identificador do banner</label>
							<input name="identificadorBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['identificadorBANNER']; ?>" id="identificadorBANNER"
								placeholder="Coloque aqui o titulo do seu banner">
						</div>

						<div class="form-group"> <label class="control-label">Posição da imagem</label>

							<select name="posicaoBANNER" class="form-control underlined" id="posicaoBANNER">

								<option value="center top" <?php if ($banner['posicaoBANNER'] == 'center top') { ?>
										selected="selected" <?php } ?>>TOPO | CENTRO</option>
								<option value="left top" <?php if ($banner['posicaoBANNER'] == 'left top') { ?>
										selected="selected" <?php } ?>>TOPO | ESQUERDA</option>
								<option value="right top" <?php if ($banner['posicaoBANNER'] == 'right top') { ?>
										selected="selected" <?php } ?>>TOPO | DIREITA</option>
								<option value="center bottom" <?php if ($banner['posicaoBANNER'] == 'center bottom') { ?>
										selected="selected" <?php } ?>>BAIXO | CENTRO</option>
								<option value="left bottom" <?php if ($banner['posicaoBANNER'] == 'left bottom') { ?>
										selected="selected" <?php } ?>>BAIXO | ESQUERDA</option>
								<option value="right bottom" <?php if ($banner['posicaoBANNER'] == 'right bottom') { ?>
										selected="selected" <?php } ?>>BAIXO | DIREITA</option>


							</select>
						</div>

						<div class="form-group"> <label class="control-label">Titulo</label>
							<input name="tituloBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['tituloBANNER']; ?>" id="tituloBANNER"
								placeholder="Coloque aqui o titulo do seu banner">
						</div>

						<div class="form-group"> <label class="control-label">Subtitulo</label>
							<input name="subtituloBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['subtituloBANNER']; ?>" id="subtituloBANNER"
								placeholder="Coloque aqui o subtitulo do seu banner">
						</div>

						<div class="form-group"> <label class="control-label">Link</label>
							<input name="linkBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['linkBANNER']; ?>" id="linkBANNER"
								placeholder="link para quem clica no banner">
						</div>

						<div class="form-group"> <label class="control-label">Imagem</label>
							<input name="imagemBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['imagemBANNER']; ?>" id="imagemBANNER"
								placeholder="Clique aqui e selecione a imagem para o banner" onclick="openKCFinder(this)"
								readonly="readonly" />
						</div>

						<div class="form-group"> <label class="control-label">Imagem (EN)</label>
							<input name="imagemenBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['imagemenBANNER']; ?>" id="imagemenBANNER"
								placeholder="Clique aqui e selecione a imagem para o banner" onclick="openKCFinder(this)"
								readonly="readonly" />
						</div>

						<div class="form-group"> <label class="control-label">Imagem (ES)</label>
							<input name="imagemesBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['imagemesBANNER']; ?>" id="imagemesBANNER"
								placeholder="Clique aqui e selecione a imagem para o banner" onclick="openKCFinder(this)"
								readonly="readonly" />
						</div>

						<div class="form-group"> <label class="control-label">Imagem Mobile</label>
							<input name="imagemobileBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['imagemobileBANNER']; ?>" id="imagemobileBANNER"
								placeholder="Clique aqui e selecione a imagem para o banner mobile"
								onclick="openKCFinder(this)" readonly="readonly" />
						</div>

						<div class="form-group"> <label class="control-label">Imagem Mobile (EN)</label>
							<input name="imagemobileenBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['imagemobileenBANNER']; ?>" id="imagemobileenBANNER"
								placeholder="Clique aqui e selecione a imagem para o banner mobile"
								onclick="openKCFinder(this)" readonly="readonly" />
						</div>

						<div class="form-group"> <label class="control-label">Imagem Mobile (ES)</label>
							<input name="imagemobileesBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['imagemobileesBANNER']; ?>" id="imagemobileesBANNER"
								placeholder="Clique aqui e selecione a imagem para o banner mobile"
								onclick="openKCFinder(this)" readonly="readonly" />
						</div>

						<div class="form-group"> <label class="control-label">Ordem</label>

							<input name="ordemBANNER" type="text" class="form-control underlined"
								value="<?php echo $banner['ordemBANNER']; ?>" id="ordemBANNER"
								placeholder="Ordem do banner" />
						</div>


					</div>



				</div>

				<div class="col-md-4">
					<div class="card tasks " data-exclude="xs,sm">


						<div style="border-bottom: 1px solid #ccc; position: relative;">
							<div style="padding: 20px; position: relative;">
								<div class="form-group">
									<H4 class="control-label">OPÇÕES DE TITULO</H4>
								</div>


								<div class="form-group"> <label class="control-label">Titulo</label>
									<input name="tituloOPCAO" type="text" class="form-control underlined" id="tituloOPCAO"
										placeholder="Coloque aqui o titulo do seu banner">
								</div>

								<div class="form-group"> <label class="control-label">Titulo (EN)</label>
									<input name="tituloenOPCAO" type="text" class="form-control underlined" id="tituloenOPCAO"
										placeholder="Coloque aqui o titulo do seu banner">
								</div>

								<div class="form-group"> <label class="control-label">Titulo (ES)</label>
									<input name="tituloesOPCAO" type="text" class="form-control underlined" id="tituloesOPCAO"
										placeholder="Coloque aqui o titulo do seu banner">
								</div>

								<div class="form-group"> <label class="control-label">Subtitulo</label>
									<input name="subtituloOPCAO" type="text" class="form-control underlined"
										id="subtituloOPCAO" placeholder="Coloque aqui o subtitulo do seu banner">
								</div>

								<div class="form-group"> <label class="control-label">Subtitulo (EN)</label>
									<input name="subtituloenOPCAO" type="text" class="form-control underlined"
										id="subtituloenOPCAO" placeholder="Coloque aqui o subtitulo do seu banner">
								</div>

								<div class="form-group"> <label class="control-label">Subtitulo (ES)</label>
									<input name="subtituloesOPCAO" type="text" class="form-control underlined"
										id="subtituloesOPCAO" placeholder="Coloque aqui o subtitulo do seu banner">
								</div>

								<div class="form-group"><label class="control-label">Tipo</label>
									<select name="tipoOPCAO" class="form-control underlined" id="tipoOPCAO">
										<option value="1">ESQUERDA</option>
										<option value="2">DIREITO</option>
									</select>
								</div>

								<div class="form-group"> <label class="control-label">velocidade</label>
									<input name="velocidadeOPCAO" type="number" class="form-control underlined"
										id="velocidadeOPCAO" placeholder="">
								</div>


								<div class="form-group">

									<input type="button" class="btn btn-primary" name="btn_salvar" value="Adicionar"
										onclick="incluiOpcoes()">
								</div>
							</div>
						</div>



						<div id="OpcoesBanners"></div>

					</div>

					<!-- <div class="form-group">
						<input type="submit" class="btn btn-primary" name="btn_salvar" value="Adicionar">
					</div> -->
				</div>
			</div>
				<div class="form-group">

					<input type="submit" class="btn btn-primary" name="btn_salvar"
						value="<?php if ($tipo == 'new') {
							echo 'Adicionar';
						} else {
							echo 'Alterar';
						} ?>">

				</div>
			</div>

	</form>
	</div>
	</div>
	</div>




	</div>
	</section>
<?php } ?>
<script src="js/vendor.js"></script>