<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE tb0172_depoimentos SET 
		ativoDEPOIMENTO = '1' WHERE codigoDEPOIMENTO = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=depoimentos&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE tb0172_depoimentos SET 
			ativoDEPOIMENTO = '0' WHERE codigoDEPOIMENTO = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=depoimentos&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=depoimentos&p=".$p."'</script>";
}