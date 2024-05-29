
<?php

require_once('../../../config.php');


$codigoBANNER = $_POST['banner'];
$query_banner = mysqli_query($conexao, 'SELECT * FROM tb0030_opcoes WHERE bannerOPCAO = "' . $codigoBANNER . '" ');


while($banner = mysqli_fetch_assoc($query_banner)){


?>

<!--AQUI FAZ O LAÇO-->
<div style="border-bottom: 1px solid #ccc; position: relative;padding: 20px;">
<div class="header-block row">
<div class="col-md-9">
<h3 class="title"> <?php echo $banner['tituloOPCAO'];?>
<h3 class="title"> <?php echo $banner['tituloenOPCAO'];?> 
<h3 class="title"> <?php echo $banner['tituloesOPCAO'];?> 


</h3>
<p class="title-description"> <?php echo $banner['subtituloOPCAO'];?>  </p>
<div >  <?php if($banner['tipoOPCAO']==1){ echo 'ESQUERDO';}else{ echo 'Direito';}?> </div>
<div >  <?php echo $banner['velocidadeOPCAO'];?> </div>
</div>

<div class="col-md-1">


<a href="javascript:;" onclick="apagaOpcoes('<?php echo $banner['codigoOPCAO'];?>')" class="btn btn-primary btn-sm rounded-s"> Remover </a>

</div>
</div>
</div>

<!--AQUI FAZ O LAÇO-->

<?php } ?>