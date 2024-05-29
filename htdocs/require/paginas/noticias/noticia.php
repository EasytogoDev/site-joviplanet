<?php
 
 
$pgb = $_GET['pgb'];

$sql = " SELECT 
codigoPOST, tituloPOST, slugPOST, videoPOST, keyworksPOST, descriptionPOST, nomeCATEGORIA, nomeUSUARIO, cliquesPOST, mapaPOST, ativoPOST,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN conteudoenPOST
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN conteudoesPOST
ELSE conteudoPOST END AS conteudoPOST,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN dataenPOST
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN dataesPOST
ELSE dataPOST END AS dataPOST,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN imagemenPOST
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN imagemesPOST
ELSE imagemPOST END AS imagemPOST 
FROM tb081_posts 
INNER JOIN tb080_categorias ON codigoCATEGORIA = categoriaPOST
INNER JOIN tb0301_usuarios ON codigoUSUARIO = usuarioPOST
WHERE ativoPOST = 1 AND codigoPOST = '".$pgb."' ";


//Executa o SQL
$noticias_query  = mysqli_query($conexao, $sql);
//Percorre os campos da tabela
$noticias = mysqli_fetch_assoc($noticias_query);
 

?>



<!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="home.php"><?php echo $idioma['MenuHome'];?></a></li>
                    <li><a href="/noticias"><?php echo $idioma['MenuNoticias'];?></a></li>
                    <li><?php echo $noticias['tituloPOST'];?></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="content-area">
            <div class="container">
                <!-- Blog half image -->
				<h1><?php echo $noticias['tituloPOST'];?></h1>
				
				<div class="row">
                    
                    <?php if($noticias['imagemPOST']!=''){?>
                        <div class="col-lg-6 col-md-6 col-sm-6"> 
                            <img src="<?php echo $noticias['imagemPOST'];?>" alt="">
                        </div>
                    <?php }?>
                
                        

                        <?php if($noticias['mapaPOST']!=''){?>
                
                        <div class="col-lg-6 col-md-6 col-sm-6">
                    
                            

                            <iframe src="<?php echo $noticias['mapaPOST'];?>" width="600" height="410" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                        </div>  
                        <?php } ?>

                        <?php if($noticias['dataPOST']!=''){?>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3 class="l33"><?php echo $idioma['TituloData&Hora'];?></h3>
                                <p class="l34"><?php echo $noticias['dataPOST'];?></p>
                            </div>
                            
                        <?php }?>
                    
                        <div class="col-lg-12 col-md-12 col-sm-12 m-t50">
                            <?php echo $noticias['conteudoPOST'];?>
                        </div>

                        <?php if($noticias['videoPOST']!=''){?>
                         
                            <div class="col-lg-12 col-md-12 col-sm-12 m-t50">
                            <iframe width="100%" height="400" src="<?php echo $noticias['videoPOST'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div> 

                        <?php } ?>

                    </div>
                    
				
				
				</div>
				
				
				</div>
        </div>