<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoLINHA = $_POST['codigoLINHA'];
	$nomeLINHA = $_POST['nomeLINHA'];
	$imagemLINHA = $_POST['imagemLINHA'];
	$slugLINHA = tiracento($nomeLINHA);


	$query = mysqli_query($conexao, "
		UPDATE tb0011_linhas SET 
		nomeLINHA = '".$nomeLINHA."',
		slugLINHA = '".$slugLINHA."',
		imagemLINHA = '".$imagemLINHA."'
		WHERE codigoLINHA = '".$codigoLINHA."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=linhas&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoLINHA = addslashes(trim(@$_GET['codigo']));
	$query_categoria = mysqli_query($conexao, 'SELECT * FROM tb0011_linhas WHERE codigoLINHA = "'.$codigoLINHA.'" ');
	$categoria = mysqli_fetch_assoc($query_categoria);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoLINHA" type="hidden" value="<?php echo $categoria['codigoLINHA']; ?>" />


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de <?php echo @$_GET['acao'];?></p>
			</div>
			<div class="form-group">
				<label class="control-label"><?php echo @$_GET['acao'];?></label>
				<input  
				type="text" 
				name="nomeLINHA" 
				id="nomeLINHA"
				value="<?php echo $categoria['nomeLINHA']; ?>"
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
				/>
			</div>
			
			<div class="form-group">
				<label class="control-label">Imagem</label>
					<input  
					type="text"
					name="imagemLINHA"
					id="imagemLINHA"
					class="form-control underlined" 
					value="<?php echo $categoria['imagemLINHA']; ?>"  
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