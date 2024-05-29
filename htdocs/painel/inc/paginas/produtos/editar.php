<?php 

$ar_especial = array(   'á'=>'&aacute;',
                        'Á'=>'&Aacute;',
                        'ã'=>'&atilde;',
                        'Ã'=>'&Atilde;',
                        'â'=>'&acirc;',
                        'Â'=>'&Acirc;',
                        'à'=>'&agrave;',
                        'À'=>'&Agrave;',
                        'é'=>'&eacute;',
                        'É'=>'&Eacute;',
                        'ê'=>'&ecirc;',
                        'Ê'=>'&Ecirc;',
                        'í'=>'&iacute;',
                        'Í'=>'&Iacute;',
                        'ó'=>'&oacute;',
                        'Ó'=>'&Oacute;',
                        'õ'=>'&otilde;',
                        'Õ'=>'&Otilde;',
                        'ô'=>'&ocirc;',
                        'Ô'=>'&Ocirc;',
                        'ú'=>'&uacute;',
                        'Ú'=>'&Uacute;',
                        'ç'=>'&ccedil;',
                        'Ç'=>'&Ccedil;',
                        ' '=>'&nbsp;',
                        '\&'=>'\&amp;',
                        'ˆ'=>'&circ;',
                        '˜'=>'&tilde;',
                        '¨'=>'&uml;',
                        '´'=>'&cute;',
                        '¸'=>'&cedil;',
                        '"'=>'&quot;',
                        '“'=>'&ldquo;',
                        '”'=>'&rdquo;',
                        '‘'=>'&lsquo;',
                        '’'=>'&rsquo;',
                        '‚'=>'&sbquo;',
                        '„'=>'&bdquo;',
                        'º'=>'&ordm;',
                        'ª'=>'&ordf;',
                        '‹'=>'&lsaquo;',
                        '›'=>'&rsaquo;',
                        '«'=>'&laquo;',
                        '»'=>'&raquo;',
                        '–'=>'&ndash;',
                        '—'=>'&mdash;',
                        '¯'=>'&macr;',
                        '…'=>'&hellip;',
                        '¦'=>'&brvbar;',
                        '•'=>'&bull;',
                        '‣'=>'&#8227;',
                        '¶'=>'&para;',
                        '§'=>'&sect;',
                        '©'=>'&copy;',
                        '®'=>'&reg',
                        'ü'=>'&uuml;',
                        'Ü'=>'&Uuml;',
                        "'"=>'&#39;',
                        '½'=>'&frac12;',
                        '⅓'=>'&#8531;',
                        '≠'=>'&ne;',
                        '≅'=>'&cong;',
                        '≤'=>'&le;',
                        '≥'=>'&ge;');

function conversao($palavra) { // converte texto normal para o formato html)
    global $ar_especial;
    return str_replace(array_keys($ar_especial), array_values($ar_especial), $palavra);
}

function desconversao($palavra) { // converte o formato html para texto normal
    global $ar_especial;
    return str_replace(array_values($ar_especial), array_keys($ar_especial), $palavra);
}


