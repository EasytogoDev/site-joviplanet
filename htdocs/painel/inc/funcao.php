<?php
 
 

function limitar($string, $tamanho) {
    if( strlen($string) > $tamanho )
        $string = mb_substr($string, 0, $tamanho - 3) . '...';
    else
        $string = mb_substr($string, 0, $tamanho);
 
    return $string;
} 




function tiracento($texto){
	$trocarIsso = array('à','á','â','ã','ä','å','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ù','ü','ú','ÿ','À','Á','Â','Ã','Ä','Å','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ','Ò','Ó','Ô','Õ','Ö','O','Ù','Ü','Ú','Ÿ',' ','  ',',',"'",'"',"/","--",".",'  ',' ',);
	$porIsso = array('a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','u','u','u','y','a','a','a','a','a','a','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','y','_','','',"&middot;","&middot;","","_","_",'_','_');
	$titletext = strtolower(str_replace($trocarIsso, $porIsso, $texto));
	return $titletext;
}

  
function separaImagemDeTexto(){
$texto = 'texto <img src="imagem1.png"/>texto <img src="imagem2.png"/>texto <img src="imagem3.png"/>';
// Também funciona se tiver apenas uma imagem.


// Pegar as imagens
if(preg_match_all("/(<img src=\"([a-z0-9]*\.[a-z]{3})\" ?\/>)/is", $texto, $resultado) !== false) {

        $imagens_tags = $resultado[1]; // Armazena as tags <img />
        $imagens_nomes = $resultado[2]; // Armazena os nomes das imagens.
} else {
        echo "Erro analizando texto";
}



// Retirar as imagens do resto do texto
if(!empty($imagens_tags)) { // Verifica se foram encontradas tags <img /> na string, senão, então não há o que filtrar.
        $patterns = array();
        foreach($imagens_tags as $imgt) {
                $imgt = quotemeta($imgt); // escapa meta caracteres
                $imgt = str_replace("/", "\/", $imgt); // escapa aspas simples (pq é usado como modificador pelo PCRE
                

                $patterns[]= "/{$imgt}/";
        }
        
        $txt = preg_replace($patterns, "", $texto);
}



var_dump($imagens_tags, $imagens_nomes, $txt);
    
};


function insereDATA($mes,$dia,$ano){
	
	switch ($mes) {
        case "01":    $mes = Janeiro;     break;
        case "02":    $mes = Fevereiro;   break;
        case "03":    $mes = Março;       break;
        case "04":    $mes = Abril;       break;
        case "05":    $mes = Maio;        break;
        case "06":    $mes = Junho;       break;
        case "07":    $mes = Julho;       break;
        case "08":    $mes = Agosto;      break;
        case "09":    $mes = Setembro;    break;
        case "10":    $mes = Outubro;     break;
        case "11":    $mes = Novembro;    break;
        case "12":    $mes = Dezembro;    break; 
 }

 echo  $mes .'<br />'. $dia .', '. $ano;
	
	}
	
	
	
function alteraMES($mes){
	
	switch ($mes) {
        case "01":    $mesATUAL = 'Janeiro';     break;
        case "02":    $mesATUAL = 'Fevereiro';   break;
        case "03":    $mesATUAL = 'Março';       break;
        case "04":    $mesATUAL = 'Abril';       break;
        case "05":    $mesATUAL = 'Maio';        break;
        case "06":    $mesATUAL = 'Junho';       break;
        case "07":    $mesATUAL = 'Julho';       break;
        case "08":    $mesATUAL = 'Agosto';      break;
        case "09":    $mesATUAL = 'Setembro';    break;
        case "10":    $mesATUAL = 'Outubro';     break;
        case "11":    $mesATUAL = 'Novembro';    break;
        case "12":    $mesATUAL = 'Dezembro';    break; 
 }

 echo  $mesATUAL;
	
	}	

function menu_produtos($conexaox){
	
	$query_menu = @mysqli_query($conexaox,"SELECT * FROM tb0001_Pastas WHERE tipoPASTA='1' AND vinculoPASTA='10' AND ativoPASTA='1' ")or('CODE MENU');
	while($menu = mysqli_fetch_assoc($query_menu)){
    echo '<li><span>'.($menu['nomePASTA']).'</span>';
	
	
    echo'    <ul class="SubMenu">';
		
		$query_submenu = @mysqli_query($conexaox,"SELECT * FROM tb0001_Pastas WHERE tipoPASTA='1' AND vinculoPASTA='".$menu['codigoPASTA']."' AND ativoPASTA='1' ")or('CODE MENU');
        while($submenu = mysqli_fetch_assoc($query_submenu)){
			
			echo' <li><a href="/produtos/'.$menu['slugPASTA'].'/'.$submenu['slugPASTA'].'#produto"><img src="/imagens/MenuIcon.png" width="10" height="10" />'.($submenu['nomePASTA']).'</a></li>';
			
		}
		echo'</ul>          
	</li>
 
';
}

	}

