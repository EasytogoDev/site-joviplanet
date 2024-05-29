<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE `tb084_faq` SET 
		`ativoFAQ` = '1' WHERE `codigoFAQ` = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=faq&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE `tb084_faq` SET 
			`ativoFAQ` = '0' WHERE `codigoFAQ` = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=faq&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=faq&p=".$p."'</script>";
}