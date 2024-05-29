<?php
function db_connect(){			

    $PDO = new PDO('mysql:host=' . DBAPP_HOST . ';port=' . DBAPP_PORTA . ';dbname=' . DBAPP_NAME, DBAPP_USER, DBAPP_PASS);

    return $PDO;
}

function limitarTexto($texto, $limite){
    $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
    return $texto;
}


                    function celular(){
                        $celular = 0;


                        $mobile = FALSE;
                        $user_agents = array("iPhone","iPad","Android","webOS","BlackBerry","iPod","Symbian","IsGeneric");
                        foreach($user_agents as $user_agent){
                            if (strpos($_SERVER['HTTP_USER_AGENT'], $user_agent) !== FALSE) {
                                $mobile = TRUE;
                                $modelo = $user_agent;
                                break;
                            }
                        }



                        if ($mobile){
                            $celular=1;
                           // return;
                        }


                    return $celular;



}