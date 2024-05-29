<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Produtos Rainha das Sete - Chicotes, Soquetes e Lanternas automotivas"" />
    <meta property="og:title" content="Produtos Rainha das Sete - Chicotes, Soquetes e Lanternas automotivas"" />
    <meta property="og:description" content="Produtos Rainha das Sete - Chicotes, Soquetes e Lanternas automotivas"" />
    <meta property="og:image" content="/images/logo-rainha-das-sete.webp" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Produtos - Rainha das Sete</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="/css/templete.min.css">
    <link rel="stylesheet" type="text/css" href="/css/swiper.css">
    <link class="skin" rel="stylesheet" type="text/css" href="/css/skin/skin-1.css">
    <link class="skin" rel="stylesheet" type="text/css" href="/plugins/rangeslider/rangeslider.css">
    <?php require_once('require/scriptshead.php');?>
</head>

<body id="bg">
    <div id="loading-area"></div>
    <div class="page-wraper creative-wraper-one">
        <!-- Header -->
        <?php
   require_once('require/header.php');
   ?>
        <!-- Aside Header -->
        <!-- Content -->
    </div>

    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="home.php">Home</a></li>
                <li>Produtos</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->



<?php

if ($pga == 'lancamentos' ) {

    require("require/paginas/produtos/lancamentos.php");

} elseif ($pga == 'launch' ) {

    require("require/paginas/produtos/lancamentos.php");

}elseif ($pga == 'lanzamientos' ) {

    require("require/paginas/produtos/lancamentos.php");

}elseif ($pga == 'pesquisa' ) {

    require("require/paginas/produtos/pesquisa.php");

}elseif ($pga == 'search' ) {

    require("require/paginas/produtos/pesquisa.php");

}elseif ($pga == 'busca' ) {

    require("require/paginas/produtos/pesquisa.php");

} elseif ($pga == 'categorias' ) {

    require("require/paginas/produtos/categoria.php");

}elseif ($pga == 'categories' ) {

    require("require/paginas/produtos/categoria.php");

} elseif ($pga == 'linha' ) {

    require("require/paginas/produtos/linha.php");

}elseif ($pga == 'lineas' ) {

    require("require/paginas/produtos/linha.php");

} elseif ($pga == 'lines' ) {

    require("require/paginas/produtos/linha.php");

} else{

            if($pga != 'categorias' and $pgb != '' and $pgc != ''){

                require("require/paginas/produtos/final.php");

            }elseif($pga != 'categories' and $pgb != '' and $pgc != ''){

                require("require/paginas/produtos/final.php");

            }elseif($pga != 'linha' and $pgb != '' and $pgc != ''){

                require("require/paginas/produtos/final.php");

            }elseif($pga != 'lineas' and $pgb != '' and $pgc != ''){

                require("require/paginas/produtos/final.php");

            }elseif($pga != 'lines' and $pgb != '' and $pgc != ''){

                require("require/paginas/produtos/final.php");

            }else{

                require("require/paginas/produtos/home.php");

            }

}



