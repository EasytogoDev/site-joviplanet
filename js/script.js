var cache = {};
 
function realizaLogin(){

   
     gravadados();


        //BUSCA VEICULOS E CARREGA NO GRID
         $.ajax({
         url  : '/require/realizaLogin.php',
         type : 'post',
         data : { 
            username : $('#username').val(),
            password : $('#password').val()
        
        },
         beforeSend : function(){ 
            
            $('#retornoLogin').html('Entrando.....'); 
         },
         success:  
         function(data) {  

            let codigo = parseInt(data);

            if(codigo == 1){
                
                $('#retornoLogin').html('Login ou Senha invalido! Tente novamente'); 
            
            }else
            if(codigo == 2){
                
                $('#retornoLogin').html('Usuario não foi ativado pelo email enviado, Verifique seu email para entrar no sistema!'); 
            
            }else{
                
                $('#retornoLogin').html('Login realizado com sucesso'); 
                location.href='/dashboard';
               // alert(data);
              
            }
 
        } 
         }); 
    
 
}



function realizaLogout(){
 
   
     $.ajax({
     url  : '/require/realizaLogout.php',
     type : 'post', 
     success:  
            function(data) {   

                //alert(data);
                
                location.href='/';

            } 
     }); 
 

}

$('#BoxConvidados').mouseleave(function(){
  AbreBox()
});
 

function AbreBox(){
 


    if($("#BoxConvidadosAberto").val()==0){
      
      $("#BoxConvidadosAberto").val(1);
      
    $("#BoxConvidados").css("display", "block"); 

    }else{ 
      
      $("#BoxConvidadosAberto").val(0);
      $("#BoxConvidados").css("display", "none"); 

    }  
 

}


function somaConta(TIPO,CONTA){


  var conta = $("#BoxConvidados"+TIPO).val();

   

  if(CONTA=='subtrai'){

    var valorconta = parseInt(conta)-(1);

  }else{
    
    var valorconta = parseInt(conta)+(1);
  }
 

  if(valorconta <= 0){

    localStorage.removeItem("BoxConvidados"+TIPO);
  
    
   }else{
  
   localStorage.setItem("BoxConvidados"+TIPO, ""+valorconta+" "+TIPO+"");
 
  
  }


  if(valorconta < 0){

    alert('Impossível colocar menor que 0 em '+ TIPO);

  }else{

    $("#BoxConvidados"+TIPO).val(valorconta);
    $("#BoxConvidados"+TIPO+"Text").html(valorconta);
  }

  var BoxConvidadosAdultos = $("#BoxConvidadosAdultos").val();
  var BoxConvidadosCriancas = $("#BoxConvidadosCriancas").val();
  var BoxConvidadosBebes = $("#BoxConvidadosBebes").val();
  var BoxConvidadosAnimais = $("#BoxConvidadosAnimais").val();

  if(BoxConvidadosAdultos>0 || BoxConvidadosCriancas>0 || BoxConvidadosBebes>0 || BoxConvidadosAnimais>0){


    if(BoxConvidadosAdultos>0){
      var tipoBoxConvidadosAdultos = localStorage.getItem("BoxConvidadosAdultos")+", ";
    }else{
      var tipoBoxConvidadosAdultos = "";
    }

    if(BoxConvidadosCriancas>0){
      var tipoBoxConvidadosCriancas = localStorage.getItem("BoxConvidadosCriancas")+", ";
    }else{
      var tipoBoxConvidadosCriancas = "";
    }

    if(BoxConvidadosBebes>0){
      var tipoBoxConvidadosBebes = localStorage.getItem("BoxConvidadosBebes")+", ";
    }else{
      var tipoBoxConvidadosBebes = "";
    }

    if(BoxConvidadosAnimais>0){
      var tipoBoxConvidadosAnimais = localStorage.getItem("BoxConvidadosAnimais")+", ";
    }else{
      var tipoBoxConvidadosAnimais = "";
    } 
 


    $("#convidados").val(tipoBoxConvidadosAdultos+""+tipoBoxConvidadosCriancas+""+tipoBoxConvidadosBebes+""+tipoBoxConvidadosAnimais);



  }else{

    $("#convidados").val('');

  }
  

 


}
 

function mostraSenha() {

    
    if(document.getElementById('password').type == 'password'){

        
         document.getElementById('password').type = 'text';

         document.getElementById('elementoEye').classList.remove('fa-eye-slash');
         document.getElementById('elementoEye').classList.add('fa-eye');


    }else{

        document.getElementById('password').type = 'password';

        document.getElementById('elementoEye').classList.remove('fa-eye');
        document.getElementById('elementoEye').classList.add('fa-eye-slash');

    }
    



   
   
}


$(document).ready(function() { 
    carregadados();
});



 function carregadados(){
 
    $("#username").val(localStorage.getItem("username"));
    $("#password").val(localStorage.getItem("password"));

    if(localStorage.getItem("remember")=="checked"){     
        $("#remember-me").attr("checked", true);
    }

 }


 function gravadados(){


    if($("#remember-me").is(':checked')){

        localStorage.setItem("username", $("#username").val());
        localStorage.setItem("password", $("#password").val());
        localStorage.setItem("remember", "checked");

    } else {
        localStorage.removeItem("username");
        localStorage.removeItem("password");
        localStorage.removeItem("remember");
    }


 }


 function FavoritoImovel(CODIGO) {      


    $.ajax({
      url: '/require/ajax/favoritoimovel.php',
      type: 'post',
      data: {  
        codigo: CODIGO 
      },
      success: function (data) {
    
        alert('Imóvel Favoritado com sucesso!');
        //top.location.href="/my-favorites";
        window.location.reload();
      }
    });
    
    
    }

    
 function DesFavoritoImovel(CODIGO) {      


    $.ajax({
      url: '/require/ajax/desfavoritoimovel.php',
      type: 'post',
      data: {  
        codigo: CODIGO 
      },
      success: function (data) {
    
        alert('Imóvel Removido com sucesso!'+data);
        //top.location.href="/";
        window.location.reload();
    
      }
    });
    
    
    }



