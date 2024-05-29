<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Real Estate Html Template">
  <meta name="author" content="">
  <meta name="generator" content="Jekyll">
  <title>Joviplanet &#8211; Vendas, Arrendamento &amp; Férias</title>
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
  <!----FontAwesome--->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <!-- Twitter -->
  
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@">
  <meta name="twitter:creator" content="@">
  <meta name="twitter:title" content="Home 01">
  <meta name="twitter:description" content="Real Estate Html Template">
  <meta name="twitter:image" content="images/homeid-social-logo.png">
  <!-- Facebook -->
  <meta property="og:url" content="/">
  <meta property="og:title" content="Home 01">
  <meta property="og:description" content="Real Estate Html Template">
  <meta property="og:type" content="website">
  <meta property="og:image" content="/images/homeid-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  
  
  
  <?php require_once ('require/scriptshead.php'); ?>
  
  
  
  <script src="../../teste.js"></script>
  
</head>

<body>
  <div class="gtranslate_wrapper"></div>
  <style>

.animated-box {
    opacity: 0; /* Inicialmente, a div é transparente */
    transition: opacity 0.5s ease, transform 0.5s ease; /* Transição suave */
    transform: translateY(50px); /* A div começa deslocada para baixo */
}

.animated-box:hover {
    opacity: 1; /* Torna a div visível */
    transform: translateY(0); /* Move a div de volta para a posição original */
}




    #gt_float_wrapper {
    top: 75px !important;
    right: 0px !important;
    z-index: 10 !important;
    }

    .main-header .dropdown-menu {
    z-index: 20 !important;
    }

    /* Cor de fundo do botão quando está inativo */
    .btn-secondary {
    border-radius: 100px;
    color: #000;
    background-color: #134946 !important;
    border-color: #ffffff;
    }

    /* Cor de fundo do botão quando está ativo */
    .btn-secondary:active {
    background-color: #4CAF50 !important;
    /* Verde */
    }


    .col-lg-12 {
                    padding-top: 50px;
                    padding-right: 150px;
                    padding-left: 50px;
                    padding-bottom: 50px;
                    background: rgba(0, 0, 0, 0);
                    margin-top: 200px;
                    border-radius: 10px;
                  }

                  @media (min-width: 400px) {
                    .col-lg-12 {
                      margin-top: 20px;
                      /* Insira aqui as regras CSS para telas menores que 992px */
                    }
                  }



</style>

  <?php require_once ('require/header.php'); ?>

  <!--BODY-->
  <main id="content">

    <section class="d-flex flex-column">
      <div style="background-image: url('/images/background/bg-home.png')"
        class="bg-cover d-flex align-items-center custom-vh-100">
        <div class="container pt-lg-15 py-8" data-animate="zoomIn">


          <div class="bg-white px-3 rounded-bottom rounded-top-right pb-6 pb-lg-0"
            style="max-width: 567px !important; height: 513px !important; margin-left: 111px; border-radius: 2% !important; ">
            <h5 style="padding-top: 30px; margin-left: 5px; font-size: 30px; color: #000;   font-weight:600;"
              id="tituloBoxHome">
              Compre & Arrende em <br> Lugares incríveis
            </h5>
            <h7 style="font-size:14px; color: #ccc; padding-top: 20px; margin-left: 5px; color: #000" id="spanBoxHome">
              Compre & Arrende em Lugares incríveis
            </h7>
            <form class="bg-white px-6 pb-6 pb-lg-0" action="/result-search">

              <div class="row no-gutters mb-4" style="padding-left: 5%; padding-top:3%;">


                <div class="btn-group btn-group-toggle"
                  style="display: flex; justify-content: center; align-items: center; box-shadow: rgb(200, 208, 231) 3.2px 3.2px 8px 0px inset, rgb(255, 255, 255) -3.2px -3.2px 8px 0px inset; border-radius: 100px; margin-left: 2px;"
                  data-toggle="buttons">

                  <label id="tituloBuscaBox1" onclick="mostraBox(1)"
                    class="btn btn-secondary  btn shadow-none text-grey text-btn-focus-bg-secondary border-0  align-items-center fs-12 text-active-white letter-spacing-087 flex-md-1  "
                    style="border-radius:100px; color: #000;  width: 140px;">
                    <input type="radio" name="options" id="option1" checked> Comprar
                  </label>

                  <label id="tituloBuscaBox2" onclick="mostraBox(2)"
                    class="btn shadow-none text-grey text-btn-focus-bg-secondary  border-0   align-items-center fs-12 text-active-white letter-spacing-087 flex-md-1 "
                    style="border-radius:100px; color: #000;   width: 140px;">
                    <input type="radio" name="options" id="option2"> Arrendar
                  </label>

                  <label id="tituloBuscaBox3" onclick="mostraBox(3)"
                    class="btn  shadow-none text-grey text-btn-focus-bg-secondary  border-0   align-items-center fs-12  text-active-white letter-spacing-087 flex-md-1 "
                    style="border-radius:100px; color: #000;    width: 140px;">
                    <input type="radio" name="options" id="option3"> Férias
                  </label>

               
                </div>


                <input type="hidden" name="tipoBusca" id="tipoBusca" value="1">





              </div>

