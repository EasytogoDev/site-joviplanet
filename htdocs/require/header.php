<header class="site-header header header-creative-one header-sidenav onepage">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix">
				<!-- website logo -->
				<div class="logo-header mostion logo-ac">
					<a href="/">
						<img src="/images/logo-rainha-das-sete.webp" alt="Rainha das Sete">
					</a>
				</div>

				
				<!-- extra nav -->
				<div class="extra-nav">
					<div class="extra-cell">
						<!--<a href="contact.html" class="site-button-link quick-look">ATENDIMENTO</a>-->
						<button id="quik-search-btn" type="button" class="search-btn site-button-link"><i class="fas fa-search"></i></button>
					</div>
				</div>
				<!-- Quik search -->
				<div class="dlab-quik-search bg-primary ">
					<form action="/<?php echo $idioma['urlProdutos'];?>/pesquisa" method="post" id="FormBuscaDados" name="FormBuscaDados">					 
						<input type="text"  name="q"  value="" id="inputString"  onKeyup="lookup(this.value);" onKeyPress="lookup(this.value);" 
					class="form-control main-search" placeholder="Pesquise pelo Produto, marca ou modelo"  autocomplete="off" />
						<span id="quik-search-remove"><i class="ti-close"></i></span>
					</form>
					
				</div>
				<div class="header-nav navbar-collapse collapse justify-content-end navbar" id="navbarNavDropdown">
					<ul class="nav navbar-nav nav-style nav-black-text">
						<li> <a href="/"><?php echo $idioma['MenuHome'];?></a> </li>
						<li> <a href="javascript:;"><?php echo $idioma['MenuInstitucional'];?><i class="fas fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li> <a href="/<?php echo $idioma['urlSubEmpresa'];?>"><?php echo $idioma['MenuSubEmpresa'];?></a> </li>
								<li> <a href="/<?php echo $idioma['urlSubQualidade'];?>"><?php echo $idioma['MenuSubQualidade'];?></a> </li>
								<li> <a href="/<?php echo $idioma['urlTrabalheConosco'];?>"><?php echo $idioma['MenuSubTrabalheConosco'];?></a> </li>


<?php 

$sql_paginasmenu = " SELECT codigoPAGINA, 
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN tituloenPAGINA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN tituloesPAGINA 
ELSE tituloPAGINA END AS tituloPAGINA,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPAGINA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPAGINA 
ELSE slugPAGINA END AS slugPAGINA
FROM tb0060_paginas WHERE ativoPAGINA = 1 AND 
menuheaderPAGINA = 1 ORDER BY ordemPAGINA ASC";


