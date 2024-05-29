<?php
require_once("inc/config.php");
require_once("inc/funcao.php");

$make = @$_GET['make'];
$acao = @$_GET['acao'];
$act = @$_GET['act'];

switch($make){

	case "home": // Home
	if(file_exists("home.php")){include("home.php");}
	break;	

	case "banner": // Serviços
	if(file_exists("banner.php")){include("banner.php");}
	break;

	case "cadastro": // cadastro
	if(file_exists("cadastro.php")){include("cadastro.php");}
	break;

	case "paginas": // Paginas
	if(file_exists("paginas.php")){include("paginas.php");}
	break;

	case "destaques": // Destaques
	if(file_exists("destaques.php")){include("destaques.php");}
	break;

	case "faq": // F.A.Q
	if(file_exists("faq.php")){include("faq.php");}
	break;

	case "faq": // Grupo
	if(file_exists("grupos.php")){include("grupos.php");}
	break;
	

	case "galeria-de-fotos": // Galeria de fotos
	if(file_exists("galeria-de-fotos.php")){include("galeria-de-fotos.php");}
	break;

	case "galeria-de-videos": // Galeria de videos
	if(file_exists("galeria-de-videos.php")){include("galeria-de-videos.php");}
	break;
	
	case "paginas": // paginas  
	if(file_exists("paginas.php")){include("paginas.php");}
	break;
	
	case "atendimento": // atendimento
	if(file_exists("atendimento.php")){include("atendimento.php");}
	break;
	
	case "analise-fornecedores": // analise fornecedor
	if(file_exists("analise-fornecedores.php")){include("analise-fornecedores.php");}
	break;

	case "clientes": // clientes
	if(file_exists("clientes.php")){include("clientes.php");}
	break;
	
	case "depoimentos": // depoimentos
	if(file_exists("depoimentos.php")){include("depoimentos.php");}
	break;

	case "licencas": // licencas
	if(file_exists("licencas.php")){include("licencas.php");}
	break;			
	
	case "eventos": // atuacao
	if(file_exists("eventos.php")){include("eventos.php");}
	break;
	
	case "chamados": // chamados
	if(file_exists("chamados.php")){include("chamados.php");}
	break;
	
	case "pedidos": // pedidos
	if(file_exists("pedidos.php")){include("pedidos.php");}
	break;
	
	case "artigos": // artidos
	if(file_exists("artigos.php")){include("artigos.php");}
	break;

	case "categorias": // categorias
	if(file_exists("categorias.php")){include("categorias.php");}
	break;

	case "midias": // midias
	if(file_exists("midias.php")){include("midias.php");}
	break;

	case "redes": // redes
	if(file_exists("redes.php")){include("redes.php");}
	break;

	case "modelos": // modelos
	if(file_exists("modelos.php")){include("modelos.php");}
	break;

	case "combustivel": // combustivel
	if(file_exists("combustivel.php")){include("combustivel.php");}
	break;

	case "fabricantes": // fabricantes
	if(file_exists("fabricantes.php")){include("fabricantes.php");}
	break;

	case "lancamentos": // lancamento
	if(file_exists("lancamentos.php")){include("lancamentos.php");}
	break;

	case "registro": // registro
	if(file_exists("registro.php")){include("registro.php");}
	break;

	case "produtos": // produtos
	if(file_exists("produtos.php")){include("produtos.php");}
	break;

	case "concorrentes": // concorrentes
	if(file_exists("concorrentes.php")){include("concorrentes.php");}
	break;

	case "intercambiabilidade": // intercambiabilidade
	if(file_exists("intercambiabilidade.php")){include("intercambiabilidade.php");}
	break;
	
	case "especificacoes": // especificacoes
	if(file_exists("produtos.php")){include("produtos.php");}
	break;

	case "login": // login
	if(file_exists("login.php")){include("login.php");}
	break;
	
	case "usuarios": // usuarios
	if(file_exists("usuarios.php")){include("usuarios.php");}
	break;
	
	case "esqueci-minha-senha": // Esqueci Senha
	if(file_exists("esqueci-minha-senha.php")){include("esqueci-minha-senha.php");}
	break;

	default: // Pagina Principal
	if(file_exists("home.php")){include("home.php");}
	break;

	case "grupos": // grupos
	if(file_exists("grupos.php")){include("grupos.php");}
	break;
	
}
require_once("inc/close.php");
?>