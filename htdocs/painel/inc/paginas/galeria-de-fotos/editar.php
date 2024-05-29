<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

$codigoGALERIA = $_POST['codigoGALERIA'];
$eventoGALERIA = $_POST['eventoGALERIA'];
$nomeGALERIA = $_POST['nomeGALERIA'];
$slugGALERIA = tiracento($_POST['nomeGALERIA']);
$descricaoGALERIA = $_POST['descricaoGALERIA'];
$imagemGALERIA = $_POST['imagemGALERIA'];
 



$query = mysqli_query($conexao, "
UPDATE tb0150_galeria SET
eventoGALERIA = '".$eventoGALERIA."',
		nomeGALERIA = '".$nomeGALERIA."',
			slugGALERIA = '".$slugGALERIA."',
				descricaoGALERIA = '".$descricaoGALERIA."',
					imagemGALERIA = '".$imagemGALERIA."',
					tipoGALERIA = '1'
WHERE codigoGALERIA = '".$codigoGALERIA."' ");


if($query)
		{
		echo '<script>alert("Galeria de Fotos Alterada com sucesso!");top.location.href="?make='.$make.'&acao=editar&codigo='.$codigoGALERIA.'";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{
	
	$codigoGALERIA = addslashes(trim(@$_GET['codigo']));
	$query_galeria = mysqli_query($conexao, 'SELECT * FROM tb0150_galeria WHERE codigoGALERIA = "'.$codigoGALERIA.'" ');
	$galeria = mysqli_fetch_assoc($query_galeria);

?>
<div class="title-block">
<h3 class="title"> Alterar </h3>
<p class="title-description"> Alterar a galeria de fotos </p>
</div>
<form action="" method="post">

<section class="section">
<div class="row sameheight-container">


<div class="col-md-12">
<div class="card card-block ">

<div class="title-block">
<p class="title-description"> Conteudo da página de galeria</p>
</div>


<input name="codigoGALERIA"   type="hidden" id="codigoGALERIA" value="<?php echo $galeria['codigoGALERIA']; ?>">
<div class="form-group"  > <label class="control-label">Evento</label> 

<select name="eventoGALERIA" class="form-control underlined" id="eventoGALERIA">

<option value="1">Selecione o Evento</option> 
<option value="1" <?php if($galeria['eventoGALERIA']=='1'){ echo 'selected="selected"'; } ?>>Área técnica</option> 
<option value="1" >-------------------</option>
<?php 
$query_evento = mysqli_query($conexao, "SELECT * FROM tb0075_eventos WHERE ativoEVENTO = '0' ");

while($evento = mysqli_fetch_assoc($query_evento)){
	if($evento['codigoEVENTO']!='1'){
	?>
<option value="<?php echo $evento['codigoEVENTO']?>" <?php if($evento['codigoEVENTO']==$galeria['eventoGALERIA']){ echo 'selected="selected"'; } ?>><?php echo $evento['nomeEVENTO']?></option> 
<?php } } ?>

</select>
</div>
<div class="form-group"> <label class="control-label">Titulo</label> 
<input name="nomeGALERIA"   type="text" class="form-control underlined" id="nomeGALERIA" value="<?php echo $galeria['nomeGALERIA']; ?>" placeholder="Coloque o titulo"> </div>

<div class="form-group"> <label class="control-label">Imagem</label>

<input name="imagemGALERIA" type="text"
class="form-control underlined" id="imagemGALERIA" value="<?php echo $galeria['imagemGALERIA']; ?>" placeholder="Clique aqui e selecione uma imagem clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>

<div class="form-group"> <label class="control-label">Descrição</label>

<textarea class="ckeditor" cols="80" id="editor1" name="descricaoGALERIA" rows="10"><?php echo $galeria['descricaoGALERIA']; ?></textarea>    </div>


</div>
</div>

</div>






<div class="form-group"> 

<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" ></div>
</div>  </div>

</form>



</div>
</section>
<?php } ?>