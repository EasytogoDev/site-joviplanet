<?php 

if(@$_POST['btn_salvar']=='Alterar'){ 

$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$slug = tiracento($titulo);
$imagem = $_POST['imagem'];
$video = $_POST['video'];
$keyworks = $_POST['keyworks'];
$description = $_POST['description'];
$categoria = $_POST['categoria'];
$conteudo = $_POST['conteudo'];
$usuario = $usuario['codigoUSUARIO'];
$data = date("Y-m-d");


$query = mysqli_query($conexao, "
UPDATE tb081_posts SET 
tituloPOST = '".$titulo."',
	slugPOST = '".$slug."',
		imagemPOST = '".$imagem."',
			videoPOST = '".$video."',
				keyworksPOST = '".$keyworks."',
					descriptionPOST = '".$description."',
						categoriaPOST = '".$categoria."',
							conteudoPOST = '".$conteudo."',
								usuarioPOST = '".$usuario."',
									dataPOST = '".$data."' WHERE codigoPOST = '".$codigo."'
");


if($query){
		echo '<script>alert("Post alterado com sucesso!");top.location.href="?make='.$make.'&acao=editar&codigo='.$codigo.'";</script>';
		}else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{
	
	$codigoPOST = addslashes(trim(@$_GET['codigo']));
	$query_posts = mysqli_query($conexao, 'SELECT * FROM tb081_posts WHERE codigoPOST = "'.$codigoPOST.'" ');
	$posts = mysqli_fetch_assoc($query_posts);
	
?>
<div class="title-block">
                        <h3 class="title"> Alterar </h3>
                        <p class="title-description"> Altere o post </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
						<input name="codigo" type="hidden" value="<?php echo $posts['codigoPOST']; ?>" />
						
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Conteudo da página de atuação</p>
                    </div>
                                  <div class="form-group"> <label class="control-label">Titulo</label> <input name="titulo" value="<?php echo $posts['tituloPOST']; ?>" type="text" class="form-control underlined" id="titulo" placeholder="Coloque o nome do serviço"> </div>
                                  <div class="form-group"> <label class="control-label">Video</label> <input name="video" value="<?php echo $posts['videoPOST']; ?>" type="text" class="form-control underlined" id="video" placeholder="Coloque link do youtube"> </div>
                                       
                                  <div class="form-group"> <label class="control-label">Imagem</label>
                                             
                                    <input name="imagem" type="text"
    class="form-control underlined" id="imagem" value="<?php echo $posts['imagemPOST']; ?>"  placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>
                                             
                                             
                                       <div class="form-group"> 
                                       
      <label class="control-label">Conteúdo</label>   
                       <textarea class="ckeditor" cols="80" id="editor1" name="conteudo" rows="10"><?php echo $posts['conteudoPOST']; ?></textarea>                
                                       
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
										$query_categoria = mysqli_query($conexao, "SELECT * FROM tb080_categorias WHERE ativoCATEGORIA='1' ") or die(mysqli_error());
										while($categoria = mysqli_fetch_assoc($query_categoria)){?>
										
										
							<option value="<?php echo $categoria['codigoCATEGORIA']; ?>" <?php if($posts['categoriaPOST']==$categoria['codigoCATEGORIA']){ echo' selected="selected"'; } ?>><?php echo $categoria['nomeCATEGORIA']; ?></option>
							
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
                                  <div class="form-group"> <label class="control-label">Meta-tags Keyworks</label> <input name="keyworks" value="<?php echo $posts['keyworksPOST']; ?>" type="text" class="form-control underlined" id="keyworks" placeholder="Tags separadas por virgulaas (tag1, tag2...)"> </div>
                                  <div class="form-group"> <label class="control-label">Meta-tags Description</label> <input name="description" type="text" value="<?php echo $posts['descriptionPOST']; ?>"  class="form-control underlined" id="description" placeholder="Descrição para buscadores"> </div>
										 
                                    
                                </div>
                           
								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Alterar" ></div>
							</div>
							
							</form>


             
                        </div>
                    </section>
					<?php } ?>