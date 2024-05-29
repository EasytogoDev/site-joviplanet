<!-- contact area -->

<?php
$PDO = db_connect();
?>
<div class="content" >
            <!-- About Company -->
			<div class="dlab-bnr-inr overlay-black-middle hidden-sm-down" style="background-image:url(/images/banner/produtos.png);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white"><?php echo $idioma['TituloProduto'];?></h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/"><?php echo $idioma['MenuHome'];?></a></li>
                    <li><?php echo $idioma['MenuProdutos'];?></li> 
                </ul>
            </div>
        </div>




        <div class="section-full bg-white content-inner" style="background-image: url(/images/bg-img.png); background-repeat: repeat-x; background-position: left bottom -37px;">
                <div class="container">
                   
                    <div class="section-content">

<?php
 
$BuscaGrupoCategoria = $PDO->query("SELECT codigoGRUPO, 
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN nomeenGRUPO
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN nomeesGRUPO
ELSE nomeGRUPO END AS nomeGRUPO,
hexadecimalGRUPO FROM `tb0020_grupo_produtos` WHERE ativoGRUPO = 1  ORDER BY ordemGRUPO ASC "); 
$CarregaGrupoCategoria = $BuscaGrupoCategoria->fetchAll();

foreach($CarregaGrupoCategoria AS $GrupoCategoria) {	
?>

 <h2 class="text-uppercase"><?php echo utf8_encode($GrupoCategoria['nomeGRUPO']); ?></h2>
<div class="dlab-separator bg-primary" style="
    background-color: <?php echo $GrupoCategoria['hexadecimalGRUPO']; ?> !important;
"></div>
 
<div class="row"> 

        <?php

        $PDO = db_connect();
        $BuscaCategoria = $PDO->query("SELECT codigoCATEGORIA, 
        CASE 
        WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
        WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA
        ELSE slugCATEGORIA END AS slugCATEGORIA,
        CASE 
        WHEN '".$_SESSION['idiomasite']."' = 'en' THEN nomeenCATEGORIA
        WHEN '".$_SESSION['idiomasite']."' = 'es' THEN nomeesCATEGORIA
        ELSE nomeCATEGORIA END AS nomeCATEGORIA
        FROM `tb0012_categorias` 
        INNER JOIN tb0012_categorias_vinculos ON codigoCATEGORIA = categoriaCATEGORIAVINCULO
        INNER JOIN tb0015_produtos ON codigoPRODUTO = produtoCATEGORIAVINCULO
        WHERE ativoPRODUTO = 1 AND ativoCATEGORIA = 1 AND grupoCATEGORIA = '".$GrupoCategoria['codigoGRUPO']."' 
        GROUP BY codigoCATEGORIA, slugCATEGORIA,nomeCATEGORIA
        ORDER BY ordemCATEGORIA ASC "); 
        $CarregaCategoria = $BuscaCategoria->fetchAll();


        foreach($CarregaCategoria AS $Categoria) {	 

            $BuscaFotoCategoria = $PDO->query("SELECT  imagemPRODUTO, codigoPRODUTO, codigoIMAGEMPRODUTO FROM  tb0015_produtos 
            INNER JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
            INNER JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO
            INNER JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO AND padraoIMAGEMPRODUTO = 1
            WHERE ativoPRODUTO = 1 AND ativoCATEGORIA = 1 AND codigoCATEGORIA='".$Categoria['codigoCATEGORIA']."'  
            ORDER BY imagemPRODUTO ASC LIMIT 1 "); 

            $CarregaFotoCategoria = $BuscaFotoCategoria->fetchAll();


            $FotoCategoria = $CarregaFotoCategoria[0];





        ?>
        
                <div class="col-lg-3 col-md-4 col-sm-6 m-b30">
                    <a href="/<?php echo $idioma['urlProdutos'];?>/<?php echo $idioma['urlCategoria'];?>/<?php echo $Categoria['slugCATEGORIA']?>" >
                        <div class="item-box m-b10"  style="padding: 20px;height: 200px;border: 1px solid <?php echo $GrupoCategoria['hexadeximalGRUPO']; ?>;border-radius: 10px; 
                            box-shadow: 1px 1px 5px  <?php echo $GrupoCategoria['hexadeximalGRUPO']; ?>;">
                                <div class="item-img">
                                    <img src="/include/busca.php?i=<?php echo $FotoCategoria['codigoIMAGEMPRODUTO']; ?>" />
                                    <!-- <div class="item-info-in">
                                        <ul>
                            
                                            <li><i class="ti-eye"></i></li>
                                        
                                        </ul>
                                    </div> -->
                                </div>

                                <div class="item-info text-left text-black p-a10">
                                    <h6 class="item-title"> <?php echo utf8_encode($Categoria['nomeCATEGORIA']);?> </h6>
                                    
                                </div>
                        </div>
                    </a>
                </div>
    
            <?php  }  ?> 

    </div>


<?php  }  ?>                                

                    </div>


                </div>
        </div>
</div>

            
        