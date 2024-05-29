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
	codigoLINHAVINCULO, 
	nomeLINHA,
	imagemLINHA
	FROM `tb0011_linhas_vinculos` 
	INNER JOIN tb0011_linhas ON codigoLINHA = linhaLINHAVINCULO
	WHERE `produtoLINHAVINCULO` = '".$codigoPRODUTO."'  ");
	while($categorias = mysqli_fetch_assoc($query_categorias)){
	?>
   
	<tr> 
		<td><img src="<?php echo $categorias['imagemLINHA']; ?>" style="
    border-radius: 50px;
    width: 40px;
"></td>
		<td><?php echo $categorias['nomeLINHA']; ?></td>
		<td><a href="javascript:ExcluiLinha('<?php echo $categorias['codigoLINHAVINCULO']; ?>');" class="btn btn-danger btn-sm rounded pull-right">
		<i class="fa fa-trash"></i>
		</a>
		</td> 
	</tr> 
	<?php } ?>
	  </tbody>
  </table>
	 </section>