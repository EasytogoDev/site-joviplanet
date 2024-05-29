<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 

$eventoGALERIA = $_POST['eventoGALERIA'];
$nomeGALERIA = $_POST['nomeGALERIA'];
$slugGALERIA = tiracento($_POST['nomeGALERIA']);
$descricaoGALERIA = $_POST['descricaoGALERIA'];
$imagemGALERIA = $_POST['imagemGALERIA'];
 



$query = mysqli_query($conexao, "
INSERT INTO  tb0150_galeria (
eventoGALERIA,
	vinculoGALERIA,
		nomeGALERIA,
			slugGALERIA,
				descricaoGALERIA,
					imagemGALERIA,
						ordemGALERIA,	
							capaGALERIA,
								tipoGALERIA,
									ativoGALERIA
	)
VALUES (
 '".$eventoGALERIA."',
	'0',
		'".$nomeGALERIA."',
			'".$slugGALERIA."',
				'".$descricaoGALERIA."',
					'".$imagemGALERIA."',
						'0',	
							'0',
								'2',
									'1'
);
");


if($query)
		{
		echo '<script>alert("Galeria de Fotos inserida com sucesso!");top.location.href="?make='.$make.'";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{

?>
<div class="title-block">
<h3 class="title"> Adicionar </h3>
<p class="title-description"> Adicione uma galeria de fotos </p>
</div>
<form action="" method="post">

<section class="section">
<div class="row sameheight-container">


<div class="col-md-12">
<div class="card card-block ">

<div class="title-block">
<p class="title-description"> Conteudo da página de galeria</p>
</div>



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
<input name="nomeGALERIA"   type="text" class="form-control underlined" id="nomeGALERIA" placeholder="Coloque o titulo"> </div>

<div class="form-group"> <label class="control-label">Imagem</label>

<input name="imagemGALERIA" type="text"
class="form-control underlined" id="imagemGALERIA"  placeholder="Clique aqui e selecione uma imagem clicando duas vezes nele" /> </div>

<div class="form-group"> <label class="control-label">Descrição</label>

<textarea class="ckeditor" cols="80" id="editor1" name="descricaoGALERIA" rows="10"></textarea>    </div>


</div>
</div>

</div>






<div class="form-group"> 

<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Adicionar" ></div>
</div>  </div>

</form>



</div>
</section>
<?php } ?>