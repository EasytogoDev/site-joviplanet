<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 


	$nomeVEICULO = $_POST['nomeVEICULO'];
	$montadoraVEICULO = $_POST['montadoraVEICULO'];
	$imagemVEICULO = $_POST['imagemVEICULO'];
	$linhaVEICULO = $_POST['linhaVEICULO'];
	$slugVEICULO = tiracento($nomeVEICULO);
	
	$motorVEICULO = $_POST['motorVEICULO'];
	$anoVEICULO = $_POST['anoVEICULO'];
	$inicioanoVEICULO = $_POST['inicioanoVEICULO'];
	$finalanoVEICULO = $_POST['finalanoVEICULO'];
	$combustivelVEICULO = $_POST['combustivelVEICULO'];

	$query = mysqli_query($conexao, "
		INSERT INTO tb0014_veiculos  
		(montadoraVEICULO,
		nomeVEICULO,
		motorVEICULO,
		anoVEICULO,
		inicioanoVEICULO,
		finalanoVEICULO,
		combustivelVEICULO,
		slugVEICULO,
		imagemVEICULO,
		linhaVEICULO)
		VALUES
		('".$montadoraVEICULO."',
		'".$nomeVEICULO."',
		'".$motorVEICULO."',
		'".$anoVEICULO."',
		'".$inicioanoVEICULO."',
		'".$finalanoVEICULO."',
		'".$combustivelVEICULO."',
		'".$slugVEICULO."',
		'".$imagemVEICULO."',
		'".$linhaVEICULO."')
	");


	if($query){
		
	$codigoVEICULO = mysqli_insert_id($conexao);
		
	echo '<script>alert("Adicionado com sucesso!");top.location.href="?make=produtos&acao=veiculos&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{
	 
	
?>
<div class="title-block">
	<h3 class="title"> Adicionar </h3>
	<p class="title-description"> <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">
 


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
<option value="<?php echo $montadoras['codigoMONTADORA']?>"  ><?php echo $montadoras['nomeMONTADORA']?></option>  
<?php }?>

 </select>
			</div>
			
			
			<div class="form-group">
				<label class="control-label"><?php echo @$_GET['acao'];?></label>
				<input  
				type="text" 
				name="nomeVEICULO" 
				id="nomeVEICULO" 
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
				/>
			</div>
			
			
			
			
			
			<div class="form-group">
				<label class="control-label">Motor</label>
				<input  
				type="text" 
				name="motorVEICULO" 
				id="motorVEICULO"
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
						<option value="<?php echo $linhas['codigoLINHA']?>"  >
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
					placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" 
					onclick="openKCFinder(this)" 
					readonly="readonly"
					/> 
			</div>
			
			<div class="form-group">
			
				<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Adicionar"/>
				
			</div>

			</div>
			
		</div>

		</div>
	
	</section>

</form>
<?php } ?>