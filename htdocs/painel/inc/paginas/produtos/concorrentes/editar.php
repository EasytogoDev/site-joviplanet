<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoCONCORRENTE = $_POST['codigoCONCORRENTE'];
	$nomeCONCORRENTE = $_POST['nomeCONCORRENTE'];


	$query = mysqli_query($conexao, "
		UPDATE tb0401_concorrentes SET 
		nomeCONCORRENTE = '".$nomeCONCORRENTE."'
		WHERE codigoCONCORRENTE = '".$codigoCONCORRENTE."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=concorrentes&act=home&codigo='.$codigoCONCORRENTE.'";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoCONCORRENTE = addslashes(trim(@$_GET['codigo']));
	$query_concorrentes = mysqli_query($conexao, 'SELECT * FROM tb0401_concorrentes WHERE codigoCONCORRENTE = "'.$codigoCONCORRENTE.'" ');
	$concorrentes = mysqli_fetch_assoc($query_concorrentes);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoCONCORRENTE" type="hidden" value="<?php echo $concorrentes['codigoCONCORRENTE']; ?>" />


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de <?php echo @$_GET['acao'];?></p>
			</div>
			<div class="form-group">
				<label class="control-label"><?php echo @$_GET['acao'];?></label>
				<input type="text" name="nomeCONCORRENTE" id="nomeCONCORRENTE" value="<?php echo $concorrentes['nomeCONCORRENTE'];?>" class="form-control underlined" placeholder="Coloque o nome da conc$concorrentes"/>
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