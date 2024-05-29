<?php
require_once ('require/restrito.php');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Real Estate Html Template">
  <meta name="author" content="">
  <meta name="generator" content="Jekyll">
  <title>Dashboard - Joviplanet</title>
  <!-- Google fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="vendors/fontawesome-pro-5/css/all.css">
  <link rel="stylesheet" href="vendors/bootstrap-select/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="vendors/slick/slick.min.css">
  <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.min.css">
  <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" href="vendors/chartjs/Chart.min.css">
  <link rel="stylesheet" href="vendors/dropzone/css/dropzone.min.css">
  <link rel="stylesheet" href="vendors/animate.css">
  <link rel="stylesheet" href="vendors/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="vendors/mapbox-gl/mapbox-gl.min.css">
  <link rel="stylesheet" href="vendors/dataTables/jquery.dataTables.min.css">
  <!-- Themes core CSS -->
  <link rel="stylesheet" href="css/themes.css">
  <!-- Favicons -->
  <link rel="icon" href="images/favicon.ico">
  <style>
    #gt_float_wrapper {
      top: 100px !important;
      z-index: 10 !important;
    }

    .main-header .dropdown-menu {
      z-index: 20 !important;
    }
  </style>

  <?php require_once ('require/scriptshead.php'); ?>
</head>

<body>
  <div class="gtranslate_wrapper"></div>
  <div class="wrapper dashboard-wrapper">
    <div class="d-flex flex-wrap flex-xl-nowrap">
      <div class="db-sidebar bg-white">
        <nav class="navbar navbar-expand-xl navbar-light d-block px-0 header-sticky dashboard-nav py-0">


          <div class="sticky-area shadow-xs-1 py-3">
            <!--MENUMOBILE-->
            <?php require_once ('require/dashboard-menu-mobile.php'); ?>
            <!--MENUMOBILEFIM-->

            <!--MENUDESKTOP-->
            <?php require_once ('require/dashboard-menu-desktop.php'); ?>
            <!--MENUDESKTOPFIM-->

          </div>
        </nav>
      </div>


      <div class="page-content">

        <!--MENUDESKTOP-->
        <?php require_once ('require/dashboard-header.php'); ?>
        <!--MENUDESKTOPFIM-->
        <main id="content" class="bg-gray-01">
          <div class="px-3 px-lg-6 px-xxl-13 py-5 py-lg-10">
            <div class="d-flex flex-wrap flex-md-nowrap mb-6">
              <div class="mr-0 mr-md-auto">
                <h2 class="mb-0 text-heading fs-22 lh-15">Welcome back,
                  <?php echo $usuario['nomeUSUARIO']; ?>
                  <?php echo $usuario['sobrenomeUSUARIO']; ?>!
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At iusto, laboriosam. Atque</p>
              </div>
              <div>
                <a href="/add-new-listings" class="btn btn-primary btn-lg">
                  <span>Add New Property</span>
                  <span class="d-inline-block ml-1 fs-20 lh-1"><svg class="icon icon-add-new">
                      <use xlink:href="#icon-add-new"></use>
                    </svg></span>
                </a>
              </div>
            </div>

            <div class="row">
              <!------------------------------------------------------------------------------------------------------------------------------------>
              <div class="col-sm-6 col-xxl-6 mb-6">
                <div class="card">
                  <div class="card-body row align-items-center px-6 ">
                    <div class="dash col-xxl-12 text-left mb-2">
                      <p >My Plan</p>
                        <style>
                         .dash {
                                border-bottom: 1px dotted #000;
                               
                               }
                        </style>
                    </div>
                  </div>
  
                  <p class="fs-18 lh-12 mb-5 ml-5" style="color: black !important; justify-content: space-between;">
                    50 Highlights / Month
                    <span class="badge text-capitalize font-weight-normal fs-7 ml-2 badge-green">Active</span>
                    <a href="#">
                    <button type="button" class="btn btn-primary ml-2" style="position: relative;width: 99px;padding: 0px;height: 35px;" href="/plans">Change Plan</button></a>
                  </p>
                  <span class="fs-13 ml-5">Expiry Date: 12/12/2024</span>

                 
                </div>
              </div>
