<?php
class Redimensiona{
	
	public function Redimensionar($imagem, $largura, $pasta){
		
		$name = md5(uniqid(rand(),true));
		
		if ($imagem['type']=="image/jpeg"){
			$img = imagecreatefromjpeg($imagem['tmp_name']);
		}else if ($imagem['type']=="image/gif"){
			$img = imagecreatefromgif($imagem['tmp_name']);
		}else if ($imagem['type']=="image/png"){
			$img = imagecreatefrompng($imagem['tmp_name']);
		}
		$x   = imagesx($img);
		$y   = imagesy($img);
		$autura = ($largura * $y)/$x;
		
		$nova = imagecreatetruecolor($largura, $autura);
		imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $autura, $x, $y);
		
		if ($imagem['type']=="image/jpeg"){
			$local="$pasta/$name".".jpg";
			imagejpeg($nova, $local);
		}else if ($imagem['type']=="image/gif"){
			$local="$pasta/$name".".gif";
			imagejpeg($nova, $local);
		}else if ($imagem['type']=="image/png"){
			$local="$pasta/$name".".png";
			imagejpeg($nova, $local);
		}		
		
		imagedestroy($img);
		imagedestroy($nova);	
		
		return $local;
	}
}
?>