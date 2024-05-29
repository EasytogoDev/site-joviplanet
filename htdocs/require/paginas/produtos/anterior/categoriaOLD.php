<?php 
 
$query_grupos = mysqli_query($conexao, "SELECT * FROM  tb0001_grupos
INNER JOIN tb0001_grupos_descricao ON codigoGRUPO = grupoGRUPODESCRICAO
INNER JOIN tb00401_idiomas ON codigoIDIOMA = idiomaGRUPODESCRICAO
WHERE ativoGRUPO='1' AND slugGRUPODESCRICAO='".$pga."' AND abreviacaoIDIOMA='".$idioma."'");
							 
$grupos = mysqli_fetch_assoc($query_grupos);
								
?><section id="page-title" class="page-title-parallax page-title-dark" style="padding: 70px 0px 0px; background-image: url('/images/produtos.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">
 
			<div class="container clearfix">
				<div class="col_two_fifth"><h1><?php echo $grupos['nomeGRUPODESCRICAO'];?></h1>
				<span>&nbsp;</span> 
</div>	
<div class="col_three_fifth col_last">
	<form id="searchform" data-caption-animate="fadeInUp" data-caption-delay="200" action="/<?php echo $idioma;?>/<?php echo $traducao['ulr_produtos'];?>/<?php echo $traducao['ulr_pesquisar'];?>" method="post">

									<i class="icon"><img src="/images/icons/icon_lupa.png"></i>

	<input type="text"  name="q"  value=""  id="inputString" onkeyup="lookup(this.value);" placeholder="<?php echo $traducao['txt1'];?>"  autocomplete="off" />
	<input type="submit" class="form-trigger button animate" title="<?php echo $traducao['buscar'];?>" value="<?php echo $traducao['buscar'];?>" />
	<div id="suggestions"></div> 

	</form> 
</div>	
<ol class="breadcrumb">
	<li><a href="/<?php echo $traducao['ulr_home'];?>"><?php echo $traducao['home'];?></a></li>
	<li><a href="/<?php echo $traducao['ulr_produtos'];?>"><?php echo $traducao['produtos'];?></a></li>
	<li class="active"><?php echo $grupos['nomeGRUPODESCRICAO'];?></li>
</ol>
</div>

		</section>
		
	<!-- #page-title end --
		
	<!-- Page Sub Menu
	============================================= -->
		<?php
		require_once('require/paginas/produtos/submenu.php');
		?>
	<!-- #page-menu end -->

	<!-- Content
	============================================= -->
<section id="content">
		
		
	<div class="content-wrap">
	
	
	<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					=============================================  
					<ul class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter"><a href="#" data-filter="*">Todos Seguimentos</a></li>
						<li class=""><a href="#" data-filter=".pf-rainha-das-sete">Rainha das Sete</a></li>
						<li class=""><a href="#" data-filter=".pf-myr">MYR</a></li>
						<li class=""><a href="#" data-filter=".pf-duas-rodas">Duas Rodas</a></li>

					</ul><!-- #portfolio-filter end  

					<div class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container clearfix" style="position: relative; height: 888px;">
					
					
					<?php

    //A quantidade de valor a ser exibida
    $quantidade = 100;
    //a pagina atual
   // $pagina     = (isset($pgc)) ? (int)$pgc : 1;
	
	if($pgb=='_pagina'){
								
								//verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
							$pagina = (isset($pgc))? $pgc : 1;
								
								
							}else{
								
							$pagina = 1;
							
							}
							
							
    //Calcula a pagina de qual valor será exibido
    $inicio     = ($quantidade * $pagina) - $quantidade;

    //Monta o SQL com LIMIT para exibição dos dados  
	
	/*$sql = "SELECT * FROM tb0001_categorias 
	INNER JOIN tb0001_grupos ON codigoGRUPO=grupoCATEGORIA
	WHERE `ativoCATEGORIA`='1' AND grupoCATEGORIA='".$grupos['codigoGRUPO']."' ORDER BY codigoCATEGORIA ASC LIMIT ".$inicio.",".$quantidade;*/
	
	
		$sql = "SELECT * FROM tb0001_grupos
INNER JOIN tb0001_grupos_descricao ON codigoGRUPO = grupoGRUPODESCRICAO
INNER JOIN tb0001_categorias ON codigoGRUPO = grupoCATEGORIA
INNER JOIN tb0001_produtos ON codigoCATEGORIA = categoriaPRODUTO
INNER JOIN tb00401_idiomas ON codigoIDIOMA = idiomaGRUPODESCRICAO
WHERE ativoPRODUTO='1' 
AND ativoCATEGORIA='1' 
AND ativoGRUPO='1' 
AND abreviacaoIDIOMA='".$idioma."' 
AND grupoCATEGORIA='".$grupos['codigoGRUPO']."'
GROUP BY nomeCATEGORIA ORDER BY nomeCATEGORIA ASC LIMIT ".$inicio.",".$quantidade;
	
    //Executa o SQL
    $produtos_query  = mysqli_query($conexao, $sql) or die("ERROOOO");
    //Percorre os campos da tabela
    while($produtos = mysqli_fetch_assoc($produtos_query)){
		
		$url = "/".$idioma."/".$traducao['ulr_produtos']."/".$grupos['slugGRUPODESCRICAO']."/".$produtos['slugCATEGORIA']."/";
		
     $imagem_query  = mysqli_query($conexao, "SELECT * FROM tb0001_produtos WHERE padraocategoriaPRODUTO='1' AND categoriaPRODUTO='".$produtos['codigoCATEGORIA']."'");
     $imagem = mysqli_fetch_assoc($imagem_query);
		
		?>

<a href="<?php echo $url;?>" >
						<article class="portfolio-item pf-<?php echo $produtos['slugGRUPODESCRICAO'];?>" style="position: absolute; left: 576px; top: 0px; border:1px solid #f2f2f2;">
							<div class="portfolio-image">
								<a href="<?php echo $url;?>">
									<img src="/include/produto.php?i=<?php echo $imagem['imagemPRODUTO'];?>" 
									alt="<?php echo $produtos['nomeCATEGORIA'];?>" style="visibility: visible; opacity: 1; display: block;">
								</a>
								 
							</div>
							<div class="portfolio-overlay" data-lightbox="gallery">
									<a href="<?php echo $url;?>" class="center-icon"><i class="icon-line-ellipsis"></i></a>
								</div>
							<div class="portfolio-desc" style="text-align:center;">
								<h3><a href="<?php echo $url;?>" style="font-size:15px; text-align:center;"><?php echo utf8_encode($produtos['nomeCATEGORIA']);?></a></h3>
								<!--<span><a href="#">Media</a>, <a href="#">Icons</a></span>-->
							</div>
						</article>
						</a>
						
		
     <?php }?>				
						
						
 

					</div><!-- #portfolio end -->

				</div>

			</div>
 

						 
<div class="col_one_fifth "></div>
<div class="col_half topmargin col_last">
	<!--<ul class="pagination">
							
        <?php
  /**
   * SEGUNDA PARTE DA PAGINAÇÃO
   */
  //SQL para saber o total
  $sqlTotal   = "SELECT * FROM  tb0001_produtos INNER JOIN tb0001_categorias ON codigoCATEGORIA = categoriaPRODUTO 
	WHERE `ativoPRODUTO`='1' AND grupoCATEGORIA='".$grupos['codigoGRUPO']."'";
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
        echo "<li><a href='/produtos/".$pga."/_pagina/1' > << </a></li>";
		
        echo "<li><a href='/produtos/".$pga."/_pagina/".$anterior."' > < </a></li>";
    ?>
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)	
        echo "<li><a href='/produtos/".$pga."/_pagina/".$i."' > ".$i." </a></li>";
  }

   echo "<li><a href='/produtos/".$pga."/_pagina/".$pagina."' style='background:#000; color:#FFF;'> <strong> ".$pagina." </strong></a></li>";

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
	
        echo "<li><a href='/produtos/".$pga."/_pagina/".$i."' > ".$i." </a></li>";
  }

   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */

    ?>
    <?php
        echo "<li><a href='/produtos/".$pga."/_pagina/".$posterior."' > > </a></li>";
	
        echo "<li><a href='/produtos/".$pga."/_pagina/".$totalPagina."' > >> </a></li>";
    ?>
						
						

							
							</ul>-->
					</div>	<div class="col_one_fifth ">
						
						 

				</div>
					 <!--GERAL FINAL COLL FULL-->
			</div> 

			

		</section><!-- #content end -->