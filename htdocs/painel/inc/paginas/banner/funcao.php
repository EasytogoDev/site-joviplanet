<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE tb0030_banners SET 
		ativoBANNER = '1' WHERE codigoBANNER = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=".$make."&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE tb0030_banners SET 
			ativoBANNER = '0' WHERE codigoBANNER = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=".$make."&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=".$make."&p=".$p."'</script>";
}