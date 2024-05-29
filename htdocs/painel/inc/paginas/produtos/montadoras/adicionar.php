<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 

 	$nomeMONTADORA = $_POST['nomeMONTADORA'];
	$imagemMONTADORA = $_POST['imagemMONTADORA'];
	$slugMONTADORA = tiracento($nomeMONTADORA);


	$query = mysqli_query($conexao, "
		INSERT INTO tb0013_montadoras 
		(
		nomeMONTADORA,
		slugMONTADORA,
		imagemMONTADORA
		)
		VALUES
		(
		'".$nomeMONTADORA."',
		'".$slugMONTADORA."',
		'".$imagemMONTADORA."'
		)
	");


	if($query){
		
	$codigoMONTADORA = mysqli_insert_id($conexao);
		
		
	echo '<script>alert("Adicionado com sucesso!");top.location.href="?make=produtos&acao=montadoras&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
 
	
?>
<div class="title-block">
	<h3 class="title"> Adicionar </h3>
	<p class="title-description">  <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

		 


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de <?php echo @$_GET['acao'];?></p>
			</div>
			<div class="form-group">
				<label class="control-label"><?php echo @$_GET['acao'];?></label>
				<input  
				type="text" 
				name="nomeMONTADORA" 
				id="nomeMONTADORA" 
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
				/>
			</div>
			
			<div class="form-group">
				<label class="control-label">Imagem</label>
					<input  
					type="text"
					name="imagemMONTADORA"
					id="imagemMONTADORA"
					class="form-control underlined"  
					placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" 
					onclick="openKCFinder(this)" 
					readonly="readonly"
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