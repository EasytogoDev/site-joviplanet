<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 

 	$nomeREDEMIDIA = $_POST['nomeREDEMIDIA'];

	$query = mysqli_query($conexao, "
		INSERT INTO tb0003_redes_midias
		(
        codigoREDEMIDIA,
		nomeREDEMIDIA,
        ativoREDEMIDIA
		)
		VALUES
		(
        null,
		'".$nomeREDEMIDIA."',
        1
		)
	");


	if($query){
		
	$codigoREDEMIDIA = mysqli_insert_id($conexao);
		
		
	echo '<script>alert("Adicionado com sucesso!");top.location.href="?make='.$make.'&acao=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
 
	
?>
<div class="title-block">
	<h3 class="title"> Adicionar </h3>
	<p class="title-description"> Adicione uma nova Rede Social</p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

		 


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de Rede Social</p>
			</div>
			<div class="form-group">
				<label class="control-label"><?php echo @$_GET['acao'];?></label>
				<input  
				type="text" 
				name="nomeREDEMIDIA" 
				id="nomeREDEMIDIA" 
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
				/>
			</div>
			
			<div class="form-group">
			
				<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Adicionar"/>
				
			</div>

			</div>
			
		</div>

		</div>
	
	</section>

</form>
<?php } ?>