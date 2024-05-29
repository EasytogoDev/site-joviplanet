<?php
 
# seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
$sql_Imovel = "SELECT * FROM tb0031_imoveis 
INNER JOIN tb0001_categorias ON codigoCATEGORIA = categoriaIMOVEL 
LEFT JOIN tb0036_fotos ON codigoIMOVEL = imovelFOTO 
LEFT JOIN tb0034_reservas ON codigoIMOVEL = imovelRESERVA
LEFT JOIN tb0035_tipoimovel ON codigoTIPOIMOVEL = tipoIMOVEL
LEFT JOIN tb0180_imobiliaria ON codigoIMOBILIARIA = imobiliariaIMOVEL
LEFT JOIN tb0181_agentes ON codigoAGENTE = agenteIMOVEL
WHERE   ativoCATEGORIA = 1 AND 
  ativoIMOVEL = 1 AND 
   codigoIMOVEL = '".$pga."' ";

try {

        $query_Imovel = $PDO->prepare($sql_Imovel);
        $query_Imovel->execute();

        } catch (PDOexception $error_sql){

                echo 'Erro ao retornar os Dados.'.$error_sql->getMessage();

}

$imovel = $query_Imovel->fetch(PDO::FETCH_ASSOC);
  
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Real Estate Html Template">
  <meta name="author" content="">
  <meta name="generator" content="Jekyll">
  <title><?php echo $imovel['tituloIMOVEL'];?> - Joviplanet &#8211; Buy, Rent &amp; Vacation</title>
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


  <link rel='stylesheet' type='text/css' href='/css/full-mini-calendar.css' />



  <!-- Themes core CSS -->
  <link rel="stylesheet" href="/css/themes.css">
  <!-- Favicons -->
  <link rel="icon" href="/images/favicon.ico">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@">
  <meta name="twitter:creator" content="@">
  <meta name="twitter:title" content="Home 01">
  <meta name="twitter:description" content="Real Estate Html Template">
  <meta name="twitter:image" content="images/homeid-social-logo.png">
  <!-- Facebook -->
  <meta property="og:url" content="/home-01.html">
  <meta property="og:title" content="Home 01">
  <meta property="og:description" content="Real Estate Html Template">
  <meta property="og:type" content="website">
  <meta property="og:image" content="/images/homeid-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">


  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .share-button {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .share-button i {
            margin-right: 5px;
        }
        .facebook { background-color: #3b5998; }
        .x { background-color: #000000; } 
        .linkedin { background-color: #0077b5; }
        .whatsapp { background-color: #25d366; }
        .email { background-color: #ea4335; }
        .share-button:hover {
            opacity: 0.8;
        }
        /* Estilos para o modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group button {
            padding: 10px 20px;
            color: white;
            background-color: #ba824f;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #218838;
        }
    </style>

  <?php require_once ('require/scriptshead.php'); ?>

  <style>
    #gt_float_wrapper {
      top: 75px !important;
      right: 0px !important;
      z-index: 10 !important;
    }

    .main-header .dropdown-menu {
      z-index: 20 !important;
    }

    #calendar {width:239px;margin:40px auto;}

    
  </style>
</head>

<body>



  <?php require_once ('require/header.php'); ?>

  <main id="content">
    <section>
      <div class="row galleries m-n1">
        <div class="col-lg-6 p-1">
          <div class="item item-size-4-3">
            <div class="card p-0 hover-zoom-in">
              <a href="/images/single-property-lg-1.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="01"
                style="background-image:url('/images/single-property-2.jpg')">
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 p-1">
          <div class="row m-n1">
            <div class="col-md-6 p-1">
              <div class="item item-size-4-3">
                <div class="card p-0 hover-zoom-in">
                  <a href="/images/single-property-lg-2.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="01"
                    style="background-image:url('/images/single-property-22.jpg')">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 p-1">
              <div class="item item-size-4-3">
                <div class="card p-0 hover-zoom-in">
                  <a href="/images/single-property-lg-3.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="01"
                    style="background-image:url('/images/single-property-3.jpg')">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 p-1">
              <div class="item item-size-4-3">
                <div class="card p-0 hover-zoom-in">
                  <a href="/images/single-property-lg-4.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="01"
                    style="background-image:url('/images/single-property-4.jpg')">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 p-1">
              <div class="item item-size-4-3">
                <div class="card p-0 hover-zoom-in">
                  <a href="/images/single-property-lg-5.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="01"
                    style="background-image:url('/images/single-property-5.jpg')">
                  </a>
                  <a href="#"
                    class="card-img-overlay d-flex flex-column align-items-center justify-content-center hover-image bg-dark-opacity-04">
                    <p class="fs-48 font-weight-600 text-white lh-1 mb-4">+12</p>
                    <p class="fs-16 font-weight-bold text-white lh-1625 text-uppercase">View
                      more</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>
    
    <div class="container-fluid">
        <!-- <div class="position-relative" data-animate="zoomIn">
          <div class="position-absolute pos-fixed-top-right z-index-3">
            <ul class="list-inline pt-4 pr-5">
              <li class="list-inline-item mr-2">
                <a href="#" data-toggle="tooltip" title="Favourite"
                  class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle">
                  <i class="far fa-heart"></i></a>
              </li>
              <li class="list-inline-item mr-2">
                <button type="button"
                  class="btn btn-white p-0 d-flex align-items-center justify-content-center w-40px h-40 text-heading bg-hover-primary hover-white rounded-circle border-0 shadow-none"
                  data-container="body" data-toggle="popover" data-placement="top" data-html="true" data-content=' <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                      <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                        class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item ">
                      <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                        class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                        class="fab fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-muted fs-15 hover-dark lh-1 px-2"><i
                                                        class="fab fa-youtube"></i></a>
                    </li>
                  </ul>
                  '>
                  <i class="far fa-share-alt"></i>
                </button>
              </li>
              <li class="list-inline-item">
                <a href="#" data-toggle="tooltip" title="Print"
                  class="d-flex align-items-center justify-content-center w-40px h-40 bg-white text-heading bg-hover-primary hover-white rounded-circle">
                  <i class="far fa-print"></i>
                </a>
              </li>
            </ul>
          </div> -->

    <div class="primary-content pt-8">
      <div class="container">
        <div class="row">
          <article class="col-lg-8 pr-xl-7">
            <section class="pb-7 border-bottom">
              <ul class="list-inline d-sm-flex align-items-sm-center mb-2">
              <li class="list-inline-item badge badge-primary mr-2" style="cursor:pointer" onclick="window.history.back();">Voltar</li>
              <?php if($imovel['destaqueIMOVEL']!="0"){ ?>
                <li class="list-inline-item badge badge-orange mr-2"><?php if($imovel['destaqueIMOVEL']==1){echo 'Destaque';}?></li>
              <?php }?>
                <li class="list-inline-item badge badge-primary mr-3"><?php if($imovel['tipoIMOVEL']==1){echo 'Compras';} else if($imovel['tipoIMOVEL']==2){echo 'Arrendar';} else{echo 'Ferias';} ?></li>
                <li class="list-inline-item mr-2 mt-2 mt-sm-0"><i class="fal fa-clock mr-1"></i>2 months ago
                </li>
                <li class="list-inline-item mt-2 mt-sm-0"><i class="fal fa-eye mr-1"></i><?php echo $imovel['visualizacaoIMOVEL'];?></li>
              </ul>
              <div class="d-sm-flex justify-content-sm-between">
                <div>
                  <h2 class="fs-35 font-weight-600 lh-15 text-heading"><?php echo $imovel['tituloIMOVEL'];?></h2>
                  <p class="mb-0"><i class="fal fa-map-marker-alt mr-2"></i><?php echo $imovel['numeroIMOVEL'];?>,&nbsp; <?php echo $imovel['enderecoIMOVEL'];?>, &nbsp; <?php echo $imovel['cityIMOVEL'];?></p>
                </div>
              </div>
            </section>
            <section class="pt-6 border-bottom">
              <h4 class="fs-22 text-heading mb-6">Facts and Features</h4>
              <div class="row">
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-family fs-32 text-primary">
                        <use xlink:href="#icon-family"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Type</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading"><?php if($imovel['tipoIMOVEL']==1){echo 'Compras';} else if($imovel['tipoIMOVEL']==2){echo 'Arrendar';} else{echo 'Ferias';} ?></p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-year fs-32 text-primary">
                        <use xlink:href="#icon-year"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">year built</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading">2020</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-heating fs-32 text-primary">
                        <use xlink:href="#icon-heating"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">heating</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading"><?php echo $imovel['arcondicionadoIMOVEL'];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-price fs-32 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">SQFT</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading"><?php echo $imovel['metragemIMOVEL'];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-bedroom fs-32 text-primary">
                        <use xlink:href="#icon-bedroom"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Bedrooms</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading"><?php echo $imovel['quartosIMOVEL'];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-sofa fs-32 text-primary">
                        <use xlink:href="#icon-sofa"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">bathrooms</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading"><?php echo $imovel['banheirosIMOVEL'];?></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-Garage fs-32 text-primary">
                        <use xlink:href="#icon-Garage"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">GARAGE</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading"><?php echo $imovel['vagasgaragemIMOVEL'];?></p>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-4 mb-6">
                  <div class="media">
                    <div class="p-2 shadow-xxs-1 rounded-lg mr-2">
                      <svg class="icon icon-status fs-32 text-primary">
                        <use xlink:href="#icon-status"></use>
                      </svg>
                    </div>
                    <div class="media-body">
                      <h5 class="my-1 fs-14 text-uppercase letter-spacing-093 font-weight-normal">Status</h5>
                      <p class="mb-0 fs-13 font-weight-bold text-heading"><?php echo $imovel['statusIMOVEL'];?></p>
                    </div>
                  </div>
                </div> -->
              </div>
            </section>
            <!------------>
            <section class="pt-6 border-bottom pb-4">
              <!-------------------------->
            <h4 class="fs-22 text-heading mt-6 mb-2">Description</h4>
              <p class="mb-0 lh-214"><?php echo $imovel['descricaoIMOVEL'];?></p>
                <br>
<!----------------------------------------------------------------------------------------------->
              <h4 class="fs-22 text-heading mb-4">Additional Details</h4>
              <div class="row">

              <?php if($imovel['idIMOVEL']!=""){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property ID</dt>
                  <dd><?php echo $imovel['idIMOVEL'];?></dd>
                </dl>
                <?php } ?>
                

                <?php if($imovel['valorIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-price fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Price</dt>
                  <dd><?php echo $imovel['valorIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property type</dt>
                  <dd><?php if($imovel['tipoIMOVEL']==1){echo 'Compras';} else if($imovel['tipoIMOVEL']==2){echo 'Arrendar';} else{echo 'Ferias';} ?></dd>
                </dl>

                <?php if($imovel['categoriaIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Property status</dt>
                  <dd><?php echo $imovel['categoriaIMOVEL'];?></dd>
                </dl>
            <?php } ?>

                <?php if($imovel['quartosIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Rooms</dt>
                  <dd><?php echo $imovel['quartosIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['solteirocamasIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bedrooms solo</dt>
                  <dd><?php echo $imovel['solteirocamasIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['casalcamasIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bedrooms dual</dt>
                  <dd><?php echo $imovel['casalcamasIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['metragemIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Size</dt>
                  <dd><?php echo $imovel['metragemIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['tipometragemIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Type of area</dt>
                  <dd><?php echo $imovel['tipometragemIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['banheirosIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Bathrooms</dt>
                  <dd><?php echo $imovel['banheirosIMOVEL'];?></dd>
                </dl>
                <?php } ?>
                
                <?php if($imovel['vagasgaragemIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Garage</dt>
                  <dd><?php echo $imovel['vagasgaragemIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['wifiIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Wifi</dt>
                  <dd><?php echo $imovel['wifiIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['closetIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Closet</dt>
                  <dd><?php echo $imovel['closetIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['arcondicionadoIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Air Conditioning</dt>
                  <dd><?php echo $imovel['arcondicionadoIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['lavanderiaIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Laundry</dt>
                  <dd><?php echo $imovel['lavanderiaIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['fumarIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Smokin Allowed</dt>
                  <dd><?php echo $imovel['fumarIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                
                <?php if($imovel['salaodejogosIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Games Room</dt>
                  <dd><?php echo $imovel['salaodejogosIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['playgroundIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Playground</dt>
                  <dd><?php echo $imovel['playgroundIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['portariaIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Building Entrance</dt>
                  <dd><?php echo $imovel['portariaIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['proximoaometroIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Close to the subway</dt>
                  <dd><?php echo $imovel['proximoaometroIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['elevadorIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Elevator</dt>
                  <dd><?php echo $imovel['elevadorIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['poraoIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Basement</dt>
                  <dd><?php echo $imovel['poraoIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['quadraesportivaIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Sports court</dt>
                  <dd><?php echo $imovel['quadraesportivaIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['festaIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Party</dt>
                  <dd><?php echo $imovel['festaIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['academiaIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Gym</dt>
                  <dd><?php echo $imovel['academiaIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['saunaIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Steam Room</dt>
                  <dd><?php echo $imovel['saunaIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['petsIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Pets Allowed</dt>
                  <dd><?php echo $imovel['petsIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['regrasadicionaisIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Additional Rules</dt>
                  <dd><?php echo $imovel['regrasadicionaisIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['coberturaIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Roofing</dt>
                  <dd><?php echo $imovel['coberturaIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['extraIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Exterior Material</dt>
                  <dd><?php echo $imovel['extraIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['floorIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Floors</dt>
                  <dd><?php echo $imovel['floorIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['sotaoIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Attic</dt>
                  <dd><?php echo $imovel['sotaoIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['quadrabasqueteIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Basketball court</dt>
                  <dd><?php echo $imovel['quadrabasqueteIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['porteiroIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Doorman</dt>
                  <dd><?php echo $imovel['porteiroIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['jardimdefrenteIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Front yard</dt>
                  <dd><?php echo $imovel['jardimdefrenteIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['vistadolagoIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Lake view</dt>
                  <dd><?php echo $imovel['vistadolagoIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['vistadomarIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Ocean view</dt>
                  <dd><?php echo $imovel['vistadomarIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['espacoprivadoIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Private space</dt>
                  <dd><?php echo $imovel['espacoprivadoIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['sprinklersIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Sprinklers</dt>
                  <dd><?php echo $imovel['sprinklersIMOVEL'];?></dd>
                </dl>
                <?php } ?>

                <?php if($imovel['adegaIMOVEL']>0){ ?>
                <dl class="col-sm-6 mb-0 d-flex">
                <svg class="icon icon-type fs-20 mr-1 text-primary">
                        <use xlink:href="#icon-price"></use>
                      </svg>
                  <dt class="w-110px fs-14 font-weight-500 text-heading pr-2">Wine cellar</dt>
                  <dd><?php echo $imovel['adegaIMOVEL'];?></dd>
                </dl>
                <?php } ?>




              </div>
            </section>
            <!-- <section class="pt-6 border-bottom pb-4">
              <h4 class="fs-22 text-heading mb-4">Offices Amenities</h4>
              <ul class="list-unstyled mb-0 row no-gutters">
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Balcony
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Fireplace
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Basement
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Cooling
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dining room
                </li>
                <li class="col-sm-3 col-6 mb-2"><i class="far fa-check mr-2 text-primary"></i>Dishwasher
                </li>
              </ul>
            </section> -->
            
            <!-- <section class="py-6">
              <h4 class="fs-22 text-heading mb-6">Floor Plans</h4>
              <div class="accordion accordion-03 mb-3" id="accordion-01">
                <div class="card border-0 shadow-xxs-2">
                  <div class="card-header bg-gray-01 border-gray border-0 p-0" id="floor-plans-01">
                    <div class="heading d-flex justify-content-between align-items-center px-6" data-toggle="collapse"
                      data-target="#collapse-01" aria-expanded="true" aria-controls="collapse-01" role="button">
                      <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">First Floor</h2>
                      <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                        <li class=" list-inline-item text-muted mr-4">Beds : <span
                            class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Bath : <span
                            class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Sqft : <span
                            class="font-weight-500 text-heading">900</span></li>
                      </ul>
                    </div>
                  </div>
                  <div id="collapse-01" class="collapse show" aria-labelledby="floor-plans-01"
                    data-parent="#accordion-01">
                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3">
                      <img src="/images/single-detail-property-01.jpg" class="card-img" alt="Floor Plans">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion accordion-03 mb-3" id="accordion-02">
                <div class="card border-0 shadow-xxs-2">
                  <div class="card-header bg-gray-01 border-gray border-0 p-0" id="floor-plans-02">
                    <div class="heading d-flex justify-content-between align-items-center px-6 collapsed "
                      data-toggle="collapse" data-target="#collapse-02" aria-expanded="true" aria-controls="collapse-02"
                      role="button">
                      <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">Second Floor</h2>
                      <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                        <li class=" list-inline-item text-muted mr-4">Beds : <span
                            class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Bath : <span
                            class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Sqft : <span
                            class="font-weight-500 text-heading">900</span></li>
                      </ul>
                    </div>
                  </div>
                  <div id="collapse-02" class="collapse " aria-labelledby="floor-plans-02" data-parent="#accordion-02">
                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3">
                      <img src="/images/single-detail-property-01.jpg" class="card-img" alt="Floor Plans">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion accordion-03 mb-3" id="accordion-03">
                <div class="card border-0 shadow-xxs-2">
                  <div class="card-header bg-gray-01 border-gray border-0 p-0" id="floor-plans-03">
                    <div class="heading d-flex justify-content-between align-items-center px-6 collapsed "
                      data-toggle="collapse" data-target="#collapse-03" aria-expanded="true" aria-controls="collapse-03"
                      role="button">
                      <h2 class="mb-0 fs-16 text-heading font-weight-500 py-4 lh-13">Third Floor</h2>
                      <ul class="list-inline mb-0 d-none d-sm-block pr-2">
                        <li class=" list-inline-item text-muted mr-4">Beds : <span
                            class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Bath : <span
                            class="font-weight-500 text-heading">2</span></li>
                        <li class=" list-inline-item text-muted mr-4">Sqft : <span
                            class="font-weight-500 text-heading">900</span></li>
                      </ul>
                    </div>
                  </div>
                  <div id="collapse-03" class="collapse " aria-labelledby="floor-plans-03" data-parent="#accordion-03">
                    <div class="card-body card-body col-sm-6 offset-sm-3 mb-3">
                      <img src="/images/single-detail-property-01.jpg" class="card-img" alt="Floor Plans">
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            <section>
              <h4 class="fs-22 text-heading lh-15 mb-5 pt-3">Rating & Reviews</h4>
              <div class="card border-0 mb-4">
                <div class="card-body p-0">
                  <div class="row">
                    <div class="col-sm-6 mb-6 mb-sm-0">
                      <div class="bg-gray-01 rounded-lg pt-2 px-6 pb-6">
                        <h5 class="fs-16 lh-2 text-heading mb-6">
                          Avarage User Rating
                        </h5>
                        <p class="fs-40 text-heading font-weight-bold mb-6 lh-1">4.6 <span
                            class="fs-18 text-gray-light font-weight-normal">/5</span></p>
                        <ul class="list-inline">
                          <li
                            class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li
                            class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li
                            class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li
                            class="list-inline-item bg-warning text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li
                            class="list-inline-item bg-gray-04 text-white w-46px h-46 rounded-lg d-inline-flex align-items-center justify-content-center fs-18 mb-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                      <h5 class="fs-16 lh-2 text-heading mb-5">
                        Rating Breakdown
                      </h5>
                      <div class="d-flex align-items-center mx-n1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1">
                          <div class="progress rating-progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                              aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1">60%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1">
                          <div class="progress rating-progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1">40%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1">
                          <div class="progress rating-progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1">0%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1">
                          <div class="progress rating-progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1">0%</div>
                      </div>
                      <div class="d-flex align-items-center mx-n1">
                        <ul class="list-inline d-flex px-1 mb-0">
                          <li class="list-inline-item text-warning mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                          <li class="list-inline-item text-border mr-1">
                            <i class="fas fa-star"></i>
                          </li>
                        </ul>
                        <div class="d-block w-100 px-1">
                          <div class="progress rating-progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                              aria-valuemax="100"></div>
                          </div>
                        </div>
                        <div class="text-muted px-1">0%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
             
            <section class="pt-5">
              <div class="card border-0 mb-4">
                <div class="card-body p-0">
                  <h3 class="fs-16 lh-2 text-heading mb-0 d-inline-block pr-4 border-bottom border-primary">5
                    Reviews</h3>
                  <div class="media border-top pt-7 pb-6 d-sm-flex d-block text-sm-left text-center">
                    <img src="/images/review-07.jpg" alt="Danny Fox" class="mr-sm-8 mb-4 mb-sm-0">
                    <div class="media-body">
                      <div class="row mb-1 align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                          <h4 class="mb-0 text-heading fs-14">Danny Fox</h4>
                        </div>
                        <div class="col-sm-6">
                          <ul class="list-inline d-flex justify-content-sm-end justify-content-center mb-0">
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                            <li class="list-inline-item mr-1">
                              <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <p class="mb-3 pr-xl-17">Very good and fast support during the week. Thanks for
                        always
                        keeping your WordPress themes up to date. Your level of support and dedication
                        is second to none.</p>
                      <div class="d-flex justify-content-sm-start justify-content-center">
                        <p class="mb-0 text-muted fs-13 lh-1">02 Dec 2020 at 2:40pm</p>
                        <a href="#"
                          class="mb-0 text-heading border-left border-dark hover-primary lh-1 ml-2 pl-2">Reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            <section>
              <div class="card border-0">
                <div class="card-body p-0">
                  <h3 class="fs-16 lh-2 text-heading mb-4">Write A Review</h3>
                  <form>
                    <div class="form-group mb-4 d-flex justify-content-start">
                      <div class="rate-input">
                        <input type="radio" id="star5" name="rate" value="5">
                        <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star4" name="rate" value="4">
                        <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star3" name="rate" value="3">
                        <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star2" name="rate" value="2">
                        <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                        <input type="radio" id="star1" name="rate" value="1">
                        <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                          <i class="fas fa-star"></i>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group mb-4">
                          <input placeholder="Your Name" class="form-control form-control-lg border-0" type="text"
                            name="name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group mb-4">
                          <input type="email" placeholder="Email" name="email"
                            class="form-control form-control-lg border-0">
                        </div>
                      </div>
                    </div>
                    <div class="form-group mb-6">
                      <textarea class="form-control form-control-lg border-0" placeholder="Your Review" name="message"
                        rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary px-10 mb-2">Submit</button>
                  </form>
                </div>
              </div>
            </section> -->
            <?php if($imovel['videoIMOVEL']>0){ ?>
            <section class="py-6 border-bottom">
              <h4 class="fs-22 text-heading mb-6">Video Informativo</h4>
              <iframe height="430" src="<?php echo $imovel['videoIMOVEL'];?>
                allowfullscreen="" class="w-100" style="border: 0;"></iframe>
            </section>
            <?php } ?>
            <section class="py-6 border-bottom">
              <h4 class="fs-22 text-heading mb-6">Location</h4>
              <div class="position-relative">
                <div id="map"></div>

              <script>
               function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: { lat: -33.9, lng: 151.2 },
  });

  setMarkers(map);
  addCurrentLocationMarker(map);
}

function setMarkers(map) {
  const beaches = [

['<?php echo $imovel['tituloIMOVEL']; ?>', <?php echo $imovel['longitudeIMOVEL']; ?>, <?php echo $imovel['latitudeIMOVEL']; ?>, <?php echo $imovel['codigoIMOVEL']; ?>, <?php echo $imovel['valorIMOVEL']; ?>, '/page-final/<?php echo $imovel['codigoIMOVEL']; ?>']
];

for (let i = 0; i < beaches.length; i++) {
    const beach = beaches[i];

    const marker = new google.maps.Marker({
      position: { lat: beach[1], lng: beach[2] },
      map,
      title: beach[0],
      icon: {
        url: "/images/favicon.png",
        size: new google.maps.Size(40, 40),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(0, 32)
      },
      zIndex: beach[3]
    });

    const contentString = '<div>' +
        '<p>' + beach[0] + '</p>' +
        '<p>Valor: $' + beach[4] + '</p>' +
         '<a href="' + beach[5] + '">Detalhes</a>' +
        '</div>';

    const infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    marker.addListener('click', () => {
      infowindow.open(map, marker);
    });
  }
}

function addCurrentLocationMarker(map) {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      const userLatLng = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      const userMarker = new google.maps.Marker({
        position: userLatLng,
        map: map,
        title: "Sua Localização",
        icon: {
          url: "/images/pin.png",
          size: new google.maps.Size(40, 40),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(20, 40)
        },
        zIndex: 9999
      });

      const userInfowindow = new google.maps.InfoWindow({
        content: "Você está aqui!"
      });

      userMarker.addListener("click", () => {
        userInfowindow.open(map, userMarker);
      });

      map.setCenter(userLatLng);
    }, function() {
      handleLocationError(true, map.getCenter());
    });
  } else {
    handleLocationError(false, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, fallbackLatLng) {
  const errorMsg = browserHasGeolocation ?
    "Erro: A geolocalização falhou." :
    "Erro: Seu navegador não suporta geolocalização.";
  //alert(errorMsg);

  map.setCenter(fallbackLatLng);
}

window.initMap = initMap;
              </script>
                <p
                  class="mb-0 p-3 bg-white shadow rounded-lg position-absolute pos-fixed-bottom mb-4 ml-4 lh-17 z-index-2">
                  62 Gresham St, Victoria Park <br />
                  WA 6100, Australia</p>
              </div>
            </section>
          </article>
          <aside class="col-lg-4 pl-xl-4 primary-sidebar sidebar-sticky" id="sidebar">
            <div class="primary-sidebar-inner">
              <div class="card border-0 widget-request-tour">
                <!-- <ul class="nav nav-tabs d-flex" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active px-3" data-toggle="tab" href="#schedule" role="tab"
                      aria-selected="true">Schedule
                      A Tour</a>
                  </li>
                </ul> -->
                <div class="card-body px-sm-6 shadow-xxs-2 pb-5 pt-0">
                  <form>
                    <div class="tab-content pt-1 pb-0 px-0 shadow-none">
                      <div class="tab-pane fade show active" id="schedule" role="tabpanel">
                        <!----------------------------------PREÇO------------------------------------->
                      <div>
                        <span class="badge badge-dark"
                        style="margin-top: 15px;
                        width: 100%;
                        height: 50px;
                        text-align: left !important;
                        object-position: center !important;
                        line-height: 1.35 !important;
                        font-size: 33px;"><a style="font-size: 16px;">$</a><?php echo $imovel['valorIMOVEL'];?><a style="font-size: 14px;">/night</a></span>
                        </div>
                        <!----------------------------------------------------------------------------->
                        <!-- <div class="row mt-2 mt-2">

                         <div id='calendar'></div>
                       <?php 
                       
                       if($imovel['tipoIMOVEL']==3){ 
                       ?>
                        </div> -->
                       <div class="row mt-6 mt-6">
                      

                              <div class="input-group col-md-6">

                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control  rounded-right" required="" placeholder="Arrive">

                              </div>


                              <div class="input-group col-md-6">

                                    <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fal fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control  rounded-right" required="" placeholder="Depart">

                              </div>
                      
                      </div>
             
            
            
                      <div class="row mt-4 mt-4">

                      <div class="input-group col-md-12">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fal fa-users"></i></span>
                        </div>
                        <input type="text" class="form-control rounded-right" id="guestsInput" required="" placeholder="Guests">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="decreaseBtn"><i class="fal fa-minus"></i></button>
                            <button class="btn btn-outline-secondary" type="button" id="increaseBtn"><i class="fal fa-plus"></i></button>
                        </div>
                     </div>
                <?php } ?>


                      </div>
                         
                      <!----FINALLL--->
                      <div class="tab-pane fade show active" id="schedule" role="tabpanel">
                        <!----------------------------------PREÇO------------------------------------->
                      <div class="row pt-50 pb-50 ">
                        <span class="badge font-weight-600 text-center fs-12"
                        style=" 
                        height: 50px;  width: 100%;color:#000; margin: 20px 0px 20px 0px; ">Escolha como deseja entrar em<br> contato com o Host baixo </span>
                        </div>
                        <!----------------------------------------------------------------------------->
                        
                         
                      
                        <section>
                          <button type="button" class="btn btn-primary btn-lg btn-block rounded"  onClick="top.location.href='https://wa.me/<?php echo $imovel['telefoneIMOBILIARIA'];?>';"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="
                              width: 12px;
                              color: #FFF !important;
                              fill: #FFF;
                              margin-right: 5px;
                          "><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" style="
                              font-size: 10px;
                              width: 10px !important;
                          "></path></svg>Whatsapp host</button>
                          
                          <button type="button" id="contactModalBtn" class="btn btn-primary btn-lg btn-block rounded"  >Contact the host</button>
                          <button type="button" class="btn btn-primary btn-lg btn-block rounded" onClick="top.location.href='mailto:<?php echo $imovel['emailIMOBILIARIA'];?>';" >E-mail</button>
                          <button type="button" id="shareModalBtn" class="btn btn-outline-primary btn-lg btn-block rounded" ><i class="fal fa-share-alt"></i> To Share </button>
                          <button type="button" class="btn btn-outline-primary btn-lg btn-block rounded" ><i class="far fa-heart"></i> Add to Favorites </button>
                        </section>
                      </div>
                      
                    </div>
                  </form>

                        <!----------------------------------------------------------------------IMOBILIÁRIA-Imobiliaria------------------->

 
                <?php if($imovel['codigoIMOBILIARIA']>0){ ?>
                  <div class="card p-6 mb-4">
                    <div class="card-body text-center p-0">
                     <img src="<?php echo $imovel['imagemIMOBILIARIA'];?>" alt="<?php echo $imovel['nomeIMOBILIARIA'];?>" class="mb-2">
                     <p class="d-block fs-16 lh-214 text-dark mb-0 font-weight-500"><?php echo $imovel['nomeIMOBILIARIA'];?></p>
                     <p class="mb-0"><?php echo $imovel['emailIMOBILIARIA'];?></p>
                        <p class="text-heading font-weight-500 mb-0">
                          <span class="text-primary d-inline-block mr-1"><i class="fal fa-phone"></i></span>
                            <?php echo $imovel['telefoneIMOBILIARIA'];?>
                        </p>
                     <!-- <ul class="list-inline mb-2">
                       <li class="list-inline-item fs-13 text-heading font-weight-500">4.8/5</li>
                       <li class="list-inline-item fs-13 text-heading font-weight-500 mr-1">
                         <ul class="list-inline mb-0">
                           <li class="list-inline-item mr-0">
                             <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                           </li>
                           <li class="list-inline-item mr-0">
                             <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                           </li>
                           <li class="list-inline-item mr-0">
                             <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                           </li>
                           <li class="list-inline-item mr-0">
                             <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                           </li>
                           <li class="list-inline-item mr-0">
                             <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                           </li>
                         </ul>
                       </li>
                       <li class="list-inline-item fs-13 text-gray-light">(67 reviews)</li>
                     </ul> -->
                    </div>
                  </div>
                <?php } ?>
                 <!-----------------------------------------IMOBILIARIA--AGENTE------------------------------------------------>
                 <?php if($imovel['codigoAGENTE']>0){ ?>
                  <div class="card p-6 mb-4">
                    <div class="card-body text-center p-0">
                     <img src="<?php echo $imovel['imagemAGENTE'];?>" alt="<?php echo $imovel['nomeAGENTE'];?>" class="mb-2">
                     <p class="d-block fs-16 lh-214 text-dark mb-0 font-weight-500"><?php echo $imovel['nomeAGENTE'];?></p>
                     <p class="mb-0"><?php echo $imovel['categoriaAGENTE'];?></p>
                     
                     <!-- <ul class="list-inline mb-2">
                       <li class="list-inline-item fs-13 text-heading font-weight-500">4.8/5</li>
                       <li class="list-inline-item fs-13 text-heading font-weight-500 mr-1">
                         <ul class="list-inline mb-0">
                           <li class="list-inline-item mr-0">
                             <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                           </li>
                           <li class="list-inline-item mr-0">
                             <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                           </li>
                           <li class="list-inline-item mr-0">
                             <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                           </li>
                           <li class="list-inline-item mr-0">
                             <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                           </li>
                           <li class="list-inline-item mr-0">
                             <span class="text-warning fs-12 lh-2"><i class="fas fa-star"></i></span>
                           </li>
                         </ul>
                       </li>
                       <li class="list-inline-item fs-13 text-gray-light">(67 reviews)</li>
                     </ul> -->
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </aside>

          
        </div>
      </div>
    </div>
    <!-- <section class="pt-6 pb-8">
      <div class="container">
        <h4 class="fs-22 text-heading mb-6">Similar Homes You May Like</h4>
        <div class="slick-slider"
          data-slick-options='{"slidesToShow": 3, "dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 1}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="/images/properties-grid-38.jpg" alt="Home in Metric Way">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-primary">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
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
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                    class="text-dark hover-primary">Home in Metric Way</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"
                      data-toggle="tooltip" title="Wishlist"><i class="fas fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                      data-toggle="tooltip" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="/images/properties-grid-01.jpg" alt="Garden Gingerbread House">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-orange">featured</span>
                    <span class="badge mr-2 badge-indigo">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
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
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                    class="text-dark hover-primary">Garden Gingerbread House</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$550<span
                    class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                      data-toggle="tooltip" title="Wishlist"><i class="far fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                      data-toggle="tooltip" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="/images/properties-grid-02.jpg" alt="Affordable Urban House">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-primary">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
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
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                    class="text-dark hover-primary">Affordable Urban House</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                      data-toggle="tooltip" title="Wishlist"><i class="far fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                      data-toggle="tooltip" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="pb-12">
      <div class="container">
        <h4 class="fs-22 text-heading mb-6">Listings near 1135 Clayton St</h4>
        <div class="slick-slider"
          data-slick-options='{"slidesToShow": 3, "dots":false,"arrows":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2}},{"breakpoint": 768,"settings": {"slidesToShow": 1}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="/images/properties-grid-07.jpg" alt="Home in Metric Way">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-primary">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
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
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                    class="text-dark hover-primary">Home in Metric Way</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-secondary bg-accent border-accent"
                      data-toggle="tooltip" title="Wishlist"><i class="fas fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                      data-toggle="tooltip" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="/images/properties-grid-05.jpg" alt="Garden Gingerbread House">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-indigo">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
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
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                    class="text-dark hover-primary">Garden Gingerbread House</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$550<span
                    class="text-gray-light font-weight-500 fs-14"> / month</span></p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                      data-toggle="tooltip" title="Wishlist"><i class="far fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                      data-toggle="tooltip" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card shadow-hover-2">
              <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                <img src="/images/properties-grid-06.jpg" alt="Affordable Urban House">
                <div class="card-img-overlay p-2 d-flex flex-column">
                  <div>
                    <span class="badge mr-2 badge-primary">for Sale</span>
                  </div>
                  <ul class="list-inline mb-0 mt-auto hover-image">
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
              </div>
              <div class="card-body pt-3">
                <h2 class="card-title fs-16 lh-2 mb-0"><a href="single-property-1.html"
                    class="text-dark hover-primary">Affordable Urban House</a></h2>
                <p class="card-text font-weight-500 text-gray-light mb-2">1421 San Pedro St, Los Angeles</p>
                <ul class="list-inline d-flex mb-0 flex-wrap mr-n5">
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    3 Br
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    3 Ba
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    2300 Sq.Ft
                  </li>
                  <li class="list-inline-item text-gray font-weight-500 fs-13 d-flex align-items-center mr-5"
                    data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                    1 Gr
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent d-flex justify-content-between align-items-center py-3">
                <p class="fs-17 font-weight-bold text-heading mb-0">$1.250.000</p>
                <ul class="list-inline mb-0">
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                      data-toggle="tooltip" title="Wishlist"><i class="far fa-heart"></i></a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#"
                      class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body hover-secondary bg-hover-accent border-hover-accent"
                      data-toggle="tooltip" title="Compare"><i class="fas fa-exchange-alt"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section>
      <div
        class="d-flex bottom-bar-action bottom-bar-action-01 py-2 px-4 bg-gray-01 align-items-center position-fixed fixed-bottom d-sm-none">
        <div class="media align-items-center">
          <img src="/images/irene-wallace.png" alt="Irene Wallace" class="mr-4 rounded-circle">
          <div class="media-body">
            <a href="#" class="d-block text-dark fs-15 font-weight-500 lh-15">Irene Wallace</a>
            <span class="fs-13 lh-2">Sales Excutive</span>
          </div>
        </div>
        <div class="ml-auto">
          <button type="button" class="btn btn-primary fs-18 p-2 lh-1 mr-1 mb-1 shadow-none" data-toggle="modal"
            data-target="#modal-messenger"><i class="fal fa-comment"></i></button>
          <a href="tel:(+84)2388-969-888" class="btn btn-primary fs-18 p-2 lh-1 mb-1 shadow-none" target="_blank"><i
              class="fal fa-phone"></i></a>
        </div>
      </div>
      <div class="modal fade" id="modal-messenger" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header border-0 pb-0">
              <h4 class="modal-title text-heading" id="exampleModalLabel">Contact Form</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body pb-6">
              <div class="form-group mb-2">
                <input type="text" class="form-control form-control-lg border-0" placeholder="First Name, Last Name">
              </div>
              <div class="form-group mb-2">
                <input type="email" class="form-control form-control-lg border-0" placeholder="Your Email">
              </div>
              <div class="form-group mb-2">
                <input type="tel" class="form-control form-control-lg border-0" placeholder="Your phone">
              </div>
              <div class="form-group mb-2">
                <textarea class="form-control border-0"
                  rows="4">Hello, I'm interested in Villa Called Archangel</textarea>
              </div>
              <div class="form-group form-check mb-4">
                <input type="checkbox" class="form-check-input" id="exampleCheck3">
                <label class="form-check-label fs-13" for="exampleCheck3">Egestas fringilla phasellus faucibus
                  scelerisque eleifend donec.</label>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block rounded">Request Info</button>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
  </main>
  <!-- FOOTER -->

  <?php require_once ('require/footer.php'); ?>

  <!-- END FOOTER -->
  <!-- Vendors scripts -->

  <div id="shareModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Compartilhe esta página</h2>
            <a class="share-button facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $urlBase;?>" target="_blank">
                <i class="fab fa-facebook-f"></i> Facebook
            </a>
            <a class="share-button x" href="https://x.com/intent/tweet?url=<?php echo $urlBase;?>&text=Confira esta página!" target="_blank">
            <svg style="height: 17px; vertical-align: text-top" viewBox="0 0 24 24" aria-label="X" role="img"><g><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" fill="currentColor"></path></g></svg> X
            </a>
            <a class="share-button linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $urlBase;?>" target="_blank">
                <i class="fab fa-linkedin-in"></i> LinkedIn
            </a>
            <a class="share-button whatsapp" href="https://api.whatsapp.com/send?text=Confira%20esta%20página!%20<?php echo $urlBase;?>" target="_blank">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
            <a class="share-button email" href="mailto:?subject=Confira esta página&body=Confira esta página: <?php echo $urlBase;?>" target="_blank">
                <i class="fas fa-envelope"></i> Email
            </a>
        </div>
    </div>

    
  <!-- O modal -->
  <div id="contactModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Formulário de Contato</h2>
            <form action="envio_formulario.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" required>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
  
<script type='text/javascript' src='/js/jquery-1.7.1.min.js'></script>
<!-- <script type='text/javascript' src='/js/jquery-ui-1.8.17.custom.min.js'></script>
 -->


  <script src="/vendors/jquery.min.js"></script> 

  <script type='text/javascript' src='/js/full-mini-calendar.js'></script>
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

  
  <!-- Carregar a API do Google Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGR_LrkKpQfxjt7maRbQ0nlj3hn5R936c&callback=initMap&v=weekly"
    async defer></script>

  <!-- Theme scripts -->
  <script src="/js/theme.js"></script>
 

  <script src="/js/script.js"></script>
  
 
  <?php require_once ('require/login.php') ?>
  <?php require_once ('require/svg.php') ?>


    <script>
        // Obtém o modal
        var modalModal = document.getElementById("contactModal");

        // Obtém o botão que abre o modal
        var btnModal = document.getElementById("contactModalBtn");

        // Obtém o elemento <span> que fecha o modal
        var spanModal = document.getElementsByClassName("close")[0];
          
        // Quando o usuário clicar no botão, abre o modal
        btnModal.onclick = function() {
            modalModal.style.display = "block";
        }

        // Quando o usuário clicar no <span> (x), fecha o modal
        spanModal.onclick = function() {
            modalModal.style.display = "none";
        }

        // Quando o usuário clicar fora do modal, fecha o modal
        window.onclick = function(event) {
            if (event.target == modalModal) {
                modalModal.style.display = "none";
            }
        }
   
        // Obtém o modal
        var modal = document.getElementById("shareModal");

        // Obtém o botão que abre o modal
        var btn = document.getElementById("shareModalBtn");

        // Obtém o elemento <span> que fecha o modal
        var span = document.getElementsByClassName("close")[0];

        // Quando o usuário clicar no botão, abre o modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Quando o usuário clicar no <span> (x), fecha o modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Quando o usuário clicar fora do modal, fecha o modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

  <div class="position-fixed pos-fixed-bottom-right p-6 z-index-10">
    <a href="#"
      class="gtf-back-to-top bg-white text-primary hover-white bg-hover-primary shadow p-0 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center"
      title="Back To Top"><i class="fal fa-arrow-up"></i></a>
  </div>
</body>

</html>