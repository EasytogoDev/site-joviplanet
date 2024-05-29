<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE `tb0075_eventos` SET 
		`ativoEVENTO` = '1' WHERE `codigoEVENTO` = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=eventos&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE `tb0075_eventos` SET 
			`ativoEVENTO` = '0' WHERE `codigoEVENTO` = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=eventos&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=eventos&p=".$p."'</script>";
}