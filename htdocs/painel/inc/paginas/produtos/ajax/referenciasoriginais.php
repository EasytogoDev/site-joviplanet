	<?php
	require_once('../../../config.php');
	$produtoORIGINALREFERENCIA = $_POST['produtoORIGINALREFERENCIA'];
	?>
	
	<section class="section" >
	 
			
			
	<table class="table">
 
		<tbody>


		  
	<?php
	$query_fabricanteoriginals = mysqli_query($conexao, "
	
	SELECT  
	codigoORIGINALREFERENCIA, 
	nomeFABRICANTEORIGINAL,
	valorORIGINALREFERENCIA
	FROM `tb0018_fabricante_original` 
	INNER JOIN `tb0018_original_referencias` ON codigoFABRICANTEORIGINAL = fabricanteORIGINALREFERENCIA 
	WHERE `produtoORIGINALREFERENCIA` = '".$produtoORIGINALREFERENCIA."'  ");
	while($fabricanteoriginal = mysqli_fetch_assoc($query_fabricanteoriginals)){
	?>
   
	<tr>  
		<td><?php echo $fabricanteoriginal['nomeFABRICANTEORIGINAL']; ?></td>
		<td><?php echo $fabricanteoriginal['valorORIGINALREFERENCIA']; ?></td>
		<td><a href="javascript:apagaReferenciasoriginais('<?php echo $fabricanteoriginal['codigoORIGINALREFERENCIA']; ?>');" class="btn btn-danger btn-sm rounded pull-right">
		<i class="fa fa-trash"></i>
		</a>
		</td> 
	</tr> 
	<?php } ?>
	  </tbody>
  </table>
	 </section>