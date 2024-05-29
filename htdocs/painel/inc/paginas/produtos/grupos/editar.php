<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoGRUPO = $_POST['codigoGRUPO'];
	$nomeGRUPO = $_POST['nomeGRUPO'];
	$imagemGRUPO = $_POST['imagemGRUPO'];
	$hexadecimalGRUPO = $_POST['hexadecimalGRUPO'];
	$slugGRUPO = tiracento($nomeGRUPO);


	$query = mysqli_query($conexao, "
		UPDATE tb0020_grupo_produtos SET 
		nomeGRUPO = '".$nomeGRUPO."',
		slugGRUPO = '".$slugGRUPO."',
		imagemGRUPO = '".$imagemGRUPO."',
		hexadecimalGRUPO = '".$hexadecimalGRUPO."'
		WHERE codigoGRUPO = '".$codigoGRUPO."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=grupos&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoGRUPO = addslashes(trim(@$_GET['codigo']));
	$query_categoria = mysqli_query($conexao, 'SELECT * FROM tb0020_grupo_produtos WHERE codigoGRUPO = "'.$codigoGRUPO.'" ');
	$categoria = mysqli_fetch_assoc($query_categoria);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoGRUPO" type="hidden" value="<?php echo $categoria['codigoGRUPO']; ?>" />


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de <?php echo @$_GET['acao'];?></p>
			</div>
			<div class="form-group">
				<label class="control-label"><?php echo @$_GET['acao'];?></label>
				<input  
				type="text" 
				name="nomeGRUPO" 
				id="nomeGRUPO"
				value="<?php echo $categoria['nomeGRUPO']; ?>"
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
				/>
			</div>
			
			<div class="form-group">
				<label class="control-label">Imagem</label>
					<input  
					type="text"
					name="imagemGRUPO"
					id="imagemGRUPO"
					class="form-control underlined" 
					value="<?php echo $categoria['imagemGRUPO']; ?>"  
					placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" 
					onclick="openKCFinder(this)" 
					readonly="readonly"
					/> 
			</div>

			
				<div class="form-group">
					<label class="control-label">Cor</label>
					<input type="color" name="hexadecimalGRUPO" id="hexadecimalGRUPO"value="<?php echo $categoria['hexadecimalGRUPO']; ?>"/>
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