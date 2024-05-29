<div class="section-full  content-inner p-t50" >

</div>
    <div class="bg-primary dlab-newsletter">
		<div class="container equal-wraper">
			<form class="dzSubscribe" action="script/mailchamp.php" method="post">
				<div class="row position-relative">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper equal-col p-t30 p-b20 left">
							<div class="icon-lg text-white radius">
								<i class="ti-email"></i>
							</div>
							<div class="icon-content"> <strong class="text-black text-uppercase font-18"><?php echo $idioma['TituloFiquePorDentro'];?></strong>
								<h2 class="dlab-tilte "><?php echo $idioma['TituloDASNOTICIAS'];?></h2>
							</div>
						</div> 
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="dzSubscribeMsg"></div>
						<div class="input-group equal-col p-t40  p-b10">
							<input name="dzEmail" required placeholder="<?php echo $idioma['TituloEmail'];?>" required="required" class="form-control" type="text">
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-12 offset-lg-1 offset-md-1">
						<div class="equal-col p-t40 p-b10 skew-subscribe">
							<button name="submit" value="Submit" type="submit" class="site-button-secondry button-skew z-index1"> <span><?php echo $idioma['TituloInscrevase'];?></span><i class="fas fa-angle-right"></i> </button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
    <footer class="site-footer footer-white" id="footer">
		<div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="widget widget_about">
                            <div class="logo-footer"><img src="/images/Logo_rainha.png" alt=""></div>
                            <p><?php echo $configuracoes['breveEMPRESA']?></p>
                            <ul class="dlab-social-icon dlab-border">
                                <li><a class="fab fa-facebook-f" href="https://pt-br.facebook.com/rainhadassete/" target="blank"></a></li>
                                <li><a class="fab fa-instagram" href="https://www.instagram.com/rainhadassete/" target="blank"></a></li>
                                <li><a class="fab fa-tiktok" href="https://www.tiktok.com/@rainhadassete" target="blank"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="widget widget_services">
                            <h4 class="institucional"><?php echo $idioma['TituloInstitucional'];?></h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-primary"></div>
                            </div>
                            <ul>
                                <li><a href="/<?php echo $idioma['urlSubEmpresa'];?>"><?php echo $idioma['TituloSubEmpresa'];?></a></li>
                                <!-- <li><a href="/<?php echo $idioma['urlPoliticaDePrivacidade']; ?>"><?php echo $idioma['TituloSubPoliticaDePrivacidade'];?></a></li> -->
								<li><a href="/<?php echo $idioma['urlSubQualidade'];?>"><?php echo $idioma['TituloSubQualidade'];?></a></li>
                                <?php 

$sql_paginasfooter = " SELECT codigoPAGINA, 
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN tituloenPAGINA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN tituloesPAGINA 
ELSE tituloPAGINA END AS tituloPAGINA,
CASE 
WHEN '".$_SESSION['idiomasite']."' = 'en' THEN slugenPAGINA
WHEN '".$_SESSION['idiomasite']."' = 'es' THEN slugesPAGINA 
ELSE slugPAGINA END AS slugPAGINA
FROM tb0060_paginas WHERE ativoPAGINA = 1 AND 
menufooterPAGINA = 1 ORDER BY ordemPAGINA ASC";


//Executa o SQL
$paginasfooter_query  = mysqli_query($conexao, $sql_paginasfooter);
//Percorre os campos da tabela
while($paginasfooter = mysqli_fetch_assoc($paginasfooter_query)){

?>
			<li> <a href="/<?php echo $idioma['urlSubPaginas'];?>/<?php echo $paginasfooter['slugPAGINA'];?>"><?php echo $paginasfooter['tituloPAGINA'];?></a> </li>
			
<?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase"><?php echo $idioma['TituloAtendimento'];?></h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-primary"></div>
                            </div>
                            <ul>
                                <li><a href="/<?php echo $idioma['urlAtendimento'];?>"><?php echo $idioma['TituloSubAtendimento'];?></a></li>
                                <li><a href="/<?php echo $idioma['urlFaq'];?>"><?php echo $idioma['TituloSubFAQ'];?></a></li>
                                <!--<li><a href="/seja-distribuidor">Seja um Distribuidor</a></li>-->
                                <li><a href="/<?php echo $idioma['urlSejaFornecedor'];?>"><?php echo $idioma['TituloSubFornecedor'];?></a></li>
                                <li><a href="/trabalhe-conosco">Trabalhe Conosco</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b15 text-uppercase"><?php echo $idioma['TituloContateNos'];?></h4>
                            <div class="dlab-separator-outer m-b10">
                                <div class="dlab-separator bg-primary"></div>
                            </div>
                            <ul>
                                <li><i class="ti-location-pin" style=" margin-left: -7px; margin-top: 6px;"></i><?php echo $configuracoes['ruaEMPRESA'];?>&nbsp,&nbsp<?php echo $configuracoes['bairroEMPRESA'];?>&nbsp,&nbsp<?php echo $configuracoes['cidadeEMPRESA'];?>&nbsp,&nbsp<?php echo $configuracoes['estadoEMPRESA'];?>&nbsp,&nbsp<?php echo $configuracoes['paisEMPRESA'];?></li>
                                <li><i class="ti-mobile" style=" margin-left: -4px; margin-top: -9px;"></i>+55&nbsp<?php echo $configuracoes['telefoneEMPRESA'];?></li>
                                <li><img src="/images/icons/16/whatsapp.png" style=" margin-left: -35px; margin-right: 20px;">+55&nbsp<?php echo $configuracoes['celularEMPRESA'];?></li>
                                <li><i class="ti-email" style=" margin-left: 1px; margin-top: -09px;"></i><?php echo $configuracoes['emailEMPRESA'];?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 text-left"> 
						<span>© Rainha das Sete | <?php echo $idioma['TituloCopyRightDe'];?> 1989 <?php echo $idioma['TituloCopyRightA'];?> <?php echo date('Y');?> <br><?php echo $idioma['TituloCopyRight'];?></span>
					</div>
					<div class="col-lg-4 col-md-4 text-center"> 
					
					</div>
					<!-- <div class="col-lg-4 col-md-4 text-right"> 
						<a href="about-1.html"> About Us</a>
						<a href="faq-1.html"> FAQs</a>
						<a href="contact.html"> Contact Us</a>
					</div> -->
                </div>
            </div>
        </div>
    </footer>


    <div class="whatsappFooter"><a href="https://api.whatsapp.com/send?phone=5511992113034&text=<?php echo $idioma['TituloWhats'];?><?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>" target="_Blank"><img src="/images/whats.png" width="64" heigth="64"></a></div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    function buscaDados() {
        document.FormBuscaDados.submit();
    }
</script>


<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58d4f050f7bbaa72709c2307/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '823690201497284');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=823690201497284&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160048291-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160048291-1');
</script>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "cvasp0mtzd");
</script>
            
<script charset="UTF-8" src="//web.webpushs.com/js/push/484d81a1ae1eafeeb4a4a8deeeff76c5_1.js" async></script>
  