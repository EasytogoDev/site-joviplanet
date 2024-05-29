<?php $busca =  $_POST['q']; ?>



 <!-- contact area -->
 <div class="content"   style="padding-top: 0px;">
            <!-- About Company -->
			<div class="dlab-bnr-inr overlay-black-middle " style="background-image:url(/images/banner/produtos.png);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Pesquisando: <?php echo $busca;?></h1>
                </div>
            </div>
        </div>
        <!-- LEFT page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#"><?php echo $idioma['urlHome'];?></a></li>
                    <li><a href="/<?php echo $idioma['urlProdutos'];?>"><?php echo $idioma['MenuProdutos'];?></a></li>
                    <li>Pesquisando: <?php echo $busca;?></li>
                </ul>
            </div>
        </div>



<div class="section-full bg-white content-LEFT" >
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-7">
                                <h2 class="text-uppercase">
                                    Pesquisando: <?php echo $busca;?> </h2>
                            
                            
                                <div class="dlab-separator-outer ">
                                    <div class="dlab-separator bg-secondry style-skew"></div>
                                </div>
                            </div>  
                        </div> 
                    </div>    


                    <div class="row">
                        
                        			
						
<?php

//A quantidade de valor a ser exibida
$quantidade = 100;
//a pagina atual
// $pagina     = (isset($pgc)) ? (int)$pgc : 1;

if($pgc=='_pagina'){
                            
                            //verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
                        $pagina = (isset($pgd))? $pgd : 1;
                            
                            
                        }else{
                            
                        $pagina = 1;
                        
                        }
                        
                        
//Calcula a pagina de qual valor será exibido
$inicio     = ($quantidade * $pagina) - $quantidade;

//Monta o SQL com LIMIT para exibição dos dados  

 

$sql = "
SELECT slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO FROM (
SELECT 
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA
ELSE slugCATEGORIA END AS slugCATEGORIA, 
codigoPRODUTO,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPRODUTO
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPRODUTO
ELSE slugPRODUTO END AS slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO  FROM `tb0015_produtos`
LEFT JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
LEFT JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO 
LEFT JOIN tb0011_linhas_vinculos ON produtoLINHAVINCULO = codigoPRODUTO                        
LEFT JOIN tb0011_linhas ON codigoLINHA = linhaLINHAVINCULO
LEFT JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
WHERE ativoPRODUTO = 1 AND ativoCATEGORIA = 1 AND partnumberPRODUTO LIKE '%".$busca."%'
GROUP BY slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO


UNION ALL

SELECT 
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA
ELSE slugCATEGORIA END AS slugCATEGORIA, 
codigoPRODUTO,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPRODUTO
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPRODUTO
ELSE slugPRODUTO END AS slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO  FROM `tb0015_produtos`
LEFT JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
LEFT JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO 
LEFT JOIN tb0011_linhas_vinculos ON produtoLINHAVINCULO = codigoPRODUTO                        
LEFT JOIN tb0011_linhas ON codigoLINHA = linhaLINHAVINCULO
LEFT JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
WHERE ativoPRODUTO = 1 AND ativoCATEGORIA = 1 AND descricaoPRODUTO LIKE '%".$busca."%' 
GROUP BY slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO
 

UNION ALL

SELECT 
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA
ELSE slugCATEGORIA END AS slugCATEGORIA, 
codigoPRODUTO,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPRODUTO
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPRODUTO
ELSE slugPRODUTO END AS slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO  FROM `tb0015_produtos`
LEFT JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
LEFT JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO 
LEFT JOIN tb0011_linhas_vinculos ON produtoLINHAVINCULO = codigoPRODUTO                        
LEFT JOIN tb0011_linhas ON codigoLINHA = linhaLINHAVINCULO
LEFT JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
WHERE ativoPRODUTO = 1 AND ativoCATEGORIA = 1 AND nomeCATEGORIA LIKE '%".$busca."%' 
GROUP BY slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO

UNION ALL

SELECT 
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA
ELSE slugCATEGORIA END AS slugCATEGORIA, 
codigoPRODUTO,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPRODUTO
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPRODUTO
ELSE slugPRODUTO END AS slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO  FROM `tb0015_produtos`
LEFT JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
LEFT JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO 
LEFT JOIN tb0011_linhas_vinculos ON produtoLINHAVINCULO = codigoPRODUTO                        
LEFT JOIN tb0011_linhas ON codigoLINHA = linhaLINHAVINCULO
LEFT JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
WHERE ativoPRODUTO = 1 AND ativoCATEGORIA = 1 AND nomeLINHA LIKE '%".$busca."%'
GROUP BY slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO

)TABELA 
GROUP BY slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO

ORDER BY partnumberPRODUTO ASC LIMIT ".$inicio.",".$quantidade."





