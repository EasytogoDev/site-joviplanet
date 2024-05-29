<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoMONTADORA = $_POST['codigoMONTADORA'];
	$nomeMONTADORA = $_POST['nomeMONTADORA'];
	$imagemMONTADORA = $_POST['imagemMONTADORA'];
	$slugMONTADORA = tiracento($nomeMONTADORA);


	$query = mysqli_query($conexao, "
		UPDATE tb0013_montadoras SET 
		nomeMONTADORA = '".$nomeMONTADORA."',
		slugMONTADORA = '".$slugMONTADORA."',
		imagemMONTADORA = '".$imagemMONTADORA."'
		WHERE codigoMONTADORA = '".$codigoMONTADORA."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=montadoras&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoMONTADORA = addslashes(trim(@$_GET['codigo']));
	$query_categoria = mysqli_query($conexao, 'SELECT * FROM tb0013_montadoras WHERE codigoMONTADORA = "'.$codigoMONTADORA.'" ');
	$categoria = mysqli_fetch_assoc($query_categoria);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoMONTADORA" type="hidden" value="<?php echo $categoria['codigoMONTADORA']; ?>" />


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
				value="<?php echo $categoria['nomeMONTADORA']; ?>"
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
					value="<?php echo $categoria['imagemMONTADORA']; ?>"  
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