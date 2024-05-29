	<?php
	require_once('../../../config.php');
	$grupo = $_POST['grupo'];
	?>
	<select name="categoria" class="form-control underlined" id="categoria">
		<option value="0">Selecione a Categoria</option>

		<?php
		$query_categoria = mysqli_query($conexao, "SELECT codigoCATEGORIA, nomeCATEGORIA FROM tb0012_categorias WHERE ativoCATEGORIA='1' AND grupoCATEGORIA = '".$grupo."' ");
		while ($categoria = mysqli_fetch_assoc($query_categoria)) {
		?>
			<option value="<?php echo $categoria['codigoCATEGORIA']; ?>" >
				<?php echo $categoria['nomeCATEGORIA']; ?>
			</option>
		<?php } ?>

	</select>