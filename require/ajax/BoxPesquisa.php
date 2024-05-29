

<?php
require_once("../funcao.php");
require_once("../config.php");
require_once("../restrito.php");

$PDO = db_connect();


$mostrabox = $_POST['mostrabox'];

if($mostrabox == 3){

?>

<div class="position-relative mb-4"
                  style="padding-top: 5px; height: 45px; width: 142%; border-radius: 5px; border: 1px solid #a6a6a6  !important;">
                   
                  <input type="text" name="search" id="search"
                    class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border border-bottom-0 rounded-0 h-32 lh-17 pl-2 pr-4 fs-20 font-weight-500 border-color-input "
                    placeholder="Localization" style="text-decoration: none !important; ">
                  </a>
                </div> 

<?php }else{ ?>


  <div class="col-md-6 col-lg-10 col-xl-10 pt-5 pb-5 pt-lg-0 " style="margin-left: -40px !important; text-decoration: none !important;">

                <div class="position-relative mb-4"
                  style="padding-top: 5px; height: 45px; width: 142%; border-radius: 5px; border: 1px solid #a6a6a6  !important;">
                   
                  <input type="text" name="search" id="search"
                    class="form-control bg-transparent shadow-none border-top-0 border-right-0 border-left-0 border border-bottom-0 rounded-0 h-32 lh-17 pl-2 pr-4 fs-20 font-weight-500 border-color-input "
                    placeholder="Localization" style="text-decoration: none !important; ">
                  </a>
                </div> 

                <div style="padding-right:20px !important; padding-top: 10px; width: 142%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6  !important;">

                  <select class="form-control selectpicker bg-transparent border-bottom-0 rounded-0 "
                    data-style="p-0 h-32 lh-17 fs-14 text-black pl-2 mb-0.7" name="categoria" id="categoria">
                    <?php

                    $sql_CategoriasImaveis = "SELECT codigoCATEGORIA, nomeCATEGORIA, imagemCATEGORIA FROM tb0001_categorias WHERE ativoCATEGORIA = 1";
                    try {

                      $query_CategoriasImaveis = $PDO->prepare($sql_CategoriasImaveis);
                      $query_CategoriasImaveis->execute();

                    } catch (PDOexception $error_sql) {

                      echo 'Erro ao retornar os Dados.' . $error_sql->getMessage();

                    }

                    while ($CategoriasImaveis = $query_CategoriasImaveis->fetch(PDO::FETCH_ASSOC)) {

                      ?>
                    <option value="<?php echo $CategoriasImaveis['codigoCATEGORIA']; ?>">
                      <?php echo $CategoriasImaveis['nomeCATEGORIA']; ?>
                    </option>


                    <?php } ?>
                  </select>
                </div>


              </div>



              <div class="row pl-0">

                <!------------------------------------------------------------------------------------------------------------------>

                <div class="col-md-6 col-lg-3 col-xl-3 pt-0 ml-0 pl-0 ">
                  <div
                    style="padding-right:20px !important; margin-left: -10px; padding-top: 10px; width: 100%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6  !important;">
                    <select class="form-control selectpicker bg-transparent border-bottom-0 rounded-0 "
                      data-style="p-0 h-32 lh-17 fs-14 text-black pl-2 mb-0.7" name="moeda" id="moeda">
                      <option>BLR</option>
                      <option>ENG</option>
                      <option>ARB</option>
                      <option>KR</option>
                      <option>JN</option>
                    </select>
                  </div>
                </div>


                <div class="col-md-6 col-lg-3 col-xl-3 pt-0 pl-0 pr-0">
                  <div style=" width: 100%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6   !important;">
                    <input type="number" name="minimo" id="minimo"
                      class="form-control bg-transparent shadow-none border-0 rounded-0 h-45 lh-17  font-weight-600 "
                      placeholder="€ 50.000">

                  </div>
                </div>
                <div class="col-md-6 col-lg-1 col-xl-1 pt-2 text-center ">
                  <p class="text-dark ">To</p>
                </div>


                <div class="col-md-6 col-lg-3 col-xl-3 pt-0 pl-0 pr-0">
                  <div style="  width: 100%; height: 45px; border-radius: 5px;  border: 1px solid #a6a6a6  !important;">
                    <input type="number" name="maximo" id="maximo"
                      class="form-control bg-transparent shadow-none rounded-0 h-45 lh-17 font-weight-600 border-0"
                      placeholder="€ 250.000">

                  </div>
                </div>
              </div>
<?php }?>