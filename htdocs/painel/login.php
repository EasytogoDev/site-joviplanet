<?php 
if(@$_GET['acao']=='logout'){

  require_once("inc/restrito.php");
  
  @session_start();
  @session_destroy();
  @session_unset();
  
  echo "<script>alert('Obrigado por usar sistema');top.location.href='?make=login';</script>";
  
}
elseif(@$_POST['botao']=='Entrar')
{
	
  $loginUSUARIO = addslashes(trim($_POST['usuarioUSUARIO']));
  $passUSUARIO = addslashes(trim($_POST['senhaUSUARIO']));
  
  $exe_logar = mysqli_query($conexao, "SELECT * FROM tb0301_usuarios  WHERE emailUSUARIO = '".$loginUSUARIO."' AND senhaUSUARIO = '".md5($passUSUARIO)."'") or die(mysqli_error());
  $fet_logar = mysqli_fetch_assoc($exe_logar);
  $num_logar = mysqli_num_rows($exe_logar);
  if ($num_logar == 0)
  {  
  
	echo "<script>alert('Login ou Senha invalido! Tente novamente');location.href='?make=login';</script>";
	
  } 
  elseif($fet_logar['ativoUSUARIO'] == "0")
  {
	  
	echo "<script>alert('Usuario não foi ativado pelo email enviado, Verifique seu email para entrar no sistema!');location.href='?make=login';</script>";
	
  }
  else 
  {
	  
	@session_start();
	$_SESSION['loginUSUARIO'] = $loginUSUARIO;
	$_SESSION['senhaUSUARIO'] = $passUSUARIO;
	
	echo "<script>location.href='?make=home';</script>";
	
  }	
  
}
else
{

?><!doctype html>
<html class="no-js" lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Cms Gerenciador - Realize Login para continuar </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="/img/icon.png">
		<link rel="shortcut icon" href="/img/icon.png" type="image/x-icon" />
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
    </head>

    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                           <img src="img/logo-midia.png" width="161" height="40" alt="Karmake Comunicação"></h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-xs-center">REALIZE SEU LOGIN</p>
                        <form id="login-form" action="" method="POST" novalidate="">
                            <div class="form-group"> <label for="username">Usuario</label> <input type="email" class="form-control underlined" name="usuarioUSUARIO" id="usuarioUSUARIO" placeholder="Seu Usuario" required> </div>
                            <div class="form-group"> <label for="password">Senha</label> <input type="password" class="form-control underlined" name="senhaUSUARIO" id="senhaUSUARIO" placeholder="Sua Senha" required> </div>
                            <div class="form-group"> <label for="remember">
            
          </label> <a href="esqueci-minha-senha" class="forgot-btn pull-right">Esqueceu sua senha?</a> </div>
                            <div class="form-group"> <input type="submit" name="botao" class="btn btn-block btn-primary" value="Entrar"> </div>
                             
                        </form>
                    </div>
                </div>
                 
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
 
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>

</html><?php } ?>