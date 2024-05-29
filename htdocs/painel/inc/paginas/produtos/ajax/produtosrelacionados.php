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
	nomeTIPOPRODUTORELACIONADO,
	codigoPRODUTORELACIONADO, 
	imagemIMAGEMPRODUTO,
	CONCAT(sulfixoPRODUTO,' ',partnumberPRODUTO) AS PRODUTO , 
	imagemPRODUTO
	FROM `tb0008_produtos_relacionados` 
	INNER JOIN tb0015_produtos ON codigoPRODUTO = subprodutoPRODUTORELACIONADO
	INNER JOIN tb0008_tipo_produtos_relacionados ON tipoPRODUTORELACIONADO = codigoTIPOPRODUTORELACIONADO
	INNER JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
	WHERE `produtoPRODUTORELACIONADO` = '".$codigoPRODUTO."' AND ativoPRODUTO = 1 ");
	while($categorias = mysqli_fetch_assoc($query_categorias)){
	?>
   
	<tr> 
		<td><?php echo $categorias['nomeTIPOPRODUTORELACIONADO']; ?></td>

		<td><img src="<?php echo $categorias['imagemIMAGEMPRODUTO']; ?>" width="50"></td>
		
		<td><?php echo $categorias['PRODUTO']; ?></td>
		<td><a href="javascript:ExcluiProdutoRelacionado('<?php echo $categorias['codigoPRODUTORELACIONADO']; ?>');" class="btn btn-danger btn-sm rounded pull-right">
		<i class="fa fa-trash"></i>
		</a>
		</td> 
	</tr> 
	<?php } ?>
	  </tbody>
  </table>
	 </section>