<!-------------------------------------------------------------------------------------------------------------------------->
              <div class="col-sm-6 col-xxl-6 mb-6">
                <div class="card">
                  <div class="card-body row align-items-center px-6 ">
                    <div class="dash col-xxl-12 text-left">
                      <p>Visits / Highlights</p>
                        <style>
                         .dash {
                                border-bottom: 1px dotted #000;
                               
                               }
                        </style>
                    </div>
                  </div>
                 
  
                    <div class="col-14 text-center" style="display: flex; ">
                    <p style="color: #000000;  margin-top: 50px; margin-left: 111px; ">Visits</p>
                      <p class="fs-42 lh-12 mb-0 counterup mr-10" data-start="0" data-end="471" data-decimals="0"
                        data-duration="0" data-separator="" style="color: #000000; margin-left: -12%;">471</p>
                        
                   
                             
                      <p class="fs-42 lh-12 mb-0 counterup ml-10" data-start="0" data-end="50" data-decimals="0"
                        data-duration="0" data-separator="" style="color: #000000; margin-left: 100px !important; ">50</p>
                        <p style="color: #000000; margin-top: 50px; margin-left: -14%;">Highlights</p> 
                     
                    </div>
  
                 
                </div>
              </div>

              <!----------------------------------------------------
              <div class="col-sm-6 col-xxl-5 mb-6">
                <div class="card">
                  <div class="card-body row align-items-center">
                    <div class="col-7 text-center">
                      <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="1730" data-decimals="0"
                        data-duration="0" data-separator="">1730</p>
                      <p>Total views</p>
                    </div>
                  </div>
                </div>
              </div>
              ---------------------------------------------------->
              <div class="col-sm-4 col-xxl-4 mb-6">
                <div class="card">
                  <div class="card-body row align-items-center px-6 ">
                  <div class="dash col-xxl-12 text-left">
                  <p>Properties Sold</p>
                        <style>
                         .dash {
                                border-bottom: 1px dotted #000;
                               }
                        </style>
                    </div>
                  <div class="col-12 text-center">
                      <p class="fs-42 lh-12 mb-0 mt-5 counterup" data-start="0" data-end="3292" data-decimals="0"
                        data-duration="0" data-separator="" style="color: #000000;">3292</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-------------------------------------------------------------------------------------------->
              <div class="col-sm-4 col-xxl-4 mb-6">
                <div class="card">
                  <div class="card-body row align-items-center px-6 ">
                  <div class="dash col-xxl-12 text-left">
                  <p>Rented Properties</p>
                        <style>
                         .dash {
                                border-bottom: 1px dotted #000;
                               }
                        </style>
                    </div>   
                  <div class="col-12 text-center">
                      <p class="fs-42 lh-12 mb-0 mt-5 counterup" data-start="0" data-end="12725" data-decimals="0"
                        data-duration="0" data-separator=""style="color: #000000;">12725</p>
                    </div>
                  </div>
                </div>
              </div>
            <!-------------------------------------------------------------------------------------------->
              <div class="col-sm-4 col-xxl-4 mb-6">
                <div class="card">
                  <div class="card-body row align-items-center px-6 ">
                  <div class="dash col-xxl-12 text-left">
                  <p>Reserved Properties</p>
                        <style>
                         .dash {
                                border-bottom: 1px dotted #000;
                               }
                        </style>
                    </div> 
                  <div class="col-12 text-center">
                      <p class="fs-42 lh-12 mb-0 mt-5 counterup" data-start="0" data-end="7695" data-decimals="0"
                        data-duration="0" data-separator=""style="color: #000000;">7695</p>
                    </div>
                
                </div>
              </div>
            </div>

             
              <div class="col-sm-6 col-xxl-6 mb-6" >
              <div class="card">  
              <div class="form" >
                  <div class="card-body row align-items-center px-6 ">
                    <div class="dash col-xxl-12 text-left">
                      <p>Recent Messages</p>
                        <style>
                         .dash {
                                border-bottom: 1px dotted #000;
                               
                               }
                        </style>
                    </div>
                  </div>
                 
  
                    <div class="col-12 text-center" style="height: 122px !important; overflow-y: scroll;">
                    
                     <!-- <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="471" data-decimals="0"
                        data-duration="0" data-separator="">471</p> --->
                        <table class="table">
  <thead >
    <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="../images/images.png"class="align-self-center " style="width: 15%;"></td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href="#">To respond </a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img src="../images/images.png" class="align-self-center " style="width: 15%;"></td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td><a href="#">To respond </a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img src="../images/images.png" class="align-self-center" style="width: 15%;"></td>
      <td>Larry</td>
      <td>the Bird</td>
      <td><a href="#">To respond </a></td>
    </tr>
  </tbody>