function menuprincipal(){
	
	echo'<ul >';
	@$makeMenu = @$_GET['make'];
	
    echo '<li'; if(@$makeMenu=='home' or @$makeMenu==''){echo' class="active"';} echo'><a href="?make=home">Home</a></li>';
    echo '<li'; if(@$makeMenu=='pastas'){echo' class="active"';} echo'><a href="?make=pastas">Pastas</a></li>';
    echo '<li'; if(@$makeMenu=='produtos'){echo' class="active"';} echo'><a href="?make=produtos">Produtos</a></li>';
    echo '<li'; if(@$makeMenu=='orcamentos'){echo' class="active"';} echo'><a href="?make=orcamentos">Orçamentos</a></li>';
    echo '<li'; if(@$makeMenu=='noticias'){echo' class="active"';} echo'><a href="?make=noticias">Notícias</a></li>';
    echo '<li'; if(@$makeMenu=='galeria'){echo' class="active"';} echo'><a href="?make=galeria">Galeria</a></li>';
    echo '<li'; if(@$makeMenu=='atendimento'){echo' class="active"';} echo'><a href="?make=atendimento">Atendimento</a></li>';
    echo '<li'; if(@$makeMenu=='meus-dados' || @$makeMenu=='usuarios' || @$makeMenu=='tabelas-auxiliares' ){echo' class="active"';} echo'><a href="#">Outros</a>';
	
	echo '<ul>';
		echo '<li ><a href="?make=fabricantes">Fabricantes</a></li>';
		echo '<li ><a href="?make=meus-dados">Meus Dados</a></li>';
		echo '<li ><a href="?make=unidades-medidas">Unidades de Medidas</a></li>';
		echo '<li ><a href="?make=pesquisa">Pesquisas Sem Resultado</a></li>';
		echo '<li ><a href="?make=usuarios">Usuários</a></li>';
		echo '<li ><a href="?make=tabelas-auxiliares">Clientes Cadastrados</a></li>';
	echo '</ul>';
	
	
	echo '</li>';
    echo '<li'; if($makeMenu=='sair'){echo' class="active"';} echo'><a href="?make=login&acao=sair">Sair</a></li>';
	echo'</ul>';
	
	$variavelCODE = @$menu['codigoPASTA'];

}
	
	
	
	function pastas($vinculo){
		 
	$query_menupai = @mysql_query("SELECT * FROM tb0001_Pastas WHERE codigoPASTA='".$vinculo."' AND ativoPASTA='1' ")or('CODE MENU');
	$pai = mysql_fetch_assoc($query_menupai);
	
	$query_menu = @mysql_query("SELECT * FROM tb0001_Pastas WHERE tipoPASTA='1' AND vinculoPASTA='".$vinculo."' AND ativoPASTA='1' ")or('CODE MENU');
	$contagem = mysql_num_rows($query_menu);
	if($contagem==''){ 
	 }else{ 
	 echo' <ul '; if($vinculo==$pai['codigoPASTA']){ echo 'id="dhtmlgoodies_tree2" class="dhtmlgoodies_tree"';} echo'>'; 

	while($menu = mysql_fetch_assoc($query_menu)){
		
    echo '	<li  id="node'.$menu['codigoPASTA'].'"  ><a href="javascript:;" onmouseup="saveMyTree()" onclick="abrirpagina('; echo "'".$menu['codigoPASTA']."')" ;echo '">'.($menu['nomePASTA']).'</a>';
	 pastas($menu['codigoPASTA']); 
	 echo'</li>
	 ';
	}	
	
		
	 echo'</ul>
	'; 
	 } 
}
	
	
function submenuprincipais($conexaoX,$vinculo,$pasta){
	


	$busca_slug = mysqli_query($conexaoX, 'SELECT * FROM tb0001_Pastas WHERE slugPASTA="'.$vinculo.'" AND vinculoPASTA="0" AND ativoPASTA="1" ');
	$slug = mysqli_fetch_assoc($busca_slug)or die(mysqli_error());
	
	$busca_pagina = mysqli_query($conexaoX, 'SELECT * FROM tb0001_Pastas WHERE vinculoPASTA="'.$slug['codigoPASTA'].'" AND ativoPASTA="1" ')or die(mysqli_error());
	
		while($pagina = mysqli_fetch_assoc($busca_pagina)){
			
			if($pagina['slugPASTA']=='lancamentos' or $pagina['slugPASTA']=='produtos' or $pagina['slugPASTA']=='catalogo-digital'){
			
		echo'<a href="/'.$slug['slugPASTA'].'/'.$pagina['slugPASTA'].'#produto" class="Link'; if($pasta==$pagina['slugPASTA']){echo'A';}else{echo'Ina';} echo'tivo">'.$pagina['nomePASTA'].'</a>';
		
		
			}else{

		echo'<a href="/'.$slug['slugPASTA'].'/'.$pagina['slugPASTA'].'" class="Link'; if($pasta==$pagina['slugPASTA']){echo'A';}else{echo'Ina';} echo'tivo">'.$pagina['nomePASTA'].'</a>';
			
			}
		}
	}
	
	
	
	
	function pastasPainel($vinculo){
		 
	$query_menupai = @mysql_query("SELECT * FROM tb0001_Pastas WHERE codigoPASTA='".$vinculo."'  ")or('CODE MENU');
	$pai = mysql_fetch_assoc($query_menupai);
	
	$query_menu = @mysql_query("SELECT * FROM tb0001_Pastas WHERE tipoPASTA='1' AND vinculoPASTA='".$vinculo."' ")or('CODE MENU');
	$contagem = mysql_num_rows($query_menu);
	if($contagem==''){ 
	 }else{ 
	 echo' <ul >'; 

	while($menu = mysql_fetch_assoc($query_menu)){
		
echo '<li>

<span class="tabelaPainel pasta">'.($menu['nomePASTA']).'</span>


<span class="tabelaPainel ativo"><a href="?make='.$_GET['make'].'&acao=funcao&act='; if($menu['ativoPASTA'] == 1){echo 'desativar';}else{echo 'ativar';} echo'&codigo='.$menu['codigoPASTA'].'">
<img src="/painel/images/icones/bto_';if($menu['ativoPASTA'] != 1){echo 'desativado';}else{echo 'ativo';}echo'.png" width="16" height="16" border="0"></a></span>


<span class="tabelaPainel deletar"><a href="javascript:;" '; echo' onClick="';echo"deletar('".$menu['codigoPASTA']."','".$menu['nomePASTA']."')";echo'">
<img src="/painel/images/icones/bto_excluir.png" width="16" height="16" border="0" >
</a></span>
';
	 pastasPainel($menu['codigoPASTA']); 
echo'</li>';
	}	
	
		
	 echo'</ul>
	'; 
	 } 
}
		
	
	
	
function pastasAdmPainel($vinculo,$pastauser){

	$query_menu = @mysql_query("SELECT * FROM tb0001_Pastas WHERE tipoPASTA='1' AND vinculoPASTA='".$vinculo."' ")or('CODE MENU');
	$contagem = 1;

	while($menu = mysql_fetch_assoc($query_menu)){
		

echo '<option value="'.$menu['codigoPASTA'].'"';    if($menu['codigoPASTA']==$pastauser){echo'selected="selected"';} echo' >'.$contagem.' - '.strtoupper($menu['nomePASTA']).'</option>';

	 pastasAdmPainel($menu['codigoPASTA']); 

$contagem++;
	 } 
}	