//Executa o SQL
$paginasmenu_query  = mysqli_query($conexao, $sql_paginasmenu);
//Percorre os campos da tabela
while($paginasmenu = mysqli_fetch_assoc($paginasmenu_query)){

?>
			<li> <a href="/<?php echo $idioma['urlSubPaginas'];?>/<?php echo $paginasmenu['slugPAGINA'];?>"><?php echo $paginasmenu['tituloPAGINA'];?></a> </li>
			
<?php } ?>
							</ul>
						</li>
						 
						<li class="has-mega-menu "> <a href="javascript:;"><?php echo $idioma['MenuProdutos'];?><i class="fas fa-chevron-down"></i></a>
							
						
							<ul class="mega-menu bg-menu">
								<li> <a href="javascript:;"><?php echo $idioma['MenuSubLinhas'];?></a>
									<ul>


										<?php
			
										$query_menu_linhas = mysqli_query($conexao, "SELECT imagemLINHA,
										CASE 
										WHEN '".$_SESSION['idiomasite']."' = 'en' THEN nomeenLINHA
										WHEN '".$_SESSION['idiomasite']."' = 'es' THEN nomeesLINHA
										ELSE nomeLINHA END AS nomeLINHA,

										CASE 
										WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenLINHA
										WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesLINHA
										ELSE slugLINHA END AS slugLINHA
										
										FROM `tb0011_linhas` WHERE ativoLINHA = 1 
										ORDER BY ordemLINHA ASC
										");
									
										while($menu_linhas = mysqli_fetch_assoc($query_menu_linhas)){

										?>
										<li>
											<a href="/<?php echo $idioma['urlProdutos'];?>/<?php echo $idioma['urlSubLinhas'];?>/<?php echo $menu_linhas['slugLINHA'];?>" style=" margin: 0px 0px 10px 0px;">
												<div>
													<i class="icon"><img src="<?php echo $menu_linhas['imagemLINHA'];?>" width="42" style="border-radius:20px"></i>
													<?php echo $menu_linhas['nomeLINHA'];?>
												</div>
											</a>
										</li>
										<?php }  ?>   

 
										
									</ul>
								</li>


								<li>  




<?php

										
$query_grupos_cat = mysqli_query($conexao, "SELECT codigoGRUPO, hexadecimalGRUPO,

CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN nomeenGRUPO
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN nomeesGRUPO
ELSE nomeGRUPO END AS nomeGRUPO,

CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenGRUPO
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesGRUPO
ELSE slugGRUPO END AS slugGRUPO

FROM `tb0020_grupo_produtos` 
INNER JOIN tb0012_categorias ON codigoGRUPO = grupoCATEGORIA
WHERE ativoGRUPO = 1  
GROUP BY codigoGRUPO, nomeGRUPO, nomeesGRUPO, nomeenGRUPO, slugGRUPO, slugesGRUPO, slugenGRUPO
ORDER BY ordemGRUPO ASC;");
$contagem_cat = 1;


?>
								
								<!-- <a href="/produtos">LINHA DE PRODUTOS </a>  -->

								<!-- <div class="col-lg-6 col-md-6 m-b30"> -->
                                    <!--  <h4 class="text-uppercase m-b30">	<a href="/produtos">LINHA DE PRODUTOS </a> </h4> -->
                                 <div class="dlab-accordion border-bottom no-border no-cover menugeralaberto" id="accordion<?php echo $contagem_cat;?>">
                                        
									
									
									
										<?php 
										
										 
											
											while($grupos_cat = mysqli_fetch_assoc($query_grupos_cat)){

										 
										 
										?>
										<div class="panel" style="    margin: 15px;    border: 1px solid #F2f2f2;    border-radius: 15px; ">
                                            <div class="acod-head acod-headss">
                                                <h5 class="acod-title" style=" border-radius:10px; border-top-left-radius:10px;border-top-right-radius:10px;  padding:5px 10px; background: <?php  echo $grupos_cat['hexadecimalGRUPO']; ?>;    color: #FFFFFF;"> 
													<a data-bs-toggle="collapse" style=" color: <?php  if($grupos_cat['hexadecimalGRUPO']!=""){echo '#FFFFFF';}else{echo'#000000';}; ?> ;" href="#collapseOne<?php echo $grupos_cat['codigoGRUPO'];?>" data-bs-parent="#accordion<?php echo $contagem_cat;?>" aria-expanded="false" class="collapsed">
												<!-- 	<i class="ti-world"></i> --> <?php echo ($grupos_cat['nomeGRUPO']);?> </a>
											 </h5>
                                            </div>
                                            
											<div id="collapseOne<?php echo $grupos_cat['codigoGRUPO'];?>" class="acod-body collapse <?php if($contagem_cat==0){echo ' show';}?>" data-bs-parent="#accordion<?php echo $contagem_cat;?>" >
                                                <div class="acod-content" >
														
														<ul style="line-height: 15px !important;">
														<?php

														$query_grupos = mysqli_query($conexao, "SELECT codigoCATEGORIA,
														CASE 
														WHEN '".$_SESSION['idiomasite']."' = 'en' THEN nomeenCATEGORIA
														WHEN '".$_SESSION['idiomasite']."' = 'es' THEN nomeesCATEGORIA 
														ELSE nomeCATEGORIA END AS nomeCATEGORIA, 

														CASE 
														WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenCATEGORIA
														WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesCATEGORIA 
														ELSE slugCATEGORIA END AS slugCATEGORIA 
														
														,ordemCATEGORIA, COUNT(codigoPRODUTO) AS TOTAL FROM `tb0012_categorias`
														LEFT JOIN tb0012_categorias_vinculos ON codigoCATEGORIA = categoriaCATEGORIAVINCULO
														LEFT JOIN tb0015_produtos ON codigoPRODUTO = produtoCATEGORIAVINCULO
														WHERE grupoCATEGORIA = ".$grupos_cat['codigoGRUPO']." AND ativoCATEGORIA = 1
														GROUP BY codigoCATEGORIA,nomeCATEGORIA, slugCATEGORIA 
														ORDER BY ordemCATEGORIA ASC
														");
														$contagem = 1;
														while($grupos = mysqli_fetch_assoc($query_grupos)){

														?>
														<li style="line-height: 15px !important;"><a href="/<?php echo $idioma['urlProdutos'];?>/<?php echo $idioma['urlCategoria'];?>/<?php echo $grupos['slugCATEGORIA'];?>"
														style="    text-transform: uppercase;    font-size: 12px;    font-weight: bold;"
														>
														<!-- <?php echo ($grupos['ordemCATEGORIA']);?> ˪  --><?php echo ($grupos['nomeCATEGORIA']);?><!--  (<?php echo ($grupos['TOTAL']);?>) --></a></li>

														<?php  $contagem++; } ?>
														</ul>

												</div>
                                            </div>
                                        </div> 


										<?php  if(($contagem_cat % 7) == 0){ ?>
											
										
											</div>
                               			<!-- 	</div> -->
											   </li>
											   <li>
											<!-- <div class="col-lg-6 col-md-6 m-b30"> -->
										<!-- 	<h4 class="text-uppercase m-b30">	<a href="/produtos">LINHA DE PRODUTOS </a> </h4> -->
											<div class="dlab-accordion border-bottom no-border no-cover menugeralaberto" id="accordion<?php echo $contagem_cat;?>">


										<?php 
											} 
											$contagem_cat++;} 
										?>

										


                                    </div>
                       <!--          </div> -->


 
						 
								</li>

							<!-- 	<li> <a href="javascript:;"> &nbsp;  </a>
									<ul>
										<li></li><a href="javascript:;"> &nbsp; &nbsp; &nbsp; &nbsp;</a></li> 
									</ul>
								</li> -->
							</ul>
							
						</li>
 
						<li class="has-mega-menu "> <a href="javascript:;"><?php echo $idioma['MenuCatalogos'];?><i class="fas fa-chevron-down"></i></a>
							
						
							<ul class="mega-menu bg-menu">
								<li> <a href="javascript:;"><?php echo $idioma['MenuSubAcessar'];?></a>
									<ul>

										<li>
											<a href="/<?php echo $idioma['urlProdutos'];?>" style=" margin: 0px 0px 20px 0px;">
												<div>
													<i class="icon"><img src="/images/icons/64/IconMonitorOnline.png" width="64"></i>
													<?php echo $idioma['MenuSubCatalogoOnline'];?>
												</div>
											</a>
										</li>
 
										
									</ul>
								</li>


								<li> <a href="javascript:;"><?php echo $idioma['MenuSubWindows'];?></a>
									<ul>

										<li>
											<a href="/download/CatalogoRainhaDasSete.exe" style=" margin: 0px 0px 20px 0px;">
												<div>
													<i class="icon"><img src="/images/icons/64/IconCatalogoWindows.png" heigth="64"></i>
													<?php echo $idioma['MenuSubCatalogoDesktop'];?>
												</div>
											</a>
										</li>
 
										
									</ul>
								</li>


								
								<li> <a href="javascript:;"><?php echo $idioma['MenuSubBaixar'];?></a>
									<ul>

										<li>
											<a href="/<?php echo $idioma['urlCatalogos'];?>/pdf" style=" margin: 0px 0px 20px 0px;">
												<div>
													<i class="icon"><img src="/images/icons/64/IconCatalogoPfd.png" width="64"></i>
													<?php echo $idioma['MenuSubCatalogoPdf'];?>
												</div>
											</a>
										</li>
 
										
									</ul>
								</li>


								<li> <a href="javascript:;"><?php echo $idioma['MenuSubAplicativo'];?></a>
									<ul>

										<li>
											<a href="https://play.google.com/store/apps/details?id=br.com.ideia2001.CatalogoRainhaDasSete&hl=pt_BR&gl=US&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" target="_Blank" style=" margin: 0px 0px 20px 0px;">
												<div>
													<i class="icon"><img src="/images/icons/64/IconCatalogoAndroid_<?php echo $_SESSION['idiomasite'];?>.png" height="64"></i>
													 
												</div>
											</a>
										</li>
  

										<li>
											<a href="https://apps.apple.com/us/app/rainha-das-sete-cat%C3%A1logo/id1418736628" target="_Blank" style=" margin: 0px 0px 20px 0px;">
												<div>
													<i class="icon"><img src="/images/icons/64/IconCatalogoApple_<?php echo $_SESSION['idiomasite'];?>.png" height="64"></i>
													 
												</div>
											</a>
										</li>
 
										
									</ul>
								</li>




								
								
							</ul>
						</li>

						
						<li> <a href="/<?php echo $idioma['urlNoticias'];?>"><?php echo $idioma['MenuNoticias'];?></a> </li>
						<li> <a href="/<?php echo $idioma['urlDownloads'];?>"><?php echo $idioma['MenuDownloads'];?></a> </li>
					
						
						<li> <a href="/<?php echo $idioma['urlAtendimento'];?>"><?php echo $idioma['MenuAtendimento'];?></a></li>
						<?php  if($_SESSION['idiomasite']!='en'){ ?>
						<li><a href="/idioma/en"><img src="/images/icons/EN.png" alt="Inglês" style="width: 24px;" title="Inglês"></a></li>
						<?php  } 
							 if($_SESSION['idiomasite']!='es'){
						?>
						<li><a href="/idioma/es"><img src="/images/icons/ES.png" alt="Espanhol" style="width: 24px;" title="Espanhol"></a></li>
						<?php  } 
							 if($_SESSION['idiomasite']!='pt-br'){
						?>
						<li><a href="/idioma/pt-br"><img src="/images/icons/BR.png" alt="Português" style="width: 24px;" title="Português"></a></li>
						<?php  } 
							
						?>
					</ul>
				</div>

				
            </div>
			<div id="suggestions"> </div> 
			<div class="header-nav navbar-collapse collapse full-sidenav navbar">                                                 
							
				<div class="login-form">
			<div class="tab-content nav">
                <div id="login" class="tab-pane active text-center">
                    <form class="p-a10 dlab-form">
                        <h3 class="form-title m-t20 text-left"><a href="https://sva.rainhadassete.com.br/"><?php echo $idioma['MenuExclusivo'];?></a></h3>
                        <!-- <div class="dlab-separator-outer m-b5">
                            <div class="dlab-separator bg-primary style-liner"></div>
                        </div>
                        <p>Digite seu nome de usuario e sua senha </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Nome de usuario" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control " placeholder="Senha" type="password"/>
                        </div>
						<div class="form-group text-left">
                            <button class="site-button m-r5 dz-xs-flex">Entrar</button>
                           
						</div>
						<div class="form-group text-left">
                             
                            
								<label class="m-b0">
									<input id="check1" type="checkbox">
									<label for="check1">Lembrar</label>
								</label><br>
								<a data-bs-toggle="tab" href="#forgot-password" class="m-l10"><i class="fas fa-unlock-alt"></i> Esqueci minha senha </a>
						 
						</div> -->
						
                    </form>
                    
                </div>
                <!-- <div id="forgot-password" class="tab-pane fade">
                    <form class="p-a30 dlab-form text-center">
                        <h3 class="form-title m-t0">Esqueceu sua senha?</h3>
                        <div class="dlab-separator-outer m-b5">
                            <div class="dlab-separator bg-primary style-liner"></div>
                        </div>
                        <p>Digite seu email abaixo para redefinir sua senha. </p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Email" type="text"/>
                        </div>
                        <div class="form-group text-left"> <a class="site-button outline gray" data-bs-toggle="tab" href="#login">Voltar</a>
                            <button class="site-button float-end">Enviar</button>
                        </div>
                    </form>
                </div>
                <div id="developement-1" class="tab-pane fade">
                    <form class="p-a30 dlab-form text-center text-center">
                        <h3 class="form-title m-t0">Cadastrar-se</h3>
                        <div class="dlab-separator-outer m-b5">
                            <div class="dlab-separator bg-primary style-liner"></div>
                        </div>
                        <p>Insira seus dados pessoais abaixo:</p>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Nome completo" type="text"/>
                        </div>
						<div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Nome de usuario" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Endereço de email" type="text"/>
                        </div>
                        
                        <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Senha" type="password"/>
                        </div>
                        <div class="">
                            <input name="dzName" required="" class="form-control" placeholder="Digite sua senha novamente" type="password"/>
                        </div>
                        <div class="m-b30">
							<input id="check2" type="checkbox"/>
							<label for="check2">Eu concordo com os <a href="#">Termos de serviço </a>&<a href="#"> Politica de privacidade</a> </label>
                        </div>
                        <div class="form-group text-left "> 
							<a class="site-button outline gray" data-bs-toggle="tab" href="#login">Voltar</a>
                            <button class="site-button float-end">Enviar</button>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>

			<!-- <div class="social-menu">
				<p class="copyright-head">© 2023 Rainha das Sete </p>
				
			</div> -->
			</div>
			<div class="menu-close">
				<i class="ti-close"></i>
			</div>
        </div>
        <!-- main header END -->
    </header>
    <!-- Header END -->
	<!-- Aside Header -->
	<aside class="menu-aside d-flex align-items-center">
		<button type="button" class="menu-btn">

			<div class="menu-icon-in menu-rep">
				<span></span>
				<span></span>
				<span></span>
			</div>

			<button style="position: fixed;" class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span></span>
				<span></span>
				<span></span>
			</button>


			
		</button>
		<!-- Add Pagination -->
		<div class="swiper-pagination style1"></div>
	</aside>