</table>
 
<!------------------------------------------------------------------------------------------------------------------------------------------->
                    </div>
                </div>
              </div>
                              </div>

              <!---------------------------->
              
              <div class="col-sm-6 col-xxl-6 mb-6">
                <div class="card">
                  <div class="card-body row align-items-center px-6 ">
                    <div class="dash col-xxl-12 text-left">
                    <p>Whatsapp Messages</p>
                        <style>
                         .dash {
                                border-bottom: 1px dotted #000;
                               
                               }
                        </style>
                    </div>
                  </div>
                 
  
                    <div class="col-12 text-center">
                    
                      <p class="fs-42 lh-12 mb-8 mt-4 counterup" data-start="0" data-end="1254" data-decimals="0"
                        data-duration="0" data-separator="" style="color: #000000;">1254</p>
                    </div>
  
                 
                </div>
              </div>

               <!-------------------------------------------------------------------------------------------->
          
            
              <div class="col-xxl-12 mb-6">
                <div class="card px-7 py-6 h-100 chart">
                  <div class="card-body p-0 collapse-tabs">
                    <div class="d-flex align-items-center mb-5">
                      <h2 class="mb-0 text-heading fs-22 lh-15 mr-auto">View statistics</h2>
                      <ul class="nav nav-pills justify-content-end d-none d-sm-flex nav-pills-01" role="tablist">
                        <li class="nav-item px-5 py-1">
                          <a class="nav-link active bg-transparent shadow-none p-0 letter-spacing-1" id="hours-tab"
                            data-toggle="tab" href="#hours" role="tab" aria-controls="hours"
                            aria-selected="true">Hours</a>
                        </li>
                        <li class="nav-item px-5 py-1">
                          <a class="nav-link bg-transparent shadow-none p-0 letter-spacing-1" id="weekly-tab"
                            data-toggle="tab" href="#weekly" role="tab" aria-controls="weekly"
                            aria-selected="false">Weekly</a>
                        </li>
                        <li class="nav-item px-5 py-1">
                          <a class="nav-link bg-transparent shadow-none p-0 letter-spacing-1" id="monthly-tab"
                            data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly"
                            aria-selected="false">Monthly</a>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-content shadow-none p-0">
                      <div id="collapse-tabs-accordion">
                        <div class="tab-pane tab-pane-parent fade show active px-0" id="hours" role="tabpanel"
                          aria-labelledby="hours-tab">
                          <div class="card bg-transparent mb-sm-0 border-0">
                            <div class="card-header d-block d-sm-none bg-transparent px-0 py-1 border-bottom-0"
                              id="headingHours">
                              <h5 class="mb-0">
                                <button class="btn collapse-parent font-size-h5 btn-block border shadow-none"
                                  data-toggle="collapse" data-target="#hours-collapse" aria-expanded="true"
                                  aria-controls="hours-collapse">
                                  Hours
                                </button>
                              </h5>
                            </div>
                            <div id="hours-collapse" class="collapse show collapsible" aria-labelledby="headingHours"
                              data-parent="#collapse-tabs-accordion">
                              <div class="card-body p-0 py-4">
                                <canvas class="chartjs" data-chart-options="[]"
                                  data-chart-labels='["05h","08h","11h","14h","17h","20h","23h"]'
                                  data-chart-datasets='[{"label":"Clicked","data":[0,7,10,3,15,30,10],"backgroundColor":"rgba(105, 105, 235, 0.1)","borderColor":"#6969eb","borderWidth":3,"fill":true},{"label":"View","data":[10,9,18,20,28,40,27],"backgroundColor":"rgba(254, 91, 52, 0.1)","borderColor":"#ff6935","borderWidth":3,"fill":true}]'>
                                </canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane tab-pane-parent fade px-0" id="weekly" role="tabpanel"
                          aria-labelledby="weekly-tab">
                          <div class="card bg-transparent mb-sm-0 border-0">
                            <div class="card-header d-block d-sm-none bg-transparent px-0 py-1 border-bottom-0"
                              id="headingWeekly">
                              <h5 class="mb-0">
                                <button class="btn collapse-parent font-size-h5 btn-block collapsed border shadow-none"
                                  data-toggle="collapse" data-target="#weekly-collapse" aria-expanded="true"
                                  aria-controls="weekly-collapse">
                                  Weekly
                                </button>
                              </h5>
                            </div>
                            <div id="weekly-collapse" class="collapse collapsible" aria-labelledby="headingWeekly"
                              data-parent="#collapse-tabs-accordion">
                              <div class="card-body p-0 py-4">
                                <canvas class="chartjs" data-chart-options="[]"
                                  data-chart-labels='["Mar 12","Mar 13","Mar 14","Mar 15","Mar 16","Mar 17","Mar 18","Mar 19"]'
                                  data-chart-datasets='[{"label":"Clicked","data":[0,13,9,3,15,15,10,0],"backgroundColor":"rgba(105, 105, 235, 0.1)","borderColor":"#6969eb","borderWidth":3,"fill":true},{"label":"View","data":[10,20,18,15,28,33,27,10],"backgroundColor":"rgba(254, 91, 52, 0.1)","borderColor":"#ff6935","borderWidth":3,"fill":true}]'>
                                </canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane tab-pane-parent fade px-0" id="monthly" role="tabpanel"
                          aria-labelledby="monthly-tab">
                          <div class="card bg-transparent mb-sm-0 border-0">
                            <div class="card-header d-block d-sm-none bg-transparent px-0 py-1 border-bottom-0"
                              id="headingMonthly">
                              <h5 class="mb-0">
                                <button class="btn btn-block collapse-parent collapsed border shadow-none"
                                  data-toggle="collapse" data-target="#monthly-collapse" aria-expanded="true"
                                  aria-controls="monthly-collapse">
                                  Monthly
                                </button>
                              </h5>
                            </div>
                            <div id="monthly-collapse" class="collapse collapsible" aria-labelledby="headingMonthly"
                              data-parent="#collapse-tabs-accordion">
                              <div class="card-body p-0 py-4">
                                <canvas class="chartjs" data-chart-options="[]"
                                  data-chart-labels='["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]'
                                  data-chart-datasets='[{"label":"Clicked","data":[2,15,20,10,15,20,10,0,20,30,10,0],"backgroundColor":"rgba(105, 105, 235, 0.1)","borderColor":"#6969eb","borderWidth":3,"fill":true},{"label":"View","data":[10,20,18,15,28,33,27,10,20,30,10,0],"backgroundColor":"rgba(254, 91, 52, 0.1)","borderColor":"#ff6935","borderWidth":3,"fill":true}]'>
                                </canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
        



              
              <!---------------------------------------------------------------------------------------------------------------
              <div class="row">
              <div class="col-sm-6 col-xxl-3 mb-6">
                <div class="card">
                  <div class="card-body row align-items-center px-6 py-7">
                    <div class="col-5">
                      <span
                        class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-blue badge-circle">
                        <svg class="icon icon-1">
                          <use xlink:href="#icon-1"></use>
                        </svg>
                      </span>
                    </div> 
                    <div class="col-7 text-center">
                      <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="29" data-decimals="0"
                        data-duration="0" data-separator="">29</p>
                      <p>Recent Messages</p>
                      <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="29" data-decimals="0"
                        data-duration="0" data-separator="">29</p>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-xxl-3 mb-6">
                <div class="card">
                  <div class="card-body row align-items-center px-6 py-7">
                     <!--
                    <div class="col-5">
                      <span
                        class="w-83px h-83 d-flex align-items-center justify-content-center fs-36 badge badge-green badge-circle">
                       <svg class="icon icon-2">
                          <use xlink:href="#icon-2"></use>
                        </svg> 
                      </span>
                    </div>
                    <div class="col-7 text-center">
                      <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="1730" data-decimals="0"
                        data-duration="0" data-separator="">1730</p> 
                      <p>Whatsapp Messages </p>
                      <p class="fs-42 lh-12 mb-0 counterup" data-start="0" data-end="1730" data-decimals="0"
                        data-duration="0" data-separator="">1730</p>
                    </div>
                  </div>
                </div>
              </div>
              -------------------------------------------------------------------------------------------------------------------->
              
              
              
              
              <div class="col-sm-12 mb-6">
                <div class="card py-6 h-100">
                  <div class="card-body p-0">
                    <h2 class="mb-2 ml-2 text-heading fs-22 lh-10">My Reservations</h2>
                    <div class="col-12 mb-6 table-responsive" id="Resultado">
              
                    </div>
                   
                    <!-- <a class="text-heading d-block text-center mt-4" role="button">
                      View more
                      <span class="text-primary d-inline-block ml-2"><i class="fal fa-angle-down"></i></span>
                    </a> -->
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>


  <div id="g_id_onload" data-client_id="35484172793-d3ckles74e0qf6938ak070cinhii80vi.apps.googleusercontent.com"
    data-context="signin" data-ux_mode="popup" data-callback="handleLoginResponse" data-nonce=""
    data-auto_select="false" data-itp_support="true">
  </div>





  <!-- Vendors scripts -->
  <script src="vendors/jquery.min.js"></script>
  <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.js"></script>
  <script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="vendors/slick/slick.min.js"></script>
  <script src="vendors/waypoints/jquery.waypoints.min.js"></script>
  <script src="vendors/counter/countUp.js"></script>
  <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="vendors/chartjs/Chart.min.js"></script>
  <script src="vendors/dropzone/js/dropzone.min.js"></script>
  <script src="vendors/timepicker/bootstrap-timepicker.min.js"></script>
  <script src="vendors/hc-sticky/hc-sticky.min.js"></script>
  <script src="vendors/jparallax/TweenMax.min.js"></script>
  <script src="vendors/mapbox-gl/mapbox-gl.js"></script>
  <script src="vendors/dataTables/jquery.dataTables.min.js"></script>
  <!-- Theme scripts -->
  <script src="/js/theme.js"></script>

  <script src="/js/script.js"></script>
  <script src="https://accounts.google.com/gsi/client"></script>


  <!----------------------------------------------------------------->
  <script>