";




 /**
   * SEGUNDA PARTE DA PAGINAÇÃO
   */
  //SQL para saber o total
  $sqlTotal   = " 
  SELECT slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO FROM (
  SELECT 
  CASE 
  WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
  WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA
  ELSE slugCATEGORIA END AS slugCATEGORIA, 
  codigoPRODUTO,
  CASE 
  WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPRODUTO
  WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPRODUTO
  ELSE slugPRODUTO END AS slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO  FROM `tb0015_produtos`
  LEFT JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
  LEFT JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO 
  LEFT JOIN tb0011_linhas_vinculos ON produtoLINHAVINCULO = codigoPRODUTO                        
  LEFT JOIN tb0011_linhas ON codigoLINHA = linhaLINHAVINCULO
  LEFT JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
  WHERE ativoPRODUTO = 1 AND ativoCATEGORIA = 1 AND partnumberPRODUTO LIKE '%".$busca."%'
  GROUP BY slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO
  
  UNION ALL
  
  SELECT 
  CASE 
  WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
  WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA
  ELSE slugCATEGORIA END AS slugCATEGORIA, 
  codigoPRODUTO,
  CASE 
  WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPRODUTO
  WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPRODUTO
  ELSE slugPRODUTO END AS slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO  FROM `tb0015_produtos`
  LEFT JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
  LEFT JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO 
  LEFT JOIN tb0011_linhas_vinculos ON produtoLINHAVINCULO = codigoPRODUTO                        
  LEFT JOIN tb0011_linhas ON codigoLINHA = linhaLINHAVINCULO
  LEFT JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
  WHERE ativoPRODUTO = 1 AND ativoCATEGORIA = 1 AND nomeCATEGORIA LIKE '%".$busca."%' 
  GROUP BY slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO
  
  UNION ALL
  
  SELECT 
  CASE 
  WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
  WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA
  ELSE slugCATEGORIA END AS slugCATEGORIA, 
  codigoPRODUTO,
  CASE 
  WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPRODUTO
  WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPRODUTO
  ELSE slugPRODUTO END AS slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO  FROM `tb0015_produtos`
  LEFT JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
  LEFT JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO 
  LEFT JOIN tb0011_linhas_vinculos ON produtoLINHAVINCULO = codigoPRODUTO                        
  LEFT JOIN tb0011_linhas ON codigoLINHA = linhaLINHAVINCULO
  LEFT JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
  WHERE ativoPRODUTO = 1 AND ativoCATEGORIA = 1 AND nomeLINHA LIKE '%".$busca."%'
  GROUP BY slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO
  
)TABELA 
GROUP BY slugCATEGORIA, codigoPRODUTO, slugPRODUTO, lancamentoPRODUTO, sulfixoPRODUTO, partnumberPRODUTO, codigoIMAGEMPRODUTO

  ";
  //Executa o SQL
  $qrTotal    = mysqli_query($conexao, $sqlTotal);
  //Total de Registro na tabela
  $numTotal   = mysqli_num_rows($qrTotal);
  //O calculo do Total de página ser exibido
  $totalPagina= ceil($numTotal/$quantidade);
   /**
    * Defini o valor máximo a ser exibida na página tanto para direita quando para esquerda
    */





