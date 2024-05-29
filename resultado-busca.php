<?php

  
$options = @$_GET['options'];
$tipoBusca = @$_GET['tipoBusca'];
$search = @$_GET['search'];
$BoxConvidadosAberto = @$_GET['BoxConvidadosAberto'];
$convidados = @$_GET['convidados'];
$BoxConvidadosAdultos = @$_GET['BoxConvidadosAdultos'];
$BoxConvidadosCriancas = @$_GET['BoxConvidadosCriancas'];
$BoxConvidadosBebes = @$_GET['BoxConvidadosBebes'];
$BoxConvidadosAnimais = @$_GET['BoxConvidadosAnimais'];
$categoria = @$_GET['categoria'];
$moeda = @$_GET['moeda'];
$minimo = @$_GET['minimo'];
$maximo = @$_GET['maximo'];
$inicio = @$_GET['inicio'];
$final = @$_GET['final'];
$search  = @$_GET['search'];

?>
<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Joviplanet">
  <meta name="author" content="">
  <meta name="generator" content="Jekyll">
  <title>Busca : <?php echo $search;?></title>
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
  <meta name="twitter:title" content="Listing Half Map Grid Layout 1">
  <meta name="twitter:description" content="Real Estate Html Template">
  <meta name="twitter:image" content="/images/homeid-social-logo.png">
  <!-- Facebook -->
  <meta property="og:url" content="listing-half-map-grid-layout-1.html">
  <meta property="og:title" content="Listing Half Map Grid Layout 1">
  <meta property="og:description" content="Real Estate Html Template">
  <meta property="og:type" content="website">
  <meta property="og:image" content="/images/homeid-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<style>
  .my-section {
            background: linear-gradient(to bottom, #f0f0f0, transparent); /* Gradiente vertical */
            padding: 20px; /* Espaçamento interno */
            margin-left: -2.2%;
            border-top: solid 1px #a2abba;
        }
        
        .valortop {
          z-index: 1111111111111;
          position: relative;
        }
</style>

  <?php require_once ('require/scriptshead.php'); ?>


</head>

<body>
  <div class="gtranslate_wrapper"></div>

  <?php require_once ('require/header.php'); ?>



  <main id="content">

    <section class="position-relative">
      <div class="container-fluid px-0">
        <div class="row no-gutters">
          <div class="col-xl-6 col-xxl-7 primary-map map-sticky" id="map-sticky" style="border-radius: 5px; ">
            <div class="primary-map-inner">
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
<?php

if($tipoBusca==""){

  $BuscaTipo = "";
}else{
  $BuscaTipo = " tipoIMOVEL = '".$tipoBusca."' AND ";

}
 
$sql_Imovel_Busca_Mapa = "

  SELECT deRESERVA,
  ateRESERVA,
  imovelFOTO,
  nomeTIPOIMOVEL,
  codigoIMOVEL,
  enderecoIMOVEL,
  valorIMOVEL,
  quartosIMOVEL,
  banheirosIMOVEL,
  vagasgaragemIMOVEL,
  cityIMOVEL,
  tituloIMOVEL,
  numeroIMOVEL,
  longitudeIMOVEL,
  tipoIMOVEL,
  latitudeIMOVEL
  FROM tb0031_imoveis 
  INNER JOIN tb0001_categorias ON codigoCATEGORIA = categoriaIMOVEL  
  LEFT JOIN tb0036_fotos ON codigoIMOVEL = imovelFOTO 
  LEFT JOIN tb0034_reservas ON codigoIMOVEL = imovelRESERVA
  LEFT JOIN tb0035_tipoimovel ON codigoTIPOIMOVEL = tipoIMOVEL
  WHERE 
  ativoCATEGORIA = 1 AND 
  ativoIMOVEL = 1 AND  
  ".$BuscaTipo."
  ((stateIMOVEL LIKE '%".$search."%') or (countryIMOVEL LIKE '%".$search."%'))
GROUP BY deRESERVA,
deRESERVA,
ateRESERVA,
imovelFOTO,
nomeTIPOIMOVEL,
codigoIMOVEL,
enderecoIMOVEL,
valorIMOVEL,
quartosIMOVEL,
banheirosIMOVEL,
vagasgaragemIMOVEL,
cityIMOVEL,
tituloIMOVEL,
numeroIMOVEL,
longitudeIMOVEL,
tipoIMOVEL,
latitudeIMOVEL
";

try {

$query_Imovel_Busca_Mapa = $PDO->prepare($sql_Imovel_Busca_Mapa);
$dadosMapa = $query_Imovel_Busca_Mapa->execute();
$number_of_rows = $query_Imovel_Busca_Mapa->rowCount();

} catch (PDOexception $error_sql){

echo 'Erro ao retornar os Dados.'.$error_sql->getMessage();

}
 
$soma = 1;
while($imovel_Busca_Mapa = $query_Imovel_Busca_Mapa->fetch(PDO::FETCH_ASSOC)){ 
 ?> 
['<?php echo $imovel_Busca_Mapa['tituloIMOVEL']; ?>', <?php echo $imovel_Busca_Mapa['longitudeIMOVEL']; ?>, <?php echo $imovel_Busca_Mapa['latitudeIMOVEL']; ?>, <?php echo $imovel_Busca_Mapa['codigoIMOVEL']; ?>, <?php echo $imovel_Busca_Mapa['valorIMOVEL']; ?>, '/page-final/<?php echo $imovel_Busca_Mapa['codigoIMOVEL']; ?>']<?php 
if($number_of_rows!=$soma){echo ',';} 
$soma++; }?>
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
  alert(errorMsg);

  map.setCenter(fallbackLatLng);
}

