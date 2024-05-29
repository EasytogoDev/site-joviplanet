<?php
require_once('config.php'); 
require_once('funcao.php'); 
 
$loginUSUARIO = addslashes(trim($_POST['username']));
$passUSUARIO = addslashes(trim(md5($_POST['password'])));

 

$PDO = db_connect();

$realizaLoginUsuarios = $PDO->query("
SELECT count(*) as TOTAL, ativoUSUARIO  FROM tb0201_usuarios  WHERE emailUSUARIO = '".$loginUSUARIO."' AND senhaUSUARIO = '".$passUSUARIO."'                 
");

$realizaLoginUsuarios = $realizaLoginUsuarios->fetchAll();
$realizaLogin = $realizaLoginUsuarios[0];

  
if ($realizaLogin['TOTAL'] == 0)
{  

  echo 1;
  
} 
elseif($realizaLogin['ativoUSUARIO'] == "0")
{
    
  echo 2;
  
}
else 
{
 
  $_SESSION['loginUSUARIO'] = $loginUSUARIO;
  $_SESSION['senhaUSUARIO'] = $passUSUARIO;
  
  echo 3;
  
}	