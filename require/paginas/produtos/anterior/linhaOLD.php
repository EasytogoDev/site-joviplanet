<?php 

$query_linhas = mysqli_query($conexao, "SELECT * FROM  tb0001_linhas 
									INNER JOIN tb0001_linhas_descricao ON codigoLINHA = linhaLINHADESCRICAO
									INNER JOIN tb00401_idiomas ON idiomaLINHADESCRICAO = codigoIDIOMA
									WHERE ativoLINHA='1' AND slugLINHADESCRICAO='".$pgb."' AND abreviacaoIDIOMA='".$idioma."'  ");
							 
$linhas = mysqli_fetch_assoc($query_linhas);
								
?><section id="page-title" class="page-title-parallax page-title-dark" style="padding: 70px 0px 0px; background-image: url('/images/produtos.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

			<div class="container clearfix"><div class="col_two_fifth">
				<h1><?php echo $traducao['linhas'];?> <?php echo $linhas['nomeLINHADESCRICAO'];?></h1>
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
				 
					
							
				<li><a href="/<?php echo $idioma;?>/<?php echo $traducao['ulr_home'];?>"><?php echo $traducao['home'];?></a></li>
	<li><a href="/<?php echo $idioma;?>/<?php echo $traducao['ulr_produtos'];?>"><?php echo $traducao['produtos'];?></a></li>
	<li><a href="/<?php echo $idioma;?>/<?php echo $traducao['ulr_produtos'];?>/<?php echo $traducao['ulr_linhas'];?>"><?php echo $traducao['linhas'];?></a></li>
 	<li class="active"><?php echo $linhas['nomeLINHADESCRICAO'];?></li>
	
	
	
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
				
		<div class="container clearfix">
		
		<!-- ===================== Sidebar ======================== -->
			<?php 		require_once('require/paginas/produtos/lateral.php');?>
		<!-- .sidebar end -->

					<!-- Post Content
					============================================= -->
					<div class="col_full col_last">

						<!-- Shop
						============================================= -->
						<div id="shop" class="shop product-5 clearfix">
						
						
						
<?php

    //A quantidade de valor a ser exibida
    $quantidade = 20;
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
	
	 
	
	$sql = "SELECT * FROM  tb0001_produtos 
							INNER JOIN tb0001_categorias ON codigoCATEGORIA = categoriaPRODUTO 
							INNER JOIN tb0001_vinculos ON codigoPRODUTO = produtoVINCULO
							INNER JOIN tb0001_linhas ON codigoLINHA = linhaVINCULO
							WHERE ativoPRODUTO='1' AND codigoLINHA='".$linhas['codigoLINHA']."' ORDER BY partnumberPRODUTO ASC LIMIT ".$inicio.",".$quantidade;
	
    //Executa o SQL
    $produtos_query  = mysqli_query($conexao, $sql);
    //Percorre os campos da tabela
    while($produtos = mysqli_fetch_assoc($produtos_query)){
		
		$url = "/".$idioma."/".$traducao['ulr_produtos']."/".$produtos['slugCATEGORIA']."/".$produtos['codigoPRODUTO']."/ete-".$produtos['slugPRODUTO'];
		
		?>
	
	
		<div class="product clearfix" >
		
			<div class="product-image" style="border-top-right-radius:30px;border-bottom:0px !important; border:1px solid #FF0000; min-height:98px;">
			<a href="<?php echo $url;?>"><img src="/include/produto.php?i=<?php echo $produtos['imagemPRODUTO'];?>" alt="<?php echo utf8_encode($produtos['descricaoPRODUTO']);?>"  alt="<?php echo utf8_encode($produtos['titlePRODUTO']);?>"></a>
			<a href="<?php echo $url;?>"><img src="/images/foto.png"  alt="<?php echo utf8_encode($produtos['descricaoPRODUTO']);?>"  alt="<?php echo utf8_encode($produtos['titlePRODUTO']);?>"></a>
			<?php if($produtos['lancamentoPRODUTO']=="1"){?><div class="sale-flash"><?php echo $traducao['lancamento'];?></div><?php } ?>
			<!-- <div class="product-overlay"> 
			<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span>  detalhes </span></a>
			</div> -->
			</div>
			<div class="product-desc center" style="border-bottom-left-radius:20px;border-top:0px !important;border:1px solid #FF0000; background:#FF0000;">
			<div class="product-title"><h3><a href="<?php echo $url;?>" style="color:#FFFFFF;"><?php echo $produtos['partnumberPRODUTO'];?></a></h3></div>


			</div>
		
		</div>
     <?php }?>

	</div><!-- #shop end -->
<div class="col_one_fifth "></div>
<div class="col_half topmargin col_last">
	<ul class="pagination">
							
        <?php
  /**
   * SEGUNDA PARTE DA PAGINAÇÃO
   */
  //SQL para saber o total
  $sqlTotal   = "SELECT * FROM  tb0001_produtos 
							INNER JOIN tb0001_categorias ON codigoCATEGORIA = categoriaPRODUTO 
							INNER JOIN tb0001_vinculos ON codigoPRODUTO = produtoVINCULO
							INNER JOIN tb0001_linhas ON codigoLINHA = linhaVINCULO
							WHERE ativoPRODUTO='1' AND codigoLINHA='".$linhas['codigoLINHA']."'";
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
        echo "<li><a href='/".$idioma."/".$traducao['ulr_produtos']."/".$traducao['ulr_linhas']."/".$pgb."/_pagina/1' > << </a></li>";
		
        echo "<li><a href='/".$idioma."/".$traducao['ulr_produtos']."/".$traducao['ulr_linhas']."/".$pgb."/_pagina/".$anterior."' > < </a></li>";
    ?>
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)	
        echo "<li><a href='/".$idioma."/".$traducao['ulr_produtos']."/".$traducao['ulr_linhas']."/".$pgb."/_pagina/".$i."' > ".$i." </a></li>";
  }

   echo "<li><a href='/".$idioma."/".$traducao['ulr_produtos']."/".$traducao['ulr_linhas']."/".$pgb."/_pagina/".$pagina."' style='background:#000; color:#FFF;'> <strong> ".$pagina." </strong></a></li>";

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
	
        echo "<li><a href='/".$idioma."/".$traducao['ulr_produtos']."/".$traducao['ulr_linhas']."/".$pgb."/_pagina/".$i."' > ".$i." </a></li>";
  }

   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */

    ?>
    <?php
        echo "<li><a href='/".$idioma."/".$traducao['ulr_produtos']."/".$traducao['ulr_linhas']."/".$pgb."/_pagina/".$posterior."' > > </a></li>";
	
        echo "<li><a href='/".$idioma."/".$traducao['ulr_produtos']."/".$traducao['ulr_linhas']."/".$pgb."/_pagina/".$totalPagina."' > >> </a></li>";
    ?>
						
						

							
							</ul>
					</div>	<div class="col_one_fifth ">
						
						</div><!-- .postcontent end -->
</div> 

				</div>
					 <!--GERAL FINAL COLL FULL-->
			</div> 

			

		</section><!-- #content end -->