function ArrumarData($data){ 

	$dia = substr($data,8,2);
	$mes = substr($data,5,2);
	$ano = substr($data,0,4);
	
		switch ($mes) {
        case "01":    $mesATUAL = 'Janeiro';     break;
        case "02":    $mesATUAL = 'Fevereiro';   break;
        case "03":    $mesATUAL = 'Março';       break;
        case "04":    $mesATUAL = 'Abril';       break;
        case "05":    $mesATUAL = 'Maio';        break;
        case "06":    $mesATUAL = 'Junho';       break;
        case "07":    $mesATUAL = 'Julho';       break;
        case "08":    $mesATUAL = 'Agosto';      break;
        case "09":    $mesATUAL = 'Setembro';    break;
        case "10":    $mesATUAL = 'Outubro';     break;
        case "11":    $mesATUAL = 'Novembro';    break;
        case "12":    $mesATUAL = 'Dezembro';    break; 
	 }
	
	$ok = $dia.' de '.$mesATUAL.' de '.$ano;

	return $ok;
}

function FormatarData($data){
	
	$dia = substr($data,8,2);
	$mes = substr($data,5,2);
	$ano = substr($data,0,4);
	
	$data_formatada = $dia.'/'.$mes.'/'.$ano;
	
	return $data_formatada;
	
}
?>