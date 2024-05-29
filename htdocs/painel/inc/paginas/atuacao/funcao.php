<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE `tb0162_atuacoes` SET 
		`ativoATUACAO` = '1' WHERE `codigoATUACAO` = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=atuacao&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE `tb0162_atuacoes` SET 
			`ativoATUACAO` = '0' WHERE `codigoATUACAO` = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=atuacao&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=atuacao&p=".$p."'</script>";
}