<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoESPECIFICACAO = $_POST['codigoESPECIFICACAO'];
	$observacaoESPECIFICACAO = $_POST['observacaoESPECIFICACAO'];
	$nomeESPECIFICACAO = $_POST['nomeESPECIFICACAO'];
	$tipoESPECIFICACAO = $_POST['tipoESPECIFICACAO'];


	$query = mysqli_query($conexao, "
		UPDATE tb0021_especificacoes SET 
		nomeESPECIFICACAO = '".$nomeESPECIFICACAO."',
		tipoESPECIFICACAO = '".$tipoESPECIFICACAO."',
		observacaoESPECIFICACAO = '".$observacaoESPECIFICACAO."'
		WHERE codigoESPECIFICACAO = '".$codigoESPECIFICACAO."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=especificacoes&act=home&codigo='.$codigoESPECIFICACAO.'";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoESPECIFICACAO = addslashes(trim(@$_GET['codigo']));
	$query_categoria = mysqli_query($conexao, 'SELECT * FROM tb0021_especificacoes WHERE codigoESPECIFICACAO = "'.$codigoESPECIFICACAO.'" ');
	$categoria = mysqli_fetch_assoc($query_categoria);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoESPECIFICACAO" type="hidden" value="<?php echo $categoria['codigoESPECIFICACAO']; ?>" />


			<div class="col-md-12">
			
				<div class="card card-block ">

					<div class="title-block">
						<p class="title-description"> Conteudo da página de <?php echo @$_GET['acao'];?></p>
					</div>
					<div class="form-group">
						<label class="control-label">Nome</label>
						<input type="text" name="nomeESPECIFICACAO" id="nomeESPECIFICACAO" value="<?php echo $categoria['nomeESPECIFICACAO']; ?>" class="form-control underlined" placeholder="Coloque o nome da especificação"/>
					</div>


						<div class="form-group"> 
							<label class="control-label">Tipo</label>
                            <select name="tipoESPECIFICACAO" class="form-control underlined" id="tipoESPECIFICACAO">
								<option value="1">Texto</option>
								<option value="2">Número</option>
								<option value="3">Sim ou não</option>
                            </select>
                        </div>

						<div class="form-group">
							<label class="control-label">Observação</label>
							<input type="text" name="observacaoESPECIFICACAO" id="observacaoESPECIFICACAO" class="form-control underlined" placeholder="Coloque as observações" value="<?php echo $categoria['observacaoESPECIFICACAO']; ?>"/>
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