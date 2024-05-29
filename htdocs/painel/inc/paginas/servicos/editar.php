<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$slug = tiracento($titulo);
$subtitulo = $_POST['subtitulo'];
$imagem = $_POST['imagem'];
$conteudo = $_POST['conteudo'];
$keyworks = $_POST['keyworks'];
$description = $_POST['description'];
$categoria = $_POST['categoria'];
$usuario = $usuario['codigoUSUARIO'];
$data = date("Y-m-d");


$query = mysqli_query($conexao, "
UPDATE tb0152_servicos SET 
tituloSERVICO = '".$titulo."',
	slugSERVICO = '".$slug."',
		subtituloSERVICO = '".$subtitulo."',
			imagemSERVICO = '".$imagem."',
				conteudoSERVICO = '".$conteudo."',
					keyworksSERVICO = '".$keyworks."',
						descriptionSERVICO = '".$description."',
							categoriaSERVICO = '".$categoria."',
								usuarioSERVICO = '".$usuario."',
									dataSERVICO = '".$data."' WHERE codigoSERVICO = '".$codigo."'
");


if($query){
		echo '<script>alert("Serviço alterado com sucesso!");top.location.href="?make=servicos&acao=editar&codigo='.$codigo.'";</script>';
		}else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{
	
	$codigoSERVICO = addslashes(trim(@$_GET['codigo']));
	$query_servicos = mysqli_query($conexao, 'SELECT * FROM tb0152_servicos WHERE codigoSERVICO = "'.$codigoSERVICO.'" ');
	$servicos = mysqli_fetch_assoc($query_servicos);
	
?>
<div class="title-block">
                        <h3 class="title"> Alterar </h3>
                        <p class="title-description"> Altere o serviço </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
						<input name="codigo" type="hidden" value="<?php echo $servicos['codigoSERVICO']; ?>" />
						
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Conteudo da página de serviços</p>
                    </div>
                                  <div class="form-group"> <label class="control-label">Titulo</label> <input name="titulo" value="<?php echo $servicos['tituloSERVICO']; ?>" type="text" class="form-control underlined" id="titulo" placeholder="Coloque o nome do serviço"> </div>
                                  <div class="form-group"> <label class="control-label">Sub Titulo</label> <input name="subtitulo" value="<?php echo $servicos['subtituloSERVICO']; ?>" type="text" class="form-control underlined" id="subtitulo" placeholder="Coloque a breve descrição do serviço"> </div>
                                       
                                  <div class="form-group"> <label class="control-label">Imagem</label>
                                             
                                    <input name="imagem" type="text"
    class="form-control underlined" id="imagem" value="<?php echo $servicos['imagemSERVICO']; ?>"  placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>
                                             
                                             
                                       <div class="form-group"> 
                                       
      <label class="control-label">Conteúdo</label>   
                       <textarea class="ckeditor" cols="80" id="editor1" name="conteudo" rows="10"><?php echo $servicos['conteudoSERVICO']; ?></textarea>                
                                       
                                       </div>
									
                                    
                                </div>
								 </div>
								
                                
                                
                                
                                
                                
                                 <div class="col-md-12">
                                <div class="card card-block">
                                    
                                   <div class="title-block">
                        <p class="title-description"> cadastro de auxiliares</p>
                    </div>
                                        <div class="form-group"> <label class="control-label">Categoria</label> 
										
										<select name="categoria" class="form-control underlined" id="categoria">
										<?php
										$query_categoria = mysqli_query($conexao, "SELECT * FROM tb0151_categorias WHERE ativoCATEGORIA='1' ") or die(mysqli_error());
										while($categoria = mysqli_fetch_assoc($query_categoria)){?>
										
										
							<option value="<?php echo $categoria['codigoCATEGORIA']; ?>" <?php if($servicos['categoriaSERVICO']==$categoria['codigoCATEGORIA']){ echo' selected="selected"'; } ?>><?php echo $categoria['nomeCATEGORIA']; ?></option>
							
										<?php } ?>
						</select>
						</div>
                                </div>
								 </div>
                                 
                                 
                                 
                                 
								<div class="col-md-12">
                                <div class="card card-block ">
                                    
                                  <div class="title-block">
                        <p class="title-description"> SEO - Dados para otimização</p>
                    </div>
                                  <div class="form-group"> <label class="control-label">Meta-tags Keyworks</label> <input name="keyworks" value="<?php echo $servicos['keyworksSERVICO']; ?>" type="text" class="form-control underlined" id="keyworks" placeholder="Tags separadas por virgulaas (tag1, tag2...)"> </div>
                                  <div class="form-group"> <label class="control-label">Meta-tags Description</label> <input name="description" type="text" value="<?php echo $servicos['descriptionSERVICO']; ?>"  class="form-control underlined" id="description" placeholder="Descrição para buscadores"> </div>
										 
                                    
                                </div>
                           
								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" ></div>
							</div>
							
							</form>


             
                        </div>
                    </section>
					<?php } ?>