<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE `tb081_posts` SET 
		`ativoPOST` = '1' WHERE `codigoPOST` = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=".$make."&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE `tb081_posts` SET 
			`ativoPOST` = '0' WHERE `codigoPOST` = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=".$make."&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=".$make."&p=".$p."'</script>";
}