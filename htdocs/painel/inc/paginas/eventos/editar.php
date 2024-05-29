<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

$codigoEVENTO = $_POST['codigoEVENTO'];
$nomeEVENTO = $_POST['nomeEVENTO'];
$slugEVENTO = tiracento($nomeEVENTO);
$imagemEVENTO = $_POST['imagemEVENTO'];
$enderecoEVENTO = $_POST['enderecoEVENTO'];
$dataEVENTO = $_POST['dataEVENTO'];
$horaEVENTO = $_POST['horaEVENTO'];
$localEVENTO = $_POST['localEVENTO'];
$cidadeEVENTO = $_POST['cidadeEVENTO'];
$estadoEVENTO = $_POST['estadoEVENTO'];
$paisEVENTO = $_POST['paisEVENTO'];
$siteEVENTO = $_POST['siteEVENTO'];
$anoEVENTO = $_POST['anoEVENTO'];
$descricaoEVENTO = $_POST['descricaoEVENTO'];


$query = mysqli_query($conexao, "UPDATE tb0075_eventos SET 
imagemEVENTO = '".$imagemEVENTO."',  
nomeEVENTO = '".$nomeEVENTO."', 
enderecoEVENTO = '".$enderecoEVENTO."', 
dataEVENTO = '".$dataEVENTO."', 
horaEVENTO = '".$horaEVENTO."', 
localEVENTO = '".$localEVENTO."', 
cidadeEVENTO = '".$cidadeEVENTO."', 
estadoEVENTO = '".$estadoEVENTO."', 
paisEVENTO = '".$paisEVENTO."', 
siteEVENTO = '".$siteEVENTO."', 
anoEVENTO = '".$anoEVENTO."', 
descricaoEVENTO = '".$descricaoEVENTO."', 
slugEVENTO = '".$slugEVENTO."'
WHERE codigoEVENTO = '".$codigoEVENTO."'
");


if($query)
		{
		echo '<script>alert("Evento alterado com sucesso!");top.location.href="?make=eventos&acao=editar&codigo='.$codigoEVENTO.'";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{
	$codigoEVENTO = addslashes(trim(@$_GET['codigo']));
	$query_eventos = mysqli_query($conexao, 'SELECT * FROM tb0075_eventos WHERE codigoEVENTO = "'.$codigoEVENTO.'" ');
	$eventos = mysqli_fetch_assoc($query_eventos);
	
 					
						
?>
<div class="title-block">
<h3 class="title"> Alterar </h3>
<p class="title-description"> Alterar o evento </p>
</div>
<form action="" method="post">

<section class="section">
<div class="row sameheight-container">


<input name="codigoEVENTO" type="hidden" value="<?php echo $eventos['codigoEVENTO']; ?>" />
<input name="p" type="hidden" value="<?php echo $_GET['p']; ?>" />

<div class="col-md-12">
<div class="card card-block ">

<div class="title-block">
<p class="title-description"> Conteúdo da página de Eventos</p>
</div>
<div class="form-group"> <label class="control-label">Evento</label> 
<input name="nomeEVENTO" type="text" class="form-control underlined" id="nomeEVENTO" value="<?php echo $eventos['nomeEVENTO']; ?>" placeholder="Nome do Evento"> 
</div>

<div class="form-group"> <label class="control-label">Imagem</label>


<img src="<?php echo $eventos['imagemEVENTO']; ?>" height="50">


<input name="imagemEVENTO" type="text" class="form-control underlined" id="imagemEVENTO" value="<?php echo $eventos['imagemEVENTO']; ?>"  placeholder="Clique aqui e selecione a imagem para o evento" onclick="openKCFinder(this)" readonly="readonly"/> </div>

<div class="form-group"> <label class="control-label">Endereço</label> 
<input name="enderecoEVENTO" type="text" class="form-control underlined" id="enderecoEVENTO"  value="<?php echo $eventos['enderecoEVENTO']; ?>" placeholder="Endereço do evento"> </div>            
<div class="form-group"> <label class="control-label">Data </label> 
<input name="dataEVENTO" type="text" class="form-control underlined" id="dataEVENTO"  value="<?php echo $eventos['dataEVENTO']; ?>" placeholder="Data de ínicio e fim do evento"> </div>            
<div class="form-group"> <label class="control-label">Horario</label> 
<input name="horaEVENTO" type="text" class="form-control underlined" id="horaEVENTO" value="<?php echo $eventos['horaEVENTO']; ?>" placeholder="Horário do evento"> </div>            
<div class="form-group"> <label class="control-label">Local</label> 
<input name="localEVENTO" type="text" class="form-control underlined" id="localEVENTO" value="<?php echo $eventos['localEVENTO']; ?>" placeholder="Nome do local ou pavilhão de exposições"> </div>            
<div class="form-group"> <label class="control-label">Cidade</label> 
<input name="cidadeEVENTO" type="text" class="form-control underlined" id="cidadeEVENTO" value="<?php echo $eventos['cidadeEVENTO']; ?>" placeholder="Cidade que acontecerá o evento"> </div>            
<div class="form-group"> <label class="control-label">Estado</label> 
<input name="estadoEVENTO" type="text" class="form-control underlined" id="estadoEVENTO" value="<?php echo $eventos['estadoEVENTO']; ?>" placeholder="Estado que acontecerá o evento"> </div>            
<div class="form-group"> <label class="control-label">Pais</label> 
<input name="paisEVENTO" type="text" class="form-control underlined" id="paisEVENTO" value="<?php echo $eventos['paisEVENTO']; ?>" placeholder="País que acontecerá o evento"   > </div>            
<div class="form-group"> <label class="control-label">Site</label> 
<input name="siteEVENTO" type="text" class="form-control underlined" id="siteEVENTO" value="<?php echo $eventos['siteEVENTO']; ?>" placeholder="Ex.: https://www.sitedoevento.com.br"> </div>            
<div class="form-group"> <label class="control-label">Ano</label> 
<input name="anoEVENTO" type="text" class="form-control underlined" id="anoEVENTO" value="<?php echo $eventos['anoEVENTO']; ?>" placeholder="Ano de acontecimento do evento"  > </div>            
<div class="form-group"> 

<label class="control-label">Descrição</label>   
<textarea class="ckeditor" cols="80" id="editor1" name="descricaoEVENTO" rows="10"><?php echo $eventos['descricaoEVENTO']; ?></textarea>                

</div>


</div>





                                
                                
                                
                           
								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" ></div>
							</div>
							</div>
							</form>
</div>

            
 
                        </div>
                    </section>
					<?php } ?>