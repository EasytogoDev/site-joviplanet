<?php

$usuario = $usuario['codigoUSUARIO'];


    $query = mysqli_query($conexao, "
INSERT INTO  tb081_posts (
codigoPOST,usuarioPOST,categoriaPOST,ativoPOST
)
VALUES (
null, ".$usuario.",1,'0'
);
");


$codigoPOST = mysqli_insert_id($conexao);

if ($query) {

    echo '<script> top.location.href="?make=artigos&acao=editar&p=1&codigo=' . $codigoPOST . '&tipo=new";</script>';

} else {

    echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';

}


