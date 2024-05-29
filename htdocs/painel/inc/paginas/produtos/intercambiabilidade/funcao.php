<?php 

if(@$_GET['action']!=''){


	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	
	$q = @$_GET['q'];	

		if ($_GET['action']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE tb0501_intercambiabilidades SET ativoINTERCAMBIABILIDADE = '1' WHERE codigoINTERCAMBIABILIDADE = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=".$make."&acao=".$acao."&q=".$q."&p=".$p."'</script>";
			
			}
		
		}
		
		
		if ($_GET['action']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE tb0501_intercambiabilidades SET ativoINTERCAMBIABILIDADE = '0' WHERE codigoINTERCAMBIABILIDADE = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=".$make."&acao=".$acao."&q=".$q."&p=".$p."'</script>";
			
			}
		}

}else {
	
echo '<script>top.location.href="javascript:;history.back(-1);"</script>';

}