<!-- 

              <label class="text-uppercase font-weight-500 letter-spacing-093"
                style="text-decoration: none !important;"></label>
 -->
              <!----BOX PESQUISA----->
              <div class="col-md-6 col-lg-10 col-xl-10 pt-5  pt-lg-0 " style="margin-left: -40px !important; text-decoration: none !important;">

                                                <div class="position-relative mb-4"
                                                  style="padding-top: 5px; height: 45px; width: 142%; border-radius: 5px; border: 1px solid #a6a6a6  !important;">
                                                  
                                                  <input type="text" name="search" id="search"
                                                    class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border border-bottom-0 rounded-0 h-32 lh-17 pl-2 pr-4 fs-20 font-weight-500 border-color-input "
                                                    placeholder="Localization" style="text-decoration: none !important; ">
                                                  </a>
                                                </div> 
 
                                                


              </div>


              <div id="BoxDePesquisaFerias" style="display:none">
                 <!--  <div class="col-md-6 col-lg-10 col-xl-10 pt-5 pb-5 pt-lg-0 " style="margin-left: -40px !important; text-decoration: none !important;">

                          <div style="padding-right:20px !important; padding-top: 10px; width: 142%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6  !important;">

                                                  <select class="form-control selectpicker bg-transparent border-bottom-0 rounded-0 "
                                                    data-style="p-0 h-32 lh-17 fs-14 text-black pl-2 mb-0.7" name="categoria" id="categoria">
                                                    
                                                    
                                                    <option value="0">Onde Ir</option><?php




                                                    $sql_PaisImovel = "SELECT codigoPAIS, nomePAIS  FROM tb0039_pais WHERE ativoPAIS = 1";
                                                    try {

                                                      $query_PaisImovel = $PDO->prepare($sql_PaisImovel);
                                                      $query_PaisImovel->execute();

                                                    } catch (PDOexception $error_sql) {

                                                      echo 'Erro ao retornar os Dados.' . $error_sql->getMessage();

                                                    }

                                                    while ($PaisImovel = $query_PaisImovel->fetch(PDO::FETCH_ASSOC)) {

                                                      ?>
                                                    <option value="<?php echo $PaisImovel['codigoPAIS']; ?>">
                                                      <?php echo $PaisImovel['nomePAIS']; ?>
                                                    </option>


                                                    <?php } ?>
                                                  </select>
                                                </div>

              </div> -->


              <div class="row pl-0 pb-5 ml-0">

                                                <!------------------------------------------------------------------------------------------------------------------>

                                                 


                                                <div class="col-md-6 col-lg-6 col-xl-6 pt-0 pl-0  ml-0">
                                                  <div style=" width: 100%; height: 45px; margin-left:-25px; border-radius: 5px;  border: 1px solid #a6a6a6   !important;">
                                                    <input type="date" name="inicio" id="inicio"
                                                      class="form-control bg-transparent shadow-none border-0 rounded-0 h-45 lh-17  "
                                                       >

                                                  </div>
                                                </div>
                                                 

                                                <div class="col-md-6 col-lg-6 col-xl6 pt-0 pl-0 pr-0">
                                                  <div style="  width: 100%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6  !important;">
                                                    <input type="date" name="final" id="final"
                                                      class="form-control bg-transparent shadow-none rounded-0 h-45 lh-17  border-0"
                                                       >

                                                  </div>
                                                </div>
               </div>

