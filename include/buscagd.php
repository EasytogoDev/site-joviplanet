<?php

require_once('../painel/inc/funcao.php');
require_once('../painel/inc/config.php');


$cod = $_GET['i'];

$query_produtos = mysqli_query($conexao, "SELECT
COALESCE(CONCAT('..',imagemIMAGEMPRODUTO), '../images/semfoto.jpg') AS IMAGEM FROM tb0015_produtos 
INNER JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO
WHERE ativoPRODUTO = 1 #AND padraoIMAGEMPRODUTO = 1
AND codigoIMAGEMPRODUTO = ".$cod."  ORDER BY codigoIMAGEMPRODUTO ASC LIMIT 1
");
							 
$produtos = mysqli_fetch_assoc($query_produtos);


 
#variavel que recebe a url/caminho da imagem
$arquivofoto = $produtos['IMAGEM'];



header('Content-type: image/webp');


if (file_exists($arquivofoto)) {
	
    $filename = $arquivofoto;
	$marca =  "../images/produtogd.png";

} else{
	
	$filename = "../images/semfoto.jpg";
	$marca =  "../images/semfoto.png";

	
}



$imagem_marca =   ImageCreateFrompng($marca);
$pontoX1 =   ImagesX($imagem_marca);
$pontoY1 =   ImagesY($imagem_marca);

#recupera as dimensoes da imagem
list($width, $height) = getimagesize($filename);

#definindo tamanho padrão para as fotos
$new_width = $width;
$new_height = $height;

#redesenhando a imagem
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

#Habilitando a opcao abaixo irá criar a mascara com a imagem marca d’agua
ImageCopyMerge($image_p, $imagem_marca, 0, 0, 0, 0, $pontoX1, $pontoY1, 10);

imagejpeg($image_p, null, 100);
imagedestroy($image_p); 