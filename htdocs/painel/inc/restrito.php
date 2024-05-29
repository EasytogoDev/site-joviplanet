<?php
@session_start();

if (isset($_SESSION['loginUSUARIO']) && isset($_SESSION['senhaUSUARIO'])){

$loginUSUARIO = $_SESSION['loginUSUARIO'];
$senhaUSUARIO = $_SESSION['senhaUSUARIO'];

$query_usuarios = mysqli_query($conexao, "SELECT * FROM tb0301_usuarios 
INNER JOIN tb0151_empresas ON codigoEMPRESA = empresaUSUARIO
WHERE emailUSUARIO= '".$loginUSUARIO."' AND senhaUSUARIO= '".md5($senhaUSUARIO)."' AND ativoUSUARIO= '1' ") or die (mysqli_error());

$usuario = mysqli_fetch_assoc($query_usuarios);
} else {
	
echo '<script>location.href="?make=login";</script>';
exit;

}
?>
