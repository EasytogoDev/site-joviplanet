<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoTIPO = $_POST['codigoTIPOPRODUTORELACIONADO'];
	$nomeTIPO = $_POST['nomeTIPOPRODUTORELACIONADO'];


	$query = mysqli_query($conexao, "
		UPDATE tb0008_tipo_produtos_relacionados SET 
		nomeTIPOPRODUTORELACIONADO = '".$nomeTIPO."'
		WHERE codigoTIPOPRODUTORELACIONADO = '".$codigoTIPO."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=tipos&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoTIPO = addslashes(trim(@$_GET['codigo']));
	$query_tipo = mysqli_query($conexao, 'SELECT * FROM tb0008_tipo_produtos_relacionados WHERE codigoTIPOPRODUTORELACIONADO = "'.$codigoTIPO.'" ');
	$tipos = mysqli_fetch_assoc($query_tipo);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoTIPOPRODUTORELACIONADO" type="hidden" value="<?php echo $tipos['codigoTIPOPRODUTORELACIONADO']; ?>" />


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de <?php echo @$_GET['acao'];?></p>
			</div>
			<div class="form-group">
				<label class="control-label"><?php echo @$_GET['acao'];?></label>
				<input  
				type="text" 
				name="nomeTIPOPRODUTORELACIONADO" 
				id="nomeTIPOPRODUTORELACIONADO"
				value="<?php echo $tipos['nomeTIPOPRODUTORELACIONADO'];?>"
				class="form-control underlined" 
				placeholder="Coloque o tipo do produto" 
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