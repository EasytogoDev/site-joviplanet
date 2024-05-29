<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE `tb0152_servicos` SET 
		`ativoSERVICO` = '1' WHERE `codigoSERVICO` = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=servicos&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE `tb0152_servicos` SET 
			`ativoSERVICO` = '0' WHERE `codigoSERVICO` = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=servicos&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=servicos&p=".$p."'</script>";
}