window.initMap = initMap;
              </script>

            </div>
          </div>

       
            
          
          <div class="col-xl-6 col-xxl-5 px-3 px-xxl-8 pt-7 pb-11">
          <form action="/result-search"> 
            
           
              <div class="row align-items-sm-center mb-6">
                <div class="col-md-12 col-xl-9 col-xxl-12 ml-3"
                style="
    border: 1px solid #a2abba;
    border-radius: 5px;">
 


                    <input type="hidden" id="options" name="options" value="<?php echo $options;?>">
                    <input type="hidden" id="tipoBusca" name="tipoBusca" value="<?php echo $tipoBusca;?>">
                    <input type="hidden" id="search" name="search" value="<?php echo $search;?>">
                    <input type="hidden" id="BoxConvidadosAberto" name="BoxConvidadosAberto" value="<?php echo $BoxConvidadosAberto;?>">
                    <input type="hidden" id="convidados" name="convidados" value="<?php echo $convidados;?>">
                    <input type="hidden" id="BoxConvidadosAdultos" name="BoxConvidadosAdultos" value="<?php echo $BoxConvidadosAdultos;?>">
                    <input type="hidden" id="BoxConvidadosCriancas" name="BoxConvidadosCriancas" value="<?php echo $BoxConvidadosCriancas;?>">
                    <input type="hidden" id="BoxConvidadosBebes" name="BoxConvidadosBebes" value="<?php echo $BoxConvidadosBebes;?>">
                    <input type="hidden" id="BoxConvidadosAnimais" name="BoxConvidadosAnimais" value="<?php echo $BoxConvidadosAnimais;?>">
                    <input type="hidden" id="categoria" name="categoria" value="<?php echo $categoria;?>">
                    <input type="hidden" id="moeda" name="moeda" value="<?php echo $moeda;?>">
                    <input type="hidden" id="minimo" name="minimo" value="<?php echo $minimo;?>">
                    <input type="hidden" id="maximo" name="maximo" value="<?php echo $maximo;?>">

                  <input type="text"
                    class="form-control form-control-l border-0 shadow-none rounded-left-md-0 pr-8 bg-white placeholder-muted"
                    id="search" name="search" value="<?php echo $_GET['search'];?>" placeholder="Localization">
                    <button type="submit" class="btn btn-secondary position-absolute 
                    pos-fixed-right-center text-heading 
                    fs-15 pt-0 pb-0 pr-3 pl-3 shadow-none" style="color: white !important; margin-right: 5px;">Change Search</button>
                  <!-----
                    <button type="submit"
                    class="btn position-absolute pos-fixed-right-center p-0 text-heading fs-20 mr-4 shadow-none">
                    <i class="far fa-search"></i>
                  </button>
                  ---->
                </div>
                <div class="col-md-0 ml-3 mt-0 mt-md-0 " style="
    border: 1px solid #a2abba;
    border-radius: 5px;">
                  <div class="d-flex justify-content-md-end align-items-center">
                    <a data-toggle="modal" href="#filtros-busca"
                      class="input-group rounded input-group-lg w-auto ml-3 mr-3">
                      <label
                        class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                        for="inputGroupSelect01"><i class="fas fa-filter fs-16 pr-2" ></i>Filter</label>
                    </a>
                  </div>
                </div>
              </div>
          
            </form>
           

