
<?php
require_once('../../funcao.php');
require_once('../../config.php');


$tipo = $_POST['tipo'];
$periodo = $_POST['periodo'];
$mesano = $_POST['mesano'];


$PDO = db_connect();


if($mesano==0){
$ano = "";
}else{
  $ano = " AND tempoPLANO = '".$mesano."' ";

}



if($periodo==1){
?>

<style>
  .seu-botao {
  /* Estilos existentes do seu botão */
  /* padding: 4px 4px; */
  background-color: #c79d33;
  color: #fff;
  border: 1px solid #b2b2b2;
  padding: 2px;
  border-radius: 30%;
  position: relative;
  width: 28px;
  height: 20px;
  font-size: 10px;
  font-weight: bold;
}

.seu-botao::before {
  content: ""; /* Para criar um elemento pseudo-antes do texto */
  top: 50%; /* Posiciona o texto no centro verticalmente */
  left: 50%; /* Posiciona o texto no centro horizontalmente */
  transform: translate(-50%, -50%); /* Move o texto para o centro do botão */
  color: #fff;
}

</style>
 

        <div class="row no-gutters responsivePlans" style="padding: 5%;">
              

                <div class="btn-group btn-group-toggle"
                  style="display: flex; justify-content: center; align-items: center; box-shadow: rgb(200, 208, 231) 3.2px 3.2px 8px 0px inset, rgb(255, 255, 255) -3.2px -3.2px 8px 0px inset; border-radius: 100px; margin-left: 36%; margin-bottom: -1.5rem; margin-top: -0.675rem; color: #fff; height: 3rem; padding: 0.675rem" data-toggle="buttons">

                      <label id="tituloBuscaBox1"  onclick="mostraBox(1);carregaPrecos(<?php echo $tipo; ?>,<?php echo $periodo; ?>,1);"
                      class="btn <?php if($mesano==0 or $mesano==1){ ?>btn-secondary text-white<?php } ?>   btn shadow-none text-grey text-btn-focus-bg-secondary border-0  align-items-center fs-12  letter-spacing-087 flex-md-1  "
                        style="border-radius:100px; color: #000;  width: 140px;">
                        <input type="radio" name="options" id="option1" checked> Mensal 
                      </label>

                      <label id="tituloBuscaBox2" onclick="mostraBox(2);carregaPrecos(<?php echo $tipo; ?>,<?php echo $periodo; ?>,2);"
                      class="btn shadow-none <?php if($mesano==2){ ?>btn-secondary text-white<?php } ?> text-grey text-btn-focus-bg-secondary  border-0 align-items-center fs-12  letter-spacing-087 flex-md-1 "
                        style="border-radius:100px; color: #000;   width: 140px;">
                        <input type="radio" name="options" id="option2"> Anual <button style="align-items: center; padding-top: -15px" class="seu-botao">
                          -10% <img style="margin-left: 28px; margin-top: -180% !important; height: 230%; transform: rotate(15deg);"  src="../../../images//top-prices.png" alt="">
                        </button>
                      </label>
 

                  
                </div> 
                
           </div> 
<?php }


   # seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
   $sql_Planos = "
   SELECT * FROM `tb0037_planos`
   INNER JOIN `tb0155_tipoplanos` ON codigoTIPOPLANO = tipoPLANO
   LEFT JOIN `tb0159_periodos` ON codigoPERIODO = tempoPLANO
   WHERE ativoTIPOPLANO = 1 AND ativoPLANO = 1 AND tipoPLANO = '".$tipo."' ".$ano."  ";

   try {

   $query_Planos = $PDO->prepare($sql_Planos);
   $query_Planos->execute();

   // Conta o número de linhas retornadas
   $numero_linhas = $query_Planos->rowCount();

   } catch (PDOexception $error_sql) {

   echo 'Erro ao retornar os Dados.' . $error_sql->getMessage();

   }

if( $numero_linhas>4){
  $numberslike = 5;
}else{
  
  $numberslike = 4;
}


?>

        <div class="slick-slider slick-dots-mt-0 custom-arrow-spacing-30" data-parent="#collapse-tabs-accordion-02"  data-slick-options='{"slidesToShow": <?php echo $numberslike;?>, "autoplay":true,"dots":true,"responsive":[{"breakpoint": 1600,"settings": {"slidesToShow":<?php echo $numberslike;?>,"arrows":false}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true,"autoplay":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true,"autoplay":true}}]}'> 
<?php
 

                 
                    while ($Planos = $query_Planos->fetch(PDO::FETCH_ASSOC)) {

                    ?>
                    

                              <div class="box pb-7 pt-2 cardHover"  style="min-height: 510px;">
                                <div class="card bg-gray-01 border-0 p-4  " 
                                style="padding: 40px !important; border: 1px solid #c5c1c1 !important; min-height: 450px; max-height: 450px">
                                <?php if($Planos['destaquePLANO']==1){ ?><div style="
    position: relative;
    margin: -65px auto 0px;
    z-index: 10000;
    text-align: center;
    width: 149px;
"><img src="/images/destaque.png"></div>
<?php } ?>


                                  <div class="card-header bg-transparent p-0">
                                    <p class="fs-15 font-weight-bold text-heading text-center mb-0"><span
                                        class="font-weight-500"><?php echo $Planos['nomePLANO']; ?></span></p>
                                    <p class="fs-36 font-weight-bold text-heading text-center lh-40 mb-1"><span
                                        class=" fs-18 font-weight-500">€</span><?php echo $Planos['valorPLANO']; ?></p>
                                     <!-- <span class="fs-13 font-weight-500 text-white text-uppercase custom-packages">Popular</span> -->

                                    <p class="fs-9  text-heading lh-15 mb-1"
                                      style=" text-align: center; color: #00cb9e !important;    font-size: 12px;">
                                      <!-- <span class="font-weight-normal">paying 539,00 per year</span> -->
                                    </p>
                                  </div>
                                  <div class="card-body p-0">
                                    <ul class="list-unstyled pt-2 mb-2" style=" line-height: 40px;">
                                      <li class="d-flex justify-content-between">
                                        <p class="text-gray-light mb-0">Time Período:</p>
                                        <p class="font-weight-500 text-heading mb-0">1 <?php echo $Planos['nomePERIODO']; ?></p>
                                      </li>
                                      <li class="d-flex justify-content-between">
                                        <p class="text-gray-light mb-0">Exchange rate not included</p>
                                      </li>
                                      <li class="d-flex justify-content-between">
                                        <p class="text-gray-light mb-0">% IVA not included</p>
                                      </li>
                                    </ul>
                                    <a href="<?php echo $Planos['urlPLANO']; ?>" 
                                      class="btn btn-primary btn-block h-52 pl-4 pr-3 d-flex justify-content-between align-items-center"
                                      
                                      >
                                      Clique Aqui
                                      <i class="far fa-arrow-right ml-1"></i>
                                    </a>
                                  </div>
              
                                </div> 
                              </div>
                  
                 <?php  } ?>
 </div>

 
           