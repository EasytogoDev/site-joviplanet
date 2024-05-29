<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 

$nome = $_POST['nome'];
$slug = tiracento($nome);
$imagem = $_POST['imagem'];
$site = $_POST['site'];
$usuario = $usuario['codigoUSUARIO'];
$data = date("Y-m-d");


$query = mysqli_query($conexao, "
INSERT INTO  tb0011_licencas (
nomeLICENCA,
	slugLICENCA,
		imagemLICENCA,
			siteLICENCA,
				usuarioLICENCA,
					dataLICENCA,	
						ativoLICENCA
)
VALUES (
'".$nome."',
	'".$slug."',
		'".$imagem."',
			'".$site."',
				'".$usuario."',
					'".$data."',
						'1'
);
");


if($query)
		{
		echo '<script>alert("Licenças inserido com sucesso!");top.location.href="?make=licencas";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}
			
			
			

}else{

?>
<div class="title-block">
                        <h3 class="title"> Adicionar </h3>
                        <p class="title-description"> Adicione uma licença </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						 
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                        <p class="title-description"> Conteudo da página de Licença</p>
                    </div>
                                  <div class="form-group"> <label class="control-label">Nome</label> 
								  <input name="nome"   type="text" class="form-control underlined" id="nome" placeholder="Coloque o nome da Licença"> </div>
                                       
                                  <div class="form-group"> <label class="control-label">Imagem</label>
                                             
                                    <input name="imagem" type="text"
    class="form-control underlined" id="imagem"  placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>
                                             
                                             
                                  <div class="form-group"> <label class="control-label">Site</label> <input name="site" type="text" class="form-control underlined" id="site" placeholder="http://www.site.com.br"> </div>
									
                                    
                                </div>
								 </div>
								
                                  </div>
                                
                                
                              
                                 
                             
                           
								<div class="form-group"> 
										
										<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Adicionar" ></div>
							</div>  </div>
							
							</form>


             
                        </div>
                    </section>
					<?php } ?>