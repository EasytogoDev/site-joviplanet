<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoFABRICANTEORIGINAL = $_POST['codigoFABRICANTEORIGINAL'];
	$nomeFABRICANTEORIGINAL = $_POST['nomeFABRICANTEORIGINAL'];
	$slugFABRICANTEORIGINAL = tiracento($nomeFABRICANTEORIGINAL);


	$query = mysqli_query($conexao, "
		UPDATE tb0018_fabricante_original SET 
		nomeFABRICANTEORIGINAL = '".$nomeFABRICANTEORIGINAL."',
		slugFABRICANTEORIGINAL = '".$slugFABRICANTEORIGINAL."'
		WHERE codigoFABRICANTEORIGINAL = '".$codigoFABRICANTEORIGINAL."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=fabricantes&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoFABRICANTEORIGINAL = addslashes(trim(@$_GET['codigo']));
	$query_categoria = mysqli_query($conexao, 'SELECT * FROM tb0018_fabricante_original WHERE codigoFABRICANTEORIGINAL = "'.$codigoFABRICANTEORIGINAL.'" ');
	$categoria = mysqli_fetch_assoc($query_categoria);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoFABRICANTEORIGINAL" type="hidden" value="<?php echo $categoria['codigoFABRICANTEORIGINAL']; ?>" />


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de <?php echo @$_GET['acao'];?></p>
			</div>
			<div class="form-group">
				<label class="control-label"><?php echo @$_GET['acao'];?></label>
				<input  
				type="text" 
				name="nomeFABRICANTEORIGINAL" 
				id="nomeFABRICANTEORIGINAL"
				value="<?php echo $categoria['nomeFABRICANTEORIGINAL']; ?>"
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
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