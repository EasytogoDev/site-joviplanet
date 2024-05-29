<p id="searchresults"> 
 
<?php
require_once('../painel/inc/config.php'); 
require_once('../painel/inc/funcao.php'); 

//Nova Base
require_once('../require/funcao.php');
require_once('../require/config.php');
require_once('../require/idiomas/'.$idiomasite.'.php'); 
 
function trocaAcento( $string ) { 
 $search = array( 'á', 'à', 'ã', 'é', 'ê', 'í', 'ó', 'õ', 'ú', 'ç' );
 $replace = array( 'a', 'a', 'a', 'e', 'e', 'i', 'o', 'o', 'u', 'c' );
 return str_replace($search, $replace, $string); 
}
  
if(isset($_POST['queryString'])) {
	
	//$queryString = htmlspecialchars($_POST['queryString'], ENT_NOQUOTES, "UTF-8");
	
	$queryString = trocaAcento($_POST['queryString']);
  
 	
	$palavra = explode(" ", $queryString);
 

 

$cat_busca_query =  mysqli_query($conexao, "SELECT codigoCATEGORIA,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA 
ELSE slugCATEGORIA END AS slugCATEGORIA,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN nomeenCATEGORIA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN nomeesCATEGORIA 
ELSE nomeCATEGORIA END AS nomeCATEGORIA,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN nomeenGRUPO
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN nomeesGRUPO 
ELSE nomeGRUPO END AS nomeGRUPO FROM tb0012_categorias  
INNER JOIN tb0020_grupo_produtos ON codigoGRUPO = grupoCATEGORIA
WHERE ativoCATEGORIA='1' AND ativoGRUPO='1' AND nomeCATEGORIA LIKE '".$queryString."%' ORDER BY nomeCATEGORIA ASC ");

$categoria = mysqli_fetch_assoc($cat_busca_query);
$contagem = mysqli_num_rows($cat_busca_query);
				
if($contagem>0){				
echo '<a href="/'.$idioma['urlProdutos'].'/'.$idioma['urlCategoria'].'/'.$categoria['slugCATEGORIA'].'/" class="link-familia">'.htmlentities($categoria['nomeGRUPO']).': '.htmlentities($categoria['nomeCATEGORIA']).' </a>';	
} 
//##########################FIM DA CATEGORIA	



/*
$query = mysqli_query($conexao, "
				SELECT * FROM tb0001_produtos 
				INNER JOIN tb0001_categorias ON categoriaPRODUTO = codigoCATEGORIA 
				WHERE ".$querygeral." ORDER BY partnumberPRODUTO ASC LIMIT 10 
				");
				if($query) {
					
					$catid = 0;
					
					while ($result = mysqli_fetch_assoc($query)) {
						*/
						
			

 
   $pesquisa = str_replace( array( ',', '.', '%', '-', '/', '\\' ),' ', $queryString );
   $palavras = explode( ' ', $pesquisa ); // dividindo as palavras pelo espaço
   $palavras = array_filter($palavras); // eliminando ítens vazios
   
   ///===============================QUERY RAINHA

   $query = "SELECT imagemPRODUTO, sulfixoPRODUTO, partnumberPRODUTO,
   	CASE 
	WHEN '".$_SESSION['idiomasite']."' = 'en' THEN descricaoenPRODUTO
	WHEN '".$_SESSION['idiomasite']."' = 'es' THEN descricaoesPRODUTO 
	ELSE descricaoPRODUTO END AS descricaoPRODUTO,
	CASE 
	WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
	WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA 
	ELSE slugCATEGORIA END AS slugCATEGORIA, codigoPRODUTO,
	CASE 
	WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPRODUTO
	WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPRODUTO 
	ELSE slugPRODUTO END AS slugPRODUTO, codigoIMAGEMPRODUTO  
   FROM  tb0015_produtos 
   INNER JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
   INNER JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO
   INNER JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
   #LEFT JOIN tb0402_vinculos_concorrentes ON codigoPRODUTO = produtoVINCULOCONCORRENTE
   ";
   
   $cola = ' WHERE ';

   //Aqui você pode juntar vários campos no concat.
$campo = " CONCAT( sulfixoPRODUTO, ' ', partnumberPRODUTO , ' ', descricaoPRODUTO  ) ";
//$campo = " CONCAT( sulfixoPRODUTO, ' ', partnumberPRODUTO , ' ', descricaoPRODUTO , ' ', valorVINCULOCONCORRENTE  ) ";

   foreach ($palavras as $palavra) { 
      $palavra = trim($palavra);
	  
	  
      $query .= $cola.' '.$campo." LIKE '%".$palavra."%' ";
	  
	  
      $cola = ' AND ';
   } 
   
   
   
   //==================================================================
   
      ///===============================QUERY CONVERSAO
   
 /*      $querys = 'SELECT imagemPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, descricaoPRODUTO, slugCATEGORIA, codigoPRODUTO, slugPRODUTO  FROM tb0015_produtos 
	  INNER JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
	  INNER JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO
  
   ';
    //#INNER JOIN tb0004_conversoes ON codigoPRODUTO = produtoCONVERSAO 
   $colas = ' WHERE ';

   //Aqui você pode juntar vários campos no concat.
$campos = " #CONCAT( partnumberPRODUTO , ' ', partnumberPRODUTO , ' ', partnumberPRODUTO , ' ', partnumberPRODUTO , ' ', partnumberPRODUTO   ) ";

   foreach ($palavras as $palavra) {  
      $palavra = trim($palavra);
	  
	  
      $querys .= $colas.' '.$campos." LIKE '%".$palavra."%' ";
	  
	  
      $colas = ' AND ';
   } 
    */
   //echo $query.' OUTROS '.$palavra.' ORIGINAL '. $queryString;
 //==================================================================
     
  $filtra_query =  mysqli_query($conexao, $query ."  AND `ativoPRODUTO`='1' GROUP BY imagemPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, descricaoPRODUTO, slugCATEGORIA, codigoPRODUTO, slugPRODUTO, codigoIMAGEMPRODUTO ORDER BY partnumberPRODUTO ASC LIMIT 6");
  $filtra_query_conta = mysqli_num_rows($filtra_query);
   
 /*  $filtra_querys =  mysqli_query($conexao, $querys ."  AND `ativoPRODUTO`='1' ORDER BY partnumberPRODUTO ASC LIMIT 2");
  $filtra_querys_conta = mysqli_num_rows($filtra_querys);
    */
   
   
   
   
 /* $busca_query =  mysqli_query($conexao, "( ".$query ."  AND `ativoPRODUTO`='1' ORDER BY partnumberPRODUTO ASC LIMIT 7) UNION ALL ( ".$querys ."  AND `ativoPRODUTO`='1' ORDER BY partnumberPRODUTO ASC LIMIT 7) ");

  
  $contagemger = mysqli_num_rows($busca_query);
				
if($contagemger>0){
  
					while($result = mysqli_fetch_assoc($busca_query)){	
						
						echo'<a href="/'.$configuracoes['abreviacaoIDIOMA'].'/produtos/'.$result['slugCATEGORIA'].'/'.$result['codigoPRODUTO'].'/'.$result['slugPRODUTO'].'/">
						 <img src="/include/busca.php?i='.$result['imagemPRODUTO'].'&idioma='.$configuracoes['abreviacaoIDIOMA'].'" alt="" width="128" />
						 <span class="searchheading">'.$result['sulfixoPRODUTO'].' '.$result['partnumberPRODUTO'].'</span>
						 <span>'.limitar(utf8_encode($result['descricaoPRODUTO']), 70).'</span>
						 </a>';
		 
		  
	         		}*/
					

if($filtra_query_conta>0){
  
					while($result = mysqli_fetch_assoc($filtra_query)){	
						
						echo'<a href="/'.$idioma['urlProdutos'].'/'.$result['slugCATEGORIA'].'/'.$result['codigoPRODUTO'].'/'.$result['slugPRODUTO'].'/">
						 <img src="/include/buscapq.php?i='.$result['codigoIMAGEMPRODUTO'].'" title="'.$result['sulfixoPRODUTO'].' '.$result['partnumberPRODUTO'].'"  alt="'.$result['sulfixoPRODUTO'].' '.$result['partnumberPRODUTO'].'" width="128" height="63" style="
						 background: url(';echo"'/images/carregamento.gif'";echo');
						 background-size: contain;
						 background-repeat: no-repeat;
						 background-position: center;
						 background-color: #FFFFFF;
					 "/>
						 <span class="searchheading">'.$result['sulfixoPRODUTO'].' '.$result['partnumberPRODUTO'].'</span>
						 <span>'.limitar(strip_tags($result['descricaoPRODUTO']), 70).'</span>
						 </a>';
		 
		  
	         		}
					
}
					
/* if($filtra_querys_conta>0){
  
					while($results = mysqli_fetch_assoc($filtra_querys)){	
						
						echo'<a href="/produtos/'.$results['slugCATEGORIA'].'/'.$results['codigoPRODUTO'].'/'.$results['slugPRODUTO'].'/">
						 <img src="'.$results['imagemPRODUTO'].'" alt="" width="128" />
						 <span class="searchheading">'.$results['sulfixoPRODUTO'].' '.$results['partnumberPRODUTO'].'</span>
						 <span>'.limitar(utf8_encode($results['descricaoPRODUTO']), 70).'</span>
						 </a>';
		 
		  
	         		}					
 
					
					
} 	*/				
					
					
//#############RESULTADOS	
$arquivo = str_replace(" ", "+", $queryString);
echo '<a  href="javascript:;" onclick="buscaDados()" class="link-todos"> VER TODOS RESULTADOS </a>';
//#############RESULTADOS	
				 
				//} else {
				//	echo 'ERROR: Houve algum erro entre em contato com a Rainha das Sete.';
				//}
				
				
			 

} else {
echo 'Não deve haver acesso direto a este script!';
}

?>
</p>