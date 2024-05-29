	<?php
	require_once('../../../config.php');
	$MONTADORA = $_POST['montadoraLISTA'];
	?>
	<select name="veiculosLISTA" class="form-control underlined" id="veiculosLISTA">
	<option >Selecione o veiculo</option>
	<?php
	$query_viculos_lista = mysqli_query($conexao, "
	SELECT * FROM tb0014_veiculos 
	WHERE ativoVEICULO='1' AND montadoraVEICULO = '".$MONTADORA."'
	ORDER BY nomeVEICULO ASC
	") or die(mysqli_error());

	while($veiculo_lista = mysqli_fetch_assoc($query_viculos_lista)){?>


	<option value="<?php echo $veiculo_lista['codigoVEICULO']; ?>" >
	
	<?php echo $veiculo_lista['nomeVEICULO']; ?> <?php if($veiculo_lista['motorVEICULO']){ ?>-<?php } ?>
		<?php echo $veiculo_lista['motorVEICULO']; ?> <?php if($veiculo_lista['combustivelVEICULO']){ ?>-<?php } ?>
		<?php echo $veiculo_lista['combustivelVEICULO']; ?> <?php if($veiculo_lista['anoVEICULO']){ ?>-<?php } ?>
		<?php echo $veiculo_lista['anoVEICULO']; ?> <?php if($veiculo_lista['inicioanoVEICULO']){ ?> | <?php } ?>
		<?php echo $veiculo_lista['inicioanoVEICULO']; ?> <?php if($veiculo_lista['finalanoVEICULO']){ ?>ATÉ<?php } ?>
		<?php echo $veiculo_lista['finalanoVEICULO']; ?>
	</option>

	<?php } ?>
	</select>