if(@$_POST['btn_salvar']=='Alterar'){ 



$codigoPRODUTO			= $_POST['codigoPRODUTO'];
$sulfixoPRODUTO			= $_POST['sulfixoPRODUTO'];
$partnumberPRODUTO 		= $_POST['partnumberPRODUTO'];
$ean13PRODUTO 			= $_POST['ean13PRODUTO'];
$descricaoPRODUTO 		= desconversao($_POST['descricaoPRODUTO']);
$descricaoenPRODUTO 	= desconversao($_POST['descricaoenPRODUTO']);
$descricaoesPRODUTO 	= desconversao($_POST['descricaoesPRODUTO']);
$tituloPRODUTO 			= trim($_POST['tituloPRODUTO']);
$tituloenPRODUTO 		= trim($_POST['tituloenPRODUTO']);
$tituloesPRODUTO 		= trim($_POST['tituloesPRODUTO']);
$slugPRODUTO 			= tiracento(tiracento(strip_tags(trim($tituloPRODUTO))));
$slugenPRODUTO 			= tiracento(tiracento(strip_tags(trim($tituloenPRODUTO))));
$slugesPRODUTO 			= tiracento(tiracento(strip_tags(trim($tituloesPRODUTO))));
$imagemPRODUTO 			= $_POST['imagemPRODUTO'];
$originalPRODUTO 		= $_POST['originalPRODUTO'];
$modeloPRODUTO 			= $_POST['modeloPRODUTO'];
$marcaPRODUTO			= $_POST['marcaPRODUTO'];
$numerodepecaPRODUTO 	= $_POST['numerodepecaPRODUTO'];
$ncmPRODUTO 			= $_POST['ncmPRODUTO'];
$alturaPRODUTO 			= $_POST['alturaPRODUTO'];
$comprimentoPRODUTO 	= $_POST['comprimentoPRODUTO'];
$larguraPRODUTO 		= $_POST['larguraPRODUTO'];
$pesoliquidoPRODUTO 	= $_POST['pesoliquidoPRODUTO'];
$pesobrutoPRODUTO 		= $_POST['pesobrutoPRODUTO'];
$quantidadePRODUTO 		= $_POST['quantidadePRODUTO'];
$unidadePRODUTO 		= $_POST['unidadePRODUTO'];
$videoPRODUTO 			= $_POST['videoPRODUTO'];
$mlbPRODUTO      		= $_POST['mlbPRODUTO'];




$query = mysqli_query($conexao, "
UPDATE tb0015_produtos SET 
sulfixoPRODUTO 			= '".$sulfixoPRODUTO."',
partnumberPRODUTO 		= '".$partnumberPRODUTO."',
tituloPRODUTO 			= '".$tituloPRODUTO."',
tituloenPRODUTO 		= '".$tituloenPRODUTO."',
tituloesPRODUTO 		= '".$tituloesPRODUTO."',
slugPRODUTO 			= '".$slugPRODUTO."',
slugenPRODUTO 			= '".$slugenPRODUTO."',
slugesPRODUTO 			= '".$slugesPRODUTO."',
originalPRODUTO 		= '".$originalPRODUTO."',
ean13PRODUTO 			= '".$ean13PRODUTO."',
imagemPRODUTO 			= '".$imagemPRODUTO."',
modeloPRODUTO 			= '".$modeloPRODUTO."',
descricaoPRODUTO 		= '".$descricaoPRODUTO."',
descricaoenPRODUTO 		= '".$descricaoenPRODUTO."',
descricaoesPRODUTO 		= '".$descricaoesPRODUTO."',
marcaPRODUTO			= '".$marcaPRODUTO."',
numerodepecaPRODUTO		= '".$numerodepecaPRODUTO."',
ncmPRODUTO				= '".$ncmPRODUTO."',
alturaPRODUTO			= '".$alturaPRODUTO."',
comprimentoPRODUTO		= '".$comprimentoPRODUTO."',
larguraPRODUTO			= '".$larguraPRODUTO."',
pesoliquidoPRODUTO		= '".$pesoliquidoPRODUTO."',
pesobrutoPRODUTO		= '".$pesobrutoPRODUTO."',
quantidadePRODUTO		= '".$quantidadePRODUTO."',
unidadePRODUTO			= '".$unidadePRODUTO."',
videoPRODUTO			= '".$videoPRODUTO."',
mlbPRODUTO 				= '".$mlbPRODUTO."'
WHERE codigoPRODUTO 	= '".$codigoPRODUTO."'
");


	if($query){
		
		echo '
			<script>
				alert("Alterado com sucesso!");
				top.location.href="?make='.$make.'&acao=home&codigo='.$codigoPRODUTO.'";
			</script>
			';
		
	}else{
		
		echo '
			<script>
				alert("Algo deu errado, tente novamente!");
				top.location.href="javascript:history.back(-1);";
			</script>
			';
	
	}




}else{
	
	$codigoPRODUTO = addslashes(trim($_GET['codigo']));
	
	$query_produtos = mysqli_query($conexao, '
		SELECT * FROM tb0015_produtos 
		WHERE codigoPRODUTO = "'.$codigoPRODUTO.'" 
		');
		
	$produtos = mysqli_fetch_assoc($query_produtos);
	
?>

	<!--Titulo da pagina -->
	<div class="title-block">
	
		<h3 class="title"> Alterar </h3>
		
		<p class="title-description"> Altere o produto </p>
		
	</div>
	
	
	<!--Inicio do formulário -->
	
	<form action="" method="post" id="Produtos">
		<!-- INPUTS OCULTOS -->
		<input type="hidden" name="codigoPRODUTO" id="codigoPRODUTO" value="<?php echo $produtos['codigoPRODUTO']; ?>" />

		<!--TITULO DO PRODUTO-->
		<section class="section">
			<div class="row center">

				<div class="col-md-8">
					<div class="card card-block ">

						 

						<div class="title-block">
							<p class="title-description"> 
								Titulo do Produto
							</p>
						</div>

						<div class="col-md-12">
							<div class="form-group"> 
							<label class="control-label"> 
								Titulo 
							</label>
							<input type="text" name="tituloPRODUTO" id="tituloPRODUTO"  value="<?php echo $produtos['tituloPRODUTO']; ?>" class="form-control underlined" placeholder="Titulo do produto"> 
							</div> 
						</div>

						<div class="col-md-12">
							<div class="form-group"> 
							<label class="control-label"> 
								Titulo (EN)
							</label>
							<input type="text" name="tituloenPRODUTO" id="tituloenPRODUTO"  value="<?php echo $produtos['tituloenPRODUTO']; ?>" class="form-control underlined" placeholder="Titulo do produto (Inglês)"> 
							</div> 
						</div> 

						<div class="col-md-12">
							<div class="form-group"> 
							<label class="control-label"> 
								Titulo (ES)
							</label>
							<input type="text" name="tituloesPRODUTO" id="tituloesPRODUTO"  value="<?php echo $produtos['tituloesPRODUTO']; ?>" class="form-control underlined" placeholder="Titulo do produto (Espanhol)"> 
							</div> 
						</div> 

						





						<div class="col-md-1">
							<div class="form-group"> 
							<label class="control-label"> 
								Prefixo 
							</label>
							<input type="text" name="sulfixoPRODUTO" id="sulfixoPRODUTO"  value="<?php echo $produtos['sulfixoPRODUTO']; ?>" class="form-control underlined" placeholder="Ex ETE"> 
							</div> 
						</div> 

						<div class="col-md-4">


							<div class="form-group"> 
							
							
								<label class="control-label">SKU ( Código do Produto ) </label> 
								
								<input type="text" name="partnumberPRODUTO" id="partnumberPRODUTO" 
								value="<?php echo $produtos['partnumberPRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Coloque o Part Number do Produto"> 
								
							</div>

						</div>

						<div class="col-md-4">


							<div class="form-group"> 
							
							
								<label class="control-label">MLB (codigo Mercado Livre)</label> 
								
								<input type="text" name="mlbPRODUTO" id="mlbPRODUTO" 
								value="<?php echo $produtos['mlbPRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Coloque o MLB do Produto"> 
								
							</div>

						</div>




					</div> 



					<div class="card card-block ">

						 

						<div class="title-block">
							<p class="title-description"> 
								Ficha técnica
							</p>
						</div>

						<div class="col-md-4">
							<div class="form-group"> 
							<label class="control-label"> 
								Marca 
							</label>
							<input type="text" name="marcaPRODUTO" id="marcaPRODUTO"  value="<?php echo $produtos['marcaPRODUTO']; ?>" class="form-control underlined" placeholder="Marca do produto"> 
							</div> 
						</div> 
 


						<div class="col-md-4">
							<div class="form-group"> 
							<label class="control-label"> 
								Número de Peça 
							</label>
							<input type="text" name="numerodepecaPRODUTO" id="numerodepecaPRODUTO"  value="<?php echo $produtos['numerodepecaPRODUTO']; ?>" class="form-control underlined" placeholder="Número da Peça"> 
							</div> 
						</div> 

						<div class="col-md-4">


							<div class="form-group"> 
							
							
								<label class="control-label">Modelo </label> 
						 
								
								<select name="modeloPRODUTO" class="form-control underlined" id="modeloPRODUTO" >
							<option >Selecione a montadora</option>
							<?php
							$query_modelos = mysqli_query($conexao, "
								SELECT * FROM tb0017_modelos 
								WHERE ativoMODELO='1' 
								") or die(mysqli_error());
								
							while($modelos = mysqli_fetch_assoc($query_modelos)){?>


							<option value="<?php echo $modelos['codigoMODELO']; ?>" <?php if($modelos['codigoMODELO']==$produtos['modeloPRODUTO']){echo 'selected="selected"';}?> >
							<?php echo $modelos['nomeMODELO']; ?>
							</option>

							<?php } ?>
							</select>
								
							</div>

						</div>

						<div class="col-md-4">


							<div class="form-group"> 
							
							
								<label class="control-label">Fabricante Original </label> 
						 
								
								<select name="fabricanteoriginalPRODUTO" class="form-control underlined" id="fabricanteoriginalPRODUTO" >
							<option >Selecione o Fabricante Original</option>
							<?php
							$query_tipos = mysqli_query($conexao, "
								SELECT * FROM tb0018_fabricante_original 
								WHERE ativoFABRICANTEORIGINAL='1' 
								") or die(mysqli_error());
								
							while($tipos = mysqli_fetch_assoc($query_tipos)){?>


							<option value="<?php echo $tipos['codigoFABRICANTEORIGINAL']; ?>" <?php if($tipos['codigoFABRICANTEORIGINAL']==$produtos['fabricanteoriginalPRODUTO']){echo 'selected="selected"';}?> >
							<?php echo $tipos['nomeFABRICANTEORIGINAL']; ?>
							</option>

							<?php } ?>
							</select>
								
							</div>

						</div>


						<div class="col-md-4">


							<div class="form-group"> 
							
							
								<label class="control-label">Combustível </label> 
								
								<select name="combustivelPRODUTO" class="form-control underlined" id="combustivelPRODUTO" >
							<option >Selecione o combustível</option>
							<?php
							$query_Combustivel = mysqli_query($conexao, "
								SELECT * FROM tb0023_combustiveis 
								WHERE ativoCOMBUSTIVEL='1' 
								") or die(mysqli_error());
								
							while($Combustivel = mysqli_fetch_assoc($query_Combustivel)){?>


							<option value="<?php echo $Combustivel['codigoCOMBUSTIVEL']; ?>" <?php if($Combustivel['codigoCOMBUSTIVEL']==$produtos['combustivelPRODUTO']){echo 'selected="selected"';}?> >
							<?php echo $Combustivel['nomeCOMBUSTIVEL']; ?>
							</option>

							<?php } ?>
							</select>

								
							</div>

						</div>




					</div> 


					<div class="card card-block ">

												

						<div class="title-block">
							<p class="title-description"> 
								Fiscal
							</p>
						</div>

						<div class="col-md-6">
												
												
													<div class="form-group"> 
													
													
														<label class="control-label"> Código Original Principal </label> 
														
														<input type="text" name="originalPRODUTO" id="originalPRODUTO" 
														value="<?php echo $produtos['originalPRODUTO']; ?>"  
														class="form-control underlined"  
														placeholder="Ex 000.000.000"> 
														
													</div>
												
												</div>
																		
												<div class="col-md-6">
												
												
													<div class="form-group"> 
													
													
														<label class="control-label"> Código de Barras (EAN 13) </label> 
														
														<input type="text" name="ean13PRODUTO" id="ean13PRODUTO" 
														value="<?php echo $produtos['ean13PRODUTO']; ?>"  
														class="form-control underlined"  
														placeholder="Coloque o código de barras"> 
														
													</div>
												
												</div>

												
												<div class="col-md-4">
												
												
													<div class="form-group"> 
													
													
														<label class="control-label"> NCM </label> 
														
														<input type="text" name="ncmPRODUTO" id="ncmPRODUTO" 
														value="<?php echo $produtos['ncmPRODUTO']; ?>"  
														class="form-control underlined"  
														placeholder="Coloque o código de barras"> 
														
													</div>
												
												</div>
												
												

												<div class="col-md-4">
												
												
													<div class="form-group"> 
													
													
														<label class="control-label"> Altura </label> 
														
														<input type="text" name="alturaPRODUTO" id="alturaPRODUTO" 
														value="<?php echo $produtos['alturaPRODUTO']; ?>"  
														class="form-control underlined"  
														placeholder="Coloque o código de barras"> 
														
													</div>
												
												</div>

												<div class="col-md-4">
												
												
													<div class="form-group"> 
													
													
														<label class="control-label"> Largura </label> 
														
														<input type="text" name="larguraPRODUTO" id="larguraPRODUTO" 
														value="<?php echo $produtos['larguraPRODUTO']; ?>"  
														class="form-control underlined"  
														placeholder="Coloque o código de barras"> 
														
													</div>
												
												</div>

												<div class="col-md-4">
												
												
													<div class="form-group"> 
													
													
														<label class="control-label"> Comprimento </label> 
														
														<input type="text" name="comprimentoPRODUTO" id="comprimentoPRODUTO" 
														value="<?php echo $produtos['comprimentoPRODUTO']; ?>"  
														class="form-control underlined"  
														placeholder="Coloque o código de barras"> 
														
													</div>
												
												</div>

												<div class="col-md-4">
												
												
													<div class="form-group"> 
													
													
														<label class="control-label"> Peso Liquido </label> 
														
														<input type="text" name="pesoliquidoPRODUTO" id="pesoliquidoPRODUTO" 
														value="<?php echo $produtos['pesoliquidoPRODUTO']; ?>"  
														class="form-control underlined"  
														placeholder="Coloque o código de barras"> 
														
													</div>
												
												</div>
												<div class="col-md-4">
												
												
													<div class="form-group"> 
													
													
														<label class="control-label"> Peso Bruto </label> 
														
														<input type="text" name="pesobrutoPRODUTO" id="pesobrutoPRODUTO" 
														value="<?php echo $produtos['pesobrutoPRODUTO']; ?>"  
														class="form-control underlined"  
														placeholder="Coloque o código de barras"> 
														
													</div>
												
												</div>

												<div class="col-md-4">
												
												
													<div class="form-group"> 
													
													
														<label class="control-label"> Quantidade </label> 
														
														<input type="text" name="quantidadePRODUTO" id="quantidadePRODUTO" 
														value="<?php echo $produtos['quantidadePRODUTO']; ?>"  
														class="form-control underlined"  
														placeholder="Quantidade por embalagem"> 
														
													</div>
												
												</div>



												<div class="col-md-4">
												
												
													<div class="form-group"> 
													
													
														<label class="control-label"> Unidade </label> 
														
														<input type="text" name="unidadePRODUTO" id="unidadePRODUTO" 
														value="<?php echo $produtos['unidadePRODUTO']; ?>"  
														class="form-control underlined"  
														placeholder="Unidade de medida"> 
														
													</div>
												
												</div>
												

						





						</div> 


						<div class="card card-block ">

						 

						<div class="title-block">
							<p class="title-description"> 
								Descrição
							</p>
						</div>

						 
						 


						<div class="col-md-12">


							<div class="form-group"> 
							 


								<label class="control-label">Descrição completa do produto (EN)</label>   
							
							<textarea class="ckeditor" cols="80" id="editor1" name="descricaoPRODUTO" rows="5"><?php echo $produtos['descricaoPRODUTO']; ?></textarea>    
								
							 		
							</div>

						</div>

						<div class="col-md-12">


							<div class="form-group"> 
							 


								<label class="control-label">Descrição completa do produto em Inglês</label>   
							
							<textarea class="ckeditor" cols="80" id="editor1" name="descricaoenPRODUTO" rows="5"><?php echo $produtos['descricaoenPRODUTO']; ?></textarea>    
								
							 		
							</div>

						</div>
 
						 
						<div class="col-md-12">


							<div class="form-group"> 
							 


								<label class="control-label">Descrição completa do produto em Espanhol</label>   
							
							<textarea class="ckeditor" cols="80" id="editor1" name="descricaoesPRODUTO" rows="5"><?php echo $produtos['descricaoesPRODUTO']; ?></textarea>    
								
							 		
							</div>

						</div>





					</div> 




					<div class="card card-block ">

						 

						<div class="title-block">
							<p class="title-description"> 
								Video
							</p>
						</div>

						<div class="col-md-12">
							<div class="form-group"> 
							<label class="control-label"> 
								Video do Produto 
							</label>
							<input type="text" name="videoPRODUTO" id="videoPRODUTO"  value="<?php echo $produtos['videoPRODUTO']; ?>" class="form-control underlined" placeholder="Marca do produto"> 
							</div> 
						</div> 
 
 
						 
 




					</div> 

					<div class="card card-block ">

						<div class="title-block">
							<p class="title-description"> 
								Imagens do Produto
							</p>
						</div>

						
						<div class="col-md-10">
							<div class="form-group"> 
								<label class="control-label"> Imagem </label>

								<input type="text" name="imagemPRODUTO" id="imagemPRODUTO" 
								
								class="form-control underlined" 
								placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" 
								onclick="openKCFinder(this)" 
								readonly="readonly"/> 
							
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group"> 
								<label class="control-label"> &nbsp; </label>

								<a href="javascript:IncluiFoto();" class="form-control btn btn-primary btn-sm rounded pull-right"> Adicionar </a>
							
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group" id="FotosProdutos"> 
							<img src="">
							</div> 
						</div> 

 
 


					</div>

					<div class="card card-block ">

						 

						<div class="title-block">
							<p class="title-description"> 
								Produtos associados
							</p>
						</div>

						<div class="col-md-4">
							<div class="form-group"> 
							<label class="control-label"> 
								Tipos de Contrapeças 
							</label>
							
							<select name="tipoPRODUTORELACIONADO" class="form-control underlined" id="tipoPRODUTORELACIONADO" >
							<option >Selecione o tipo</option>
							<?php
							$query_Combustivel = mysqli_query($conexao, "
								SELECT * FROM tb0008_tipo_produtos_relacionados 
								WHERE ativoTIPOPRODUTORELACIONADO='1' 
								") or die(mysqli_error());
								
							while($Combustivel = mysqli_fetch_assoc($query_Combustivel)){?>


							<option value="<?php echo $Combustivel['codigoTIPOPRODUTORELACIONADO']; ?>"  >
							<?php echo $Combustivel['nomeTIPOPRODUTORELACIONADO']; ?>
							</option>

							<?php } ?>
							</select>


							</div> 
						</div> 
 


						<div class="col-md-4">
							<div class="form-group"> 
							<label class="control-label"> 
								Produto
							</label>
							 
							<select name="subprodutoPRODUTORELACIONADO" class="form-control underlined" id="subprodutoPRODUTORELACIONADO" >
							<option >Relacione os Produtos</option>
							<?php
							$query_relacionado_lista = mysqli_query($conexao, "
								SELECT codigoPRODUTO, CONCAT(sulfixoPRODUTO,' ',partnumberPRODUTO) AS PRODUTO FROM `tb0015_produtos` WHERE ativoPRODUTO = 1 ORDER BY `partnumberPRODUTO` ASC 
								") or die(mysqli_error());
								
							while($linha_relacionado = mysqli_fetch_assoc($query_relacionado_lista)){?>


							<option value="<?php echo $linha_relacionado['codigoPRODUTO']; ?>">
							<?php echo $linha_relacionado['PRODUTO']; ?>
							</option>

							<?php } ?>
							</select>
							
							</div> 
						</div> 
						<div class="col-md-4">
						<label class="control-label"> 
								&nbsp;
							</label>
										<a href="javascript:IncluiProdutosRelacionados();" class="form-control btn btn-primary btn-sm rounded pull-right">
								Adicionar
							</a> </div> 
						 


						<div class="col-md-12">


							<div class="form-group" id="ProdutosRelacionados"> 
							
							
																
							 		
							</div>

						</div>




					</div> 





 


					<div class="card card-block ">

						 

<div class="title-block">
	<p class="title-description"> 
		Compatibilidade
	</p>
</div>
 

<div class="col-md-3">
	<div class="form-group"> 
	<label class="control-label"> 
	Montadora
	</label>
	
	<select name="montadoraMONTADORAVINCULO" class="form-control underlined" id="montadoraMONTADORAVINCULO" onChange="buscaVeiulos(this.value)">
	<option >Selecione a montadora</option>
	<?php
	$query_montadoras = mysqli_query($conexao, "
		SELECT * FROM tb0013_montadoras 
		WHERE ativoMONTADORA='1' 
		") or die(mysqli_error());
		
	while($montadoras = mysqli_fetch_assoc($query_montadoras)){?>


	<option value="<?php echo $montadoras['codigoMONTADORA']; ?>"  >
	<?php echo $montadoras['nomeMONTADORA']; ?>
	</option>

	<?php } ?>
	</select>
	

	</div> 
</div> 



<div class="col-md-3">
	<div class="form-group"> 
	<label class="control-label"> 
	Veiculo
	</label>
	<div id="result_veiculos">
		<select name="veiculoVEICULOVINCULO" class="form-control underlined" id="veiculoVEICULOVINCULO" >
		<option >Selecione uma montadora</option>
		 
		</select>
	</div>
	
	</div> 
</div> 




<div class="col-md-3">
	<div class="form-group"> 
	<label class="control-label"> 
	Aplicação
	</label>
	<input type="text" name="valorVEICULOVINCULO" id="valorVEICULOVINCULO"  
								class="form-control underlined"  
								placeholder="Digite a aplicação desse veiculo"> 
	
	</div> 
</div> 
<div class="col-md-3">
<label class="control-label"> 
		&nbsp;
	</label>
				<a href="javascript:incluiVeiculo();" class="form-control btn btn-primary btn-sm rounded pull-right">
		Adicionar
	</a> </div> 
 


<div class="col-md-12">


	<div class="form-group" id="VeiculosRelacionados"> </div>

</div>




</div> 
 




					



					

					<div class="card card-block ">

						 

						<div class="title-block">
							<p class="title-description"> 
								Linhas
							</p>
						</div>

						<div class="card-header bordered">
			<div class="header-block">
				<div id="result_linhas">
					
				
				<select name="linhaLINHAVINCULO" class="form-control underlined" id="linhaLINHAVINCULO" >
							<option >Selecione a Linha</option>
							<?php
							$query_linha_lista = mysqli_query($conexao, "
								SELECT * FROM tb0011_linhas 
								WHERE ativoLINHA='1' 
								") or die(mysqli_error());
								
							while($linha_lista = mysqli_fetch_assoc($query_linha_lista)){?>


							<option value="<?php echo $linha_lista['codigoLINHA']; ?>">
							<?php echo $linha_lista['nomeLINHA']; ?>
							</option>

							<?php } ?>
							</select>
				</div>
			</div>
			<div class="header-block pull-right"> 
				<a href="javascript:IncluiLinhas();" class="btn btn-primary btn-sm rounded pull-right">
					Adicionar
				</a> 
			</div>
		</div>




						<div class="col-md-12">
						<div class="clear" id="listaLinhas"> </div>
						</div> 
 
 
						 
 




					</div> 

 

 





					
					<div class="card card-block ">

						 

									<div class="title-block">
										<p class="title-description"> 
											Categorias
										</p>
									</div>

									<div class="col-md-10">
										<div class="form-group"> 
										<label class="control-label"> 
											Selecione uma categoria 
										</label>
										<select name="categoriaLISTA" class="form-control underlined" id="categoriaLISTA" >
										<option >Selecione a Categoria</option>
											<?php
											$query_categoria_lista = mysqli_query($conexao, "
											SELECT * FROM tb0012_categorias 
											WHERE ativoCATEGORIA='1' 
											") or die(mysqli_error());
													
											while($categoria_lista = mysqli_fetch_assoc($query_categoria_lista)){?>


											<option value="<?php echo $categoria_lista['codigoCATEGORIA']; ?>">
											<?php echo $categoria_lista['nomeCATEGORIA']; ?>
											</option>

											<?php } ?>
											</select>  

										</div> 
									</div>
									<div class="col-md-2">
									<label class="control-label"> 
											&nbsp;
										</label>
									<a href="javascript:IncluiCategorias();" class="form-control btn btn-primary btn-sm rounded pull-right">
								Adicionar
							</a> 
							</div>
									<div class="col-md-12">

										<div class="clear" id="listaCategorias"> </div>

									</div>
									


 
 
						 
 




					</div> 

 

				
					
					<div class="card card-block ">

						 

									<div class="title-block">
										<p class="title-description"> 
											Concorrentes
										</p>
									</div>

									<div class="col-md-4">
										<div class="form-group"> 
										<label class="control-label"> 
											Selecione um concorrente 
										</label>
										<select name="concorrenteVINCULOCONCORRENTE" class="form-control underlined" id="concorrenteVINCULOCONCORRENTE" >
										<option >Selecione o concorrente</option>
											<?php
											$query_concorrente_lista = mysqli_query($conexao, "
											SELECT * FROM tb0401_concorrentes 
											WHERE ativoCONCORRENTE='1' 
											") or die(mysqli_error());
													
											while($concorrente_lista = mysqli_fetch_assoc($query_concorrente_lista)){?>


											<option value="<?php echo $concorrente_lista['codigoCONCORRENTE']; ?>">
											<?php echo $concorrente_lista['nomeCONCORRENTE']; ?>
											</option>

											<?php } ?>
											</select>  

										</div> 
									</div>

									<div class="col-md-6">
										<div class="form-group"> 
											<label class="control-label"> 
												Digite o codigo do Produto do concorrente
											</label>
											<input type="text" name="valorVINCULOCONCORRENTE" id="valorVINCULOCONCORRENTE" class="form-control underlined" placeholder="Digite o codigo do Produto do concorrente"> 
										</div> 
									</div>
									<div class="col-md-2">
										<label class="control-label"> 
											&nbsp;
										</label>
										<a href="javascript:IncluiConcorrentes();" class="form-control btn btn-primary btn-sm rounded pull-right">
											Adicionar
										</a>
									</div>
									<div class="col-md-12">

										<div class="clear" id="listaConcorrentes"> </div>

									</div>
									


 
 
						 
 




					</div> 


					<div class="card card-block ">

						 

									<div class="title-block">
										<p class="title-description"> 
											Intercambiabilidade
										</p>
									</div>

									<div class="col-md-4">
										<div class="form-group"> 
										<label class="control-label"> 
											Selecione uma empresa 
										</label>
										<select name="intercambiabilidadeVINCULOINTERCAMBIABILIDADE" class="form-control underlined" id="intercambiabilidadeVINCULOINTERCAMBIABILIDADE" >
										<option >Selecione a empresa</option>
											<?php
											$query_intercambiabilidade_lista = mysqli_query($conexao, "
											SELECT * FROM tb0501_intercambiabilidades 
											WHERE ativoINTERCAMBIABILIDADE='1' 
											") or die(mysqli_error());
													
											while($intercambiabilidade_lista = mysqli_fetch_assoc($query_intercambiabilidade_lista)){?>


											<option value="<?php echo $intercambiabilidade_lista['codigoINTERCAMBIABILIDADE']; ?>">
											<?php echo $intercambiabilidade_lista['nomeINTERCAMBIABILIDADE']; ?>
											</option>

											<?php } ?>
											</select>  

										</div> 
									</div>

									<div class="col-md-6">
										<div class="form-group"> 
										<label class="control-label"> 
											Digite o codigo do Produto do intercambiabilidade
										</label>
										<input type="text" name="valorVINCULOINTERCAMBIABILIDADE" id="valorVINCULOINTERCAMBIABILIDADE"  
								class="form-control underlined"  
								placeholder="Digite o codigo do Produto do intercambiabilidade"> 
										</div> 
									</div>
									<div class="col-md-2">
									<label class="control-label"> 
											&nbsp;
										</label>
									<a href="javascript:IncluiIntercambiabilidades();" class="form-control btn btn-primary btn-sm rounded pull-right">
								Adicionar
							</a> 
							</div>
									<div class="col-md-12">

										<div class="clear" id="listaIntercambiabilidades"> </div>

									</div>
									


 
 
						 
 




					</div>
				



					<div class="card card-block ">

						 

									<div class="title-block">
										<p class="title-description"> 
											Referencias Originais
										</p>
									</div>

									<div class="col-md-4">
										<div class="form-group"> 
										<label class="control-label"> 
											Selecione um fabricante
										</label>
										<select name="fabricanteORIGINALREFERENCIA" class="form-control underlined" id="fabricanteORIGINALREFERENCIA" >
										<option >Selecione o fabricante</option>
											<?php
											$query_referenciaoriginal_lista = mysqli_query($conexao, "
											SELECT codigoFABRICANTEORIGINAL, nomeFABRICANTEORIGINAL FROM tb0018_fabricante_original 
											WHERE ativoFABRICANTEORIGINAL='1' 
											") or die(mysqli_error());
													
											while($referenciaoriginal_lista = mysqli_fetch_assoc($query_referenciaoriginal_lista)){?>


											<option value="<?php echo $referenciaoriginal_lista['codigoFABRICANTEORIGINAL']; ?>">
											<?php echo $referenciaoriginal_lista['nomeFABRICANTEORIGINAL']; ?>
											</option>

											<?php } ?>
											</select>  

										</div> 
									</div>

									<div class="col-md-6">
										<div class="form-group"> 
										<label class="control-label"> 
											Digite o codigo da referência original
										</label>
										<input type="text" name="valorORIGINALREFERENCIA" id="valorORIGINALREFERENCIA"  
								class="form-control underlined"  
								placeholder="Digite o codigo do Produto do referência original"> 
										</div> 
									</div>
									<div class="col-md-2">
									<label class="control-label"> 
											&nbsp;
										</label>
									<a href="javascript:IncluiReferenciasoriginais();" class="form-control btn btn-primary btn-sm rounded pull-right">
								Adicionar
							</a> 
							</div>
									<div class="col-md-12">

										<div class="clear" id="listaReferenciasoriginais"> </div>

									</div>
									


 
 
						 
 




					</div>








					<div class="card card-block ">

						 

									<div class="title-block">
										<p class="title-description"> 
											Características técnicas
										</p>
									</div>

									<div class="col-md-4">
										<div class="form-group"> 
										<label class="control-label"> 
											Selecione uma especificação
										</label>
										<select name="especificaoVINCULOESPECIFICAO" class="form-control underlined" id="especificaoVINCULOESPECIFICAO" >
										<option >Selecione a especificação</option>
											<?php
											$query_especificacao_lista = mysqli_query($conexao, "
											SELECT codigoESPECIFICACAO, nomeESPECIFICACAO,observacaoESPECIFICACAO FROM tb0021_especificacoes 
											WHERE ativoESPECIFICACAO='1' 
											") or die(mysqli_error());
													
											while($especificacao_lista = mysqli_fetch_assoc($query_especificacao_lista)){?>


											<option value="<?php echo $especificacao_lista['codigoESPECIFICACAO']; ?>">
											<?php echo $especificacao_lista['nomeESPECIFICACAO']; ?>
											</option>

											<?php } ?>
											</select>  

										</div> 
									</div>

									<div class="col-md-6">
										<div class="form-group"> 
										<label class="control-label"> 
											Digite o valor da característica
										</label>
										<input type="text" name="valorVINCULOESPECIFICAO" id="valorVINCULOESPECIFICAO"  
								class="form-control underlined"  
								placeholder="Digite valor da Especificação"> 
										</div> 
									</div>
									<div class="col-md-2">
									<label class="control-label"> 
											&nbsp;
										</label>
									<a href="javascript:IncluiEspecificacoes();" class="form-control btn btn-primary btn-sm rounded pull-right">
								Adicionar
							</a> 
							</div>
									<div class="col-md-12">

										<div class="clear" id="listaEspecificacoes"> </div>

									</div>
									


 
 
						 
 




					</div>




					
					


<div class="card card-block ">	
		<div class="form-group"> 
			<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" >
					
		</div>
				
	</div>

				</div> 

				<div class="col-md-4">
				<!-- Qualidade Satisfatória -->
				</div> 

			</div> 
		</section>
		<!--TITULO DO PRODUTO-->


 

	</form>

<?php } ?>