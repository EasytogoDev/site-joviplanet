<?php
require_once('config.php'); 
require_once('funcao.php'); 
 
$PDO = db_connect();


$email      = addslashes(trim($_POST['email']));
$foto       = addslashes(trim($_POST['foto']));
$googleId   = addslashes(trim(md5($_POST['googleId'])));
$nome       = addslashes(trim($_POST['nome']));
$sobrenome  = addslashes(trim($_POST['sobrenome'])); 



//Verifica se ja tem esse email
$VerificaEmailUsuarios = $PDO->query("
SELECT count(*) as TOTAL FROM tb0201_usuarios WHERE emailUSUARIO = '".$email."'                  
");
$VerificaEmailUsuariosRegistrados = $VerificaEmailUsuarios->fetchAll();
$VerificaEmail = $VerificaEmailUsuariosRegistrados[0];

///CADASTRA O USUARIO
if($VerificaEmail['TOTAL'] == 0){


    //AQUI INSERE NOVA EMPRESA
    $insertUsuario = $PDO->prepare("INSERT INTO tb0201_usuarios 
    (
    codigoUSUARIO, 
    nomeUSUARIO, 
    sobrenomeUSUARIO, 
    googleidUSUARIO, 
    whatsappUSUARIO, 
    emailUSUARIO, 
    senhaUSUARIO, 
    fotoUSUARIO, 
    nivelUSUARIO, 
    slugUSUARIO, 
    ativoUSUARIO
    ) 
    VALUES 
        (null, 
        '".$nome."', 
        '".$sobrenome."', 
        '".$googleId."', 
        '', 
        '".$email."', 
        '".$googleId."', 
        '".$foto."', 
        3, 
        '', 
        1);
    ");

    $insertUsuario->execute();
    $statusinsertUsuario= $insertUsuario->rowCount(); 
}

//BUSCA USUARIO
$realizaLoginUsuarios = $PDO->query("
SELECT count(*) as TOTAL, ativoUSUARIO FROM tb0201_usuarios  WHERE emailUSUARIO = '".$email."' AND googleidUSUARIO = '".$googleId."'                 
");
$realizaLoginUsuarios = $realizaLoginUsuarios->fetchAll();
$realizaLogin = $realizaLoginUsuarios[0]; 

 

if ($realizaLogin['TOTAL'] == 0){  

  echo 1;
  
}
else
{
 
  $_SESSION['loginUSUARIO'] = $email;
  $_SESSION['senhaUSUARIO'] = $googleId;
  
  echo 3;
  
}	