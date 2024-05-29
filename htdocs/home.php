<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">

<head>
	<!-- META -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Rainha das Sete - Chicotes, Soquetes e Lanternas automotivas" />
	<meta property="og:title" content="Rainha das Sete - Chicotes, Soquetes e Lanternas automotivas" />
	<meta property="og:description" content="Rainha das Sete - Chicotes, Soquetes e Lanternas automotivas" />
	<meta property="og:image" content="/images/logo-rainha-das-sete.webp" />


	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="/images/logo_comp.webp" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	<!-- PAGE TITLE HERE -->
	<title>Rainha das Sete</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">
	<link rel="stylesheet" type="text/css" href="css/swiper.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link class="skin" rel="stylesheet" type="text/css" href="plugins/rangeslider/rangeslider.css">

	<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		.bs-example {
			margin: 20px;
		}

		.modal-content iframe {
			margin: 0 auto;
			display: block;
		}

		.modal-header {
			background: #ff0000 !important;
			padding: 15px 25px;
		}


		.banner_mobile {
			display: none;
		}

		.banner_desktop {
			display: block;
		}

		@media (max-width:320px) {

			/* smartphones, portrait iPhone, portrait 480x320 phones (Android) */
			.banner_mobile {
				display: block;
			}

			.banner_desktop {
				display: none;
			}
		}

		@media (max-width:480px) {
			/* smartphones, Android phones, landscape iPhone */

			.banner_mobile {
				display: block;
			}

			.banner_desktop {
				display: none;
			}

		}

		@media (max-width:600px) {

			/* portrait tablets, portrait iPad, e-readers (Nook/Kindle), landscape 800x480 phones (Android) */
			.banner_mobile {
				display: block;
			}

			.banner_desktop {
				display: none;
			}

		}

		@media (max-width:850px) {

			/* tablet, landscape iPad, lo-res laptops ands desktops */
			.banner_mobile {
				display: block;
			}

			.banner_desktop {
				display: none;
			}
		}

		@media (max-width:1025px) {
			/* big landscape tablets, laptops, and desktops */
		}

		@media (min-width:1281px) {
			/* hi-res laptops and desktops */
		}
	</style>

	<?php require_once('require/scriptshead.php'); ?>
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
		<div class="page-content bg-white">
			<!-- Slider Carousel -->
			<div class="creative-banner-one" id="home">
				<div class="swiper-container">
					<div class="swiper-wrapper">

						<?php

						$banner = "
