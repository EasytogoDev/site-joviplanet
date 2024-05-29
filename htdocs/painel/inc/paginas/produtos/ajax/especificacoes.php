	<?php
	require_once('../../../config.php');
	$produtoVINCULOESPECIFICAO = $_POST['produtoVINCULOESPECIFICAO'];
	?>
	
	<section class="section" >
	 
			
			
	<table class="table">
 
		<tbody>


		  
	<?php
	$query_especificacao = mysqli_query($conexao, "
	
	SELECT  
	codigoVINCULOESPECIFICAO, 
	nomeESPECIFICACAO,
	valorVINCULOESPECIFICAO
	FROM `tb0021_especificacoes` 
	INNER JOIN `tb0022_vinculos_especificacoes` ON codigoESPECIFICACAO = especificaoVINCULOESPECIFICAO 
	WHERE `produtoVINCULOESPECIFICAO` = '".$produtoVINCULOESPECIFICAO."'  ");
	while($especificacao = mysqli_fetch_assoc($query_especificacao)){
	?>
   
	<tr>  
		<td><?php echo $especificacao['nomeESPECIFICACAO']; ?></td>
		<td><?php echo $especificacao['valorVINCULOESPECIFICAO']; ?></td>
		<td><a href="javascript:apagaEspecificacoes('<?php echo $especificacao['codigoVINCULOESPECIFICAO']; ?>');" class="btn btn-danger btn-sm rounded pull-right">
		<i class="fa fa-trash"></i>
		</a>
		</td> 
	</tr> 
	<?php } ?>
	  </tbody>
  </table>
	 </section>