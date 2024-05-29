<?php 

if(@$_GET['action']!=''){


	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	
	$q = @$_GET['q'];	

		if ($_GET['action']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE tb0021_especificacoes SET ativoESPECIFICACAO = '1' WHERE codigoESPECIFICACAO = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=".$make."&acao=".$acao."&q=".$q."&p=".$p."'</script>";
			
			}
		
		}
		
		
		if ($_GET['action']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE tb0021_especificacoes SET ativoESPECIFICACAO = '0' WHERE codigoESPECIFICACAO = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=".$make."&acao=".$acao."&q=".$q."&p=".$p."'</script>";
			
			}
		}

}else {
	
echo '<script>top.location.href="javascript:;history.back(-1);"</script>';

}