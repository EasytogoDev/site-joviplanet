<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 

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


$query = mysqli_query($conexao, "
INSERT INTO tb0075_eventos 
(
imagemEVENTO, 
nomeEVENTO, 
enderecoEVENTO, 
dataEVENTO, 
horaEVENTO, 
localEVENTO, 
cidadeEVENTO, 
estadoEVENTO, 
paisEVENTO, 
siteEVENTO, 
anoEVENTO, 
descricaoEVENTO, 
slugEVENTO, 
ativoEVENTO
) 
VALUES 
('".$imagemEVENTO."', 
'".$nomeEVENTO."', 
'".$enderecoEVENTO."', 
'".$dataEVENTO."', 
'".$horaEVENTO."', 
'".$localEVENTO."', 
'".$cidadeEVENTO."', 
'".$estadoEVENTO."', 
'".$paisEVENTO."', 
'".$siteEVENTO."', 
'".$anoEVENTO."', 
'".$descricaoEVENTO."', 
'".$slugEVENTO."', 
'1'
);
");


if($query)
		{
		echo '<script>alert("Evento inserido com sucesso!");top.location.href="?make=eventos";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{

?>
<div class="title-block">
<h3 class="title"> Adicionar </h3>
<p class="title-description"> Adicione um novo evento </p>
</div>
<form action="" method="post">

<section class="section">
<div class="row sameheight-container">




<div class="col-md-12">
<div class="card card-block ">

<div class="title-block">
<p class="title-description"> Conteúdo da página de Eventos</p>
</div>
<div class="form-group"> <label class="control-label">Evento</label> 
<input name="nomeEVENTO" type="text" class="form-control underlined" id="nomeEVENTO" placeholder="Nome do Evento"> 
</div>

<div class="form-group"> <label class="control-label">Imagem</label>
<input name="imagemEVENTO" type="text" class="form-control underlined" id="imagemEVENTO" placeholder="Clique aqui e selecione a imagem para o evento" onclick="openKCFinder(this)" readonly="readonly"/> </div>

<div class="form-group"> <label class="control-label">Endereço</label> 
<input name="enderecoEVENTO" type="text" class="form-control underlined" id="enderecoEVENTO" placeholder="Endereço do evento"> </div>            
<div class="form-group"> <label class="control-label">Data </label> 
<input name="dataEVENTO" type="text" class="form-control underlined" id="dataEVENTO" placeholder="Data de ínicio e fim do evento"> </div>            
<div class="form-group"> <label class="control-label">Horario</label> 
<input name="horaEVENTO" type="text" class="form-control underlined" id="horaEVENTO" placeholder="Horário do evento"> </div>            
<div class="form-group"> <label class="control-label">Local</label> 
<input name="localEVENTO" type="text" class="form-control underlined" id="localEVENTO" placeholder="Nome do local ou pavilhão de exposições"> </div>            
<div class="form-group"> <label class="control-label">Cidade</label> 
<input name="cidadeEVENTO" type="text" class="form-control underlined" id="cidadeEVENTO" placeholder="Cidade que acontecerá o evento"> </div>            
<div class="form-group"> <label class="control-label">Estado</label> 
<input name="estadoEVENTO" type="text" class="form-control underlined" id="estadoEVENTO" placeholder="Estado que acontecerá o evento"> </div>            
<div class="form-group"> <label class="control-label">Pais</label> 
<input name="paisEVENTO" type="text" class="form-control underlined" id="paisEVENTO" placeholder="País que acontecerá o evento"  value="Brasil"> </div>            
<div class="form-group"> <label class="control-label">Site</label> 
<input name="siteEVENTO" type="text" class="form-control underlined" id="siteEVENTO" placeholder="Ex.: https://www.sitedoevento.com.br"> </div>            
<div class="form-group"> <label class="control-label">Ano</label> 
<input name="anoEVENTO" type="text" class="form-control underlined" id="anoEVENTO" placeholder="Ano de acontecimento do evento" value="<?php echo date('Y');?>"> </div>            
<div class="form-group"> 

<label class="control-label">Descrição</label>   
<textarea class="ckeditor" cols="80" id="editor1" name="descricaoEVENTO" rows="10"></textarea>                

</div>


</div>





                                
                                
                                
                           
								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Adicionar" ></div>
							</div>
							</div>
							</form>
</div>

            
 
                        </div>
                    </section>
					<?php } ?>