<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 


	$nomeCATEGORIA = $_POST['nomeCATEGORIA'];
	$nomeenCATEGORIA = $_POST['nomeenCATEGORIA'];
	$nomeesCATEGORIA = $_POST['nomeesCATEGORIA'];
	$imagemCATEGORIA = $_POST['imagemCATEGORIA'];
	$grupo = $_POST['grupoCATEGORIA'];
	$ordem = $_POST['ordemCATEGORIA'];
	$singular = $_POST['singularCATEGORIA'];
	$titainum = $_POST['titaniumCATEGORIA'];
	$slugCATEGORIA = tiracento($nomeCATEGORIA);
	$slugenCATEGORIA = tiracento($nomeenCATEGORIA);
	$slugesCATEGORIA = tiracento($nomeesCATEGORIA);


	$query = mysqli_query($conexao, "
		INSERT INTO tb0012_categorias
		(
		codigoCATEGORIA,
		grupoCATEGORIA,
		nomeCATEGORIA,
		nomeenCATEGORIA,
		nomeesCATEGORIA,
		singularCATEGORIA,
		imagemCATEGORIA,
		slugCATEGORIA,
		ordemCATEGORIA,
		titaniumCATERGORIA,
		ativoCATEGORIA
		) VALUES (
		null,
		'".$grupo."',
		'".$nomeCATEGORIA."',
		'".$singular."',
		'".$imagemCATEGORIA."',
		'".$slugCATEGORIA."',
		'".$slugenCATEGORIA."',
		'".$slugesCATEGORIA."',
		'".$ordem."',
		'".$titainum."',
		1
		)
	");


	if($query){
		
		
	$codigoCATEGORIA = mysqli_insert_id($conexao);
		
	echo '<script>alert("Adicionado com sucesso!");top.location.href="?make=produtos&acao=categorias&act=home&codigo=";</script>';
	
	}else{
		
	echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
	
	}

			
			

}else{


	
?>
<div class="title-block">
	<h3 class="title"> Adicionar </h3>
	<p class="title-description"> Adicione as <?php echo @$_GET['acao'];?>  </p>
</div>

<form action="" method="post">

	<section class="section">
	
		<div class="row sameheight-container">
 

		<div class="col-md-12">
		
			<div class="card card-block ">

			<div class="title-block">
				<p class="title-description"> Conteudo da página de categorias</p>
			</div>

			<div class="form-group">
				<label class="control-label">Nome</label>
				<input  
				type="text" 
				name="nomeCATEGORIA" 
				id="nomeCATEGORIA" 
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
				/>
			</div>

			<div class="form-group">
				<label class="control-label">Nome Inglês</label>
				<input  
				type="text" 
				name="nomeenCATEGORIA" 
				id="nomeenCATEGORIA" 
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
				/>
			</div>

			<div class="form-group">
				<label class="control-label">Nome Espanhol</label>
				<input  
				type="text" 
				name="nomeesCATEGORIA" 
				id="nomeesCATEGORIA" 
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
				/>
			</div>

			<div class="form-group">
				<label class="control-label">Singular</label>
				<input  
				type="text" 
				name="singularCATEGORIA" 
				id="singularCATEGORIA" 
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
				/>
			</div>
			
			<div class="form-group">
				<label class="control-label">Imagem</label>
					<input  
					type="text"
					name="imagemCATEGORIA"
					id="imagemCATEGORIA"
					class="form-control underlined"   
					placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" 
					onclick="openKCFinder(this)" 
					readonly="readonly"
					/> 
			</div>

			<div class="form-group">
				<label class="control-label">Grupo</label>
				<select name="grupoCATEGORIA" class="form-control underlined" id="grupoCATEGORIA" required>

					<option >Selecione o grupo</option>
					
					<?php 
					$query_linhas = mysqli_query($conexao, "SELECT codigoGRUPO,nomeGRUPO FROM tb0020_grupo_produtos WHERE ativoGRUPO = '1' ");
					while($linhas = mysqli_fetch_assoc($query_linhas)){
						?>
						<option value="<?php echo $linhas['codigoGRUPO']?>">
						<?php echo $linhas['nomeGRUPO']?>
						</option>  
					<?php }?>

				</select>
			 
			</div>

			<div class="form-group">
				<label class="control-label">Ordem</label>
				<input  
				type="text" 
				name="singularCATEGORIA" 
				id="singularCATEGORIA" 
				class="form-control underlined" 
				placeholder="Coloque o nome da categoria" 
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