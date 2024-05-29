	<?php
	require_once('../../../config.php');
	$codigoPRODUTO = $_POST['codigoPRODUTO'];
	?>
	
	<section class="section" >
	 
			
			
	<table class="table">
 
		<tbody>


		 
	<?php
	$query_categorias = mysqli_query($conexao, "
	
	SELECT 
	nomeGRUPO,
	codigoCATEGORIAVINCULO, 
	nomeCATEGORIA
	FROM `tb0012_categorias_vinculos` 
	INNER JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO
	INNER JOIN tb0020_grupo_produtos ON codigoGRUPO = grupoCATEGORIA
	WHERE `produtoCATEGORIAVINCULO` = '".$codigoPRODUTO."'  ");
	while($categorias = mysqli_fetch_assoc($query_categorias)){
	?>
   
	<tr> 
		<td><?php echo $categorias['nomeGRUPO']; ?></td>
		<td><?php echo $categorias['nomeCATEGORIA']; ?></td>
		<td><a href="javascript:apagaCategoria('<?php echo $categorias['codigoCATEGORIAVINCULO']; ?>');" class="btn btn-danger btn-sm rounded pull-right">
		<i class="fa fa-trash"></i>
		</a>
		</td> 
	</tr> 
	<?php } ?>
	  </tbody>
  </table>
	 </section>