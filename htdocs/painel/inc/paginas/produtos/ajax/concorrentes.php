	<?php
	require_once('../../../config.php');
	$codigoPRODUTO = $_POST['codigoPRODUTO'];
	?>
	
	<section class="section" >
	 
			
			
	<table class="table">
 
		<tbody>


		 
	<?php
	$query_concorrentes = mysqli_query($conexao, "
	
	SELECT  
	codigoVINCULOCONCORRENTE, 
	nomeCONCORRENTE,
	valorVINCULOCONCORRENTE
	FROM `tb0402_vinculos_concorrentes` 
	INNER JOIN tb0401_concorrentes ON codigoCONCORRENTE = concorrenteVINCULOCONCORRENTE 
	WHERE `produtoVINCULOCONCORRENTE` = '".$codigoPRODUTO."'  ");
	while($concorrentes = mysqli_fetch_assoc($query_concorrentes)){
	?>
   
	<tr>  
		<td><?php echo $concorrentes['nomeCONCORRENTE']; ?></td>
		<td><?php echo $concorrentes['valorVINCULOCONCORRENTE']; ?></td>
		<td><a href="javascript:apagaConcorrentes('<?php echo $concorrentes['codigoVINCULOCONCORRENTE']; ?>');" class="btn btn-danger btn-sm rounded pull-right">
		<i class="fa fa-trash"></i>
		</a>
		</td> 
	</tr> 
	<?php } ?>
	  </tbody>
  </table>
	 </section>