<section class="my-section">
 <div class="row">
              
            
           
           <?php
  

    try {

      $query_Imovel_Busca = $PDO->prepare($sql_Imovel_Busca_Mapa);
      $query_Imovel_Busca->execute();

    } catch (PDOexception $error_sql){

      echo 'Erro ao retornar os Dados.'.$error_sql->getMessage();

    }


    



while($imovel_Busca = $query_Imovel_Busca->fetch(PDO::FETCH_ASSOC)){ 


  $deRESERVA = $imovel_Busca['deRESERVA'];
  $ateRESERVA = $imovel_Busca['ateRESERVA'];

  

  if($deRESERVA!=''){

    if(strtotime($deRESERVA)<=strtotime($inicio) and strtotime($ateRESERVA)>=strtotime($inicio)){
    $tarja = 1;
  }else{
    $tarja = 0;
  }

    
  }else{
    $tarja = 0;
  }
  
  ?> 
  
              <div class="col-md-6 mb-6">
                <div class="card border-0" data-animate="fadeInUp">
                  <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                    <img src="<?php if($imovel_Busca['imovelFOTO']==""){echo '/images/properties-grid-35.jpg';}else{echo $imovel['imovelFOTO'];}?>" alt="Home in Metric Way">
                    <div class="card-img-overlay p-2 d-flex flex-column"
                    style="background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5));">
                    <div>
                      <span class="badge badge-primary"><?php echo $imovel_Busca['nomeTIPOIMOVEL']; ?></span>
                      <?php if($tarja==1){?>
                  
                    <span class="badge mr-2" style="color: #fff; background-color: #fc0324;">Indisponivel</span>
                  
                  <?php } ?>
                </div>
                      <div class="mt-auto d-flex hover-image">
                        <ul class="list-inline mb-0 d-flex align-items-end mr-auto">
                          <li class="list-inline-item mr-2" data-toggle="tooltip" title="9 Images">
                            <a href="#" class="text-white hover-primary">
                              <i class="far fa-images" style="margin-bottom: 30px;"></i><span class="pl-1">9</span>
                            </a>
                          </li>
                          <li class="list-inline-item" data-toggle="tooltip" title="2 Video">
                            <a href="#" class="text-white hover-primary">
                              <i class="far fa-play-circle" style="margin-bottom: 30px;"></i><span class="pl-1">2</span>
                            </a>
                          </li>
                        </ul>
                        <ul class="list-inline mb-0 d-flex align-items-end mr-n3">
                          <li class="list-inline-item mr-3 h-32" data-toggle="tooltip" title="Wishlist">
                            <a href="#" class="text-white fs-20 hover-primary">
                              <i class="far fa-heart"></i>
                            </a>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-body pt-3 px-0 pb-1 ">
                  <h2 class="card-title fs-16 lh-2 mb-0 ml-3"><a href="/page-final/<?php echo $imovel_Busca['codigoIMOVEL'];?>"  style="color: #BA824F !important; font-weight: 600;" ><?php echo $imovel_Busca['tituloIMOVEL'];?></a></h2>

                      
                    <p class="font-weight-500 text-gray-light ml-3 mb-0"><?php echo $imovel_Busca['numeroIMOVEL'];?> <?php echo $imovel_Busca['enderecoIMOVEL'];?>, <?php echo $imovel_Busca['cityIMOVEL'];?></p>
                    <p class="valortop fs-25 font-weight-500 text-heading mb-0"
                      style="color: #fff !important; margin-bottom: 0px !important; margin-top: -120px; margin-left: 10px; margin-bottom: 5px; margin-right: 60px;">
                    $ <?php echo $imovel_Busca['valorIMOVEL'];?>
                    </p>
                  </div>
                  <div class="card-footer bg-transparent px-0 pb-0 " style="margin-top: 55px;">
                  <ul class="list-inline mb-0">
                  
                  <?php if($imovel_Busca['quartosIMOVEL'] > 0){ ?>

                  <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-4 ml-3" data-toggle="tooltip"
                    title="3 Bedroom">
                    <svg class="icon icon-bedroom fs-18 text-primary mr-1 mb-1">
                      <use xlink:href="#icon-bedroom"></use>
                    </svg>
                    
                    <?php echo $imovel_Busca['quartosIMOVEL'];?> &nbsp; Br
                  
                  </li>
                  <?php } ?>

                  <?php if($imovel_Busca['banheirosIMOVEL'] > 0){ ?>

                  <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-4" data-toggle="tooltip"
                    title="3 Bathrooms">
                    <svg class="icon icon-shower fs-18 text-primary mr-1 mb-2">
                      <use xlink:href="#icon-shower"></use>
                    </svg>
                    
                    <?php echo $imovel_Busca['banheirosIMOVEL'];?> &nbsp; Ba
                  
                  </li>
                  <?php } ?>

                  
<!----
                  <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-4" data-toggle="tooltip"
                    title="Size">
                    <svg class="icon icon-square fs-18 text-primary mr-1">
                      <use xlink:href="#icon-square"></use>
                    </svg>
                    
                  </li>
                  ---->

                  <?php if($imovel_Busca['vagasgaragemIMOVEL'] > 0){ ?>

                  <li class="list-inline-item text-gray font-weight-500 fs-13" data-toggle="tooltip" title="1 Garage">
                    <svg class="icon icon-Garage fs-18 text-primary mr-1 mb-2">
                      <use xlink:href="#icon-Garage"></use>
                    </svg>
                   
                    <?php echo $imovel_Busca['vagasgaragemIMOVEL'];?> &nbsp; Gr
                 
                  </li>
                  <?php } ?>

                </ul>
                  </div>
                </div>
              </div>
                

<?php } ?>


 
            </div>
            <nav class="pt-4">
              <ul class="pagination rounded-active justify-content-center mb-0">
                <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-left"></i></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                <li class="page-item">...</li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="far fa-angle-double-right"></i></a></li>
              </ul>
            </nav>
          </div>

          </section>
        </div>
      </div>
     
 
    <div id="compare" class="compare">
      <button
        class="btn shadow btn-open bg-white bg-hover-accent text-secondary rounded-right-0 d-flex justify-content-center align-items-center w-30px h-140 p-0">
      </button>
      <div class="list-group list-group-no-border bg-dark py-3">
        <a href="#" class="list-group-item bg-transparent text-white fs-22 text-center py-0">
          <i class="far fa-bars"></i>
        </a>
        <div class="list-group-item card bg-transparent">
          <div class="position-relative hover-change-image bg-hover-overlay">
            <img src="/images/compare-01.jpg" class="card-img" alt="properties">
            <div class="card-img-overlay">
              <a href="#" class="text-white hover-image fs-16 lh-1 pos-fixed-top-right position-absolute m-2"><i
                  class="fal fa-minus-circle"></i></a>
            </div>
          </div>
        </div>
        <div class="list-group-item card bg-transparent">
          <div class="position-relative hover-change-image bg-hover-overlay">
            <img src="/images/compare-02.jpg" class="card-img" alt="properties">
            <div class="card-img-overlay">
              <a href="#" class="text-white hover-image fs-16 lh-1 pos-fixed-top-right position-absolute m-2"><i
                  class="fal fa-minus-circle"></i></a>
            </div>
          </div>
        </div>
        <div class="list-group-item card card bg-transparent">
          <div class="position-relative hover-change-image bg-hover-overlay ">
            <img src="/images/compare-03.jpg" class="card-img" alt="properties">
            <div class="card-img-overlay">
              <a href="#" class="text-white hover-image fs-16 lh-1 pos-fixed-top-right position-absolute m-2"><i
                  class="fal fa-minus-circle"></i></a>
            </div>
          </div>
        </div>
        <div class="list-group-item bg-transparent">
          <a href="compare-details.html" class="btn btn-lg btn-primary w-100 px-0 d-flex justify-content-center">
            Compare
          </a>
        </div>
      </div>
    </div>
    <div class="d-none" id="template-properties">
      <div class="marker-item" data-icon-marker="images/googlle-market-02.png" data-position="[-73.9893691, 40.6751204]"
        data-marker-style='{"className":"marker","style":{"width":"45px","height":"48px"},"popup":{"className":"popup-map-property","maxWidth":"269px"}}'>
        <div class="card border-0">
          <div class="position-relative hover-change-image bg-hover-overlay card-img-top"><img
              src="/images/properties-grid-73.jpg" alt="Home in Metric Way">
            <div class="card-img-overlay d-flex flex-column">
              <div><span class="badge badge-primary">For Sale</span></div>
              <div class="mt-auto d-flex hover-image">
                <ul class="list-inline mb-0 d-flex align-items-end mr-auto fs-14">
                  <li class="list-inline-item mr-2"><a href="#" class="text-white hover-primary"><i
                        class="far fa-images"></i><span class="pl-1">9</span></a></li>
                  <li class="list-inline-item" title="2 Video"><a href="#" class="text-white hover-primary"><i
                        class="far fa-play-circle"></i><span class="pl-1">2</span></a></li>
                </ul>
                <ul class="list-inline mb-0 mr-n3 d-flex">
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="far fa-heart"></i></a></li>
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="fas fa-exchange-alt"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body px-2 py-1">
            <h2 class="fs-16 mb-1"><a href="single-property-1.html" class="text-dark hover-primary">Home in Metric
                Way</a>
            </h2>
            <p class="font-weight-500 text-gray-light mb-0">1421 San Pedro St, Los Angeles</p>
            <p class="fs-17 pt-1 font-weight-bold text-heading mb-0 lh-16">$1.250.000</p>
          </div>
          <div class="card-footer bg-transparent px-2 py-2">
            <ul class="list-inline mb-0">
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                  <use xlink:href="#icon-bedroom"></use>
                </svg>
                3 Br
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-shower fs-18 text-primary mr-1">
                  <use xlink:href="#icon-shower"></use>
                </svg>
                3 Ba
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13">
                <svg class="icon icon-square fs-18 text-primary mr-1">
                  <use xlink:href="#icon-square"></use>
                </svg>
                2300 Sq.Ft
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="marker-item" data-icon-marker="images/googlle-market-02.png" data-position="[-73.9934889, 40.6743149]"
        data-marker-style='{"className":"marker","style":{"width":"45px","height":"48px"},"popup":{"className":"popup-map-property","maxWidth":"269px"}}'>
        <div class="card border-0">
          <div class="position-relative hover-change-image bg-hover-overlay card-img-top"><img
              src="/images/properties-grid-69.jpg" alt="Home in Metric Way">
            <div class="card-img-overlay d-flex flex-column">
              <div><span class="badge badge-primary">For Sale</span></div>
              <div class="mt-auto d-flex hover-image">
                <ul class="list-inline mb-0 d-flex align-items-end mr-auto fs-14">
                  <li class="list-inline-item mr-2"><a href="#" class="text-white hover-primary"><i
                        class="far fa-images"></i><span class="pl-1">9</span></a></li>
                  <li class="list-inline-item" title="2 Video"><a href="#" class="text-white hover-primary"><i
                        class="far fa-play-circle"></i><span class="pl-1">2</span></a></li>
                </ul>
                <ul class="list-inline mb-0 mr-n3 d-flex">
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="far fa-heart"></i></a></li>
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="fas fa-exchange-alt"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body px-2 py-1">
            <h2 class="fs-16 mb-1"><a href="single-property-1.html" class="text-dark hover-primary">Home in Metric
                Way</a>
            </h2>
            <p class="font-weight-500 text-gray-light mb-0">1421 San Pedro St, Los Angeles</p>
            <p class="fs-17 pt-1 font-weight-bold text-heading mb-0 lh-16">$1.250.000</p>
          </div>
          <div class="card-footer bg-transparent px-2 py-2">
            <ul class="list-inline mb-0">
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                  <use xlink:href="#icon-bedroom"></use>
                </svg>
                3 Br
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-shower fs-18 text-primary mr-1">
                  <use xlink:href="#icon-shower"></use>
                </svg>
                3 Ba
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13">
                <svg class="icon icon-square fs-18 text-primary mr-1">
                  <use xlink:href="#icon-square"></use>
                </svg>
                2300 Sq.Ft
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="marker-item" data-icon-marker="images/googlle-market-03.png" data-position="[-73.9947227, 40.6734035]"
        data-marker-style='{"className":"marker","style":{"width":"45px","height":"48px"},"popup":{"className":"popup-map-property","maxWidth":"269px"}}'>
        <div class="card border-0">
          <div class="position-relative hover-change-image bg-hover-overlay card-img-top"><img
              src="/images/properties-grid-71.jpg" alt="Home in Metric Way">
            <div class="card-img-overlay d-flex flex-column">
              <div><span class="badge badge-indigo">for Rent</span></div>
              <div class="mt-auto d-flex hover-image">
                <ul class="list-inline mb-0 d-flex align-items-end mr-auto fs-14">
                  <li class="list-inline-item mr-2"><a href="#" class="text-white hover-primary"><i
                        class="far fa-images"></i><span class="pl-1">9</span></a></li>
                  <li class="list-inline-item"><a href="#" class="text-white hover-primary"><i
                        class="far fa-play-circle"></i><span class="pl-1">2</span></a></li>
                </ul>
                <ul class="list-inline mb-0 d-flex mr-n3">
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="far fa-heart"></i></a></li>
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="fas fa-exchange-alt"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body px-2 py-1">
            <h2 class="fs-16 mb-1"><a href="single-property-1.html" class="text-dark hover-primary">Home in Metric
                Way</a>
            </h2>
            <p class="font-weight-500 text-gray-light mb-0">1421 San Pedro St, Los Angeles</p>
            <p class="fs-17 pt-1 font-weight-bold text-heading mb-0 lh-16">$2500<span
                class="fs-14 font-weight-500 text-gray-light"> /month</span></p>
          </div>
          <div class="card-footer bg-transparent px-2 py-2">
            <ul class="list-inline mb-0">
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                  <use xlink:href="#icon-bedroom"></use>
                </svg>
                3 Br
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-shower fs-18 text-primary mr-1">
                  <use xlink:href="#icon-shower"></use>
                </svg>
                3 Ba
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13">
                <svg class="icon icon-square fs-18 text-primary mr-1">
                  <use xlink:href="#icon-square"></use>
                </svg>
                2300 Sq.Ft
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="marker-item" data-icon-marker="images/googlle-market-02.png" data-position="[-73.9968864, 40.6747657]"
        data-marker-style='{"className":"marker","style":{"width":"45px","height":"48px"},"popup":{"className":"popup-map-property","maxWidth":"269px"}}'>
        <div class="card border-0">
          <div class="position-relative hover-change-image bg-hover-overlay card-img-top"><img
              src="/images/properties-grid-72.jpg" alt="Home in Metric Way">
            <div class="card-img-overlay d-flex flex-column">
              <div><span class="badge badge-primary">For Sale</span></div>
              <div class="mt-auto d-flex hover-image">
                <ul class="list-inline mb-0 d-flex align-items-end mr-auto fs-14">
                  <li class="list-inline-item mr-2"><a href="#" class="text-white hover-primary"><i
                        class="far fa-images"></i><span class="pl-1">9</span></a></li>
                  <li class="list-inline-item"><a href="#" class="text-white hover-primary"><i
                        class="far fa-play-circle"></i><span class="pl-1">2</span></a></li>
                </ul>
                <ul class="list-inline mb-0 d-flex mr-n3">
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="far fa-heart"></i></a></li>
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="fas fa-exchange-alt"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body px-2 py-1">
            <h2 class="fs-16 mb-1"><a href="single-property-1.html" class="text-dark hover-primary">Home in Metric
                Way</a>
            </h2>
            <p class="font-weight-500 text-gray-light mb-0">1421 San Pedro St, Los Angeles</p>
            <p class="fs-17 pt-1 font-weight-bold text-heading mb-0 lh-16">$1.250.000</p>
          </div>
          <div class="card-footer bg-transparent px-2 py-2">
            <ul class="list-inline mb-0">
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                  <use xlink:href="#icon-bedroom"></use>
                </svg>
                3 Br
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-shower fs-18 text-primary mr-1">
                  <use xlink:href="#icon-shower"></use>
                </svg>
                3 Ba
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13">
                <svg class="icon icon-square fs-18 text-primary mr-1">
                  <use xlink:href="#icon-square"></use>
                </svg>
                2300 Sq.Ft
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="marker-item" data-icon-marker="images/googlle-market-02.png" data-position="[-73.9929114, 40.6731454]"
        data-marker-style='{"className":"marker","style":{"width":"45px","height":"48px"},"popup":{"className":"popup-map-property","maxWidth":"269px"}}'>
        <div class="card border-0">
          <div class="position-relative hover-change-image bg-hover-overlay card-img-top"><img
              src="/images/properties-grid-70.jpg" alt="Home in Metric Way">
            <div class="card-img-overlay d-flex flex-column">
              <div><span class="badge badge-primary">For Sale</span></div>
              <div class="mt-auto d-flex hover-image">
                <ul class="list-inline mb-0 d-flex align-items-end mr-auto fs-14">
                  <li class="list-inline-item mr-2"><a href="#" class="text-white hover-primary"><i
                        class="far fa-images"></i><span class="pl-1">9</span></a></li>
                  <li class="list-inline-item"><a href="#" class="text-white hover-primary"><i
                        class="far fa-play-circle"></i><span class="pl-1">2</span></a></li>
                </ul>
                <ul class="list-inline mb-0 d-flex mr-n3">
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="far fa-heart"></i></a></li>
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="fas fa-exchange-alt"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body px-2 py-1">
            <h2 class="fs-16 mb-1"><a href="single-property-1.html" class="text-dark hover-primary">Home in Metric
                Way</a>
            </h2>
            <p class="font-weight-500 text-gray-light mb-0">1421 San Pedro St, Los Angeles</p>
            <p class="fs-17 pt-1 font-weight-bold text-heading mb-0 lh-16">$1.250.000</p>
          </div>
          <div class="card-footer bg-transparent px-2 py-2">
            <ul class="list-inline mb-0">
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                  <use xlink:href="#icon-bedroom"></use>
                </svg>
                3 Br
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-shower fs-18 text-primary mr-1">
                  <use xlink:href="#icon-shower"></use>
                </svg>
                3 Ba
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13">
                <svg class="icon icon-square fs-18 text-primary mr-1">
                  <use xlink:href="#icon-square"></use>
                </svg>
                2300 Sq.Ft
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="marker-item" data-icon-marker="images/googlle-market-03.png" data-position="[-73.9927934, 40.674364]"
        data-marker-style='{"className":"marker","style":{"width":"45px","height":"48px"},"popup":{"className":"popup-map-property","maxWidth":"269px"}}'>
        <div class="card border-0">
          <div class="position-relative hover-change-image bg-hover-overlay card-img-top"><img
              src="/images/properties-grid-68.jpg" alt="Home in Metric Way">
            <div class="card-img-overlay d-flex flex-column">
              <div><span class="badge badge-indigo">for Rent</span></div>
              <div class="mt-auto d-flex hover-image">
                <ul class="list-inline mb-0 d-flex align-items-end mr-auto fs-14">
                  <li class="list-inline-item mr-2"><a href="#" class="text-white hover-primary"><i
                        class="far fa-images"></i><span class="pl-1">9</span></a></li>
                  <li class="list-inline-item" title="2 Video"><a href="#" class="text-white hover-primary"><i
                        class="far fa-play-circle"></i><span class="pl-1">2</span></a></li>
                </ul>
                <ul class="list-inline mb-0 mr-n3 d-flex">
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="far fa-heart"></i></a></li>
                  <li class="list-inline-item mr-3 h-32 d-flex align-items-end"><a href="#"
                      class="text-white fs-20 hover-primary"><i class="fas fa-exchange-alt"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body px-2 py-1">
            <h2 class="fs-16 mb-1"><a href="single-property-1.html" class="text-dark hover-primary">Home in Metric
                Way</a>
            </h2>
            <p class="font-weight-500 text-gray-light mb-0">1421 San Pedro St, Los Angeles</p>
            <p class="fs-17 pt-1 font-weight-bold text-heading mb-0 lh-16">$2500<span
                class="fs-14 font-weight-500 text-gray-light"> /month</span></p>
          </div>
          <div class="card-footer bg-transparent px-2 py-2">
            <ul class="list-inline mb-0">
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-bedroom fs-18 text-primary mr-1">
                  <use xlink:href="#icon-bedroom"></use>
                </svg>
                3 Br
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13 mr-sm-5">
                <svg class="icon icon-shower fs-18 text-primary mr-1">
                  <use xlink:href="#icon-shower"></use>
                </svg>
                3 Ba
              </li>
              <li class="list-inline-item text-gray font-weight-500 fs-13">
                <svg class="icon icon-square fs-18 text-primary mr-1">
                  <use xlink:href="#icon-square"></use>
                </svg>
                2300 Sq.Ft
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- FOOTER -->



  <div class="modal fade login-register login-register-modal" id="filtros-busca" tabindex="-1" role="dialog"
    aria-labelledby="filtros-busca" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mxw-571" role="document">
      <div class="modal-content">
        <div class="card-body py-6 py-md-0 px-0">
          <div class="card mb-6">
          
            <div class="card-body p-6">
            <button type="fa close" class="btn-close" aria-label="Close"></button>
              <h3 class="card-title mb-0 text-heading fs-22 lh-15">Tipo categoria</h3>
              <div class="row">

                <!-- Categorias -->
                <div class="col-sm-6 col-lg-6">
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item px-0 pt-3 pb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="features[]" id="Tours">
                        <label class="custom-control-label" for="Tours">Tours</label>
                      </div>
                    </li>
                    <li class="list-group-item px-0 pt-3 pb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="features[]" id="Cars">
                        <label class="custom-control-label" for="Cars">Cars</label>
                      </div>
                    </li>
                  </ul>
                </div>

                <div class="col-sm-6 col-lg-6">
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item px-0 pt-3 pb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="features[]" id="Hotels">
                        <label class="custom-control-label" for="Hotels">Hotels</label>
                      </div>
                    </li>
                    <li class="list-group-item px-0 pt-3 pb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="features[]" id="Transfer">
                        <label class="custom-control-label" for="Transfer">Transfer</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Quartos -->

            <div class="card-body p-6">
              <h3 class="card-title mb-0 text-heading fs-22 lh-15">Quartos</h3>
              <div class="row">
                <div class="col-sm-6 col-lg-6">
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item px-0 pt-3 pb-2">
                      <div class="custom-control custom-checkbox d-inline-block mr-3">
                        <input type="checkbox" class="custom-control-input" name="features[1]" id="quarto1">
                        <label class="custom-control-label" for="quarto1">+1</label>
                      </div>
                      <div class="custom-control custom-checkbox d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="features[2]" id="quarto2">
                        <label class="custom-control-label" for="quarto2">+2</label>
                      </div>
                      <div class="custom-control custom-checkbox d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="features[3]" id="quarto3">
                        <label class="custom-control-label" for="quarto3">+3</label>
                      </div>
                      <div class="custom-control custom-checkbox d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="features[4]" id="quarto4">
                        <label class="custom-control-label" for="quarto4">+4</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>



            <!-- Banheiros -->

            <div class="card-body p-6">
              <h3 class="card-title mb-0 text-heading fs-22 lh-15">Banheiros</h3>
              <div class="row">
                <div class="col-sm-6 col-lg-6">
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item px-0 pt-3 pb-2">
                      <div class="custom-control custom-checkbox d-inline-block mr-3">
                        <input type="checkbox" class="custom-control-input" name="features[1]" id="banheiro1">
                        <label class="custom-control-label" for="banheiro1">+1</label>
                      </div>
                      <div class="custom-control custom-checkbox d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="features[2]" id="banheiro2">
                        <label class="custom-control-label" for="banheiro2">+2</label>
                      </div>
                      <div class="custom-control custom-checkbox d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="features[3]" id="banheiro3">
                        <label class="custom-control-label" for="banheiro3">+3</label>
                      </div>
                      <div class="custom-control custom-checkbox d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="features[4]" id="banheiro4">
                        <label class="custom-control-label" for="banheiro4">+4</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Estacionamento -->

            <div class="card-body p-6">
              <h3 class="card-title mb-0 text-heading fs-22 lh-15">Estacionamento</h3>
              <div class="row">
                <div class="col-sm-6 col-lg-6">
                  <ul class="list-group list-group-no-border">
                    <li class="list-group-item px-0 pt-3 pb-2">
                      <div class="custom-control custom-checkbox d-inline-block mr-3">
                        <input type="checkbox" class="custom-control-input" name="features[w]" id="whatever">
                        <label class="custom-control-label" for="whatever">Whatever</label>
                      </div>
                      <div class="custom-control custom-checkbox d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="features[1]" id="estacionamento1">
                        <label class="custom-control-label" for="estacionamento1">+1</label>
                      </div>
                      <div class="custom-control custom-checkbox d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="features[2]" id="estacionamento2">
                        <label class="custom-control-label" for="estacionamento2">+2</label>
                      </div>
                      <div class="custom-control custom-checkbox d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="features[3]" id="estacionamento3">
                        <label class="custom-control-label" for="estacionamento3">+3</label>
                      </div>
                      <div class="custom-control custom-checkbox d-inline-block">
                        <input type="checkbox" class="custom-control-input" name="features[4]" id="estacionamento4">
                        <label class="custom-control-label" for="estacionamento4">+4</label>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              
            </div>

            <!-- Area -->
            <button type="button" class="btn btn-primary" style="width: 50%; height: 5%; margin-left: 25%;">Search</button>
          </div>
        </div>
      </div>
    </div>
  </div>





  <?php
  
  require_once ('require/footer.php');
  require_once ('require/svg.php');
  
  ?>

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

  <!-- Carregar a API do Google Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGR_LrkKpQfxjt7maRbQ0nlj3hn5R936c&callback=initMap&v=weekly"
    async defer></script>

  <!-- Theme scripts -->
  <script src="/js/theme.js"></script>

  <script src="/js/script.js"></script>
 


  <script src="https://accounts.google.com/gsi/client"></script>
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>

  <?php require_once ('require/login.php') ?>

</body>

</html>