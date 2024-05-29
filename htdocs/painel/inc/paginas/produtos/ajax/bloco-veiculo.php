	<?php
	require_once('../../../config.php');
	$veiculos = $_POST['veiculos'];
	?>
	<select name="veiculos" class="form-control underlined" id="veiculos">
		<option value="0">Selecione o Veiculo</option>

		<?php  
		$query_veiculos = mysqli_query($conexao, "SELECT codigoVEICULO, nomeVEICULO FROM tb0014_veiculos WHERE ativoVEICULO='1' AND montadoraVEICULO = '".$veiculos."' ");
		while ($veiculos = mysqli_fetch_assoc($query_veiculos)) { 
		?>
			<option value="<?php echo $veiculos['codigoVEICULO']; ?>">
				<?php echo $veiculos['nomeVEICULO']; ?>
			</option>
		<?php } ?>

	</select>