SELECT 
codigoBANNER,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN imagemenBANNER
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN imagemesBANNER 
ELSE imagemBANNER END AS imagemBANNER,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN imagemobileenBANNER
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN imagemobileesBANNER 
ELSE imagemobileBANNER END AS imagemobileBANNER,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN tituloenBANNER
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN tituloesBANNER 
ELSE tituloBANNER END AS tituloBANNER, subtituloBANNER 
FROM tb0030_banners
WHERE ativoBANNER = 1
ORDER BY ordemBANNER ASC 
";

						//Executa o SQL
						$banner_query  = mysqli_query($conexao, $banner);
						//Percorre os campos da tabela
						while ($banner = mysqli_fetch_assoc($banner_query)) {

						?>
							<div class="swiper-slide">
								<div class="vehicle-box style1 banner_mobile" style="background-image: url(<?php echo $banner['imagemobileBANNER']; ?>);"></div>

								<div class="vehicle-box style1 banner_desktop" style="background-image: url(<?php echo $banner['imagemBANNER']; ?>);">

									<div class="left-info" data-name="">

										<?php if ($banner['tituloBANNER'] != "") { ?>

											<div class="top-info">
												<h2 class="title" data-swiper-parallax="-500"><?php echo $banner['tituloBANNER']; ?></h2>
												<h3 class="main-title" data-swiper-parallax="-400"><?php echo $banner['subtituloBANNER']; ?></h3>
											</div>

										<?php } ?>

										<?php

										$opcaoesq = "
											SELECT 
											codigoOPCAO,
											CASE 
											WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN tituloenOPCAO
											WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN tituloesOPCAO 
											ELSE tituloOPCAO END AS tituloOPCAO,
											CASE 
											WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN subtituloenOPCAO
											WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN subtituloesOPCAO 
											ELSE subtituloOPCAO END AS subtituloOPCAO
											,velocidadeOPCAO
											FROM tb0030_opcoes
											WHERE tipoOPCAO = 1 AND bannerOPCAO = '" . $banner['codigoBANNER'] . "'
											ORDER BY codigoOPCAO ASC 
											";
										//Executa o SQL
										$opcaoesq_query  = mysqli_query($conexao, $opcaoesq);

										$totalesq = mysqli_num_rows($opcaoesq_query);

										if ($totalesq > 0) {

										?>
											<div class="bottom-info">

												<?php

												//Percorre os campos da tabela
												while ($esq = mysqli_fetch_assoc($opcaoesq_query)) {

												?>
													<h3 data-swiper-parallax="<?php echo $esq['velocidadeOPCAO']; ?>"><?php echo $esq['tituloOPCAO']; ?></h3>

												<?php } ?>
											</div>

										<?php } ?>

									</div>


									<?php

									$opcaodir = "
											SELECT 
											codigoOPCAO 
											,tituloOPCAO
											,subtituloOPCAO 
											,velocidadeOPCAO
											FROM tb0030_opcoes
											WHERE tipoOPCAO = 2 AND bannerOPCAO = '" . $banner['codigoBANNER'] . "'
											ORDER BY codigoOPCAO ASC 
											";

									//Executa o SQL
									$opcaodir_query  = mysqli_query($conexao, $opcaodir);

									$totaldir = mysqli_num_rows($opcaodir_query);

									if ($totaldir > 0) {

									?>
										<div class="right-info">
											<ul class="vehicle-services">

												<?php


												//Percorre os campos da tabela
												while ($dir = mysqli_fetch_assoc($opcaodir_query)) {

												?>

													<li data-swiper-parallax="<?php echo $dir['velocidadeOPCAO']; ?>">
														<h3><?php echo $dir['tituloOPCAO']; ?></h3>
														<p><?php echo $dir['subtituloOPCAO']; ?></p>
													</li>

												<?php } ?>



											</ul>
										</div>
									<?php } ?>
								</div>
							</div>



						<?php } ?>
					</div>

					<div class="bottom-aside">
						<!-- Add Arrows
						<div class="swiper-button-arrow">
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div> -->
						<div class="slide-social">
							<ul>
								<li><a href="https://pt-br.facebook.com/rainhadassete/" target="blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="https://www.instagram.com/rainhadassete/" target="blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="https://www.tiktok.com/@rainhadassete" target="blank"><i class="fab fa-tiktok"></i></a></li>

							</ul>
						</div>
						<!-- <div class="video-box">
						<img src="images/ads/thum1.jpg" alt="">
						<a href="https://youtu.be/SNgCz0urMXg" class="popup-youtube"><i class="fas fa-play"></i></a>
					</div> -->
					</div>
				</div>
			</div>
			<!-- Slider END -->


			<!-- LANÇAMENTOS  -->
			<section class="section bg-img-fix content-inner bg-gray" id="project">
				<div class="container">
					<div class="row">

						<!-- tabs with background nav -->
						<div class="col-lg-12 m-b30">
							<div class="dlab-tabs bg-tabs p-t50">

								<!-- <ul class="nav nav-tabs"   style="  border-bottom: none;">
											
											<li  class="nav-item active"  >
												
												<a href="#lancamentoultimoano-design" data-bs-toggle="tab"  class="btn site-button-secondry wow active" ><span><?php echo $idioma['TituloLancamentosUltimoAno']; ?></span></a>
											</li>
											
											<li class="nav-item"  >
											
												<a href="#lancamentoanteriores-design" data-bs-toggle="tab"  class="btn site-button-secondry wow " ><span><?php echo $idioma['TituloLancamentosAnosAnteriores']; ?></span></a>
											</li>
											
										</ul> -->
								<div class="tab-content">

									<div id="lancamentoultimoano-design" class="tab-pane active p-t20 wow fadeIn" data-wow-duration="5s" data-wow-delay="0.5s">
										<div id="lancamentoultimoano"> </div>
									</div>

									<!-- <div id="lancamentoanteriores-design" class="tab-pane p-t20 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s"><div id="lancamentoanteriores"></div></div> -->

								</div>

								<div class="col-lg-4 col-md-4 col-sm-6">
									<a href="/produtos/lancamentos">
										<div class="blog-post blog-grid car-services">
											<div class="dlab-post-info">
												<button class="site-button radius-xl button-sm" type="button"><?php echo $idioma['TituloVejaMais']; ?>&nbsp&nbsp<i class="far fa-arrow-alt-circle-down"></i></button>
												<!-- style="position:absolute; left: 460px; font-size: 17px; border: 30px; padding: 10px 20px;" -->
											</div>
										</div>
									</a>
								</div>

							</div>

						</div>
						<!-- tabs with background nav END -->

					</div>
				</div>
			</section>

			<?php

			$sql_destaques = " SELECT codigoDESTAQUE, 
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN tituloenDESTAQUE
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN tituloesDESTAQUE 
ELSE tituloDESTAQUE END AS tituloDESTAQUE,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN subtituloesDESTAQUE
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN subtituloenDESTAQUE 
ELSE subtituloDESTAQUE END AS subtituloDESTAQUE,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN imagemenDESTAQUE
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN imagemesDESTAQUE 
ELSE imagemDESTAQUE END AS imagemDESTAQUE,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN videoenDESTAQUE
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN videoesDESTAQUE 
ELSE videoDESTAQUE END AS videoDESTAQUE,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN check1enDESTAQUE
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN check1esDESTAQUE 
ELSE check1DESTAQUE END AS check1DESTAQUE,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN check2enDESTAQUE
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN check2esDESTAQUE 
ELSE check2DESTAQUE END AS check2DESTAQUE,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN check3enDESTAQUE
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN check3esDESTAQUE 
ELSE check3DESTAQUE END AS check3DESTAQUE,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN check4enDESTAQUE
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN check4esDESTAQUE 
ELSE check4DESTAQUE END AS check4DESTAQUE,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN botaoenDESTAQUE
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN botaoesDESTAQUE 
ELSE botaoDESTAQUE END AS botaoDESTAQUE
FROM tb085_destaques WHERE ativoDESTAQUE = 1";


			//Executa o SQL
			$destaques_query  = mysqli_query($conexao, $sql_destaques);
			//Percorre os campos da tabela
			$destaques = mysqli_fetch_assoc($destaques_query);

			?>
			<section class="section-full content-inner overlay-white-dark">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12 hidden-sm">&nbsp;</div>
						<div class="col-lg-3 col-md-3 col-sm-12 m-b30">

							<div class="section-head text-left head-style-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s"><br><br><br>
								<h2 class="title"><?php echo $destaques['tituloDESTAQUE']; ?></h2>
								<div class="dlab-separator-outer">
									<div class="dlab-separator bg-primary"></div>
								</div>
								<p><?php echo $destaques['subtituloDESTAQUE']; ?></p>
							</div>

							<?php if ($destaques['check1DESTAQUE'] != "") { ?><spam class="site-button site-button-remove radius-xl button-sm m-r15" type="">✔ <?php echo $destaques['check1DESTAQUE']; ?></spam><br><br><?php } ?>
							<?php if ($destaques['check2DESTAQUE'] != "") { ?><spam class="site-button site-button-remove radius-xl button-sm m-r15" type="">✔ <?php echo $destaques['check2DESTAQUE']; ?></spam><br><br><?php } ?>
							<?php if ($destaques['check3DESTAQUE'] != "") { ?><spam class="site-button site-button-remove radius-xl button-sm m-r15" type="">✔ <?php echo $destaques['check3DESTAQUE']; ?></spam><br><br><?php } ?>
							<?php if ($destaques['check4DESTAQUE'] != "") { ?><spam class="site-button site-button-remove radius-xl button-sm m-r15" type="">✔ <?php echo $destaques['check4DESTAQUE']; ?></spam><br><br><?php } ?>
							<br>

							<a href="javascript:;" onclick="trocavideo()" class="site-button radius-xl button-sm m-r15  gradient-shadow bg-gradient " style="padding: 10px 20px; font-size:15px; ">

								<i class="fas fa-play"></i>
								<?php echo $destaques['botaoDESTAQUE']; ?>
							</a>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 m-b30 p-t60"><br><br>

							<div id="fotodestaque">
								<img src="<?php echo $destaques['imagemDESTAQUE']; ?>" alt="">
							</div>
							<div id="videodestaque" style="display:none;">
								<iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $destaques['videoDESTAQUE']; ?>" title="Destaques Rainha das Sete" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
							</div>



						</div>
					</div>
				</div>
			</section>
			<div id="logos" class="tab-pane">



				<!-- App -->

				<!-- Our Project -->
				<?php

				$sql_img = " SELECT 
 tituloPOST, 
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN backgroundenPOST
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN backgroundesPOST 
ELSE backgroundPOST END AS backgroundPOST,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN destaqueenPOST
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN destaqueesPOST 
ELSE destaquePOST END AS destaquePOST