<div class="col-md-6 col-lg-10 col-xl-10 pt-5 pb-5 pt-lg-0 " style="margin-left: -40px !important; text-decoration: none !important;">
<div style=" padding-top: 5px; width: 142%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6  !important;">
<input type="hidden" name="BoxConvidadosAberto" id="BoxConvidadosAberto" value="0">
<input
type="text"
name="convidados"
id="convidados"
onclick="AbreBox()"
class="form-control bg-transparent shadow-none rounded-0 h-45 lh-17   border-0"
placeholder="Hospedes?"
>

                      </div>

                    <div class="pl-5 pt-5" id="BoxConvidados" style="color:#000; padding: 5px; margin-top5px; width: 131%;
                    min-height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6  !important;position: absolute;background: #FFF;z-index: 1000; display:none">
                      <div class="row mb-5" >
                      <input type="hidden" name="BoxConvidadosAdultos" id="BoxConvidadosAdultos" value="0">
                      <div class="col-md-1 col-lg-1 col-xl-1" id="BoxConvidadosAdultosText">0</div>
                      <div class="col-md-7 col-lg-7 col-xl-7">ADULTOS</div>
                      <div class="col-md-1 col-lg-1 col-xl-2"><button type="button" class="btn btn-primary btn-sm" onclick="somaConta('Adultos','subtrai')">-</button></div>
                      <div class="col-md-1 col-lg-1 col-xl-2"><button type="button" class="btn btn-primary btn-sm" onclick="somaConta('Adultos','soma')">+</button></div>
                    
                    

                    </div>
                    <div class="row mb-5">
                      <input type="hidden" name="BoxConvidadosCriancas" id="BoxConvidadosCriancas" value="0">
                      <div class="col-md-1 col-lg-1 col-xl-1" id="BoxConvidadosCriancasText">0</div>
                      <div class="col-md-7 col-lg-7 col-xl-7">CRIANÇAS</div>
                      <div class="col-md-1 col-lg-1 col-xl-2"><button type="button" class="btn btn-primary btn-sm" onclick="somaConta('Criancas','subtrai')">-</button></div>
                      <div class="col-md-1 col-lg-1 col-xl-2"><button type="button" class="btn btn-primary btn-sm" onclick="somaConta('Criancas','soma')">+</button></div>
                    
                    

                    </div>

                    <div class="row mb-5">

                    <input type="hidden" name="BoxConvidadosBebes" id="BoxConvidadosBebes" value="0">
                    <div class="col-md-1 col-lg-1 col-xl-1" id="BoxConvidadosBebesText">0</div>
                      <div class="col-md-7 col-lg-7 col-xl-7">BEBÊS (Até 2 anos)</div>
                      <div class="col-md-1 col-lg-1 col-xl-2"><button type="button" class="btn btn-primary btn-sm" onclick="somaConta('Bebes','subtrai')">-</button></div>
                      <div class="col-md-1 col-lg-1 col-xl-2"><button type="button" class="btn btn-primary btn-sm" onclick="somaConta('Bebes','soma')">+</button></div>
                    

                    </div>
                    <div class="row mb-5">

                    <input type="hidden" name="BoxConvidadosAnimais" id="BoxConvidadosAnimais" value="0">
                    <div class="col-md-1 col-lg-1 col-xl-1" id="BoxConvidadosAnimaisText">0</div>
                      <div class="col-md-7 col-lg-7 col-xl-7">ANIMAIS</div>
                      <div class="col-md-1 col-lg-1 col-xl-2"><button type="button" class="btn btn-primary btn-sm" onclick="somaConta('Animais','subtrai')">-</button></div>
                      <div class="col-md-1 col-lg-1 col-xl-2"><button type="button" class="btn btn-primary btn-sm" onclick="somaConta('Animais','soma')">+</button></div>
                    

                    </div>
                  
                  
                  </div>

                  </div>


              </div>
            <div id="BoxDePesquisaCompraArrenda" style="display:block">
              
                                                            
              
            <div class="col-md-6 col-lg-10 col-xl-10 pt-5 pb-5 pt-lg-0 " style="margin-left: -40px !important; text-decoration: none !important;">
                                                
                                                <div style="padding-right:20px !important; padding-top: 10px; width: 142%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6  !important;">

                                                  <select class="form-control selectpicker bg-transparent border-bottom-0 rounded-0 "
                                                    data-style="p-0 h-32 lh-17 fs-14 text-black pl-2 mb-0.7" name="categoria" id="categoria">
                                                    <?php

                                                    $sql_CategoriasImaveis = "SELECT codigoCATEGORIA, nomeCATEGORIA, imagemCATEGORIA FROM tb0001_categorias WHERE ativoCATEGORIA = 1";
                                                    try {

                                                      $query_CategoriasImaveis = $PDO->prepare($sql_CategoriasImaveis);
                                                      $query_CategoriasImaveis->execute();

                                                    } catch (PDOexception $error_sql) {

                                                      echo 'Erro ao retornar os Dados.' . $error_sql->getMessage();

                                                    }

                                                    while ($CategoriasImaveis = $query_CategoriasImaveis->fetch(PDO::FETCH_ASSOC)) {

                                                      ?>
                                                    <option value="<?php echo $CategoriasImaveis['codigoCATEGORIA']; ?>">
                                                      <?php echo $CategoriasImaveis['nomeCATEGORIA']; ?>
                                                    </option>


                                                    <?php } ?>
                                                  </select>
                                                </div>
                                                </div>

                                                <div class="row pl-0">

                                                <!------------------------------------------------------------------------------------------------------------------>
<script>



function trocaMoeda(DADOS){
          

  $('#moedade').attr('placeholder',DADOS+' 50,000');
  $('#moedapara').attr('placeholder',DADOS+' 250,000');
 
  
        }