function AtivaDesativaImovel(VALOR,CODIGO) {      


    $.ajax({
      url: '/require/ajax/my-listings/ativadesativaimovel.php',
      type: 'post',
      data: { 
        ativo: VALOR,
        codigo: CODIGO 
      },
      success: function (data) {

        alert('Imóvel alterado com sucesso!');

        VisualizaDesativaImovel();



      }
    });


  }


  
function DestqueImovel(VALOR,CODIGO) {      


$.ajax({
url: '/require/ajax/my-listings/destaqueimovel.php',
type: 'post',
data: { 
  destaque: VALOR,
  codigo: CODIGO 
},
success: function (data) {

  alert('Imóvel alterado com sucesso!');

  VisualizaDesativaImovel();



}
});


}



  function VisualizaDesativaImovel() {      


$.ajax({
url: '/require/ajax/my-listings/view-home.php',
type: 'post',
data: {  }
,beforeSend : function(){ 
      
      $('#resultado').html('<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">  <span class="sr-only">Loading...</span></div>'); 
      
      
},
success: function (data) {

  $('#Resultado').html(data);



}
});


}





$(document).ready(function() {
    
                             
                                        
VisualizaDesativaImovel();  


});



</script>


  <?php require_once('require/svg.php')?>

</body>

</html>