FROM tb081_posts 
INNER JOIN tb080_categorias ON codigoCATEGORIA = categoriaPOST 
WHERE ativoPOST = 1 AND now()<datalimitePOST AND homeCATEGORIA = 1
ORDER BY datalimitePOST ASC  LIMIT 1";


				//Executa o SQL
				$noticias_img_query  = mysqli_query($conexao, $sql_img);
				//Percorre os campos da tabela
				$noticias_img = mysqli_fetch_assoc($noticias_img_query);


				?>

				<div class="section-full bg-img-fix overlay-black-middle dlab-our-project" style="background-image:url(images/background/bg5.jpg);">
					<div class="container-fluid">
						<div class="row">

							<div class=" col-md-4 col-sm-12 p-t70" style="background-image:url(<?php echo $noticias_img['backgroundPOST']; ?>);background-size: cover;">

								<div class="col-lg-12 col-md-12  head-style-2  col-sm-12 dlab-project-left p-t70">

									<?php if ($noticias_img['destaquePOST'] != "" && !file_exists($noticias_img['destaquePOST'])) { ?>
										<h2 class="m-t0" style="text-align: right;">
											<span class="text-white">
												<!-- PRÓXIMOS EVENTOS -->
												<img src="<?php echo $noticias_img['destaquePOST']; ?>" alt="<?php echo $noticias_img['tituloPOST']; ?>" <?php echo $noticias_img['tituloPOST']; ?>/>
											</span>
										</h2>
									<?php } else { ?>



										<!-- <h2 class="title" style="
													color: #FFF;
												"><?php echo $idioma['TituloProximoEvento']; ?></h2>
										<div class="dlab-separator-outer">
											<div class="dlab-separator bg-primary"></div>
										</div> -->



									<?php } ?>
								</div>
							</div>


							<div class="col-lg-8 col-md-7 col-sm-12 p-t70 p-r0 dlab-service">
								<div class="service-carousel owl-theme owl-dots-none owl-carousel m-t80">
									<?php

									$hoje = date('d/m/Y');

									$sql = " SELECT 
