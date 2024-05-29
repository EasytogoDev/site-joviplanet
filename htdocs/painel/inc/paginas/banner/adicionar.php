<?php
  

	$query = mysqli_query($conexao, "
INSERT INTO tb0030_banners
(
codigoBANNER, ativoBANNER
	)VALUES (
null, '0'
);
");



	$codigoBANNER = mysqli_insert_id($conexao);

	if ($query) {

		echo '<script> top.location.href="?make=banner&acao=editar&p=1&codigo=' . $codigoBANNER . '&tipo=new";</script>';

	} else {

		echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';

	}

 