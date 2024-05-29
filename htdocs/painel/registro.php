<?php


if($_GET['pga']=="registrar"){
	
	echo'CODIGO REGISTRO AQUI';
	
	
	
	}else{
	
	?><!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>karmake Comunicação - Realize o cadastro de sua empresa </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="/img/icon.png">
		<link rel="shortcut icon" href="/img/icon.png" type="image/x-icon" />
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="../css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="../css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="../css/app.css">');
            }
        </script>
    </head>

    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                             <img src="/img/logo-midia.png" width="161" height="40" alt="Mídia Jaraguá"> </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-xs-center">SIGNUP TO GET INSTANT ACCESS</p>
                        <form id="signup-form" action="/index.html" method="GET" novalidate="">
                            <div class="form-group"> <label for="firstname">NOME</label>
                                <div class="row">
                                    <div class="col-sm-6"> <input type="text" class="form-control underlined" name="firstname" id="firstname" placeholder="Seu Nome" required=""> </div>
                                    <div class="col-sm-6"> <input type="text" class="form-control underlined" name="lastname" id="lastname" placeholder="Seu Sobrenome" required=""> </div>
                                </div>
                            </div>
                            <div class="form-group"> <label for="email">E-MAIL</label> <input type="email" class="form-control underlined" name="email" id="email" placeholder="Seu e-mail" required=""> </div>
                            <div class="form-group"> <label for="password">SENHA</label>
                                <div class="row">
                                    <div class="col-sm-6"> <input type="password" class="form-control underlined" name="password" id="password" placeholder="Sua Senha" required=""> </div>
                                    <div class="col-sm-6"> <input type="password" class="form-control underlined" name="retype_password" id="retype_password" placeholder="Repita sua Senha" required=""> </div>
                                </div>
                            </div>
                            <div class="form-group"> <label for="agree">
            <input class="checkbox" name="agree" id="agree" type="checkbox" required=""> 
            <span>Eu aceito os termos de <a href="#">politica de privacidade</a></span>
          </label> </div>
                            <div class="form-group"> <button type="submit" class="btn btn-block btn-primary">CADASTRAR</button> </div>
                            <div class="form-group">
                                <p class="text-muted text-xs-center">Ja tem uma conta? <a href="/login/">Então realize seu login!</a></p>
                            </div>
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