function checkRecaptcha() {
    var response = grecaptcha.getResponse();
    if(response.length == 0) { 
      //reCaptcha not verified
      $('#retornoLogin').html('Favor preencher a capchta'); 
    }
    else { 
      //reCaptch verified
       

    realizaLogin();



    }
  }
  
  // implement on the backend
  function backend_API_challenge() {
      var response = grecaptcha.getResponse();
      $.ajax({
          type: "POST",
          url: 'https://www.google.com/recaptcha/api/siteverify',
          data: {"secret" : "6LfTspkpAAAAAMyf_Trq2_jjWGtyOj0TroJ12BoQ", "response" : response, "remoteip":"localhost"},
          contentType: 'application/x-www-form-urlencoded',
          success: function(data) { realizaLogin(); }
      });
  }



function handleLoginResponse(response) {
 
    // decodeJwtResponse() is a custom function defined by you
    // to decode the credential response.
    const responsePayload = decodeJwtResponse(response.credential);
      
     $.ajax({
        url  : '/require/realizaLoginGoogle.php',
        type : 'post',
        data : { 

           email : responsePayload.email,
           foto : responsePayload.picture,
           googleId : responsePayload.sub,
           nome : responsePayload.given_name,
           sobrenome : responsePayload.family_name 
       
       },
        beforeSend : function(){ 
           
           $('#retornoLogin').html('Entrando.....'); 
        },
        success:  
        function(data) {  

           let codigo = parseInt(data);

           if(codigo == 1){
               
               $('#retornoLogin').html('Login ou Senha invalido! Tente novamente'); 
           
           }else
           if(codigo == 2){
               
               $('#retornoLogin').html('Usuario não foi ativado pelo email enviado, Verifique seu email para entrar no sistema!'); 
           
           }else{
               
               $('#retornoLogin').html('Login realizado com sucesso'); 
               location.href='/dashboard';
              // alert(data);
             
           }

       } 
        }); 



 }

 
 function decodeJwtResponse(token) {
    var base64Url = token.split(".")[1];
    var base64 = base64Url.replace(/-/g, "+").replace(/_/g, "/");
    var jsonPayload = decodeURIComponent(
      atob(base64)
        .split("")
        .map(function (c) {
          return "%" + ("00" + c.charCodeAt(0).toString(16)).slice(-2);
        })
        .join("")
    );

    return JSON.parse(jsonPayload);
  }
 

  function carregaSlik(){
    APP.slickSlider = {
      init: function ($wrap) {
        this.slickSetup($wrap);
      },
      slickSetup: function ($wrap) {
        var $slicks;
        if ($wrap !== undefined) {
          $slicks = $wrap
        } else {
          $slicks = $('.slick-slider');
        }
        var options_default = {
          slidesToScroll: 1,
          slidesToShow: 1,
          adaptiveHeight: true,
          arrows: true,
          dots: true,
          autoplay: false,
          autoplaySpeed: 3000,
          centerMode: false,
          centerPadding: "50px",
          draggable: true,
          fade: false,
          focusOnSelect: false,
          infinite: false,
          pauseOnHover: false,
          responsive: [],
          rtl: false,
          speed: 300,
          vertical: false,
          prevArrow: '<div class="slick-prev" aria-label="Previous"><i class="far fa-angle-left"></i></div>',
          nextArrow: '<div class="slick-next" aria-label="Next"><i class="far fa-angle-right"></i></div>',
          customPaging: function (slider, i) {
            return $('<span></span>');
          }
        };
        $slicks.each(function () {
          var $this = $(this);
          if (!$this.hasClass('slick-initialized')) {
            var options = $this.data('slick-options');
            if ($this.hasClass('custom-slider-1')) {
              options.customPaging = function (slider, i) {
                return '<span class="dot">' + (i + 1) + '</span>' + '<span class="dot-divider"></span><span class="dot">' + slider.slideCount + '</span>';
              }
            }
            if ($this.hasClass('custom-slider-2')) {
              options.customPaging = function (slider, i) {
                return '<span class="dot">' + (i + 1) + '/' + slider.slideCount + '</span>';
              }
            }
            if ($this.hasClass('custom-slider-3')) {
              options.customPaging = function (slider, i) {
                if (i < 9) {
                  return '0' + (i + 1) + '.';
                } else {
                  return (i + 1) + '.';
                }
  
              }
            }
            options = $.extend({}, options_default, options);
            $this.slick(options);
            $this.on('setPosition', function (event, slick) {
              var max_height = 0;
              slick.$slides.each(function () {
                var $slide = $(this);
                if ($slide.hasClass('slick-active')) {
                  if (slick.options.adaptiveHeight && (slick.options.slidesToShow > 1) && (slick.options.vertical === false)) {
                    if (max_height < $slide.outerHeight()) {
                      max_height = $slide.outerHeight();
                    }
                  }
                }
              });
              if (max_height !== 0) {
                $this.find('> .slick-list').animate({
                  height: max_height
                }, 500);
              }
            });
  
          }
        });
      }
    };
  }