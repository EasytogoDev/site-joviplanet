<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

	$codigoVEICULO = $_POST['codigoVEICULO'];
	$nomeVEICULO = $_POST['nomeVEICULO'];
	$montadoraVEICULO = $_POST['montadoraVEICULO'];
	$imagemVEICULO = $_POST['imagemVEICULO'];
	$linhaVEICULO = $_POST['linhaVEICULO'];
	
	
	$motorVEICULO = $_POST['motorVEICULO'];
	$anoVEICULO = $_POST['anoVEICULO'];
	$inicioanoVEICULO = $_POST['inicioanoVEICULO'];
	$finalanoVEICULO = $_POST['finalanoVEICULO'];
	$combustivelVEICULO = $_POST['combustivelVEICULO'];
	
	
	
	
	
	$slugVEICULO = tiracento($nomeVEICULO);


	$query = mysqli_query($conexao, "
		UPDATE tb0014_veiculos SET 
		montadoraVEICULO = '".$montadoraVEICULO."',
		nomeVEICULO = '".$nomeVEICULO."',
		
		motorVEICULO = '".$motorVEICULO."',
		anoVEICULO = '".$anoVEICULO."',
		inicioanoVEICULO = '".$inicioanoVEICULO."',
		finalanoVEICULO = '".$finalanoVEICULO."',
		combustivelVEICULO = '".$combustivelVEICULO."',
		
		slugVEICULO = '".$slugVEICULO."',
		imagemVEICULO = '".$imagemVEICULO."',
		linhaVEICULO = '".$linhaVEICULO."'
		WHERE codigoVEICULO = '".$codigoVEICULO."'
	");


	if($query){
		
	echo '<script>alert("Alterado com sucesso!");top.location.href="?make=produtos&acao=veiculos&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	
	$codigoVEICULO = addslashes(trim(@$_GET['codigo']));
	$query_veiculos = mysqli_query($conexao, 'SELECT * FROM tb0014_veiculos WHERE codigoVEICULO = "'.$codigoVEICULO.'" ');
	$veiculos = mysqli_fetch_assoc($query_veiculos);
	
?>
<div class="title-block">
	<h3 class="title"> Alterar </h3>
	<p class="title-description"> Altere as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">

			<input name="codigoVEICULO" type="hidden" value="<?php echo $veiculos['codigoVEICULO']; ?>" />


		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de <?php echo @$_GET['acao'];?></p>
			</div>
			
			
			<div class="form-group">
				
<select name="montadoraVEICULO" class="form-control underlined" id="montadoraVEICULO" required>

<option >Selecione a Montadora</option>
<?php 
$query_montadoras = mysqli_query($conexao, "SELECT * FROM tb0013_montadoras WHERE ativoMONTADORA = '1' ");

while($montadoras = mysqli_fetch_assoc($query_montadoras)){
	?>
<option value="<?php echo $montadoras['codigoMONTADORA']?>" <?php if($montadoras['codigoMONTADORA']==$veiculos['montadoraVEICULO']){ ?>selected="selected"<?php }?>><?php echo $montadoras['nomeMONTADORA']?></option>  
<?php }?>

 </select>
			</div>
			
			
			
			<div class="form-group">
				<label class="control-label"><?php echo @$_GET['acao'];?></label>
				<input  
				type="text" 
				name="nomeVEICULO" 
				id="nomeVEICULO"
				value="<?php echo $veiculos['nomeVEICULO']; ?>"
				class="form-control underlined" 
				placeholder="Coloque o nome da veiculos" 
				/>
			</div>
			
			
			
			<div class="form-group">
				<label class="control-label">Motor</label>
				<input  
				type="text" 
				name="motorVEICULO" 
				id="motorVEICULO"
				value="<?php echo $veiculos['motorVEICULO']; ?>"
				class="form-control underlined" 
				placeholder="Coloque motor do veiculo" 
				/>
			</div>	
			
			<div class="form-group">
				<label class="control-label">Combustível</label>
				<input  
				type="text" 
				name="combustivelVEICULO" 
				id="combustivelVEICULO"
				value="<?php echo $veiculos['combustivelVEICULO']; ?>"
				class="form-control underlined" 
				placeholder="Coloque motor do veiculo" 
				/>
			</div>	
			
			
			


		
			<div class="form-group">
				<label class="control-label">Ano</label>
				<input  
				type="text" 
				name="anoVEICULO" 
				id="anoVEICULO"
				value="<?php echo $veiculos['anoVEICULO']; ?>"
				class="form-control underlined" 
				placeholder="Coloque ano do veiculo" 
				/>
			</div>


			<div class="form-group">
				<label class="control-label">Inicio de ano</label>
				<input  
				type="text" 
				name="inicioanoVEICULO" 
				id="inicioanoVEICULO"
				value="<?php echo $veiculos['inicioanoVEICULO']; ?>"
				class="form-control underlined" 
				placeholder="Coloque Inicio de ano do veiculo" 
				/>
			</div>	


			<div class="form-group">
				<label class="control-label">Final de ano</label>
				<input  
				type="text" 
				name="finalanoVEICULO" 
				id="finalanoVEICULO"
				value="<?php echo $veiculos['finalanoVEICULO']; ?>"
				class="form-control underlined" 
				placeholder="Coloque Final de ano do veiculo" 
				/>
			</div>				
			
			
			
			
			
			<div class="form-group">
				
			<select name="linhaVEICULO" class="form-control underlined" id="linhaVEICULO" required>

				<option >Selecione a Linha</option>
				<?php 
				$query_linhas = mysqli_query($conexao, "SELECT codigoLINHA,nomeLINHA FROM tb0011_linhas WHERE ativoLINHA = '1' ");

				while($linhas = mysqli_fetch_assoc($query_linhas)){
					?>
					<option value="<?php echo $linhas['codigoLINHA']?>" 
					<?php if($linhas['codigoLINHA']==$veiculos['linhaVEICULO']){ ?>selected="selected"<?php }?>>
					<?php echo $linhas['nomeLINHA']?>
					</option>  
				<?php }?>

			 </select>
			 
			</div>
			
			<div class="form-group">
				<label class="control-label">Imagem</label>
					<input  
					type="text"
					name="imagemVEICULO"
					id="imagemVEICULO"
					class="form-control underlined" 
					value="<?php echo $veiculos['imagemVEICULO']; ?>"  
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