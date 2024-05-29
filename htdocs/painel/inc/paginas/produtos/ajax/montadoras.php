	<?php
	require_once('../../../config.php'); 
	?>
	<select name="montadoraLISTA" class="form-control underlined" id="montadoraLISTA" onchange="buscaVeiculos()">
	<option >Selecione a Montadora</option>
	<?php
	$query_montadora_lista = mysqli_query($conexao, "
		SELECT * FROM tb0013_montadoras 
		WHERE ativoMONTADORA='1' 
		") or die(mysqli_error());
		
	while($montadora_lista = mysqli_fetch_assoc($query_montadora_lista)){?>


	<option value="<?php echo $montadora_lista['codigoMONTADORA']; ?>">
	<?php echo $montadora_lista['nomeMONTADORA']; ?>
	</option>

	<?php } ?>
	</select>