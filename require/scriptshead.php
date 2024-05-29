<!-- <script>window.gtranslateSettings = {
    "default_language":"pt",
    "detect_browser_language":true,
    "languages":[
        "pt","en"
        //"sq","ar","hy","bs","bg","ca","zh-CN","zh-TW","hr","cs","da","nl",
        //"tl","fi","fr","de","el","haw","iw","hi","hu","is","id","ga",
        //"it","ja","ko","la","lb","mt","no","fa","pl","ro","ru",
        //"sr","es","su","sv","th","tr","uk","vi","cy"
        ],"wrapper_selector":".gtranslate_wrapper",
        "switcher_horizontal_position":"right",
        "switcher_vertical_position":"top",
        "float_switcher_open_direction":"bottom",
        "alt_flags":{"en":"usa"}
        }
</script> -->

<script>window.gtranslateSettings = {
    "default_language":"pt",
    "native_language_names":true,
    "detect_browser_language":true,
    "languages":["pt","en"],
    "wrapper_selector":".gtranslate_wrapper",
    "switcher_horizontal_position":"right",
    "switcher_vertical_position":"top",
    "flag_style":"3d",
    "alt_flags":{"en":"usa"}
}

</script>

<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>



<script>
function mostraBox(CAMPO){


$('#tipoBusca').val(CAMPO);

if(CAMPO==1){
    $('#tituloBoxHome').html(`Compre & Arrende em<br>Lugares incríveis`);
    $('#spanBoxHome').html(`Subtitulo de compras`);
    $("#tituloBuscaBox1").addClass("btn-secondary");
    $("#tituloBuscaBox2").removeClass("btn-secondary");
    $("#tituloBuscaBox3").removeClass("btn-secondary");
 
  //return;
}


if(CAMPO==2){
    $('#tituloBoxHome').html(`Compre & Arrende em<br>Lugares incríveis`);
    $('#spanBoxHome').html(`Subtitulo de Arrendamento`);
    $("#tituloBuscaBox1").removeClass("btn-secondary");
    $("#tituloBuscaBox2").addClass("btn-secondary");
    $("#tituloBuscaBox3").removeClass("btn-secondary");
    
  //return;
}


if(CAMPO==3){
 
  $('#tituloBoxHome').html(`Reserve & Experimente<br>Lugares incríveis`);
  $('#spanBoxHome').html(`Subtitulo das férias`);

  
  $("#tituloBuscaBox1").removeClass("btn-secondary");
    $("#tituloBuscaBox2").removeClass("btn-secondary");
    $("#tituloBuscaBox3").addClass("btn-secondary");

    
  //return;
}
buscaBusca(CAMPO);


}




function mostraBoxex(CAMPO){
  

if(CAMPO==1){ 
$("#tituloBuscaBoxex1").addClass("btn-secondary");
$("#tituloBuscaBoxex2").removeClass("btn-secondary");
$("#tituloBuscaBoxex3").removeClass("btn-secondary");

//return;
}


if(CAMPO==2){ 
$("#tituloBuscaBoxex1").removeClass("btn-secondary");
$("#tituloBuscaBoxex2").addClass("btn-secondary");
$("#tituloBuscaBoxex3").removeClass("btn-secondary");

////return;
}


if(CAMPO==3){
$("#tituloBuscaBoxex1").removeClass("btn-secondary");
$("#tituloBuscaBoxex2").removeClass("btn-secondary");
$("#tituloBuscaBoxex3").addClass("btn-secondary");

//return;
}

//buscaBusca(CAMPO);


}

 

</script>


<?php
// Protocolo (http ou https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Nome do servidor (domínio)
$domainName = $_SERVER['HTTP_HOST'];

// Caminho da URL
$path = $_SERVER['REQUEST_URI'];

// URL completa
$urlBase = $protocol . $domainName . $path;
 
?>
 
 

 
