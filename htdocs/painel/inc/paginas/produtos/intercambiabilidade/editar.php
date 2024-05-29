<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoINTERCAMBIABILIDADE = $_POST['codigoINTERCAMBIABILIDADE'];
	$nomeINTERCAMBIABILIDADE = $_POST['nomeINTERCAMBIABILIDADE'];
	


	$query = mysqli_query($conexao, "
		UPDATE tb0501_intercambiabilidades SET 
		nomeINTERCAMBIABILIDADE = '".$nomeINTERCAMBIABILIDADE."'
		WHERE codigoINTERCAMBIABILIDADE = '".$codigoINTERCAMBIABILIDADE."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=intercambiabilidade&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoINTERCAMBIABILIDADE = addslashes(trim(@$_GET['codigo']));
	$query_categoria = mysqli_query($conexao, 'SELECT * FROM tb0501_intercambiabilidades WHERE codigoINTERCAMBIABILIDADE = "'.$codigoINTERCAMBIABILIDADE.'" ');
	$categoria = mysqli_fetch_assoc($query_categoria);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere a <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoINTERCAMBIABILIDADE" type="hidden" value="<?php echo $categoria['codigoINTERCAMBIABILIDADE']; ?>" />


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de <?php echo @$_GET['acao'];?></p>
			</div>
			<div class="form-group">
				<label class="control-label">Nome</label>
				<input type="text" name="nomeINTERCAMBIABILIDADE" id="nomeINTERCAMBIABILIDADE" value="<?php echo $categoria['nomeINTERCAMBIABILIDADE']; ?>" class="form-control underlined" placeholder="Coloque o nome da empresa" />
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