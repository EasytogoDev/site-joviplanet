<?php 

if(@$_POST['btn_salvar']=='Adicionar'){ 


$codigo = $_LANCAMENTO['codigo'];
$titulo = $_LANCAMENTO['titulo'];
$imagem = $_LANCAMENTO['imagem'];
$arquivo = $_LANCAMENTO['arquivo'];
$data = date("Y-m-d");


$query = mysqli_query($conexao, "
INSERT INTO  tb0005_lancamentos (
nomeLANCAMENTO,
	imagemLANCAMENTO,
		dataLANCAMENTO,
            arquivoLANCAMENTO,
			    ativoLANCAMENTO
)
VALUES (
'".$titulo."',
	'".$imagem."',
        '".$arquivo."',
		    '".$data."',
		            '1'
);
");


if($query)
		{
		echo '<script>alert("Post inserido com sucesso!");top.location.href="?make='.$make.'";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
		}
}else{

?>
<div class="title-block">
                        <h3 class="title"> Adicionar </h3>
                        <p class="title-description"> Adicione um novo post </p>
                    </div>
					  <form action="" method="post">
					
					<section class="section">
                        <div class="row sameheight-container">
						
						
						
						
                            <div class="col-md-12">
                                <div class="card card-block ">
                                    
                                    <div class="title-block">
                                        <p class="title-description"> Conteúdo da página de atuação</p>
                                    </div>
                                  <div class="form-group"> <label class="control-label">Titulo</label> <input name="titulo" type="text" class="form-control underlined" id="titulo" placeholder="Coloque o nome do serviço"> </div>
                                  <div class="form-group"> <label class="control-label">Imagem</label>
                                             
                                    <input name="imagem" type="text" class="form-control underlined" id="imagem"   placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>


                                    <div class="form-group"> <label class="control-label">Arquivo</label>
                                             
                                             <input name="imagem" type="text" class="form-control underlined" id="imagem"   placeholder="Clique aqui e selecione um arquivo clicando duas vezes nele" onclick="openKCFinder(this)" readonly="readonly"/> </div>  
                                </div>
								 </div>
                                </div>
                           
								<div class="form-group"> 
									<input type="submit"  class="btn btn-primary" name="btn_salvar" value="Adicionar" ></div>
							    </div>
							
							</form>


            

                          <!--  <div class="col-md-6">
                                <div class="card card-block sameheight-item">
                                    <div class="title-block">
                                        <h3 class="title"> Underlined Inputs Validation </h3>
                                    </div>
                                    <form role="form">
                                        <div class="form-group has-success"> <label class="control-label" for="inputSuccess1">Input with success</label> <input type="text" class="form-control underlined" id="inputSuccess1"> <span class="has-success">Success message.</span> </div>
                                        <div class="form-group has-warning">
                                        <label class="control-label" for="inputWarning1">Input with warning</label> <input type="text" class="form-control underlined" id="inputWarning1"> <span class="has-warning">Warning message.</span> </div>
                                        <div class="form-group has-error">
                                        <label class="control-label" for="inputError1">Input with error</label> <input type="text" class="form-control underlined" id="inputError1"> <span class="has-error">Error message.</span> </div>
                                        <div class="form-group has-success  has-feedback">
                                        <label class="control-label" for="inputSuccess2">Input with success icon</label> <input type="text" class="form-control underlined" id="inputSuccess2"> <span class="fa fa-check form-control-feedback"></span> </div>
                                        <div class="form-group has-warning  has-feedback"> <label class="control-label" for="inputWarning2">Input with warning icon</label> <input type="text" class="form-control underlined" id="inputWarning2"> <span class="fa fa-exclamation form-control-feedback"></span>                                            </div>
                                        <div class="form-group has-error  has-feedback"> <label class="control-label" for="inputError2">Input with error icon</label> <input type="text" class="form-control underlined" id="inputError2"> <span class="fa fa-times form-control-feedback"></span> </div>
                                    </form>
                                </div>
                            </div>-->
                        </div>
                    </section>
					<?php } ?>