</script>
                                                <div class="col-md-6 col-lg-3 col-xl-3 pt-0 ml-0 pl-0 ">
                                                  <div
                                                    style="padding-right:20px !important; margin-left: -10px; padding-top: 10px; width: 100%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6  !important;">
                                                    <select class="form-control selectpicker bg-transparent border-bottom-0 rounded-0 "
                                                      data-style="p-0 h-32 lh-17 fs-14 text-black pl-2 mb-0.7" name="moeda" id="moeda"
                                                      onchange="trocaMoeda(this.value)"
                                                      >
                                                      <?php

                                                        $sql_MoedaImovel = "SELECT simboloMOEDA, isoMOEDA FROM tb0040_moedas WHERE ativoMOEDA = 1
                                                        
                                                        GROUP BY simboloMOEDA, isoMOEDA 
                                                        ORDER BY isoMOEDA ASC";
                                                        try {

                                                          $query_MoedaImovel = $PDO->prepare($sql_MoedaImovel);
                                                          $query_MoedaImovel->execute();

                                                        } catch (PDOexception $error_sql) {

                                                          echo 'Erro ao retornar os Dados.' . $error_sql->getMessage();

                                                        }

                                                        while ($MoedaImovel = $query_MoedaImovel->fetch(PDO::FETCH_ASSOC)) {

                                                          ?>
                                                        <option value="<?php echo $MoedaImovel['simboloMOEDA']; ?>">
                                                          <?php echo $MoedaImovel['isoMOEDA']; ?>
                                                        </option>


                                                      <?php } ?>
                                                    </select>
                                                  </div>
                                                </div>


                                                <div class="col-md-6 col-lg-3 col-xl-3 pt-0 pl-0 pr-0">
                                                  <div style=" width: 100%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6   !important;">
                                                    <input type="text" name="moedade" id="moedade"
                                                      class="form-control bg-transparent shadow-none border-0 rounded-0 h-45 lh-17  font-weight-600 "
                                                      placeholder="€ 50,000">

                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-1 col-xl-1 pt-2 text-center ">
                                                  <p class="text-dark ">To</p>
                                                </div>


                                                <div class="col-md-6 col-lg-3 col-xl-3 pt-0 pl-0 pr-0">
                                                  <div style="  width: 100%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6  !important;">
                                                    <input type="text" name="moedapara" id="moedapara"
                                                      class="form-control bg-transparent shadow-none rounded-0 h-45 lh-17 font-weight-600 border-0"
                                                      placeholder="€ 250,000">

                                                  </div>
                                                </div>
                                                </div>


            </div>

              <!----------------------------------------------------------------------------------------------------------------------->

              <div class="row align-items-center" id="accordion-4">


                <div class="col-sm pt-6 pt-lg-0 order-sm-4 order-6"
                  style="margin-top:20px; margin-bottom:20px; margin-left: -24px !important;">
                  <a href="#">
                    <button type="submit" class="btn btn-primary shadow-none fs-16 font-weight-600 w-50 py-lg-2 lh-50">
                      <i class="fal fa-search mr-1"></i>
                      Search
                    </button>
                  </a>
                </div>




              </div>
          </div>
          </form>
           
        </div>
      </div>
    </section>

    <!--BLOCO DE CATEGORIAS-->
    <section class="pt-lg-12 pb-lg-10 py-11">
      <div class="container container-xl">
        <h2 class="text-dark text-center">Encontre um lugar que se adapte ao seu conforto</h2>
        <h6 class="text-dark text-center">Explore nossa seleção dos melhores lugares ao redor do mundo!</h6>
        <span class="heading-divider mx-auto"></span>
        <div class="row galleries">

          <div class="col-md-14">
            <div class="row h-50">
              <div class="col-sm-1 col-md-6 mb-1">
                <div class="item item-size-1-1">
                  <a href="images/gallery-lg-01.jpg" class="card p-0 hover-zoom-in" data-gtf-mfp="true"
                    data-gallery-id="01">
                    <div class="card-img img" style="background-image:url('/images/gallery-01.jpg')">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!--------------------------------------->

          <div class="col-xl">
            <div class="row h-50">

              <div class="col-sm-6 col-md-6 mb-6">

                <div class="item item-size-2-1" style="
    max-height: 212px;
">

                  <div class="card p-0 hover-zoom-in hover-change-image">

                    <a href="/category/apartamento" class="card-img"
                      style="background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5)), url('/images/Figma/grid01.jpg')">

                    </a>

                  </div>
                  <span
                    style="margin-left: 40%;margin-top: 30%;text-align: center;font-size: 18px;position: absolute;z-index: 100;color: #ffffff;">Apartment</span>
                </div>


                <!------  
                
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/imagem-contato.png'); background-size: cover; width: 100%; height: 100vh; 
                
                
                  -->
              </div>

              <div class="col-sm-6 col-md-3 mb-6">
                <div class="item item-size-1-1" style="
    max-height: 212px;
">
                  <div class="card p-0 hover-zoom-in hover-change-image">
                    <a href="/category/castelo" class="card-img"
                      style="background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5)), url('/images/Figma/grid02.png')">
                    </a>
                  </div>
                </div>
                <span
                  style="margin-left: 35%;margin-top: -14%;text-align: center;font-size: 18px;position: absolute;z-index: 100;color: #ffffff;">Castle</span>
              </div>

              <div class="col-sm-6 col-md-3 mb-6">
                <div class="item item-size-1-1" style="
    max-height: 212px;
">
                  <div class="card p-0 hover-zoom-in hover-change-image">
                    <a href="/category/condominio" class="card-img"
                      style="background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5)), url('/images/Figma/grid03.jpg')">
                    </a>
                  </div>
                </div>
                <span
                  style="margin-left: 35%;margin-top: -14%;text-align: center;font-size: 18px;position: absolute;z-index: 100;color: #ffffff;">Condo</span>
              </div>

              <div class="col-sm-6 col-md-3 mb-6">
                <div class="item item-size-1-1" style="
    max-height: 212px;
