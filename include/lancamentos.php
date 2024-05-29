<?php

require_once('../painel/inc/funcao.php');
require_once('../painel/inc/config.php');

//Nova Base
require_once('../require/funcao.php');
require_once('../require/config.php');
require_once('../require/idiomas/'.$idiomasite.'.php'); 



$tipo = $_POST['tipo'];

if($tipo == 1){

    $ano = " AND dataPRODUTO >= CURDATE() - INTERVAL 365 DAY ";

?>

<p class="p-t20">
    <div id="lancamentoweb-design-3" class="section-head text-left head-style-2 wow "  > 
        <h2 class="title"><?php echo $idioma['TituloLancamentosUltimoAno'];?></h2>
        <div class="dlab-separator-outer">
            <div class="dlab-separator bg-primary"> </div>
        </div>
        
    </div> 
</p>

<?php

}else{
    
    $ano = " AND dataPRODUTO <= CURDATE() - INTERVAL 365 DAY ";
?>

<!-- <p class="p-t20">
    <div id="lancamentoanterioresweb-design-3" class="section-head text-left head-style-2 wow "  > 
        <h2 class="title"><?php echo $idioma['TituloLancamentosAnosAnteriores'];?></h2>
        <div class="dlab-separator-outer">
            <div class="dlab-separator bg-primary"> </div>
        </div>
        
    </div> 
</p> -->


<?php
}

?>
					
<div class="section-content">


<div class="img-carousel-content owl-carousel mfp-gallery gallery owl-btn-center-lr">

        <?php

                $sql = " SELECT codigoPRODUTO,
                CASE 
                WHEN '".$_SESSION['idiomasite']."' = 'en' THEN nomeenCATEGORIA
                WHEN '".$_SESSION['idiomasite']."' = 'es' THEN nomeesCATEGORIA
                ELSE nomeCATEGORIA END AS nomeCATEGORIA,
                CASE 
                WHEN '".$_SESSION['idiomasite']."' = 'en' THEN descricaoenPRODUTO
                WHEN '".$_SESSION['idiomasite']."' = 'es' THEN descricaoesPRODUTO
                ELSE descricaoPRODUTO END AS descricaoPRODUTO,
                CASE 
                WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
                WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA
                ELSE slugCATEGORIA END AS slugCATEGORIA,
                CASE 
                WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPRODUTO
                WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPRODUTO
                ELSE slugPRODUTO END AS slugPRODUTO,
                sulfixoPRODUTO,partnumberPRODUTO,codigoIMAGEMPRODUTO, nomeGRUPO
                FROM  tb0015_produtos 
                INNER JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
                INNER JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO
                INNER JOIN tb0020_grupo_produtos ON codigoGRUPO = grupoCATEGORIA
                INNER JOIN tb0019_imagens_produtos ON codigoPRODUTO = produtoIMAGEMPRODUTO
                WHERE ativoPRODUTO = 1 AND lancamentoPRODUTO = '1' AND padraoIMAGEMPRODUTO = 1
                ".$ano."

                ORDER BY codigoPRODUTO DESC
                LIMIT 20";
                
                "SELECT * FROM tb0012_categorias
                INNER JOIN tb0020_grupo_produtos ON codigoGRUPO = grupoCATEGORIA
                WHERE ativoCATEGORIA = 1;
                "; 
                
                //Executa o SQL
                $produtos_query  = mysqli_query($conexao, $sql);
                //Percorre os campos da tabela
                while($produtos = mysqli_fetch_assoc($produtos_query)){

                $url = "/".$idioma['urlProdutos']."/".$produtos['slugCATEGORIA']."/".$produtos['codigoPRODUTO']."/ete-".$produtos['slugPRODUTO'];

        ?> 

        <div class="item ">
            <div class="ow-carousel-entry lancamento-box">

                <div class="ow-entry-content">
                    
                <div class="ow-entry-title">
                        <a href="<?php echo $url;?>" style="text-transform:uppercase; font-size:14px"> <?php echo $produtos['nomeGRUPO'];?> </a>
                    </div>

                </div>

                <div class=" ow-entry-media dlab-img-effect zoom-slow foto-lancamento" > 
                    <a href="<?php echo $url;?>">
                    <img src="/include/busca.php?i=<?php echo $produtos['codigoIMAGEMPRODUTO'];?>" alt="<?php echo $produtos['sulfixoPRODUTO'];?> 
                    <?php echo $produtos['partnumberPRODUTO'];?>" title="<?php echo $produtos['sulfixoPRODUTO'];?> <?php echo $produtos['partnumberPRODUTO'];?>">
                </a>
                </div>

                <div class="lancamento-info-in" > 
                    <a href="<?php echo $url;?>">
                        <h6 class="item-title-lancamento"><strong> <?php echo $produtos['sulfixoPRODUTO'];?> <?php echo $produtos['partnumberPRODUTO'];?> </strong></h6>
                        <p class="item-description-lancamento"><?php echo $produtos['descricaoPRODUTO'];?>  </p>
                    </a>
                </div>

            </div>
        </div>


        <?php } ?>
</div>
</div>