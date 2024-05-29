<?php


 if (isset($_SESSION['loginUSUARIO']) && isset($_SESSION['senhaUSUARIO'])){

            $loginUSUARIO = addslashes($_SESSION['loginUSUARIO']);
            $senhaUSUARIO = addslashes($_SESSION['senhaUSUARIO']);

            $PDO = db_connect();

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
    
    } else {
        
        echo '<script>location.href="/";</script>';
        exit;

    } 