codigoPOST, tituloPOST, slugPOST,videoPOST, keyworksPOST, descriptionPOST, nomeCATEGORIA, conteudoPOST, nomeUSUARIO,
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN dataenPOST
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN dataesPOST 
ELSE dataPOST END AS dataPOST, 
CASE 
WHEN '" . $_SESSION['idiomasite'] . "' = 'en' THEN imagemenPOST
WHEN '" . $_SESSION['idiomasite'] . "' = 'es' THEN imagemesPOST 
ELSE imagemPOST END AS imagemPOST,
cliquesPOST, ativoPOST 
FROM tb081_posts 
INNER JOIN tb080_categorias ON codigoCATEGORIA = categoriaPOST
INNER JOIN tb0301_usuarios ON codigoUSUARIO = usuarioPOST
WHERE ativoPOST = 1 AND now()<datalimitePOST AND homeCATEGORIA = 1
ORDER BY ordemPOST ASC ";


									//Executa o SQL
									$noticias_query  = mysqli_query($conexao, $sql);
									//Percorre os campos da tabela
									while ($noticias = mysqli_fetch_assoc($noticias_query)) {

										$url = "/noticias/post/" . $noticias['codigoPOST'] . "/" . $noticias['slugPOST'];

									?>

										<div class="item">
											<div class="ow-carousel-entry">
												<div class="ow-entry-media dlab-img-effect zoom-slow">
													<a href="<?php echo $url; ?>"><img src="<?php if ($noticias['imagemPOST'] == '') {
																								echo '/images/blog/grid/pic1.jpg';
																							} else {
																								echo $noticias['imagemPOST'];
																							} ?>" alt=""></a>
												</div>
												<div class="ow-entry-content">
													<!--<div class="date bg-primary "><?php echo $noticias['tituloPOST']; ?></div>-->
													<div class="ow-entry-title">
														<h4 class="text-uppercase"><a href="<?php echo $url; ?>"><?php echo $noticias['tituloPOST']; ?></a></h4>
													</div>
													<div class="ow-entry-text" style="text-align:left">
														<p style="font-size: 15px;"><?php echo $noticias['dataPOST']; ?></p>
													</div>
												</div>
											</div>
										</div>


									<?php } ?>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Our Project END -->

				<div class="section-head text-center">
					<p>&nbsp;</p>
					<h2 class="text-uppercase">Veja abaixo nossos catálogos de produtos</h2>
					<div class="dlab-separator bg-primary"></div>
					<p>Encontre os produtos que você precisa em segundos com nossa variedade de catálogos.</p>
				</div>



				<div class="section-full bg-white content-inner">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6">
								<a href="/produtos">
									<div class="blog-post blog-grid car-services">
										<div class="dlab-post-media dlab-img-effect zoom-slow"> <img src="images/catalogo/online.jpg" alt=""> </div>
										<div class="dlab-post-info">
											<div class="dlab-post-title">
												<h3 class="post-title">Catálogo Online</h3>
											</div>
											<div class="dlab-post-text">
												<p>Acesso rápido direto no seu Browser, Google Chrome, Firefox e Outros.</p>
											</div>
											<button class="site-button outline gray m-r15" type="button">Acessar<i class="far fa-arrow-alt-circle-right"></i></button>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<a href="/download/CatalogoRainhaDasSete.exe">
									<div class="blog-post blog-grid car-services">
										<div class="dlab-post-media dlab-img-effect zoom-slow"> <img src="images/catalogo/executavel.jpg" alt=""> </div>
										<div class="dlab-post-info">
											<div class="dlab-post-title">
												<h3 class="post-title">Catálogo Desktop </h3>
											</div>
											<div class="dlab-post-text">
												<p>Baixe agora mesmo nosso catálogo eletrônico e instale no seu computador.</p>
											</div>
											<button class="site-button outline gray m-r15" type="button">Baixar<i class="far fa-arrow-alt-circle-down"></i></button>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6">
								<a <?php if (celular()==1){ ?>href="/qrcode/index1.html"  rel="modal:open"<?php }else{ ?>href="javascript:;" onClick="buscaqrcode()" <?php } ?>>  
								<!-- <a  href="/qrcode/index1.html"  rel="modal:open">-->
									<div class="blog-post blog-grid car-services">
										<div class="dlab-post-media dlab-img-effect zoom-slow"> <img src="images/catalogo/app.jpg" id="imagembuscaqrcode" alt="Aplicativo"> </div>
										<div class="dlab-post-info">
											<div class="dlab-post-title">
												<h3 class="post-title">Aplicativo </h3>
											</div>
											<div class="dlab-post-text">
												<p>Baixe a versão do nosso catálogo no celular de forma prática.</p>
											</div>
											<button class="site-button outline gray m-r15" type="button">Baixar<i class="far fa-arrow-alt-circle-down"></i></button>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>





				<?php
				require_once('require/footer.php');
				?>

				<!-- Footer END-->
				<!-- scroll top button -->
				<button class="scroltop fas fa-arrow-up style2"></button>
			</div>
			<!-- JavaScript  files ========================================= -->
			<script src="js/jquery.min.js"></script> <!-- JQUERY.MIN JS -->
			<!-- 
	<script src="js/jquery-3.6.4.min.js"></script>   -->

			<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
			<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
			<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
			<script src="plugins/wow/wow.js"></script><!-- WOW JS -->

			<script>
				$(document).ready(function() {
					/* Get iframe src attribute value i.e. YouTube video url
					and store it in a variable */
					var url = $("#cartoonVideo").attr('src');

					/* Assign empty url value to the iframe src attribute when
					modal hide, which stop the video playing */
					$("#myModal").on('hide.bs.modal', function() {
						$("#cartoonVideo").attr('src', '');
					});

					/* Assign the initially stored url back to the iframe src
					attribute when modal is displayed again */
					$("#myModal").on('show.bs.modal', function() {
						$("#cartoonVideo").attr('src', url);
					});





				});


				$(window).on("load", function() {
					lancamentoultimoano();
					//lancamentoanteriores();
				});



				function buscaqrcode(){
 

					$('#imagembuscaqrcode').attr("src", "/images/catalogo/qrcodelogo_<?php echo $idiomasite;?>.png");



				}
			</script>

			<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
			<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
			<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
			<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
			<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
			<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
			<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
			<script src="plugins/rangeslider/rangeslider.js"></script><!-- Rangeslider -->
			<script src="plugins/lightgallery/js/lightgallery-all.js"></script><!-- LIGHT GALLERY -->
			<script src="js/custom.min.js"></script><!-- CUSTOM FUCTIONS  -->
			<script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
			<script src="js/dz.ajax.js"></script><!-- CONTACT JS -->

			<script src="js/swiper.js"></script>
			<script src="js/script.js"></script>

