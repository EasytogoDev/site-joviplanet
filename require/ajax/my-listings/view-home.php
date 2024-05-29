<?php
require_once('../../funcao.php');
require_once('../../config.php');
require_once ('../../restrito.php');
$PDO = db_connect();
?>
<table class="table table-hover bg-white border rounded-lg">
                <thead class="thead-sm thead-black">
                  <tr>
                    <th scope="col" class="border-top-0 px-6 pt-5 pb-4"></th>
                    <th scope="col" class="border-top-0 px-3 pt-5 pb-4">ID</th>
                    <th scope="col" class="border-top-0 pr-5 px-6 pt-5 pb-4">Status</th>
                    <th scope="col" class="border-top-0 pr-5 px-6 pt-5 pb-4">Date</th>
                    <th scope="col" class="border-top-0 pr-5 px-6 pt-5 pb-4">Address</th>
                    <th scope="col" class="border-top-0 px-3 pt-5 pb-4">Check-in</th>
                    <th scope="col" class="border-top-0 px-3 pt-5 pb-4">Check-out</th>
                    <th scope="col" class="border-top-0 px-3 pt-5 pb-4">Guests</th>
                    <th scope="col" class="border-top-0 px-3 pt-5 pb-4">Pets</th>
                    <th scope="col" class="border-top-0 px-3 pt-5 pb-4">Subtotal</th>
                    <th scope="col" class="border-top-0 px-3 pt-5 pb-4">Actions</th>
                   <!--- <th scope="col" class="border-top-0 pt-5 pb-4">Date Published</th>
                    <th scope="col" class="border-top-0 pt-5 pb-4">Status</th>
                    <th scope="col" class="border-top-0 pt-5 pb-4">View</th>
                    <th scope="col" class="border-top-0 pt-5 pb-4">Action</th>
                    ----->
                  </tr>
                </thead>
                <tbody>

                  <?php



                  # Limita o número de registros a serem mostrados por página
                  $limite = 75;
                  $usuario = 1;

                  # Se pg não existe atribui 1 a variável pg
                  $pg = (isset($_GET['pg'])) ? (int) $_GET['pg'] : 1;

                  # Atribui a variável inicio o inicio de onde os registros vão ser
                  # mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
                  $inicio = ($pg * $limite) - $limite;

                  # seleciona os registros do banco de dados pelo inicio e limitando pelo limite da variável limite
                  $sql_Imovel = "
                    SELECT *
                    FROM tb0031_imoveis
                    LEFT JOIN tb0037_planos ON codigoPLANO = planoIMOVEL
                    WHERE clienteIMOVEL = " . $usuario . "
                    ORDER BY codigoIMOVEL DESC LIMIT " . $inicio . ", " . $limite;

                  try {

                    $query_Imovel = $PDO->prepare($sql_Imovel);
                    $query_Imovel->execute();

                  } catch (PDOexception $error_sql) {

                    echo 'Erro ao retornar os Dados.' . $error_sql->getMessage();

                  }

                  while ($Imovel = $query_Imovel->fetch(PDO::FETCH_ASSOC)) {

                    ?>

                    <tr class="shadow-hover-xs-2 bg-hover-white">
                      <td class="align-middle pt-6 pb-4 px-6">
                        <div class="media">
                          <div class="w-120px mr-4 position-relative">
                            <a href="single">
                              <!--------------------------img-busca------------------------------------------>
                              <img src="images/my-properties-01.jpg" alt="Home in Metric Way">
                              <!------------------------------end-img-busca-------------------------------------->
                            </a>
                            <span class="badge badge-indigo position-absolute pos-fixed-top">for rent</span>
                          </div>
                          <!-------
                          <div class="media-body">
                            <a href="single" class="text-dark hover-primary">
                              <h5 class="fs-16 mb-0 lh-18">
                                <?php echo $Imovel['descricaoIMOVEL']; ?>
                              </h5>
                            </a>
                            <p class="mb-1 font-weight-500">
                              <?php echo $Imovel['numeroIMOVEL']; ?>
                              <?php echo $Imovel['enderecoIMOVEL']; ?>,
                              <?php echo $Imovel['cityIMOVEL']; ?>
                            </p>
                            <span class="text-heading lh-15 font-weight-bold fs-17"> <?php echo $Imovel['valorIMOVEL'];?></span>
                            <span class="text-gray-light">/month</span>
                            ---->
                          </div>
                        </div>
                      </td>
                      
                      <td class="align-middle"><?php echo $Imovel['codigoIMOVEL'];?></td>
                      <td><span class="badge badge-info" style="width:70px; font-size: 10px; justify-content: center; margin-top: 45px;">AVAILABLE</span></td>
                      <td class="align-middle">02/06/2025</td>
                      <td class="align-middle"><?php echo $Imovel['descricaoIMOVEL'];?></td>
                      
                      <td class="align-middle"><?php echo $Imovel['checkinIMOVEL'];?></td>
                      <td class="align-middle"><?php echo $Imovel['checkoutIMOVEL'];?></td>
                      
                      <td class="align-middle"><?php echo $Imovel['qtdpessoasIMOVEL'];?></td>
                      <td class="align-middle"><?php echo $Imovel['petsIMOVEL'];?></td>
                      <td class="align-middle"><?php echo $Imovel['valorIMOVEL'];?></td>
                      
                      <!----------------------------botão-switch------------------------------------------->
                      
<!----------------------------------------end-switch-------------------------------------------->


</td>
                    
                      <td class="align-middle"><a href="/edit-listings/<?php echo $Imovel['codigoIMOVEL']; ?>" type="button" class="btn btn-secondary" style="width:125px; height:40px;"><i class="fa fa-regular fa-money-bill" style="width: 20%;"></i></i> Pay now</a></td>
                      <!----------
                      <td class="align-middle">2049</td>
                      <td class="align-middle">
                        <a href="/edit-listings/<?php echo $Imovel['codigoIMOVEL']; ?>" data-toggle="tooltip" title="Edit"
                          class="d-inline-block fs-18 text-muted hover-primary mr-5"><i class="fal fa-pencil-alt"></i></a>
                        <a href="#" data-toggle="tooltip" title="Delete"
                          class="d-inline-block fs-18 text-muted hover-primary"><i class="fal fa-trash-alt"></i></a>
                      </td>
                      -------------->
                    </tr>



                  <?php } ?>




                </tbody>
              </table>


              
            <nav class="mt-6">