">
                  <div class="card p-0 hover-zoom-in hover-change-image">
                    <a href="/category/hotel" class="card-img"
                      style="background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5)), url('/images/Figma/grid04.png')">
                    </a>
                  </div>
                </div>
                <span
                  style="margin-left: 35%;margin-top: -14%;text-align: center;font-size: 18px;position: absolute;z-index: 100;color: #ffffff;">Hotel</span>
              </div>

              <div class="col-sm-6 col-md-3 mb-6">
                <div class="item item-size-1-1" style="
    max-height: 212px;
">
                  <div class="card p-0 hover-zoom-in hover-change-image">
                    <a href="/category/casa" class="card-img"
                      style="background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5)), url('/images/Figma/grid05.jpg')">
                    </a>
                  </div>
                </div>
                <span
                  style="margin-left: 35%;margin-top: -14%;text-align: center;font-size: 18px;position: absolute;z-index: 100;color: #ffffff;">House</span>
              </div>

              <div class="col-sm-6 col-md-6 mb-6">
                <div class="item item-size-2-1" style="
    max-height: 212px;
">
                  <div class="card p-0 hover-zoom-in hover-change-image">
                    <a href="/category/studio" class="card-img"
                      style="background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5)), url('/images/Figma/grid06.jpg')">
                    </a>
                  </div>
                </div>
                <span
                  style="margin-left: 40%;margin-top: -7%;text-align: center;font-size: 18px;position: absolute;z-index: 100;color: #ffffff;">Studio</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5" style="    
    display: flex;
    flex-direction: row;
    container-widget-width: calc((1 - var(--container-widget-flex-grow))* 100%);
    container-widget-height: 100%;
    container-widget-flex-grow: 1;
    container-widget-align-self: stretch;
    justify-content: space-between;
    align-items: center;
    background-transition: 0.3s;
    border-style: solid;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-block-start-width: 1px;
    border-inline-end-width: 1px;
    border-block-end-width: 1px;
    border-inline-start-width: 1px;
    border-color: #BA824F;
    border-color: #BA824F;
    border-radius: 10px 10px 10px 10px;
    margin-block-start: -10px;
    margin-block-end: 0px;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-block-start: 20px;
    padding-block-end: 20px;
    padding-inline-start: 37px;
   padding-inline-end: 37px; ">

          <div class="col-lg-8 " data-animate="fadeInLeft">

            <h2>Looking for something Premium?</h2>

          </div>

          <div class="col-lg-4 text-right" data-animate="fadeInLeft"><a href="#">
              <button type="submit" class="btn btn-primary fs-18  rounded-lg px-6 border-0"> See the premium
              </button></a>
          </div>



        </div>




      </div>



    </section>

    <!--BLOCO DO GLOBO MUNDIAL -->
    <section>
      <div class="pt-lg-13 pb-lg-12 py-11" style="background-image: url('/images/background/bg-global.jpg')">
        <div class="container container-xxl">
          <div class="row align-items-center">
            <div class="col-lg-6 pr-xl-8 pb-lg-0 pb-6" data-animate="fadeInLeft">
              <iframe src="https://my.spline.design/worldplanetcopycopy-f56ef145630812e1a4fef2484de9b755/"
                frameborder="0" width="100%" height="500px" style="
                  border-radius: 400px;
              "></iframe>
            </div>
            <div class="col-lg-6 pl-xl-8" data-animate="fadeInRight">
              <h2 class="text-white lh-1625">Find the ideal home in more <br>than <strong>15 different
                  countries</strong></h2>
              <span class="heading-divider"></span>
              <p class="mb-6 text-white">Breaking Borders, Expanding Connections <br>Visibility of properties at a
                global level for <br>buying, selling or holiday season.</p>
              <div class="input-group input-group-lg pr-sm-17">
                <a href="#">
                  <button onclick="mostraBox(1)" type="submit" class="btn btn-primary fs-18 rounded-left-0 rounded-lg px-6 border-0">
                    Search now
                  </button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- CASAS EM DESTAQUES -->

    <section class="pt-lg-12 pb-lg-10 py-11">
      <div class="container container-xxl">
        <h2 class="text-center" style="color: #BA824F;">Featured Homes</h2>
        <h6 class="text-dark text-center">Hand-picked selection of quality places</h6>
        <span class="heading-divider mx-auto"></span>

        <div class="slick-slider slick-dots-mt-0 custom-arrow-spacing-30"
          data-slick-options='{"slidesToShow": 4, "autoplay":true,"dots":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":3,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'>

          <?php

          $limite = 20;

          # Se pg não existe atribui 1 a variável pg
          $pg = (isset($_GET['pg'])) ? (int) $_GET['pg'] : 1;

          # Atribui a variável inicio o inicio de onde os registros vão ser
# mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
          $inicio = ($pg * $limite) - $limite;

          # seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
          $sql_Imovel = "

SELECT * FROM tb0031_imoveis

LEFT JOIN tb0001_categorias ON codigoCATEGORIA = categoriaIMOVEL 
LEFT JOIN tb0036_fotos ON codigoIMOVEL = imovelFOTO
LEFT JOIN tb0202_favoritos ON codigoIMOVEL = imovelFAVORITO AND usuarioFAVORITO = '" . @$usuario['codigoUSUARIO'] . "'
WHERE ativoIMOVEL = 1 AND destaqueIMOVEL = 1

