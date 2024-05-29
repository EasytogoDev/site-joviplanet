<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE tb0011_licencas SET 
		ativoLICENCA = '1' WHERE codigoLICENCA = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=licencas&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE tb0011_licencas SET 
			ativoLICENCA = '0' WHERE codigoLICENCA = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=licencas&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=licencas&p=".$p."'</script>";
}