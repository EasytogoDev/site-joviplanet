<?php 

if(@$_GET['act']!=''){
	$codigo = @$_GET['codigo'];
	$p = @$_GET['p'];	

		if ($_GET['act']=='ativar'){
		
		$ativar = mysqli_query($conexao, "UPDATE `tb085_destaques` SET 
		`ativoDESTAQUE` = '1' WHERE `codigoDESTAQUE` = '".$codigo."'");
		
			if($ativar){
			
			echo "<script>top.location.href='?make=destaques&p=".$p."'</script>";
			
			}
		
		}elseif ($_GET['act']=='desativar'){
		
			$desativar = mysqli_query($conexao, "UPDATE `tb085_destaques` SET 
			`ativoDESTAQUE` = '0' WHERE `codigoDESTAQUE` = '".$codigo."' ");
		
			if($desativar){
			
			echo "<script>top.location.href='?make=destaques&p=".$p."'</script>";
			
			}
		}

}else {
echo "<script>top.location.href='?make=pagina&p=".$p."'</script>";
}