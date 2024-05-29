<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE tb0171_clientes SET 
		ativoCLIENTE = '1' WHERE codigoCLIENTE = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=clientes&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE tb0171_clientes SET 
			ativoCLIENTE = '0' WHERE codigoCLIENTE = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=clientes&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=clientes&p=".$p."'</script>";
}