<!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="home.php"><?php echo $idioma['MenuHome'];?></a></li>
                    <li><?php echo $idioma['MenuNoticias'];?></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <!-- Blog half image -->
                



<?php

//A quantidade de valor a ser exibida
$quantidade = 5;
//a pagina atual
// $pagina     = (isset($pgc)) ? (int)$pgc : 1;

if($pga=='_pagina'){

//verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
$pagina = (isset($pgb))? $pgb : 1;


}else{

$pagina = 1;

}


//Calcula a pagina de qual valor será exibido
$inicio     = ($quantidade * $pagina) - $quantidade;

//Monta o SQL com LIMIT para exibição dos dados  



$sql = " SELECT 
codigoPOST, tituloPOST, slugPOST, videoPOST, keyworksPOST, descriptionPOST, nomeCATEGORIA, 
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN imagemenPOST
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN imagemesPOST 
ELSE imagemPOST END AS imagemPOST,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN conteudoenPOST
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN conteudoesPOST 
ELSE conteudoPOST END AS conteudoPOST,
nomeUSUARIO, dataPOST, cliquesPOST, ativoPOST 
FROM tb081_posts 
INNER JOIN tb080_categorias ON codigoCATEGORIA = categoriaPOST
INNER JOIN tb0301_usuarios ON codigoUSUARIO = usuarioPOST
WHERE ativoPOST = 1
ORDER BY dataPOST DESC LIMIT ".$inicio.",".$quantidade;




//Executa o SQL
$noticias_query  = mysqli_query($conexao, $sql);
//Percorre os campos da tabela
while($noticias = mysqli_fetch_assoc($noticias_query)){

$url = "/noticias/post/".$noticias['codigoPOST']."/".$noticias['slugPOST'];

?>





                <div class="blog-post blog-md clearfix date-style-2">
                    <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="<?php echo $url;?>"><img src="<?php if($noticias['imagemPOST']==''){ echo '/images/blog/grid/pic1.jpg';} else{ echo $noticias['imagemPOST'];}?>" alt=""></a> </div>
                    <div class="dlab-post-info">
                        <div class="dlab-post-title ">
                            <h3 class="post-title"><a href="<?php echo $url;?>"><?php echo $noticias['tituloPOST'];?></a></h3>
                        </div>
                        <!--<div class="dlab-post-meta ">
                            <ul>
                                <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span>
                                        2022</span> </li>
                            </ul>
                        </div>-->
                        <div class="dlab-post-text">
                            <p><?php echo(strip_tags(limitarTexto($noticias['conteudoPOST'], $limite = 500)));?></p>
                        </div>
                        <div class="dlab-post-readmore"> 
                            <a href="<?php echo $url;?>" title="READ MORE" rel="bookmark" class="site-button-link"><?php echo $idioma['TituloSaibaMais']?><i class="fas fa-angle-double-right"></i></a> 
                        </div>
                        <!--<div class="dlab-post-tags">
                            <div class="post-tags"> <a href="<?php echo $url;?>"><?php echo $noticias['nomeCATEGORIA'];?> </a>  </div>
                        </div>-->
                    </div>
                </div>
				
				
	<?php }?>

			
		 
                <!-- Blog half image END -->
                <!-- Pagination  -->
                <div class="pagination-bx clearfix m-b30">
                    <ul class="pagination">
					
					<?php
  /**
   * SEGUNDA PARTE DA PAGINAÇÃO
   */
  //SQL para saber o total
  $sqlTotal   = "SELECT * FROM tb081_posts 
INNER JOIN tb080_categorias ON codigoCATEGORIA = categoriaPOST
INNER JOIN tb0301_usuarios ON codigoUSUARIO = usuarioPOST
WHERE ativoPOST = 1
ORDER BY dataPOST DESC ";
  //Executa o SQL
  $qrTotal    = mysqli_query($conexao, $sqlTotal);
  //Total de Registro na tabela
  $numTotal   = mysqli_num_rows($qrTotal);
  //O calculo do Total de página ser exibido
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
        echo ' <li class="previous"><a href="/noticias/_pagina/1"><i class="fas fa-angle-double-left"></i></a></li>';
		 echo ' <li class="previous"><a href="/noticia/_pagina/"><i class="fas fa-angle-left"></i></a></li>'; 
    ?>
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)	
        echo '<li><a href="/noticias/_pagina/'.$i.'" > '.$i.' </a></li>';
  }

   echo '<li  class="active"><a class="btn" href="/noticias/_pagina/'.$pagina.'" style="box-shadow: none; background-color: #ee3131;  color: #fff; margin-top: -8px;">  '.$pagina.'  </a></li>';

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
	
        echo '<li><a  class="bt" href="/noticias/_pagina/'.$i.'" > '.$i.' </a></li>';
  }

   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */

    ?>
    <?php 
		
        echo '<li class="next"><a href="/noticias/_pagina/'.$posterior.'"><i class="fas fa-angle-right"></i></a></li>';
	
        echo '<li class="next"><a href="/noticias/_pagina/'.$totalPagina.'"><i class="fas fa-angle-double-right"></i></a></li>';
    ?>
  
                        
                    </ul>
                </div>
                <!-- Pagination END -->
            </div>
        </div>