<?php

# seleciona o total de registros  
$sql_Total = "SELECT codigoIMOVEL 
FROM tb0031_imoveis
LEFT JOIN tb0037_planos ON codigoPLANO = planoIMOVEL
WHERE clienteIMOVEL = " . $usuario . " ";

try {

  $query_Total = $PDO->prepare($sql_Total);
  $query_Total->execute();

  $query_result = @$query_Total->fetchAll(PDO::FETCH_ASSOC);

  # conta quantos registros tem no banco de dados
  @$query_count = @$query_Total->rowCount();

  # calcula o total de paginas a serem exibidas
  $qtdPag = ceil($query_count / $limite);

} catch (PDOexception $error_Total) {

  echo 'Erro ao retornar os Dados. ' . $error_Total->getMessage();

}

# Cria os links para navegação das paginas
// echo "<div class='relax h30'></div>";
# echo '<a href="busca?pg=1">PRIMEIRA PÁGINA</a>&nbsp;';
echo '<ul class="pagination rounded-active justify-content-center">';
echo '<li class="page-item"><a class="page-link" href="?pg=1"><i class="far fa-angle-double-left"></i></a></li>';

if ($qtdPag > 1 && $pg <= $qtdPag) {

  for ($i = 1; $i <= $qtdPag; $i++) {

    if ($i == $pg) {

      echo '<li class="page-item active"><a class="page-link" href="#">".$i."</a></li>';

    } else {

      echo '<li class="page-item"><a class="page-link" href="?pg=$i">".$i."</a></li>';

    }

    echo ' <li class="page-item">...</li>';

  }

}

echo '<li class="page-item"><a class="page-link" href="?pg=$qtdPag"><i class="far fa-angle-double-right"></i></a></li>';

?>

</ul>
</nav>
<div class="text-center mt-2">6-10 of 29 Results</div>