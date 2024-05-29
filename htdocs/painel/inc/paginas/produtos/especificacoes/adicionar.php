<?php

if (@$_POST['btn_salvar'] == 'Adicionar') {

	$nomeESPECIFICACAO 			= $_POST['nomeESPECIFICACAO'];
	$observacaoESPECIFICACAO 	= $_POST['observacaoESPECIFICACAO'];
	$tipoESPECIFICACAO 			= $_POST['tipoESPECIFICACAO'];



	$query = mysqli_query($conexao, "
		INSERT INTO tb0021_especificacoes
		(
		nomeESPECIFICACAO,
		observacaoESPECIFICACAO,
		tipoESPECIFICACAO
		) 
		VALUES (
		'" . $nomeESPECIFICACAO . "',
		'" . $observacaoESPECIFICACAO . "',
		'" . $tipoESPECIFICACAO . "'
		)
	");



	if ($query) {




		$codigoESPECIFICACAO = mysqli_insert_id($conexao);

		echo '<script>alert("Adicionado com sucesso!");top.location.href="?make=produtos&acao=especificacoes&act=home&codigo=' . $codigoESPECIFICACAO . '";</script>';

	} else {

		echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';

	}




} else {


	?>
	<div class="title-block">
		<h3 class="title"> Adicionar </h3>
		<p class="title-description"> Adicione as
			<?php echo @$_GET['acao']; ?>
		</p>
	</div>

	<form action="" method="post">

		<section class="section">

			<div class="row sameheight-container">


				<div class="col-md-12">

					<div class="card card-block ">

						<div class="title-block">
							<p class="title-description"> Conteudo da página de
								<?php echo @$_GET['acao']; ?>
							</p>
						</div>
						<div class="form-group">
							<label class="control-label">
							<label class="control-label">Nome</label>
							</label>
							<input type="text" name="nomeESPECIFICACAO" id="nomeESPECIFICACAO"
								class="form-control underlined" placeholder="Coloque o nome da especificação" />
						</div>

						<div class="form-group"> 
							<label class="control-label">Tipo</label>
                            <select name="tipoESPECIFICACAO" class="form-control underlined" id="tipoESPECIFICACAO">
								<option value="1">Texto</option>
								<option value="2">Número</option>
								<option value="3">Sim ou não</option>
                            </select>
                        </div>

						<div class="form-group">
							<label class="control-label">Observação</label>
							<input type="text" name="observacaoESPECIFICACAO" id="observacaoESPECIFICACAO" class="form-control underlined" placeholder="Coloque as observações"/>
						</div>

						<div class="form-group">

							<input type="submit" class="btn btn-primary" name="btn_salvar" value="Adicionar" />

						</div>

					</div>

				</div>

			</div>

		</section>

	</form>
<?php } ?>