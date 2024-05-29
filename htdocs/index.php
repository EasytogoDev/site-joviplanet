<?php




require_once('painel/inc/funcao.php');
require_once('painel/inc/config.php');

//Nova Base
require_once('require/funcao.php');
require_once('require/config.php');


require_once('require/idiomas/'.$idiomasite.'.php'); 

switch($make){

 
				default:
				if($configuracoes['manutencaoEMPRESA']==1){if(file_exists("manutencao.php")){include("manutencao.php");}}else{if(file_exists("home.php")){include("home.php");}}					
				break; 
			
				case "manutencao": 
					if(file_exists("manutencao.php")){include("manutencao.php");} //manutencao
				break;	

				case "home":
				case "inicio":
				case "hogar":
				if(file_exists("home.php")){include("home.php");} //OK
				break;	
				

				//GRUPO DE PAGINAS INSTITUCIONAIS
				
				case "company":
				case "empresa":
				if(file_exists("sobre-nos.php")){include("sobre-nos.php");} //OK
				break;
				
				case "qualidade":
				case "calidad":
				case "quality":					
				if(file_exists("qualidade.php")){include("qualidade.php");} //OK
				break;
				
				case "politica-de-privacidade":
				if(file_exists("politica-de-privacidade.php")){include("politica-de-privacidade.php");} //OK
				break;


				//PRODUTOS//
				
				case "productos":
				case "products":
				case "produtos":
				if(file_exists("produtos.php")){include("produtos.php");}
				break;


				//CATALOGO//

				case "catalogo":
				case "catalog":
				case "catalogar":
				if(file_exists("catalogo.php")){include("catalogo.php");}
				break;


				//NOTICIA//
				
				case "news":
				case "noticias":
				if(file_exists("noticias.php")){include("noticias.php");}
				break;


				//DOWNLOAD//
				
				case "media":
				case "midias":
				case "media":
				if(file_exists("downloads.php")){include("downloads.php");}
				break;


				//ATENDIMENTO E FALE-CONOSCO//
				
 
				case "contacto":
				case "contact":
				case "atendimento":
				if(file_exists("atendimento.php")){include("atendimento.php");}
				break;				
				

				//QUALIDADE//

				case "qualidade":
				case "quality":
				case "calidad":
				if(file_exists("qualidade.php")){include("qualidade.php");}
				break;
				

				//VALIDAR PAGINA DE ERRO 404 / 500 ....
				case "404":
				if(file_exists("404.php")){include("404.php");}
				break;	
						
				
				//AREA RESTRITA//
				case "area-restrita":
				if(file_exists("area-restrita.php")){include("area-restrita.php");}
				break;
				
				//SOBRE NÓS//
				case "about-Us":
				case "sobre-nosotros":
				case "sobre-nos":
				if(file_exists("sobre-nos.php")){include("sobre-nos.php");}
				break;

				//ONDE ENCONTRAR//
				
				case "onde encontrar":
				case "donde encontrar":
				case "where to find":
				if(file_exists("onde-encontrar.php")){include("onde-encontrar.php");}
				break;

				//POLITICA DE PRIVACIDADE//

				case "privacy-policy":
				case "Politica-de-privacidade":
				case "política-de-privacidad":
				if(file_exists("politica-de-privacidade.php")){include("politica-de-privacidade.php");}
				break;

				//FALE CONOSCO//

				case "hable-con-nosotros":
				case "fale-conosco":
				case "contact-us":
				if(file_exists("atendimento.php")){include("atendimento.php");}
				break;

				//F.A.Q//

				case "faq":
				if(file_exists("faq.php")){include("faq.php");}
				break;

				//SEJA UM DISTRIBUIDOR//

				case "seja-distribuidor":
				case "be-a-distributor":
				case "ser-un-distribuidor":
				if(file_exists("seja-distribuidor.php")){include("seja-distribuidor.php");}
				break;

				//SEJA UM FORNECEDOR//

				case "ser-un-proveedor":
				case "seja-fornecedor":
				case "be-a-supplier":
				if(file_exists("seja-fornecedor.php")){include("seja-fornecedor.php");}
				break;

				//TRABALHE CONOSCO//

				case "trabalhe-conosco":
				case "work-with-us":
				case "trabaja-con-nosostros":
				if(file_exists("trabalhe-conosco.php")){include("trabalhe-conosco.php");}
				break;

				//ENVIE CURRICULO//

				case "curriculo":
				case "curriculum":
				case "plan de estudios":
				if(file_exists("curriculo.php")){include("curriculo.php");}
				break;

				//IDIOMA

				case "linguagem":
				case "language":
				case "idioma":
				if(file_exists("idioma.php")){include("idioma.php");}
				break;

				//PAGINAS
				
				case "paginas":
				case "pages":
				case "archivos":
				if(file_exists("paginas.php")){include("paginas.php");}
				break;


				


			} 
			
require_once('painel/inc/close.php');