<!-- jQuery Modal 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
-->


			<script>
				var swiper = new Swiper('.swiper-container', {
					slidesPerView: 1,
					spaceBetween: 0,
					speed: 2000,
					parallax: true,
					autoplay: {
						delay: 10000,
						disableOnInteraction: false,
					},
					pagination: {
						el: '.swiper-pagination',
						clickable: true,
					},
					navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev',
					},
					loop: true,
				});


				function pleacepesquisa(DADOS) {


					var qtd = '               ';

					var txt1 = "<?php echo $idioma['PlaceholderPesquisaTxt1']; ?>" + qtd;
					var txt2 = "<?php echo $idioma['PlaceholderPesquisaTxt2']; ?>" + qtd;
					var txt3 = "<?php echo $idioma['PlaceholderPesquisaTxt3']; ?>" + qtd;
					var txt4 = "<?php echo $idioma['PlaceholderPesquisaTxt4']; ?>" + qtd;



					var timeOut;

					if (DADOS == 1) {


						var txtLen = txt1.length;
						var char = 0;
						$('.main-search').attr('placeholder', '|');
						(function typeIt() {
							var humanize = Math.round(Math.random() * (200 - 30)) + 30;
							timeOut = setTimeout(function() {
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
							timeOut = setTimeout(function() {
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
							timeOut = setTimeout(function() {
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
							timeOut = setTimeout(function() {
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



				function trocavideo() {


					var videodestaque = document.getElementById('videodestaque');
					var fotodestaque = document.getElementById('fotodestaque');

					if (videodestaque.style.display === 'none') {

						videodestaque.style.display = 'block';
						fotodestaque.style.display = 'none';

					} else {

						videodestaque.style.display = 'none';
						fotodestaque.style.display = 'block';

					}


				}
			</script>


			<script>
				function lancamentoultimoano() {

					/*  $('#lancamentoultimoano').html('TESTE'); */

					$.ajax({
						url: '/include/lancamentos.php',
						type: 'post',
						data: {

							tipo: 1

						},
						beforeSend: function() {

							$('#lancamentoultimoano').html('<div style="text-align:center"><img src="/images/loading.gif" style="width: 150px; margin: 100px;opacity: 0.7;"></div>');

						},
						success: function(data) {

							$('#lancamentoultimoano').html(data);
							jQuery('.img-carousel-content').owlCarousel({
								loop: true,
								autoplaySpeed: 3000,
								navSpeed: 3000,
								paginationSpeed: 3000,
								slideSpeed: 3000,
								smartSpeed: 3000,
								autoplay: 3000,
								margin: 30,
								nav: true,
								dots: false,
								navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
								responsive: {
									0: {
										items: 1
									},
									480: {
										items: 2
									},
									1024: {
										items: 3
									},
									1200: {
										items: 4
									}
								}
							})

						}
					});




				}

				/* function lancamentoanteriores(){

				 

				 	$.ajax({
								url  : '/include/lancamentos.php',
								type : 'post',
								data : {

									tipo : 2

								},
								beforeSend : function(){  

									$('#lancamentoanteriores').html('<div style="text-align:center"><img src="/images/loading.gif" style="width: 150px; margin: 100px;opacity: 0.7;"></div>');

								},
								success:  function(data) { 

									 $('#lancamentoanteriores').html(data);  
									 jQuery('.img-carousel-content').owlCarousel({
						loop:true,
						autoplaySpeed: 3000,
						navSpeed: 3000,
						paginationSpeed: 3000,
						slideSpeed: 3000,
						smartSpeed: 3000,
				        autoplay: 3000,
						margin:30,
						nav:true,
						dots: false,
						navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
						responsive:{
							0:{
								items:1
							},
							480:{
								items:2
							},			
							1024:{
								items:3
							},
							1200:{
								items:4
							}
						}
					})
									 
								} 
								}); 
								

				} */
			</script>


			<!-- Modal HTML -->
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

						</div>
						<div class="modal-body">
							<iframe id="cartoonVideo" width="100%" height="315" src="https://www.youtube.com/embed/wLV-BgzpY5Q" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
</body>

</html>