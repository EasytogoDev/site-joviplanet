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
$slugPRODUTO 			= tiracento($codigoPRODUTO.'-'.$sulfixoPRODUTO.'-'.$partnumberPRODUTO.'-'.strip_tags($descricaoPRODUTO));
$imagemPRODUTO 			= $_POST['imagemPRODUTO'];
$originalPRODUTO 		= $_POST['originalPRODUTO'];
$especificacaoPRODUTO	= desconversao($_POST['especificacaoPRODUTO']); 
$modeloPRODUTO 			= $_POST['modeloPRODUTO'];
$tipoPRODUTO 			= $_POST['tipoPRODUTO'];
$embalagemPRODUTO 		= $_POST['embalagemPRODUTO'];




$query = mysqli_query($conexao, "
UPDATE tb0015_produtos SET 
sulfixoPRODUTO 		= '".$sulfixoPRODUTO."',
partnumberPRODUTO 		= '".$partnumberPRODUTO."',
ean13PRODUTO 		= '".$ean13PRODUTO."',
slugPRODUTO 			= '".$slugPRODUTO."',
imagemPRODUTO 			= '".$imagemPRODUTO."',
originalPRODUTO 		= '".$originalPRODUTO."',
especificacaoPRODUTO 	= '".$especificacaoPRODUTO."',
modeloPRODUTO 			= '".$modeloPRODUTO."',
tipoPRODUTO 			= '".$tipoPRODUTO."',
descricaoPRODUTO 		= '".$descricaoPRODUTO."',
embalagemPRODUTO 		= '".$embalagemPRODUTO."'
WHERE codigoPRODUTO = '".$codigoPRODUTO."'
");


	if($query){
		
		echo '
			<script>
				alert("Alterado com sucesso!");
				top.location.href="?make='.$make.'&acao='.$acao.'&codigo='.$codigoPRODUTO.'";
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
	
	$codigoPRODUTO = addslashes(trim(@$_GET['codigo']));
	
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

		<section class="section">
		
			<div class="row sameheight-container">
			
				<div class="col-md-8">
				
					<div class="card card-block ">

						<div class="title-block">
							<p class="title-description"> 
								Dados do Produto
							</p>
						</div>
						
						<div class="col-md-2">
						
						
							<div class="form-group"> 
							
							
								<label class="control-label"> Sulfixo </label> 
								
								<input type="text" name="sulfixoPRODUTO" id="sulfixoPRODUTO" 
								value="<?php echo $produtos['sulfixoPRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Ex EW"> 
								
							</div>
						
						</div>
												
						<div class="col-md-10">
						
						
							<div class="form-group"> 
							
							
								<label class="control-label"> Part Number ( Código SKU - Interno do Produto ) </label> 
								
								<input type="text" name="partnumberPRODUTO" id="partnumberPRODUTO" 
								value="<?php echo $produtos['partnumberPRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Coloque o Part Number do Produto"> 
								
							</div>
						
						</div>

						<div class="form-group"> 
							<label class="control-label"> Imagem </label>

							<input type="text" name="imagemPRODUTO" id="imagemPRODUTO" 
							value="<?php echo $produtos['imagemPRODUTO']; ?>"  
							class="form-control underlined" 
							placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" 
							onclick="openKCFinder(this)" 
							readonly="readonly"/> 
						
						</div>
						
						<div class="col-md-6">
						
						
							<div class="form-group"> 
							
							
								<label class="control-label"> Código Original </label> 
								
								<input type="text" name="originalPRODUTO" id="originalPRODUTO" 
								value="<?php echo $produtos['originalPRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Ex EW"> 
								
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
								
								<input type="text" name="ean13PRODUTO" id="ean13PRODUTO" 
								value="<?php echo $produtos['ean13PRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Coloque o código de barras"> 
								
							</div>
						
						</div>
						
					 

						<div class="col-md-4">
						
						
							<div class="form-group"> 
							
							
								<label class="control-label"> Altura </label> 
								
								<input type="text" name="ean13PRODUTO" id="ean13PRODUTO" 
								value="<?php echo $produtos['ean13PRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Coloque o código de barras"> 
								
							</div>
						
						</div>

						<div class="col-md-4">
						
						
							<div class="form-group"> 
							
							
								<label class="control-label"> Largura </label> 
								
								<input type="text" name="ean13PRODUTO" id="ean13PRODUTO" 
								value="<?php echo $produtos['ean13PRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Coloque o código de barras"> 
								
							</div>
						
						</div>

						<div class="col-md-4">
						
						
							<div class="form-group"> 
							
							
								<label class="control-label"> Comprimento </label> 
								
								<input type="text" name="ean13PRODUTO" id="ean13PRODUTO" 
								value="<?php echo $produtos['ean13PRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Coloque o código de barras"> 
								
							</div>
						
						</div>

						<div class="col-md-4">
						
						
							<div class="form-group"> 
							
							
								<label class="control-label"> Peso Liquido </label> 
								
								<input type="text" name="ean13PRODUTO" id="ean13PRODUTO" 
								value="<?php echo $produtos['ean13PRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Coloque o código de barras"> 
								
							</div>
						
						</div>
						<div class="col-md-4">
						
						
							<div class="form-group"> 
							
							
								<label class="control-label"> Peso Bruto </label> 
								
								<input type="text" name="ean13PRODUTO" id="ean13PRODUTO" 
								value="<?php echo $produtos['ean13PRODUTO']; ?>"  
								class="form-control underlined"  
								placeholder="Coloque o código de barras"> 
								
							</div>
						
						</div>
						
						<div class="form-group"> 
						
							<label class="control-label"> Embalagem </label> 
							
							<select name="embalagemPRODUTO" class="form-control underlined" id="embalagemPRODUTO">
							<?php
							$query_embalagem = mysqli_query($conexao, "
								SELECT * FROM tb0016_embalagens 
								WHERE ativoEMBALAGEM='1' 
								") or die(mysqli_error());
								
							while($embalagens = mysqli_fetch_assoc($query_embalagem)){?>


							<option value="<?php echo $embalagens['codigoEMBALAGEM']; ?>"
							<?php if($produtos['embalagemPRODUTO']==$embalagens['codigoEMBALAGEM']){ echo' selected="selected"'; } ?>>
							<?php echo $embalagens['nomeEMBALAGEM']; ?>
							</option>

							<?php } ?>
							</select>


				
							
						</div>

						<div class="form-group"> 
						
							<label class="control-label"> Informações adicionais </label> 
							
							
		<div class="card-header bordered">
			<div class="header-block">
				<div id="result_linhas"> 
				
					<Input type="file" class="form-control underlined" id="linhaLISTA" >			 
				</div>
			</div>
		</div>
		
		<div class="card-block">
			<div class="tasks-block">
				<div class="clear" id="listaFotos">
			
			
			</div>
			</div>
		</div>


				
							
						</div>
						
						<!-- <div class="form-group"> 

							<label class="control-label">Especificação</label>   
							
							<textarea class="ckeditor" cols="80" id="editor1" name="especificacaoPRODUTO" rows="5"><?php echo $produtos['especificacaoPRODUTO']; ?></textarea>                

						</div> -->
						
						

						<div class="form-group"> 

							<label class="control-label">Descrição</label>   
							
							<textarea class="ckeditor" cols="80" id="editor1" name="descricaoPRODUTO" rows="5"><?php echo $produtos['descricaoPRODUTO']; ?></textarea>                

						</div>
						
						
						<!-- <div class="form-group"> 

							<label class="control-label">Aplicacao</label>   
							
							<textarea class="ckeditor" cols="80" id="editor1"   rows="5"><?php echo $produtos['aplicacaoPRODUTO']; ?></textarea>                

						</div> -->


					</div>
				
				</div>


				
			
			 


<div class="col-md-4">
	<div class="card tasks " data-exclude="xs,sm">
	
	
		<div class="card-header bordered">
			<div class="header-block">
				<div id="result_linhas"><select name="linhaLISTA" class="form-control underlined" id="linhaLISTA" >
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
		
		<div class="card-block">
			<div class="tasks-block">
				<div class="clear" id="listaLinhas">

				</div>
			</div>
		</div>

	</div>
</div>


			 
<div class="col-md-4">
	<div class="card tasks " data-exclude="xs,sm">
		<div class="card-header bordered">
			<div class="header-block">
				<div id="result_categorias"> <select name="categoriaLISTA" class="form-control underlined" id="categoriaLISTA" >
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
			<div class="header-block pull-right"> 
				<a href="javascript:IncluiCategorias();" class="btn btn-primary btn-sm rounded pull-right">
					Adicionar
				</a> 
			</div>
		</div>
		
		<div class="card-block">
			<div class="tasks-block">
				<div class="clear" id="listaCategorias">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="card tasks " data-exclude="xs,sm">
	
	
		<div class="card-header bordered">
			<div class="header-block">
				<div id="result_montadora"><select name="montadoraLISTA" class="form-control underlined" id="montadoraLISTA" >
							<option >Selecione a montadora</option>
							<?php
							$query_linha_montadora = mysqli_query($conexao, "
								SELECT * FROM tb0013_montadoras 
								WHERE ativoMONTADORA='1' 
								") or die(mysqli_error());
								
							while($linha_montadora = mysqli_fetch_assoc($query_linha_montadora)){?>


							<option value="<?php echo $linha_montadora['codigoMONTADORA']; ?>">
							<?php echo $linha_montadora['nomeMONTADORA']; ?>
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
		
		<div class="card-block">
			<div class="tasks-block">
				<div class="clear" id="montadora">

				</div>
			</div>
		</div>

	</div>
</div>

			
<!-- <div class="col-md-4">
	<div class="card tasks " data-exclude="xs,sm">
	
	
		<div class="card-header bordered">
			<div class="header-block">
				<div id="result_linhas"> 
				
					<Input type="file" class="form-control underlined" id="linhaLISTA" >			 
				</div>
			</div>
			
			<div class="header-block pull-right"> 
			<a href="javascript:IncluiLinhas();" class="btn btn-primary btn-sm rounded pull-right">
				Adicionar
			</a> 
			</div>
		</div>
		
		<div class="card-block">
			<div class="tasks-block">
				<div class="clear" id="listaFotos">
			
			
			</div>
			</div>
		</div>

	</div>
</div> -->



<div class="col-md-4">
	<div class="card tasks " data-exclude="xs,sm">
	
	
		<div class="card-header bordered">
			<div class="header-block">
				<div id="result_produtos"> <select name="produtorelacionado" class="form-control underlined" id="produtorelacionado" >
							<option >Relacione os Produtos</option>
							<?php
							$query_linha_lista = mysqli_query($conexao, "
								SELECT codigoPRODUTORELACIONADO, CONCAT(produtoPRODUTORELACIONADO,' ',subprodutoPRODUTORELACIONADO) AS PRODUTO FROM `tb0008_produtos_relacionados` WHERE ativoPRODUTORELACIONADO = 1 ORDER BY `produtoPRODUTORELACIONADO` ASC 
								") or die(mysqli_error());
								
							while($linha_lista = mysqli_fetch_assoc($query_linha_lista)){?>


							<option value="<?php echo $linha_lista['codigoPRODUTO']; ?>">
							<?php echo $linha_lista['PRODUTO']; ?>
							</option>

							<?php } ?>
							</select>  </div>
			</div>
			<div class="header-block pull-right"> 
			<a href="javascript:incluiprodutosrelacionados();" class="btn btn-primary btn-sm rounded pull-right">
				Adicionar
			</a> 
			</div>
		</div>
		
		<div class="card-block">
			<div class="tasks-block">
				<div class="clear" id="produtoRelacionado">
			
			
			</div>
			</div>
		</div>

	</div>
</div>

<div class="col-md-4">
	<div class="card tasks " data-exclude="xs,sm">
	
	
		<div class="card-header bordered">
			<div class="header-block">
				<div id="result_especificacao">
					<select name="especificacaoLISTA" class="form-control underlined" id="especificacaoLISTA" onchange="buscaVeiculos()">
							<option >Selecione as especeficação</option>
							<?php
							$query_especificacao_lista = mysqli_query($conexao, "
							SELECT * FROM tb0021_especificacoes
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

			
			<div class="header-block pull-right"> 
						<a href="javascript:IncluiProdutosRelacionados();" class="btn btn-primary btn-sm rounded pull-right">
						Adicionar
						</a> 
					</div>
			</div>

			<div class="card-block">
			<div class="tasks-block">
			
			
			<div class="clear" id="listaCarros">
			
			
			</div>
		

			    
		
		
		
			<div class="clear">&nbsp;</div>

			</div>

		</div>

	</div>
</div>

<div class="col-md-4">
	<div class="card tasks " data-exclude="xs,sm">
		<div class="card-header bordered">
			<div class="header-block">
				<div id="result_categorias"> <select name="nomeCONCORRENTE" class="form-control underlined" id="nomeCONCORRENTE" >
					<option >Selecione os concorrentes</option>
						<?php
						$query_categoria_lista = mysqli_query($conexao, "
						SELECT * FROM tb0401_concorrentes
						WHERE ativoCONCORRENTE='1' 
						") or die(mysqli_error());
								
						while($categoria_lista = mysqli_fetch_assoc($query_categoria_lista)){?>


						<option value="<?php echo $categoria_lista['codigoCONCORRENTE']; ?>">
						<?php echo $categoria_lista['nomeCONCORRENTE']; ?>
						</option>

						<?php } ?>
						</select>  
				</div>
			</div>
			<div class="header-block pull-right"> 
				<a href="javascript:IncluiCategorias();" class="btn btn-primary btn-sm rounded pull-right">
					Adicionar
				</a> 
			</div>
		</div>
		
		<div class="card-block">
			<div class="tasks-block">
				<div class="clear" id="listaCategorias">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="card tasks " data-exclude="xs,sm">
		<div class="card-header bordered">
			<div class="header-block">
				<div id="result_categorias"> <select name="nomeCONCORRENTE" class="form-control underlined" id="nomeCONCORRENTE" >
					<option >Selecione o tipo</option>
						<?php
						$query_categoria_lista = mysqli_query($conexao, "
						SELECT * FROM tb0401_concorrentes
						WHERE ativoCONCORRENTE='1' 
						") or die(mysqli_error());
								
						while($categoria_lista = mysqli_fetch_assoc($query_categoria_lista)){?>


						<option value="<?php echo $categoria_lista['codigoCONCORRENTE']; ?>">
						<?php echo $categoria_lista['nomeCONCORRENTE']; ?>
						</option>

						<?php } ?>
						</select>  
				</div>
			</div>
			<div class="header-block pull-right"> 
				<a href="javascript:IncluiCategorias();" class="btn btn-primary btn-sm rounded pull-right">
					Adicionar
				</a> 
			</div>
		</div>
		
		<div class="card-block">
			<div class="tasks-block">
				<div class="clear" id="listaCategorias">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-4">
	<div class="card tasks " data-exclude="xs,sm">
		<div class="card-header bordered">
			<div class="header-block">
				<div id="result_categorias"> <select name="nomeCONCORRENTE" class="form-control underlined" id="nomeCONCORRENTE" >
					<option >Selecione a intercambiabilidade</option>
						<?php
						$query_categoria_lista = mysqli_query($conexao, "
						SELECT * FROM tb0401_concorrentes
						WHERE ativoCONCORRENTE='1' 
						") or die(mysqli_error());
								
						while($categoria_lista = mysqli_fetch_assoc($query_categoria_lista)){?>


						<option value="<?php echo $categoria_lista['codigoCONCORRENTE']; ?>">
						<?php echo $categoria_lista['nomeCONCORRENTE']; ?>
						</option>

						<?php } ?>
						</select>  
				</div>
			</div>
			<div class="header-block pull-right"> 
				<a href="javascript:IncluiCategorias();" class="btn btn-primary btn-sm rounded pull-right">
					Adicionar
				</a> 
			</div>
		</div>
		
		<div class="card-block">
			<div class="tasks-block">
				<div class="clear" id="listaCategorias">
				</div>
			</div>
		</div>
	</div>
</div>





<div class="col-md-12">
	<div class="card card-block ">	
		<div class="form-group"> 
			<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" >
					
		</div>
				
	</div>
			
</div>

			



			</div>
			
		</section>

	</form>

<?php } ?>