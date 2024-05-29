<?php
$query_produtos = mysqli_query($conexao, "SELECT 
codigoPRODUTO, 
codPRODUTO, 
linhaPRODUTO, 
sulfixoPRODUTO,
partnumberPRODUTO,
originalPRODUTO, 
especificacaoPRODUTO,
aplicacaoPRODUTO, 
imagemPRODUTO, 
modeloPRODUTO, 
fabricanteoriginalPRODUTO, 
embalagemPRODUTO, 
ean13PRODUTO, 
quantidadePRODUTO, 
unidadePRODUTO, 
barrasPRODUTO, 
ncmPRODUTO, 
alturaPRODUTO, 
larguraPRODUTO, 
comprimentoPRODUTO, 
cubagemPRODUTO, 
pesoliquidoPRODUTO, 
pesobrutoPRODUTO, 
dataPRODUTO, 
lancamentoPRODUTO, 
ativoPRODUTO, 
nomeCATEGORIA, 
codigoIMAGEMPRODUTO,
 CASE 
 WHEN '".$_SESSION['idiomasite']."' = 'en' THEN descricaoenPRODUTO
 WHEN '".$_SESSION['idiomasite']."' = 'es' THEN descricaoesPRODUTO
 ELSE descricaoPRODUTO END AS descricaoPRODUTO, 

 CASE 
 WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPRODUTO
 WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPRODUTO
 ELSE slugPRODUTO END AS slugPRODUTO

FROM tb0015_produtos 
INNER JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
INNER JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO  
LEFT JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
WHERE ativoPRODUTO='1' AND codigoPRODUTO='".$pgb."' 
");
							 
$produtos = mysqli_fetch_assoc($query_produtos);
								
?>


<div class="page-content bg-white">
        <!-- inner page banner -->
			<div class="dlab-bnr-inr overlay-black-middle hidden-sm-down" style="background-image:url(/images/banner/produtos.png);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white"><?php echo $idioma['MenuProdutos'];?></h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/"><?php echo $idioma['MenuHome'];?></a></li>
                    <li><a href="/<?php echo $idioma['urlProdutos'] ?>"><?php echo $idioma['MenuProdutos'];?></a></li>
                    <li><?php echo $produtos['sulfixoPRODUTO'];?> <?php echo $produtos['partnumberPRODUTO'];?></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner bg-white">
            <!-- Product details -->
            <div class="container woo-entry">
                <div class="row m-b30">
					<div class="col-lg-5 col-md-5">
						<div class="product-gallery on-show-slider"> 
							<div id="sync1" class="owl-carousel owl-theme owl-btn-center-lr m-b5 owl-btn-1 primary">
								
                                
                                <!--IMAGENS GRANDE-->
                                <?php
$query_Imagens_grandes = mysqli_query($conexao, "SELECT codigoIMAGEMPRODUTO
FROM  tb0019_imagens_produtos
WHERE ativoIMAGEMPRODUTO='1' AND produtoIMAGEMPRODUTO = ".$produtos['codigoPRODUTO']." 
ORDER BY padraoIMAGEMPRODUTO DESC, ordemIMAGEMPRODUTO  ASC
");
							  
while($Imagens_grandes = mysqli_fetch_assoc($query_Imagens_grandes)){							
?>
                                <div class="item" style="    width: 476px;
                                    height: 476px;
                                    border: 0.5px #e2e2e2 solid;
                                    display: flex;
                                    align-items: center; 
                                    justify-content: center;   
                                
                                    justify-content: center;
                                    justify-items: center;
                                    align-items: center;
                                    ">
									<div class="mfp-gallery">
										<div class="dlab-box">
											<div class="dlab-thum-bx dlab-img-overlay1 ">
												<img src="/include/buscagd.php?i=<?php echo $Imagens_grandes['codigoIMAGEMPRODUTO'];?>" width="450px" height="514px" alt="">
												<div class="overlay-bx">
													<div class="overlay-icon">
														<a class="mfp-link" title="Produto: <?php echo $produtos['sulfixoPRODUTO'];?> <?php echo $produtos['partnumberPRODUTO'];?>" href="/include/buscagd.php?i=<?php echo $Imagens_grandes['codigoIMAGEMPRODUTO'];?>">
															<i class="ti-fullscreen"></i>
														</a>
												  </div>
												</div>
											</div>
										</div>
									</div>
								</div>
 
<?php } ?>

                                <!-- FIM DAS IMAGENS -->
							</div>
							
							<div id="sync2" class="owl-carousel owl-theme owl-none">
								
                                
                                <!--Imagens Pequena -->
                                <?php
$query_Imagens_pequenas = mysqli_query($conexao, "SELECT  codigoIMAGEMPRODUTO
FROM  tb0019_imagens_produtos
WHERE ativoIMAGEMPRODUTO='1' AND produtoIMAGEMPRODUTO ='".$produtos['codigoPRODUTO']."' 
ORDER BY padraoIMAGEMPRODUTO DESC, ordemIMAGEMPRODUTO  ASC
");
							 
while($Imagens_pequenas = mysqli_fetch_assoc($query_Imagens_pequenas)){
								
?>

                                <div class="item" style=" width: 125.25px;
                                    height: 125.25px;
                                    border: 0.5px #e2e2e2 solid;
                                    display: flex;
                                    align-items: center; 
                                    justify-content: center;   
                                
                                    justify-content: center;
                                    justify-items: center;
                                    align-items: center;
                                    ">
									<div class="dlab-media">
										<img src="/include/buscapq.php?i=<?php echo $Imagens_pequenas['codigoIMAGEMPRODUTO'];?>" alt="">
									</div>
								</div>
                                <?php } ?>
                                
                                <!--Imagens Pequena -->
								 
							</div>
						</div>
					</div>
					<div class="col-lg-7 col-md-7">
						<div class="sticky-top">
							<form method="post" class="cart">
								<div class="dlab-post-title ">
									<h2 class="post-title"><a href="#"><?php echo $produtos['sulfixoPRODUTO'];?> <?php echo $produtos['partnumberPRODUTO'];?></a></h2>
                                    <div class="dlab-separator-outer m-b30">
                            <div class="dlab-separator bg-primary style-skew"></div>
                        </div>
									<p class="m-b10">
                                    
                                        <div class="m-b10" style="font-size:15px;text-transform: uppercase;"> 
                                           <?php echo $produtos['descricaoPRODUTO'];?>
                                        </div>


<?php         

$query_Referencia= mysqli_query($conexao,"SELECT valorORIGINALREFERENCIA, nomeFABRICANTEORIGINAL
FROM tb0018_original_referencias
INNER JOIN tb0018_fabricante_original ON fabricanteORIGINALREFERENCIA = codigoFABRICANTEORIGINAL
WHERE produtoORIGINALREFERENCIA = '".$produtos['codigoPRODUTO']."' 
GROUP BY valorORIGINALREFERENCIA,nomeFABRICANTEORIGINAL ");
while($ref = mysqli_fetch_assoc($query_Referencia)){
?>   
 
<?php if($ref['nomeFABRICANTEORIGINAL'] != "" ) {echo $ref['nomeFABRICANTEORIGINAL'].' : ';}?> <?php echo $ref['valorORIGINALREFERENCIA'];?> <br>

<?php } ?> 

<?php         

$query_Motores= mysqli_query($conexao,"SELECT valorVINCULOESPECIFICAO, nomeESPECIFICACAO  
FROM tb0022_vinculos_especificacoes
INNER JOIN tb0021_especificacoes ON codigoESPECIFICACAO = especificaoVINCULOESPECIFICAO
 WHERE produtoVINCULOESPECIFICAO = '".$produtos['codigoPRODUTO']."' GROUP BY  valorVINCULOESPECIFICAO ");
while($motor = mysqli_fetch_assoc($query_Motores)){
    ?>   
    <?php if($motor['valorVINCULOESPECIFICAO'] != "" ) { ?><strong><?php echo $motor['nomeESPECIFICACAO'];?> : </strong> <?php echo $motor['valorVINCULOESPECIFICAO'];?>  <br><?php } ?>  
 
   <?php

}
?>
                                       
                                        <div class="dlab-divider bg-gray tb15"><i class="icon-dot c-square"></i></div>
                                        
                            <div class="m-b10"> 


                                <table>
                                <thead> 
                                    <tr style="
    background: #FF0000;
">
                                    <th style="
    height: 34px;
    padding: 10px;
    color:#FFFFFF;
"><?php echo $idioma['TituloAplicacao']?></th>
                                    <th style="
    height: 34px;
    padding: 10px;
    color:#FFFFFF;
"><?php echo $idioma['TituloANO']?></th>
                                    </tr>
                                </thead> 
                                <tbody>
                                <?php         
                                
                                $query_Montadoras= mysqli_query($conexao,"SELECT codigoMONTADORA,nomeMONTADORA  
                                FROM tb0013_montadoras 
                                INNER JOIN tb0013_montadoras_vinculos ON montadoraMONTADORAVINCULO = codigoMONTADORA
                                WHERE produtoMONTADORAVINCULO = '".$produtos['codigoPRODUTO']."' GROUP BY codigoMONTADORA, nomeMONTADORA ");
                                while($Montadoras = mysqli_fetch_assoc($query_Montadoras)){

?>
                                    <?php if($Montadoras['nomeMONTADORA']!="-"){?> <tr>
                                    <td colspan="2" style="color: #0037ff;"><?php echo $Montadoras['nomeMONTADORA'];?> </td>
                                    
                                    </tr>
                                    <?php }?> 
                                    <?php


                                        $query_Carros = mysqli_query($conexao,"SELECT nomeVEICULO, anoVEICULO 
                                        FROM tb0014_veiculos 
                                        INNER JOIN tb0014_veiculos_vinculo ON codigoVEICULO = veiculoVEICULOVINCULO                                         
                                        WHERE produtoVEICULOVINCULO = '".$produtos['codigoPRODUTO']."' AND montadoraVEICULO = '".$Montadoras['codigoMONTADORA']."' 
                                         GROUP BY nomeVEICULO, anoVEICULO 
                                        ");
                                        while($Carros = mysqli_fetch_assoc($query_Carros)){
                                ?>   
                                   <?php if($Carros['nomeVEICULO']!="-"){?>
                                <tr>
                                    <td><?php echo $Carros['nomeVEICULO'];?> </td>
                                    <td><?php echo $Carros['anoVEICULO'];?> </td>
                                    </tr>
                                    <?php }?> 
                                <?php
                                    }

                                }
                                ?>   
                                </tbody>    

                                </table>

                                
                            </div>


								</div>
								
								
								<div class="dlab-divider bg-gray tb15"><i class="icon-dot c-square"></i></div>
								 
								
                            </form>
						</div>
					</div>
                </div>


        <div class="p-a30 bg-white m-b40"  >
            <div class="section-content">

            <h2 class="text-uppercase"><?php echo $idioma['TituloInformacoes'];?></h2>
                        <div class="dlab-separator-outer m-b30">
                            <div class="dlab-separator bg-primary style-skew"></div>
                        </div>

 
          <div class="m-b30">
									<h5><?php echo $idioma['Titulolinhasatendidas'];?></h5>
                                    <div class="dlab-divider divider-2px bg-gray-dark text-gray-dark icon-left m-b30"><i class="far fa-thumbs-up bg-gray-dark text-white"></i></div>
									<div class="btn-group product-item-color" role="group" aria-label="Basic radio toggle button group">
                                        
                                        <?php                                   
                                        $query_linha = mysqli_query($conexao,"SELECT codigoLINHA, nomeLINHA, imagemLINHA, slugLINHA, ativoLINHA
                                        FROM tb0011_linhas_vinculos
                                        INNER JOIN tb0011_linhas
                                        ON codigoLINHA = linhaLINHAVINCULO WHERE produtoLINHAVINCULO = '".$produtos['codigoPRODUTO']."' ");
                                        while($linha = mysqli_fetch_assoc($query_linha)){
                                        ?>                                    
                                        <a href="/<?php echo $idioma['urlProdutos'];?>/<?php echo $idioma['urlSubLinhas'];?>/<?php echo $linha['slugLINHA'];?>">
                                            <div>
                                                <i class="icon"><img src="<?php echo $linha['imagemLINHA'];?>" title="<?php echo $linha['nomeLINHA'];?>" alt="<?php echo $linha['nomeLINHA'];?>"  width="100" style="border-radius:50px"></i>
                                            </div>
                                        </a>
                                        
                                        <?php
                                        }
                                        ?>
								    </div>
								</div>

                                <h5><?php echo $idioma['TituloOutrasInformacoes'];?></h5>
                                    <div class="dlab-divider divider-2px bg-gray-dark text-gray-dark icon-left"><i class="far fa-info bg-gray-dark text-white"></i></div>


                                <div class="row">
                                <div class="shop-item-tage col-lg-4 col-md-4 alert alert-danger no-bg  m-r10  outline gray" style="font-size:15px;text-transform: uppercase;">
									<span style="font-size:15px;text-transform: uppercase;"><?php echo $idioma['TituloQuantidade'];?></span> 
                                    <div>
                                    <?php echo $produtos['quantidadePRODUTO'];?> <?php echo $produtos['unidadePRODUTO'];?>
                                    </div>
                                </div>
                                <br>
                                <div class="shop-item-tage col-lg-4 col-md-4  alert alert-danger no-bg  m-r10  outline gray" style="font-size:15px;text-transform: uppercase;">
									<span style="font-size:15px;text-transform: uppercase;"><?php echo $idioma['TituloCodigo'];?></span> <br><?php echo $produtos['ean13PRODUTO'];?> 
                                </div>
                                <br>

                                <div class="shop-item-tage col-lg-3 col-md-3  alert alert-danger no-bg  outline gray" style="font-size:15px;text-transform: uppercase;">
                                    <span style="font-size:15px;text-transform: uppercase;"><?php echo $idioma['TituloNcm'];?></span> <br><?php echo $produtos['ncmPRODUTO'];?> 
                                </div>

                                </div>
<br>
<div class="row">

<div class="shop-item-tage col-lg-2 col-md-2  alert alert-danger no-bg  m-r10  outline gray" style="font-size:15px;text-transform: uppercase;">
    <span style="font-size:15px;text-transform: uppercase;"><?php echo $idioma['TituloAltura'];?></span> <br><?php echo number_format($produtos['alturaPRODUTO'], 2, ',', '.');?> cm
</div>
<br>
<div class="shop-item-tage col-lg-2 col-md-2  alert alert-danger no-bg  m-r10  outline gray" style="font-size:15px;text-transform: uppercase;">
    <span style="font-size:15px;text-transform: uppercase;"><?php echo $idioma['TituloLargura'];?></span> <br><?php echo number_format($produtos['larguraPRODUTO'], 2, ',', '.');?> cm 
</div>
<br>
<div class="shop-item-tage col-lg-2 col-md-2  alert alert-danger no-bg  m-r10  outline gray" style="font-size:15px;text-transform: uppercase;">
    <span style="font-size:15px;text-transform: uppercase;"><?php echo $idioma['TituloComprimento'];?></span> <br><?php echo number_format($produtos['comprimentoPRODUTO'], 2, ',', '.');?> cm
</div>
<br>
<div class="shop-item-tage col-lg-2 col-md-2  alert alert-danger no-bg  m-r10  outline gray" style="font-size:15px;text-transform: uppercase;">
    <span style="font-size:15px;text-transform: uppercase;"><?php echo $idioma['TituloPesoLiquido'];?></span> <br><?php echo number_format($produtos['pesoliquidoPRODUTO'], 2, ',', '.');?> g
</div>
<br>
<div class="shop-item-tage col-lg-2 col-md-2  alert alert-danger no-bg  outline gray" style="font-size:15px;text-transform: uppercase;">
    <span style="font-size:15px;text-transform: uppercase;"><?php echo $idioma['TituloPesoBruto'];?></span> <br><?php echo number_format($produtos['pesobrutoPRODUTO'], 2, ',', '.');?> g
</div>
</div>
<br>
<div class="row">




                                <div class="shop-item-tage col-lg-12 col-md-12" style="font-size:15px;text-transform: uppercase;">
                                <h5><?php echo $idioma['TituloCategoria'];?></h5>
                                    <div class="dlab-divider divider-2px bg-gray-dark text-gray-dark icon-left"><i class="far fa-info bg-gray-dark text-white"></i></div>

                                        <?php 

                                        $query_categorias = mysqli_query($conexao,"SELECT codigoCATEGORIA,
                                        CASE 
                                        WHEN '".$_SESSION['idiomasite']."' = 'en' THEN nomeenCATEGORIA
                                        WHEN '".$_SESSION['idiomasite']."' = 'es' THEN nomeesCATEGORIA 
                                        ELSE nomeCATEGORIA END AS nomeCATEGORIA, 

                                        CASE 
                                        WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
                                        WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA
                                        ELSE slugCATEGORIA END AS slugCATEGORIA

                                        FROM tb0012_categorias_vinculos
                                        INNER JOIN tb0012_categorias 
                                        ON categoriaCATEGORIAVINCULO = codigoCATEGORIA
                                        WHERE produtoCATEGORIAVINCULO = '".$pgb."'
                                        ORDER BY ordemCATEGORIA ASC ");

                                        while($categorias = mysqli_fetch_assoc($query_categorias)){

                                        ?> 

                                        <a <?php if($categorias['slugCATEGORIA']==$pga){ ?> class="site-button m-r15"  <?php }else{ ?> class="site-button gray " <?php } ?>  href="/<?php echo $idioma['urlProdutos'];?>/<?php echo $idioma['urlCategoria'];?>/<?php echo $categorias['slugCATEGORIA'];?>"><?php echo $categorias['nomeCATEGORIA'];?>  </a>
                                        <?php 
                                        }

                                        ?>								

								</div>

                                </div>
                        
           <div class="m-b10">
       
           
                        </div>


                        
                        
                    </div>
                </div>

                <?php
            $query_relacionados = mysqli_query($conexao, "SELECT 
            codigoPRODUTO, 
            CONCAT(sulfixoPRODUTO,' ',partnumberPRODUTO) AS PRODUTO , 
            imagemPRODUTO, slugCATEGORIA, slugPRODUTO, nomeTIPOPRODUTORELACIONADO,codigoIMAGEMPRODUTO
            FROM tb0008_produtos_relacionados 
            INNER JOIN tb0008_tipo_produtos_relacionados ON tipoPRODUTORELACIONADO = codigoTIPOPRODUTORELACIONADO
            INNER JOIN tb0015_produtos ON codigoPRODUTO = subprodutoPRODUTORELACIONADO
            INNER JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
            INNER JOIN tb0012_categorias ON categoriaCATEGORIAVINCULO = codigoCATEGORIA             
            INNER JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
            WHERE produtoPRODUTORELACIONADO ='".$pgb."' AND ativoPRODUTO = 1 
            AND ativoCATEGORIA= 1");

            $numTotal   = mysqli_num_rows($query_relacionados);
 
                                        if($numTotal>0){
            ?>


                 <div class="p-a30 bg-white m-b30">
                    <div class="section-head inner-head">
                        <h2 class="text-uppercase"><?php echo $idioma['TituloRelacionados'];?></h2>
                    </div>
                    <div class="section-content">
                        <div class="img-carousel-content owl-carousel mfp-gallery gallery owl-btn-center-lr">

            <?php
           
            while($relacionados = mysqli_fetch_assoc($query_relacionados)){

            ?>
            <div class="item">
                <div class="ow-carousel-entry">
                    <div class="ow-entry-media dlab-img-effect">


                        <a href="/<?php echo $idioma['urlProdutos'];?>/<?php echo $relacionados['slugCATEGORIA'];?>/<?php echo $relacionados['codigoPRODUTO'];?>/<?php echo $relacionados['slugPRODUTO'];?>"><img src="/include/busca.php?i=<?php echo $relacionados['codigoIMAGEMPRODUTO'];?>" alt="">
                        <div class="ow-entry-content">
                           <div class="ow-entry-title"><a href="#"><?php echo $relacionados['PRODUTO'];?></a></div>
                           <div class="ow-entry-title"><a href="#"><?php echo $relacionados['nomeTIPOPRODUTORELACIONADO'];?></a></div>
                         <div class="ow-entry-button"></div>
                        </div>
                        </a> 
                        
                    </div>
                </div>
            </div>
            <?php
            }
            ?>

      
                    </div>
                </div>
			</div>   <?php
            }
            ?>
            <!-- Product details -->
        </div>






 












        
        <!-- contact area  END -->
</div>