?>
    <!-- Footer -->

    <?php
    require_once('require/footer.php');
    ?>

    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fas fa-arrow-up style1"></button>
    </div>
            
 




    <!-- JavaScript  files ========================================= -->
    <script src="/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="/plugins/wow/wow.js"></script><!-- WOW JS -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="/plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
    <script src="/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
    <script src="/plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
    <script src="/plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
    <script src="/plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="/plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
    <script src="/plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
    <script src="/plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
    <script src="/plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
    <script src="/plugins/rangeslider/rangeslider.js"></script><!-- Rangeslider -->
    <script src="/plugins/lightgallery/js/lightgallery-all.js"></script><!-- LIGHT GALLERY -->
    <script src="/js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="/js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
    <script src="/js/dz.ajax.js"></script><!-- CONTACT JS -->

    <script src="/js/jquery.star-rating-svg.js"></script><!-- STAR RATING SVG -->
    <script src="/js/swiper.js"></script>
    <script src="/js/script.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 2000,
            parallax: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });


        function pleacepesquisa(DADOS) {


            var qtd = '               ';

            var txt1 = "<?php echo $idioma['PlaceholderPesquisaTxt1'];?>" + qtd;
			var txt2 = "<?php echo $idioma['PlaceholderPesquisaTxt2'];?>" + qtd;
			var txt3 = "<?php echo $idioma['PlaceholderPesquisaTxt3'];?>" + qtd;
			var txt4 = "<?php echo $idioma['PlaceholderPesquisaTxt4'];?>" + qtd;



            var timeOut;

            if (DADOS == 1) {


                var txtLen = txt1.length;
                var char = 0;
                $('.main-search').attr('placeholder', '|');
                (function typeIt() {
                    var humanize = Math.round(Math.random() * (200 - 30)) + 30;
                    timeOut = setTimeout(function () {
                        char++;
                        var type = txt1.substring(0, char);
                        $('.main-search').attr('placeholder', type + ' ');
                        typeIt();

                        if (char == txtLen) {
                            $('.main-search').attr('placeholder', $('.main-search').attr('placeholder').slice(0, -1)) // remove the '|'
                            clearTimeout(timeOut);


                            pleacepesquisa('2');

                        }

                    }, humanize);
                }());

            } else if (DADOS == 2) {


                var txtLen = txt2.length;
                var char = 0;
                $('.main-search').attr('placeholder', '|');
                (function typeIt() {
                    var humanize = Math.round(Math.random() * (200 - 30)) + 30;
                    timeOut = setTimeout(function () {
                        char++;
                        var type = txt2.substring(0, char);
                        $('.main-search').attr('placeholder', type + ' ');
                        typeIt();

                        if (char == txtLen) {
                            $('.main-search').attr('placeholder', $('.main-search').attr('placeholder').slice(0, -1)) // remove the '|'
                            clearTimeout(timeOut);
                            pleacepesquisa('3');

                        }

                    }, humanize);
                }());

            } else if (DADOS == 3) {


                var txtLen = txt3.length;
                var char = 0;
                $('.main-search').attr('placeholder', '|');
                (function typeIt() {
                    var humanize = Math.round(Math.random() * (200 - 30)) + 30;
                    timeOut = setTimeout(function () {
                        char++;
                        var type = txt3.substring(0, char);
                        $('.main-search').attr('placeholder', type + ' ');
                        typeIt();

                        if (char == txtLen) {
                            $('.main-search').attr('placeholder', $('.main-search').attr('placeholder').slice(0, -1)) // remove the '|'
                            clearTimeout(timeOut);
                            pleacepesquisa('4');

                        }

                    }, humanize);
                }());

            } else if (DADOS == 4) {


                var txtLen = txt4.length;
                var char = 0;
                $('.main-search').attr('placeholder', '|');
                (function typeIt() {
                    var humanize = Math.round(Math.random() * (200 - 30)) + 30;
                    timeOut = setTimeout(function () {
                        char++;
                        var type = txt4.substring(0, char);
                        $('.main-search').attr('placeholder', type + ' ');
                        typeIt();

                        if (char == txtLen) {
                            $('.main-search').attr('placeholder', $('.main-search').attr('placeholder').slice(0, -1)) // remove the '|'
                            clearTimeout(timeOut);
                            pleacepesquisa('1');

                        }

                    }, humanize);
                }());

            }



        }

        pleacepesquisa('1');


    </script>





<script>
$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 4; //globaly define number of elements per page
  var syncedSecondary = true;

	  sync1.owlCarousel({
		items : 1,
		slideSpeed : 2000,
		nav: true,
		autoplay: false,
		dots: false,
		loop: true,
		responsiveRefreshRate : 200,
		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
	  }).on('changed.owl.carousel', syncPosition);

	  sync2.on('initialized.owl.carousel', function () {
		  sync2.find(".owl-item").eq(0).addClass("current");
		}).owlCarousel({
		items : slidesPerPage,
		dots: false,
		nav: false,
		margin:5,
		smartSpeed: 200,
		slideSpeed : 500,
		slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
		responsiveRefreshRate : 100
	  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
		e.preventDefault();
		var number = $(this).index();
		//sync1.data('owl.carousel').to(number, 300, true);
		
		sync1.data('owl.carousel').to(number, 300, true);
		
	});
});
</script>



</body>

</html>