//Executa o SQL
$produtos_query  = mysqli_query($conexao, $sql);
//Percorre os campos da tabela
while($produtos = mysqli_fetch_assoc($produtos_query)){
    
    $url = "/produtos/".$produtos['slugCATEGORIA']."/".$produtos['codigoPRODUTO']."/ete-".$produtos['slugPRODUTO'];
    
    ?>


  
<div class="col-lg-3 col-md-4 col-sm-6 m-t20"> 
                                <a href="<?php echo $url;?>">
                                <div class="item-box m-b10 item-style-1">
                                     
                                        <div class="item-img" style=" border: 1px solid #ccc; border-radius:10px; min-height: 250px; line-height: 250px;overflow: inherit;">
                                        <div class="item-info text-center text-black p-a10 zoom-slow " style="
    z-index: 50;
    <?php if($produtos['lancamentoPRODUTO']==1){echo 'background: #FFFF00;';}else{echo'background: #FF0000;';}?>
    <?php if($produtos['lancamentoPRODUTO']==1){echo 'color: #FF0000;';}else{echo'backcolorground: #FFFFFF;';}?>
    width: 70%;
    margin: 0px auto;
    margin: -15px auto;
    position: relative;
    border-top-right-radius: 15px;
    border-bottom-left-radius: 15px;
">
                                        <a href="<?php echo $url;?>">
                                            <h6 class="item-title" style="
                                            
    <?php if($produtos['lancamentoPRODUTO']==1){echo 'color: #FF0000;';}else{echo'color: #FFFFFF;';}?>
                                            font-size: 15px;line-height: 10px; padding: 5px 0 0 0 ;"><?php echo $produtos['sulfixoPRODUTO'];?> <?php echo $produtos['partnumberPRODUTO'];?></h6>
                                            
                                        </div>
                                         
                                            <img src="/include/busca.php?i=<?php echo $produtos['codigoIMAGEMPRODUTO'];?>" alt=""/> 
                                               <!--  <div class="item-info-in-lancamento">
                                                    Lançamento
                                                    </div> -->
                                                    <a href="<?php echo $url;?>">
                                                <div class="item-info-in" onclick="top.location.href='<?php echo $url;?>';">
                                                <ul>
                                                    <li><a href="<?php echo $url;?>"><i class="ti-hand-point-up"></i></a></li> 
                                                 
                                                
                                                </ul>
                                            </div>

                                            </a>
                                        </div>

                                        
                                        
                                    </div>
                               
 
<?php    //SQL para saber o total
$sqlBuscaLinha   = "SELECT 
codigoLINHA, nomeLINHA, imagemLINHA, slugLINHA, ativoLINHA
FROM tb0011_linhas_vinculos 
LEFT JOIN tb0011_linhas ON codigoLINHA = linhaLINHAVINCULO 
WHERE produtoLINHAVINCULO = '".$produtos['codigoPRODUTO']."' 
";
//Executa o SQL
$PegaLinha    = mysqli_query($conexao, $sqlBuscaLinha);

//Percorre os campos da tabela
while($linhas = mysqli_fetch_assoc($PegaLinha)){

?>
    <img src="<?php echo $linhas['imagemLINHA'];?>" width="32" style="opacity: 0.7; border-radius:20px;width: 29px !important;height: 29px !important;max-width: inherit;vertical-align: inherit;margin: 2.5px;position: relative;top: -60px;left: 10px;">
<?php } ?> 
<?php if($produtos['lancamentoPRODUTO']==1){echo '<img style="background: #FFFF00; 
    border-radius: 20px;
    padding: 6px; 
    font-weight: 600; 
    max-width: inherit;
    vertical-align: inherit; 
    position: relative;
    top: -60px; 
    right: 10px;
    float: right" src="/images/Icon_Lancamento.png" width="38" heigth="38" alt="Lançamentos" title="Lançamentos">';} 
    ?>      
                                </a>
                            </div>

             <!--                <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="item-box m-b10">
                                    <div class="item-img" style="
    border: 1px solid #cfafaf;
    min-height: 250px;
    line-height: 250px;
">
                                       <img src="<?php echo $produtos['imagemPRODUTO'];?>" alt=""/>
                                        <!- - <img src="/include/busca.php?i=<?php echo $produtos['imagemPRODUTO'];?>" alt=""/> - ->
                                        <div class="item-info-in">
                                            <ul>
                                                <li><a href="<?php echo $url;?>"><i class="ti-shopping-cart"></i></a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item-info text-center text-black p-a10">
                                        <h6 class="item-title"><a href="<?php echo $url;?>">ETE <?php echo $produtos['partnumberPRODUTO'];?></a></h6>
                                        
                                    </div>
                                </div>
                            </div> -->


<?php }?>

<?php if( $numTotal > $quantidade){?>
<div style="    width: 100%; ">
<div class="btn-group product-item-size p-t50" role="group" aria-label="Basic radio toggle button group" style="
    width: 50%;
    margin: 0px auto;
">
<?php
 
  $totalPagina= ceil($numTotal/$quantidade);
   /**
    * Defini o valor máximo a ser exibida na página tanto para direita quando para esquerda
    */
   $exibir = 3;
   /**
    * Aqui montará o link que voltará uma pagina
    * Caso o valor seja zero, por padrão ficará o valor 1
    */
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   /**
    * Aqui montará o link que ir para proxima pagina
    * Caso pagina +1 for maior ou igual ao total, ele terá o valor do total
    * caso contrario, ele pegar o valor da página + 1
    */
   $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
   /**
    * Agora monta o Link paar Primeira Página
    * Depois O link para voltar uma página
    */
  /**
    * Agora monta o Link para Próxima Página
    * Depois O link para Última Página
    */
    ?>
	
	
        <?php
        echo "<a class='btn' href='/produtos/linha/".$pgb."/_pagina/1' > << </a> ";
		
        echo "<a class='btn' href='/produtos/linha/".$pgb."/_pagina/".$anterior."' > < </a>";
    ?>
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)	
        echo "<a class='btn' href='/produtos/linha/".$pgb."/_pagina/".$i."' > ".$i." </a>";
  }

   echo "<a class='btn' href='/produtos/linha/".$pgb."/_pagina/".$pagina."' style='box-shadow: none; background-color: #ee3131;  color: #fff;'>  ".$pagina."  </a>";

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
	
        echo "<a  class='btn' href='/produtos/linha/".$pgb."/_pagina/".$i."' > ".$i." </a>";
  }

   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */

    ?>
    <?php
        echo "<a  class='btn' href='/produtos/linha/".$pgb."/_pagina/".$posterior."' > > </a>";
	
        echo "<a  class='btn' href='/produtos/linha/".$pgb."/_pagina/".$totalPagina."' > >> </a>";
    ?>
		


 
										</div>

                                        </div>
                                        <?php }?>
                    </div>


                </div>    

</div>
                            
                          