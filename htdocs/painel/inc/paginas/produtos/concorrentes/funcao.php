<?php 

if(@$_GET['action']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	
	$q = @$_GET['q'];	

		if ($_GET['action']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE `tb0401_concorrentes` SET 
		`ativoCONCORRENTE` = '1' WHERE `codigoCONCORRENTE` = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=".$make."&acao=".$acao."&q=".$q."&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['action']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE `tb0401_concorrentes` SET 
			`ativoCONCORRENTE` = '0' WHERE `codigoCONCORRENTE` = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=".$make."&acao=".$acao."&q=".$q."&p=".$p."'</script>";
			
			}
		}

}else {
	
echo '<script>top.location.href="javascript:;history.back(-1);"</script>';

}