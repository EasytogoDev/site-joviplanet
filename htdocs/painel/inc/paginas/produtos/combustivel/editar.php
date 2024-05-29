<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoCOMBUSTIVEL = $_POST['codigoCOMBUSTIVEL'];
	$nomeCOMBUSTIVEL = $_POST['nomeCOMBUSTIVEL'];



	$query = mysqli_query($conexao, "
		UPDATE tb0023_combustiveis SET 
		nomeCOMBUSTIVEL = '".$nomeCOMBUSTIVEL."'
		WHERE codigoCOMBUSTIVEL = '".$codigoCOMBUSTIVEL."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=combustivel&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoCOMBUSTIVEL = addslashes(trim(@$_GET['codigo']));
	$query_categoria = mysqli_query($conexao, 'SELECT * FROM tb0023_combustiveis WHERE codigoCOMBUSTIVEL = "'.$codigoCOMBUSTIVEL.'" ');
	$categoria = mysqli_fetch_assoc($query_categoria);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoCOMBUSTIVEL" type="hidden" value="<?php echo $categoria['codigoCOMBUSTIVEL']; ?>" />


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de <?php echo @$_GET['acao'];?></p>
			</div>
			<div class="form-group">
				<label class="control-label"><?php echo @$_GET['acao'];?></label>
				<input  
				type="text" 
				name="nomeCOMBUSTIVEL" 
				id="nomeCOMBUSTIVEL"
				value="<?php echo $categoria['nomeCOMBUSTIVEL']; ?>"
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