
<?php

$SqlCategorias = "SELECT nomeCATEGORIA, codigoCATEGORIA FROM tb0001_categorias WHERE slugCATEGORIA = '".$pga."';";

$queryCategoria = $PDO->prepare($SqlCategorias);
$queryCategoria->execute();


$ResultCategoria = $queryCategoria->fetchAll(PDO::FETCH_ASSOC);

$Categorias = $ResultCategoria[0];

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Real Estate Html Template">
  <meta name="author" content="">
  <meta name="generator" content="Jekyll">
  <title>Categorias: <?php echo $Categorias['nomeCATEGORIA'];?></title>
  <!-- Google fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="/vendors/fontawesome-pro-5/css/all.css">
  <link rel="stylesheet" href="/vendors/bootstrap-select/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="/vendors/slick/slick.min.css">
  <link rel="stylesheet" href="/vendors/magnific-popup/magnific-popup.min.css">
  <link rel="stylesheet" href="/vendors/jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" href="/vendors/chartjs/Chart.min.css">
  <link rel="stylesheet" href="/vendors/dropzone/css/dropzone.min.css">
  <link rel="stylesheet" href="/vendors/animate.css">
  <link rel="stylesheet" href="/vendors/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="/vendors/mapbox-gl/mapbox-gl.min.css">
  <link rel="stylesheet" href="/vendors/dataTables/jquery.dataTables.min.css">
  <!-- Themes core CSS -->
  <link rel="stylesheet" href="/css/themes.css">
  <!-- Favicons -->
  <link rel="icon" href="/images/favicon.ico">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@">
  <meta name="twitter:creator" content="@">
  <meta name="twitter:title" content="Full Width Grid 2">
  <meta name="twitter:description" content="Real Estate Html Template">
  <meta name="twitter:image" content="/images/homeid-social-logo.png">
  <!-- Facebook -->
  <meta property="og:url" content="listing-full-width-grid-2.html">
  <meta property="og:title" content="Full Width Grid 2">
  <meta property="og:description" content="Real Estate Html Template">
  <meta property="og:type" content="website">
  <meta property="og:image" content="/images/homeid-social.png">
  <meta property="og:image:type" content="/image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <?php require_once ('require/scriptshead.php'); ?>

</head>

<body>

  <div class="gtranslate_wrapper"></div>
  <style>
    #gt_float_wrapper {
      top: 75px !important;
      right: 0px !important;
      z-index: 10 !important;
    }

    .main-header .dropdown-menu {
      z-index: 20 !important;
    }
  </style>

  <?php require_once ('require/header.php'); ?>

  <section style="background-image: url('/images/Frame-17.png')"
      class="bg-img-cover-center py-10 pt-md-16 pb-md-17 bg-overlay" >

      <div class="container position-relative z-index-2">
        <div class="row">
          <div class="col-md-6">
            <div class="pb-6 page-title shadow">
              <h1 class="text-white fs-30 lh-16 mb-1 font-weight-600" data-animate="fadeInRight"><?php echo $Categorias['nomeCATEGORIA'];?>
              </h1>
             
            </div>
          </div>
        </div>
      </div>

  </section>

  <main id="content">
    
    <section class="pt-6 pb-7">
      <div class="container container-xxl">
        <div class="row align-items-sm-center">
          <div class="col-md-6">
            <h2 class="fs-15 text-dark mb-0">We found <span class="text-primary">45</span> properties
              available for
              you
            </h2>
          </div>
          <div class="col-md-6 mt-6 mt-md-0">
            <div class="d-flex justify-content-md-end align-items-center">
              <div class="input-group border rounded input-group-lg w-auto bg-white mr-3">
                <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                  for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                  data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01"
                  name="sortby">
                  <option selected>Top Selling</option>
                  <option value="1">Most Viewed</option>
                  <option value="2">Price(low to high)</option>
                  <option value="3">Price(high to low)</option>
                </select>
              </div>
              <div class="d-none d-md-block">
                <a class="fs-sm-18 text-dark opacity-2" href="listing-full-width-list.html">
                  <i class="fas fa-list"></i>
                </a>
                <a class="fs-sm-18 text-dark ml-5" href="#">
                  <i class="fa fa-th-large"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section class="pb-11"> 
      <div class="container container-xxl">
        <div class="row mx-n2">
          


            
<?php

$limite = 20;

# Se pg não existe atribui 1 a variável pg
$pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;

# Atribui a variável inicio o inicio de onde os registros vão ser
# mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
$inicio = ($pg * $limite) - $limite;

# seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
$sql_Imovel = "

  SELECT * FROM tb0031_imoveis 
  INNER JOIN tb0001_categorias ON codigoCATEGORIA = categoriaIMOVEL 
  LEFT JOIN tb0036_fotos ON codigoIMOVEL = imovelFOTO 
  WHERE ativoCATEGORIA = 1 AND ativoIMOVEL = 1 AND  categoriaIMOVEL = ".$Categorias['codigoCATEGORIA']." 

";

try {

        $query_Imovel = $PDO->prepare($sql_Imovel);
        $query_Imovel->execute();

        } catch (PDOexception $error_sql){

                echo 'Erro ao retornar os Dados.'.$error_sql->getMessage();

}

