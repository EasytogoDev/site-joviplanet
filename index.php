<?php
require_once('require/funcao.php');
require_once('require/config.php');

$PDO = db_connect();

$make = @$_GET['make']; 
$pga = @$_GET['pga']; 
$pgb = @$_GET['pgb']; 
$pgc = @$_GET['pgc']; 
$pgd = @$_GET['pgd']; 



if (isset($_SESSION['loginUSUARIO']) && isset($_SESSION['senhaUSUARIO'])){
 
	$loginUSUARIO = addslashes($_SESSION['loginUSUARIO']);
	$senhaUSUARIO = addslashes($_SESSION['senhaUSUARIO']);
	$CarregaUsuarios = $PDO->query("
	SELECT 
				codigoUSUARIO, 
				nomeUSUARIO, 
				sobrenomeUSUARIO, 
				whatsappUSUARIO, 
				fotoUSUARIO, 
				nivelUSUARIO
				FROM tb0201_usuarios 
				WHERE 
				emailUSUARIO = '".$loginUSUARIO."' 
				AND ((senhaUSUARIO = '".$senhaUSUARIO."') or (googleidUSUARIO = '".$senhaUSUARIO."'))
				AND ativoUSUARIO= '1'
	");

	$FeachCarregaUsuarios = $CarregaUsuarios->fetchAll();
	$usuario = $FeachCarregaUsuarios[0];

} 

	switch($make){


		default:
		if(file_exists("home.php")){include("home.php");}	
		break; 

		case "home":
		if(file_exists("home.php")){include("home.php");} //OK
		break;	

		case "about-us":
		if(file_exists("about-us.php")){include("about-us.php");} //OK
		break; 
		
		case "faq":
		if(file_exists("faq.php")){include("faq.php");} //OK
		break; 
		
		case "cookies-policy":
		if(file_exists("cookies-policy.php")){include("cookies-policy.php");} //OK
		break; 
 
		case "single":
		if(file_exists("single.php")){include("single.php");} //OK
		break; 
	
		case "prices":
		if(file_exists("prices.php")){include("prices.php");} //OK
		break; 

		case "contact":
		if(file_exists("contact.php")){include("contact.php");} //OK
		break;	
		
		case "login":
		if(file_exists("login.php")){include("login.php");} //OK
		break;	
		
		case "register":
		if(file_exists("register.php")){include("register.php");} //OK
		break;		
		
		case "become-a-host":
		case "plans":
		if(file_exists("prices.php")){include("prices.php");} //OK
		break;

		case "my-plans":
		if(file_exists("plans.php")){include("plans.php");} //OK
		break;

		case "edit-plans":
		if(file_exists("edit-plans.php")){include("edit-plans.php");} //OK
		break;

		case "result-search":
		if(file_exists("resultado-busca.php")){include("resultado-busca.php");} //OK
		break;
		
		case "results":
		if(file_exists("busca.php")){include("busca.php");} //OK
		break;

		case "not-found":
		if(file_exists("busca-not-found.php")){include("busca-not-found.php");} //OK
		break;	

		case "page-final":
		if(file_exists("pagina-final.php")){include("pagina-final.php");} //OK
		break;

		case "privacy-policy":
		if(file_exists("privacy-policy.php")){include("privacy-policy.php");} //OK
		break; 

		case "faqs":
		if(file_exists("faqs.php")){include("faqs.php");} //OK
		break;

		case "category":				
		if(file_exists("page-category.php")){include("page-category.php");} //OK
		break;

		case "premium":				
			if(file_exists("page-premium.php")){include("page-premium.php");} //OK
			break;

		case "finish":				
		if(file_exists("finish.php")){include("finish.php");} //OK
		break;

		case "agency":				
		if(file_exists("agency-list.php")){include("agency-list.php");} //OK
		break;

		case "agency-details":				
		if(file_exists("agency-details.php")){include("agency-details.php");} //OK
		break;

		case "agents":				
		if(file_exists("agents-grid.php")){include("agents-grid.php");} //OK
		break;

		case "agents-details":				
		if(file_exists("agents-details.php")){include("agents-details.php");} //OK
		break;
		
		
	


		//PAINEL


		case "dashboard":
		if(file_exists("dashboard.php")){include("dashboard.php");} //OK
		break; 

		case "my-listings":
		if(file_exists("my-listings.php")){include("my-listings.php");} //OK
		break;  

		case "add-new-listings":
		if(file_exists("add-new-listings.php")){include("add-new-listings.php");} //OK
		break;

		case "add-new-plans":
		if(file_exists("add-new-plans.php")){include("add-new-plans.php");} //OK
		break; 

		case "edit-listings":
		if(file_exists("edit-listings.php")){include("edit-listings.php");} //OK
		break; 
		
		case "my-bookings":
		if(file_exists("my-bookings.php")){include("my-bookings.php");} //OK
		break;

		case "my-favorites":
		if(file_exists("my-favorites.php")){include("my-favorites.php");} //OK
		break;

		case "messages":
		if(file_exists("messages.php")){include("messages.php");} //OK
		break;

		case "payouts":
		if(file_exists("payouts.php")){include("payouts.php");} //OK
		break;

		case "my-packages":
		if(file_exists("my-packages.php")){include("my-packages.php");} //OK
		break;

		case "profile":
		if(file_exists("profile.php")){include("profile.php");} //OK
		break;

		case "invoice":
		if(file_exists("invoice.php")){include("invoice.php");} //OK
		break;
		
		case "saves-search":
		if(file_exists("save-search.php")){include("save-search.php");} //OK
		break;
 

	}