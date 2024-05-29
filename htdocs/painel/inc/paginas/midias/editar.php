<?php 
	
	//CONFIRMA SE A AÇÃO ALTERAR NO FORMULARIO FOI EXECUTADA PARA EXECUTAR UMA AÇÃO
	if(@$_POST['btn_salvar']=='Alterar'){ 


		//VARIAVEIS DE RECEPÇÃO DE CONTEUDO DO FORMULÁRIO
		$codigo 	= addslashes(trim($_POST['codigo']));
		$nome 		= addslashes(trim($_POST['nome'])); 
		$rede 		= addslashes(trim($_POST['rede']));
		$embed 		= addslashes(trim($_POST['embed']));		 
		$data 		= date("Y-m-d");
		$ativo 		= 1;

		//VARIAVEL PARA INDICAR QUEM ESTA ALTERANDO ALGO NA SESSÃO
		$usuario 	= $usuario['codigoUSUARIO'];

		//QUERY PARA UPDATE NO MYSQL
		$query = mysqli_query($conexao, "
		UPDATE tb0004_midias SET 
			  nomeMIDIA 		= '".$nome."'
			, redemidiaMIDIA 	= '".$rede."'
			, embedMIDIA 		= '".$embed."'			 
			, dataMIDIA 		= '".$data."'
			, ativoMIDIA 		= '".$ativo."'
		WHERE codigoMIDIA 		= '".$codigo."'
		");

		//CONFIRMAÇÃO DE ALTERAÇÃO E ALERTA NA TELA
		if($query == true){

			echo '<script>alert("Mídia alterado com sucesso!");top.location.href="?make='.$make.'&acao=editar&codigo='.$codigo.'";</script>';

		}else{

			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';

		}

			
			

	}else{
		
		//FILTRA O GET DE DADOS MALICIOSOS
		$codigoMIDIA = addslashes(trim(@$_GET['codigo']));
		
		/////////// SELECT DE DADOS
		$query_Midia = mysqli_query($conexao, '
			SELECT 
				codigoMIDIA
				, nomeMIDIA
				, redemidiaMIDIA
				, embedMIDIA
				, dataMIDIA
				, ativoMIDIA 
			FROM tb0004_midias 
			WHERE codigoMIDIA = "'.$codigoMIDIA.'"
		');

		//EXECUÇÃO DA QUERY
		$midias = mysqli_fetch_assoc($query_Midia);
	
?>
<form action="" method="POST">

<!-- CAPTURA E ARMAZERA NA HIDDEN O CODIGO AA DO REGISTRO SELECIONADO PARA SER ENVIADO NA AÇÃO VIA POST-->
<input name="codigo" type="hidden" value="<?php echo $midias['codigoMIDIA']; ?>" />


	<div class="title-block">
		<h3 class="title"> Alterar </h3>
		<p class="title-description"> Altere o arquivo de MIDIA </p>
	</div>
 
						
	<section class="section">
		<div class="row sameheight-container"> 
		
		
			<div class="col-md-12">


				<div class="card card-block ">

							<!--INPUT DE NOME-->
							<div class="form-group">
								<label class="control-label"> Titulo </label> 
								<input type="text" class="form-control underlined" name="nome" id="nome" value="<?php echo $midias['nomeMIDIA']; ?>"  placeholder="Coloque o nome do arquivo"> 
							</div>

							<!--INPUT DE SELEÇÃO DE REDE SOCIAL-->
							<div class="form-group"> 
								<label class="control-label"> Rede Social </label>
								<select  class="form-control underlined"name="rede" id="rede">

								<?php
								$query_redemidia = mysqli_query($conexao, "
									SELECT codigoREDEMIDIA, nomeREDEMIDIA 
									FROM tb0003_redes_midias 
									WHERE ativoREDEMIDIA = 1 
									ORDER BY ordemREDEMIDIA ASC;
									") or die(mysqli_error());

								while($redemidia = mysqli_fetch_assoc($query_redemidia)){?>


								<option value="<?php echo $redemidia['codigoREDEMIDIA']; ?>" <?php if($redemidia['codigoREDEMIDIA']==$midias['codigoMIDIA']){echo 'selected="selected"';}?> >
									<?php echo $redemidia['nomeREDEMIDIA']; ?>
								</option>

								<?php } ?> 


								</select>
							</div>

							<!--INPUT DE INCORPORAÇÃO DE DADOS-->
							<div class="form-group">
								<label class="control-label">Embed (Url de Dados do video)</label> 
								<textarea type="text" class="form-control underlined" name="embed" id="embed" placeholder="Coloque o script da rede para incorporar no site"><?php echo $midias['embedMIDIA']; ?></textarea> 
							</div>
						

					
				</div> 
				
				<!--BOTÃO DE AÇÃO PARA ALTERAÇÃO-->
				<div class="form-group">
					<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" >
				</div>


			</div>
			
			



		</div>
	</section>

</form>

<?php 
//FECHAMENTO DO IF DE AÇÃO DA TELA
} 
?>