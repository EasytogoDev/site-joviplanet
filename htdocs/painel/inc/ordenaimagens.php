<?php
 
 
	
	$conexao = new mysqli ("localhost","root","","eletricway");
	mysqli_set_charset($conexao, "utf-8");


	$codigoBANNER = $_POST["codigoBANNER"];


	$arr_item = explode(",", $codigoBANNER);


	$ordem = 1;

	foreach ($arr_item as $arr_item) {
		
			$sql = "UPDATE tb0030_banners SET ordemBANNER = $ordem WHERE codigoBANNER = $arr_item";

			$execute = $conexao->query($sql) or die(mysqli_error($conexao));

		$ordem++;
	}


?>