while($imovel = $query_Imovel->fetch(PDO::FETCH_ASSOC)){ 
  
  ?>



          <div class="col-xxl-3 col-lg-4 col-md-6 mb-7 px-2" data-animate="fadeInUp">
            <div class="card shadow-hover-2 zoomIn animated">
              <div class="bg-hover-overlay rounded-lg card-img">
                <img src="<?php if($imovel['imovelFOTO']==""){echo '/images/properties-grid-35.jpg';}else{echo $imovel['imovelFOTO'];}?>" alt="Home in Metric Way">
                <div class="card-img-overlay p-2 d-flex flex-column" style="background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5));">
                  <div>
                    <span class="badge mr-2" style="color: #fff; background-color: #23B0AA;">featured</span>
                  </div>
                  <?php if($imovel['disponivelIMOVEL']==0){?>
                  <div style="margin-left: 65% !important; margin-top: -7% !important;">
                    <span class="badge mr-2" style="color: #fff; background-color: #fc0324;">Indisponivel</span>
                  </div>
                  <?php } ?>
                  <div class="mt-auto d-flex hover-image">
                    <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                      <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                        <a href="#" class="text-white hover-primary">
                          <i class="far fa-images"></i><span class="pl-1">9</span>
                        </a>
                      </li>
                      <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                        <a href="#" class="text-white hover-primary">
                          <i class="far fa-play-circle"></i><span class="pl-1">2</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <p class="fs-25 font-weight-500 text-heading mb-0" style="color: #fff !important; margin-bottom: 0px !important;">$ <?php echo $imovel['valorIMOVEL'];?></p>
                  <div class="card-img-overlay p-2 d-flex flex-column" style="position: relative; background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5));">
                    <div style="position: absolute; top: 33px; right: 20px;">
                        <ul class="list-inline mb-0">

                            <!--- <?php if($imovel['imovelFAVORITO'] == "") { ?> --->

                            <li class="list-inline-item" >
                                <a href="javascript:;" onClick="FavoritoImovel('<?php echo $imovel['codigoIMOVEL'];?>')"
                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body bg-hover-accent border-hover-accent"
                                    data-toggle="tooltip" title="Wishlist"><i class="far fa-heart"></i></a>
                            </li>
                            <?php } else { ?>
                            <li class="list-inline-item">
                                <a href="javascript:;" onClick="DesFavoritoImovel('<?php echo $imovel['codigoIMOVEL'];?>')"
                                    class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body text-secondary bg-hover-accent border-hover-accent"
                                    data-toggle="tooltip" title="Remove Wishlist"><i class="fas fa-heart"></i></a>
                            </li>
                            <?php } ?>

                        </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="card-body pt-3">
                <h2 class="fs-16 mb-1"><a href="/page-final/<?php echo $imovel['codigoIMOVEL'];?>" class="text-dark hover-primary"><?php echo $imovel['tituloIMOVEL'];?></a></h2>
                <p class="font-weight-500 text-gray-light mb-1"><?php echo $imovel['numeroIMOVEL'];?> <?php echo $imovel['enderecoIMOVEL'];?>, <?php echo $imovel['cityIMOVEL'];?></p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-4" data-toggle="tooltip"
                    title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    <?php echo $imovel['quartosIMOVEL'];?> &nbsp; Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-4" data-toggle="tooltip"
                    title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    <?php echo $imovel['banheirosIMOVEL'];?> &nbsp; Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-4" data-toggle="tooltip"
                    title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13" data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    <?php echo $imovel['vagasgaragemIMOVEL'];?> &nbsp; Gr
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <?php }

?>
  
          
          </div>
          <div class="col-12 text-center mt-1">
            <a href="#"
              class="btn btn-lg btn-outline-accent text-heading shadow-none border-2x d-inline-flex align-items-center">View
              more
              <i class="fal fa-plus-circle ml-1 text-primary fs-18"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    
  </main>
  <!-- FOOTER -->

  <?php require_once ('require/footer.php'); ?>

  <!-- END FOOTER -->
  <!-- Vendors scripts -->
  <script src="/vendors/jquery.min.js"></script>
  <script src="/vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="/vendors/bootstrap/bootstrap.bundle.js"></script>
  <script src="/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="/vendors/slick/slick.min.js"></script>
  <script src="/vendors/waypoints/jquery.waypoints.min.js"></script>
  <script src="/vendors/counter/countUp.js"></script>
  <script src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="/vendors/chartjs/Chart.min.js"></script>
  <script src="/vendors/dropzone/js/dropzone.min.js"></script>
  <script src="/vendors/timepicker/bootstrap-timepicker.min.js"></script>
  <script src="/vendors/hc-sticky/hc-sticky.min.js"></script>
  <script src="/vendors/jparallax/TweenMax.min.js"></script>
  <script src="/vendors/mapbox-gl/mapbox-gl.js"></script>
  <script src="/vendors/dataTables/jquery.dataTables.min.js"></script>
  <!-- Theme scripts -->


  <script src="/js/theme.js"></script>
  <script src="https://accounts.google.com/gsi/client"></script>
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    <?php require_once ('require/login.php') ?>
    <?php require_once ('require/svg.php') ?>
   
  <div class="position-fixed pos-fixed-bottom-right p-6 z-index-10">
    <a href="#"
      class="gtf-back-to-top bg-white text-primary hover-white bg-hover-primary shadow p-0 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center"
      title="Back To Top"><i class="fal fa-arrow-up"></i></a>
  </div>
</body>

</html>