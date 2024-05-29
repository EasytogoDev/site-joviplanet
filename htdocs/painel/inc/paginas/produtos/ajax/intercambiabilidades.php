	<?php
	require_once('../../../config.php');
	$codigoPRODUTO = $_POST['codigoPRODUTO'];
	?>
	
	<section class="section" >
	 
			
			
	<table class="table">
 
		<tbody>


		  
	<?php
	$query_intercambiabilidades = mysqli_query($conexao, "
	
	SELECT  
	codigoVINCULOINTERCAMBIABILIDADE, 
	nomeINTERCAMBIABILIDADE,
	valorVINCULOINTERCAMBIABILIDADE
	FROM `tb0501_intercambiabilidades` 
	INNER JOIN tb0501_intercambiabilidades_vinculos ON codigoINTERCAMBIABILIDADE = intercambiabilidadeVINCULOINTERCAMBIABILIDADE 
	WHERE `produtoVINCULOINTERCAMBIABILIDADE` = '".$codigoPRODUTO."'  ");
	while($intercambiabilidades = mysqli_fetch_assoc($query_intercambiabilidades)){
	?>
   
	<tr>  
		<td><?php echo $intercambiabilidades['nomeINTERCAMBIABILIDADE']; ?></td>
		<td><?php echo $intercambiabilidades['valorVINCULOINTERCAMBIABILIDADE']; ?></td>
		<td><a href="javascript:apagaIntercambiabilidades('<?php echo $intercambiabilidades['codigoVINCULOINTERCAMBIABILIDADE']; ?>');" class="btn btn-danger btn-sm rounded pull-right">
		<i class="fa fa-trash"></i>
		</a>
		</td> 
	</tr> 
	<?php } ?>
	  </tbody>
  </table>
	 </section>