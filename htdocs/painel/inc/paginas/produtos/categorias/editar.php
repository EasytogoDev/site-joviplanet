<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoCATEGORIA = $_POST['codigoCATEGORIA'];
	$nomeCATEGORIA = $_POST['nomeCATEGORIA'];
	$imagemCATEGORIA = $_POST['imagemCATEGORIA'];
	$slugCATEGORIA = tiracento($nomeCATEGORIA);


	$query = mysqli_query($conexao, "
		UPDATE tb0012_categorias SET 
		nomeCATEGORIA = '".$nomeCATEGORIA."',
		slugCATEGORIA = '".$slugCATEGORIA."',
		imagemCATEGORIA = '".$imagemCATEGORIA."'
		WHERE codigoCATEGORIA = '".$codigoCATEGORIA."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=categorias&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoCATEGORIA = addslashes(trim(@$_GET['codigo']));
	$query_categoria = mysqli_query($conexao, 'SELECT * FROM tb0012_categorias WHERE codigoCATEGORIA = "'.$codigoCATEGORIA.'" ');
	$categoria = mysqli_fetch_assoc($query_categoria);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoCATEGORIA" type="hidden" value="<?php echo $categoria['codigoCATEGORIA']; ?>" />


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de categorias</p>
			</div>
			<div class="form-group">
				<label class="control-label">Categoria</label>
				<input  
				type="text" 
				name="nomeCATEGORIA" 
				id="nomeCATEGORIA"
				value="<?php echo $categoria['nomeCATEGORIA']; ?>"
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
				/>
			</div>
			
			<div class="form-group">
				<label class="control-label">Imagem</label>
					<input  
					type="text"
					name="imagemCATEGORIA"
					id="imagemCATEGORIA"
					class="form-control underlined" 
					value="<?php echo $categoria['imagemCATEGORIA']; ?>"  
					placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" 
					onclick="openKCFinder(this)" 
					readonly="readonly"
					/> 
			</div>
			
			<div class="form-group">
			
				<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar"/>
				
			</div>

			</div>
			
		</div>

		</div>
	
	</section>

</form>
<?php } ?>