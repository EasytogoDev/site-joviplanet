<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE tb0150_galeria SET 
		ativoGALERIA = '1' WHERE codigoGALERIA = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=".$make."&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE tb0150_galeria SET 
			ativoGALERIA = '0' WHERE codigoGALERIA = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=".$make."&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=".$make."&p=".$p."'</script>";
}