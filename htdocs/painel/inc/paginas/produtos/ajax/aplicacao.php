	<?php
	require_once('../../../config.php');
	$codigoPRODUTO = $_POST['codigoPRODUTO'];
	?>
	
	<section class="section" >
	<?php
	$query_montadoras = mysqli_query($conexao, "
	SELECT codigoMONTADORAVINCULO, nomeMONTADORA, codigoMONTADORA 
FROM tb0013_montadoras_vinculos 
INNER JOIN tb0015_produtos ON codigoPRODUTO = produtoMONTADORAVINCULO
INNER JOIN tb0013_montadoras ON codigoMONTADORA = montadoraMONTADORAVINCULO
WHERE ativoMONTADORA = '1' AND produtoMONTADORAVINCULO = '".$codigoPRODUTO."' ");
	while($montadoras = mysqli_fetch_assoc($query_montadoras)){
	?>
			
			
	<table class="table">
		<thead>
			<tr>
				<th>
					<h4><?php echo $montadoras['nomeMONTADORA']; ?>  </h4>
				</th>
				<th>
					<a href="javascript:apagaMontadora('<?php echo $montadoras['codigoMONTADORAVINCULO']; ?>');" class="btn btn-warning btn-sm rounded pull-right">
					<i class="fa fa-trash"></i>
					</a>
				</th> 
			</tr>
		</thead>
		<tbody>


		 
	<?php
	$query_veiculos = mysqli_query($conexao, "
	
	SELECT 
	codigoVEICULOVINCULO, 
	partnumberPRODUTO, 
	nomeMONTADORA, 
	nomeVEICULO, 
	motorVEICULO,
	combustivelVEICULO,
	anoVEICULO,
	inicioanoVEICULO,
	finalanoVEICULO,
	valorVEICULOVINCULO,
	ativoVEICULOVINCULO 
	FROM `tb0014_veiculos_vinculo` 
	INNER JOIN tb0015_produtos ON codigoPRODUTO = produtoVEICULOVINCULO 
	INNER JOIN tb0014_veiculos ON codigoVEICULO = veiculoVEICULOVINCULO 
	INNER JOIN tb0013_montadoras ON codigoMONTADORA = montadoraVEICULO 
	WHERE `produtoVEICULOVINCULO` = '".$codigoPRODUTO."'
	AND montadoraVEICULO = '".$montadoras['codigoMONTADORA']."' ");
	while($veiculos = mysqli_fetch_assoc($query_veiculos)){
	?>
   
	<tr> 
		<td>
		<?php echo $veiculos['valorVEICULOVINCULO']; ?> <?php if($veiculos['valorVEICULOVINCULO']){ ?>-<?php } ?>
		<?php echo $veiculos['nomeVEICULO']; ?> <?php if($veiculos['motorVEICULO']){ ?>-<?php } ?>
		<?php echo $veiculos['motorVEICULO']; ?> <?php if($veiculos['combustivelVEICULO']){ ?>-<?php } ?>
		<?php echo $veiculos['combustivelVEICULO']; ?> <?php if($veiculos['anoVEICULO']){ ?>-<?php } ?>
		<?php echo $veiculos['anoVEICULO']; ?> <?php if($veiculos['inicioanoVEICULO']){ ?> | <?php } ?>
		<?php echo $veiculos['inicioanoVEICULO']; ?> <?php if($veiculos['finalanoVEICULO']){ ?>ATÉ<?php } ?>
		<?php echo $veiculos['finalanoVEICULO']; ?></td>
		<td><a href="javascript:apagaVeiculo('<?php echo $veiculos['codigoVEICULOVINCULO']; ?>');" class="btn btn-danger btn-sm rounded pull-right">
		<i class="fa fa-trash"></i>
		</a>
		</td> 
	</tr> 
	<?php } ?>
	  </tbody>
                                            </table>
	<?php } ?></section>