";

          try {

            $query_Imovel = $PDO->prepare($sql_Imovel);
            $query_Imovel->execute();

          } catch (PDOexception $error_sql) {

            echo 'Erro ao retornar os Dados.' . $error_sql->getMessage();

          }

          while ($imovel = $query_Imovel->fetch(PDO::FETCH_ASSOC)) {

            ?>


            <div class="box pb-7 pt-2">
              <div class="card shadow-hover-2" data-animate="zoomIn">
                <div class="hover-change-image bg-hover-overlay rounded-lg card-img-top">
                  <img src="/images/properties-grid-03.jpg" alt="Villa on Hollywood Boulevard">
                  <div class="card-img-overlay p-2 d-flex flex-column"
                    style="background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5));">
                    <?php if ($imovel['destaqueIMOVEL'] == 1) { ?>
                      <div>
                        <span class="badge mr-2" style="color: #fff; background-color: #23B0AA;">featured</span>
                      </div>
                    <?php } ?>
                    <?php if ($imovel['disponivelIMOVEL'] == 0) { ?>
                      <div style="margin-left: 65% !important; margin-top: -7% !important;">
                        <span class="badge mr-2" style="color: #fff; background-color: #fc0324;">Indisponivel</span>
                      </div>
                    <?php } ?>
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
                    <p class="fs-25 font-weight-500 text-heading mb-0"
                      style="color: #fff !important; margin-bottom: 0px !important;">$
                      <?php echo $imovel['valorIMOVEL']; ?></p>
                    <!-- <img src="../images/images.png"class="align-self-end " style="width: 14%; border-radius: 100px;"> -->
                  </div>

                  <div class="card-img-overlay p-2 d-flex flex-column"
                    style="position: relative; background-image: linear-gradient(rgba(0, 0, 0, -0.5), rgba(0, 0, 0, 0.5));">
                    <div style="position: absolute; top: 33px; right: 20px;">
                      <ul class="list-inline mb-0">

                        <?php if ($imovel['imovelFAVORITO'] == "") { ?>

                          <li class="list-inline-item">
                            <a href="javascript:;" onClick="FavoritoImovel('<?php echo $imovel['codigoIMOVEL']; ?>')"
                              class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body bg-hover-accent border-hover-accent"
                              data-toggle="tooltip" title="Wishlist"><i class="far fa-heart"></i></a>
                          </li>
                        <?php } else { ?>
                          <li class="list-inline-item">
                            <a href="javascript:;" onClick="DesFavoritoImovel('<?php echo $imovel['codigoIMOVEL']; ?>')"
                              class="w-40px h-40 border rounded-circle d-inline-flex align-items-center justify-content-center text-body text-secondary bg-hover-accent border-hover-accent"
                              data-toggle="tooltip" title="Remove Wishlist"><i class="fas fa-heart"></i></a>
                          </li>
                        <?php } ?>

                      </ul>
                    </div>
                  </div>


                </div>

                <div class="card-body pt-3">

                  <h2 class="card-title fs-16 lh-2 mb-0"><a href="page-final/<?php echo $imovel['codigoIMOVEL']; ?>"
                      style="color: #BA824F !important; font-weight: 600;"><?php echo $imovel['tituloIMOVEL']; ?></a></h2>
                  <p class="card-text font-weight-100 text-gray-light mb-2"><?php echo $imovel['enderecoIMOVEL']; ?></p>
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

              </div>
            </div>


          <?php } ?>
        </div>
      </div>
    </section>

    <!--BLOCO DE CASA PARA FERIAS-->

    <section>
      <div style="background-image: url('/images/Joviplanet_casa_ferias.png')"
        class="bg-cover d-flex align-items-center custom-vh-100">
        <div class="container container-xxl">
          <div class="row align-items-center text-center">
            <div class="col-lg-12 pl-xl-8 text-center" data-animate="fadeInRight">

              <h2 class="text-white lh-1625" style="margin-right: -70px !important;"> Find the ideal home for your <br>
                vacation</h2>
              <p class="mb-6 text-white" style="margin-right: -70px !important;">There are more than 15 different <br>
                countries</p>
              <a href="#">
                <button onclick="mostraBox(3)" type="submit" class="btn btn-primary fs-18 rounded-left-0 rounded-lg px-6 border-0"
                  style="margin-right: -70px !important;">
                  Search now
                </button>
              </a>
            </div>


          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- DESTINOS POPULARES -->
    <section class="pt-lg-12 pb-lg-15 py-11">
      <div class="container container-xxl">
        <h2 class="text-heading" style="text-align: center; color: #BA824F !important;">Trending Destinations</h2>
        <br>
        <p class="mb-7 fs-20" style="text-align: center;">Explore our selection of the best places around the world
        </p>
        <div class="slick-slider mx-n2" style="text-align: center;"
          data-slick-options='{"slidesToShow": 4,"arrows":false, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>

          <div class="box px-2" data-animate="fadeInUp">
            <div class="card text-white bg-overlay-gradient-8 hover-zoom-in" style="border-radius:20px;">
              <img src="/images/France.png" class="card-img" alt="Fort Worth">
              <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                <h2 class="card-title mb-0 fs-20 lh-182"><a href="/result-search?search=france" class="text-white">France</a>
                </h2>
              </div>
            </div>
          </div>

          <div class="box px-2" data-animate="fadeInUp">
            <div class="card text-white bg-overlay-gradient-8 hover-zoom-in" style="border-radius:20px;">
              <img src="/images/Italy.png" class="card-img" alt="New York">
              <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                <h2 class="card-title mb-0 fs-20 lh-182"><a href="/result-search?search=italia" class="text-white">Italy</a>
                </h2>
              </div>
            </div>
          </div>

          <div class="box px-2" data-animate="fadeInUp">
            <div class="card text-white bg-overlay-gradient-8 hover-zoom-in" style="border-radius:20px;">
              <img src="/images/Portugal.png" class="card-img" alt="Los Angeles">
              <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                <h2 class="card-title mb-0 fs-20 lh-182"><a href="/result-search?search=portugal"
                    class="text-white">Portugal</a></h2>
              </div>
            </div>
          </div>

          <div class="box px-2" data-animate="fadeInUp">
            <div class="card text-white bg-overlay-gradient-8 hover-zoom-in" style="border-radius:20px;">
              <img src="/images/Spain.png" class="card-img" alt="Fort Worth">
              <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                <h2 class="card-title mb-0 fs-20 lh-182"><a href="/result-search?search=span" class="text-white">Spain</a>
                </h2>
              </div>
            </div>
          </div>
        </div>
        <br>

        <div class="slick-slider mx-n2" style="text-align: center;"
          data-slick-options='{"slidesToShow": 4,"arrows":false, "autoplay":false,"dots":false,"responsive":[{"breakpoint": 1200,"settings": {"slidesToShow":3}},{"breakpoint": 992,"settings": {"slidesToShow":3}},{"breakpoint": 768,"settings": {"slidesToShow": 2}},{"breakpoint": 576,"settings": {"slidesToShow": 1}}]}'>

          <div class="box px-2" data-animate="fadeInUp">
            <div class="card text-white bg-overlay-gradient-8 hover-zoom-in" style="border-radius:20px;">
              <img src="/images/Greece.png" class="card-img" alt="Kansas City">
              <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                <h2 class="card-title mb-0 fs-20 lh-182"><a href="/result-search?search=greece" class="text-white">Greece</a>
                </h2>
              </div>
            </div>
          </div>

          <div class="box px-2" data-animate="fadeInUp">
            <div class="card text-white bg-overlay-gradient-8 hover-zoom-in" style="border-radius:20px;">
              <img src="/images/Brazil.png" class="card-img" alt="Brazil">
              <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                <h2 class="card-title mb-0 fs-20 lh-182"><a href="/result-search?search=brazil" class="text-white">Brazil</a>
                </h2>
              </div>
            </div>
          </div>



          <div class="box px-2" data-animate="fadeInUp">
            <div class="card text-white bg-overlay-gradient-8 hover-zoom-in" style="border-radius:20px;">
              <img src="/images/USA.png" class="card-img" alt="Kansas City">
              <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                <h2 class="card-title mb-0 fs-20 lh-182"><a href="/result-search?search=usa" class="text-white">USA</a>
                </h2>
              </div>
            </div>
          </div>


          <div class="box px-2" data-animate="fadeInUp">
            <div class="card text-white bg-overlay-gradient-8 hover-zoom-in" style="border-radius:20px;">
              <img src="/images/Dubai.png" class="card-img" alt="Los Angeles">
              <div class="card-img-overlay d-flex justify-content-end flex-column p-4">
                <h2 class="card-title mb-0 fs-20 lh-182"><a href="/result-search?search=dubai" class="text-white">Dubai</a>
                </h2>
              </div>
            </div>
          </div>

        </div>
    </section>
    <script src="../stripe.js"></script>




    <!--------------------------------------------Indivisuals-------------------------------------------------------------------->
    <section>
      <style>
        @media (max-width: 992px) {
          .col-lg-12 {
            padding-top: 50px;
            padding-right: 50px;
            padding-left: 50px;
            padding-bottom: 50px;
            margin-bottom: 00px;
            margin-top: 100px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
          }

          .col-lg-6 {
            margin-bottom: 0px;
            margin-top: 10px
          }

          .col-lg-5 {
            margin-top: -240px;
            margin-left: -16px;

          }
        }
      </style>
      <div style="background-image: url('/images/Professional2.png')"
        class="bg-cover d-flex align-items-center custom-vh-100">
        <div class=" container container-xl">
          <div class="row animated-box align-items-center">
            <div class="col-lg-8 pl-xl-8 row">
              <div class="col-lg-12"  id="BoxBaixoparticular" style="
                    padding-top: 50px;
                    padding-right: 50px;
                    padding-left: 50px; 
                    margin-bottom: 00px;
                    margin-top: 100px;
                    background-color: rgba(0, 0, 0, 0.7);
                    border-radius: 10px;
                        "> 
                  <h6 class="mt-5 fs-26 lh-1625" style="color: #ba824f; text-align: left;"> Particular </h6>
                  <h7 style="color: #FFF; font-size: 18px;"> Are you a private seller and would like to sell or rent your properties? </h7>
                  <br>
                  <br>
                  <div class="col-lg-10 row" style="text-align: left;">
                    <div>
                      <a class="nav-link pl-3 pr-2" id="register-tab" data-toggle="modal" href="#login-register-modal">
                        <button type="button" class="btn btn-light"
                          style="border: 1px solid #228982; color:#228982 ; background-color: transparent  !important;">CRIAR UMA CONTA</button></a>
                    </div>
                    <!----------------------------------------------------------->
                    <div class="col-lg-6 pl-xl-6" style="padding-left: 0px;">
                      <a class="nav-link pl-3 pr-2" id="login-tab" data-toggle="modal" href="#login-register-modal">
                        <button type="button" class="btn btn-light"
                          style="border: 1px solid #ba824f; color:#ba824f ;background-color: transparent !important;">LOGIN</button></a>
                    </div>
                  </div>
              </div>

              <div class="col-lg-12" id="BoxBaixoprofissional" style="
                    padding-top: 50px;
                    padding-right: 50px;
                    padding-left: 50px; 
                    margin-bottom: 00px;
                    margin-top: 100px;
                    background-color: rgba(255, 255, 255, 0.7);
                    border-radius: 10px;
                   display:none   
                        "> 
                  <h6 class="mt-5 fs-26 lh-1625" style="color: #ba824f; text-align: left;"> Profissional </h6>
                  <h7 style="color: #000; font-size: 18px;"> Are you a private seller and would like to <br>
                    promote your properties?</h7>
                  <br>
                  <br>
                  <div class="col-lg-10 row" style="text-align: left;">
                    <div>
                      <a class="nav-link pl-3 pr-2" id="register-tab" data-toggle="modal" href="#login-register-modal">
                        <button type="button" class="btn btn-light"
                          style="border: 1px solid #000; color:#000 ; background-color: transparent  !important;">CRIAR UMA CONTA</button></a>
                    </div>
                    <!----------------------------------------------------------->
                    <div class="col-lg-6 pl-xl-6" style="padding-left: 0px;">
                      <a class="nav-link pl-3 pr-2" id="login-tab" data-toggle="modal" href="#login-register-modal">
                        <button type="button" class="btn btn-light"
                          style="border: 1px solid #ba824f; color:#ba824f ;background-color: transparent !important;">LOGIN</button></a>
                    </div>
                  </div>
              </div>


            </div>



            
            <div class="col-lg-4 pl-xl-4">
              <div class="row">
                
                 <div class="col-lg-6 pl-xl-6">
                    <button onclick="trocaimg('particular')" type="button" class="btn btn-primary"
                      style="background-color: rgba(255, 255, 255, 0.7); border: 1px solid #000; color:#000; width: 180px; height: 50px;">Particular</button>
                  </div>

                  <div class="col-lg-6 pl-xl-6">
                    <button onclick="trocaimg('profissional')" type="button" class="btn btn-primary"
                      style="background-color: rgba(0, 0, 0, 0.7); border: 1px solid #FFF; width: 180px; height: 50px;">Profissional</button>
                  </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!--------------->



    <div id="compare" class="compare">
      <!-- <button
          class="btn shadow btn-open bg-white bg-hover-accent text-secondary rounded-right-0 d-flex justify-content-center align-items-center w-30px h-140 p-0">
        </button> -->
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

  <script src="/js/script.js"></script>

  <script src="https://accounts.google.com/gsi/client"></script>
  <script src='https://www.google.com/recaptcha/api.js' async defer></script>


  <?php require_once ('require/login.php') ?>
  <?php require_once ('require/svg.php') ?>

  <script>  


  function buscaBusca(mostrabox) {  
    
    
    if(mostrabox==3){

      $("#BoxDePesquisaFerias").css("display", "block");
      $("#BoxDePesquisaCompraArrenda").css("display", "none");

    }else{

      $("#BoxDePesquisaFerias").css("display", "none");
      $("#BoxDePesquisaCompraArrenda").css("display", "block");
    }

    
 

        }


        function trocaimg(DADOS){
          

          if(DADOS == 'profissional'){

            var DADOSGERAIS = 'particular';
          }else{
            var DADOSGERAIS = 'profissional';

          }

$("#BoxBaixo"+DADOS).css("display", "block");
$("#BoxBaixo"+DADOSGERAIS).css("display", "none");
 

        }


        $(document).ready(function() {buscaBusca(1);});

</script>



  <div class="position-fixed pos-fixed-bottom-right p-6 z-index-10">
    <a href="#"
      class="gtf-back-to-top bg-white text-primary hover-white bg-hover-primary shadow p-0 w-52px h-52 rounded-circle fs-20 d-flex align-items-center justify-content-center"
      title="Back To Top"><i class="fal fa-arrow-up"></i></a>
  </div>
</body>

</html>