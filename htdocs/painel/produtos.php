<?php require_once("inc/restrito.php");?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Produtos - karmake 3.0</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="/img/icon.png">
		<link rel="shortcut icon" href="/img/icon.png" type="image/x-icon" />
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/vendor.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
            }
        </script>
						<script type="text/javascript">
function openKCFinder(field) {
    window.KCFinder = {
        callBack: function(url) {
            field.value = url;
            window.KCFinder = null;
        }
    };
    window.open('kcfinder/browse.php?type=images&dir=files/public', 'kcfinder_textbox',
        'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
        'resizable=1, scrollbars=0, width=800, height=600'
        
    );
}


 function apagar(CATEGORIA,BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=apagar&catproduto='+CATEGORIA+'&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
	
	}
	
}



 function apagarveiculo(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir este veiculo?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}


function apagarmontadora(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir esta montadora?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}


function apagarlinhas(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir esta linha?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}


function apagarcategorias(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir esta categoria?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}

function apagartipo(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir este tipo?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}

function apagaredes(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir esta rede social?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}

function apagarmodelos(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir este modelo?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}

function apagarconcorrentes(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir este concorrente?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}

function apagarespecificacoes(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir esta especeficação?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}

function apagarfabricante(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir este fabricante?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}

function apagarcombustivel(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir este combustivel?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}

function apagarintercambiabilidade(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir ?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}

function apagargrupos(BUSCA,PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir este grupo?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=<?php echo $acao;?>&act=apagar&q='+BUSCA+'&p='+PAG+'&codigo='+CODIGO;
		 
	}
	
}

function carregafuncoes(){
    fotosProdutos();
    listaLinhas();
    listaProdutosRelacionados();
    listaCarros();
    listaCategorias();
    listaConcorrentes();
    listaConcorrentes();
    listaIntercambiabilidades();
    listaReferenciasoriginais();
    listaEspecificacoes();
}
 </script>
		
    </head>

    <body <?php if(@$_GET['acao']=='editar'){?>onload="carregafuncoes()"<?php } ?>>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                                   <?php require_once("inc/topo.php");?> 
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                              
                                
                           <img src="img/logo.png" width="175" height="44" alt="Mídia Jaragua">  
                               
                                
                          </div>
                        </div>
                        <nav class="menu">
                          <?php require_once("inc/menu.php");?>  
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                          <?php require_once("inc/footer.php");?>  
                    </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <article class="content items-list-page">
                   <?php
				  
				  
if($acao=='' ){

	if(file_exists("inc/paginas/".$make."/home.php")){include("inc/paginas/".$make."/home.php");}

} else{

	if(file_exists("inc/paginas/".$make."/".$acao.".php")){include("inc/paginas/".$make."/".$acao.".php");}

} 

 
?>
                </article>
                <footer class="footer">
                   <?php require_once("inc/rodape.php");?>  
                </footer>
                <div class="modal fade" id="modal-media">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    					<span class="sr-only">Close</span>
    				</button>
                                <h4 class="modal-title">Media Library</h4>
                            </div>
                            <div class="modal-body modal-tab-container">
                                <ul class="nav nav-tabs modal-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a> </li>
                                </ul>
                                <div class="tab-content modal-tab-content">
                                    <div class="tab-pane fade" id="gallery" role="tabpanel">
                                        <div class="images-container">
                                            <div class="row"> </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                        <div class="upload-container">
                                            <div id="dropzone">
                                                <form action="" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                    <div class="dz-message-block">
                                                        <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Insert Selected</button> </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <div class="modal fade" id="confirm-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
                                <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to do this?</p>
                            </div>
                            <div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button> </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
<script src="ckeditor/ckeditor.js" charset = "utf-8"></script>        
<script>
CKEDITOR.editorConfig = function(config) {
 config.filebrowserBrowseUrl = 'kcfinder/browse.php?type=files';
 config.filebrowserImageBrowseUrl = 'kcfinder/browse.php?type=images';
 config.filebrowserFlashBrowseUrl = 'kcfinder/browse.php?type=flash';
 config.filebrowserUploadUrl = 'kcfinder/upload.php?type=files';
 config.filebrowserImageUploadUrl = 'kcfinder/upload.php?type=images';
 config.filebrowserFlashUploadUrl = 'kcfinder/upload.php?type=flash';
 config.entities_latin = false;
 config.htmlEncodeOutput = false; 
config.entities = false; 
config.entities_greek = false; 
config.entities_latin = false; 
};
</script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
		
		
		<!-- 
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>  -->
	<script src="//malsup.github.io/jquery.form.js"></script>

	<script>
 


         /////////////////////////// COMECA FOTOS


        function fotosProdutos(){
 

            $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/fotos.php',
            type : 'POST', 
            data: {
                codigoPRODUTO: $('#codigoPRODUTO').val()
            },
            success:  function(data) { 

            $('#FotosProdutos').html(data);

            } 
            });


        }


        function IncluiFoto(){


            if($('#imagemPRODUTO').val()==""){
                alert('Selecione primeiro uma imagem');
                return;
            }
 

            $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/incluiFoto.php',
            type : 'POST', 
            data: {

                codigoPRODUTO: $('#codigoPRODUTO').val(),
                imagemPRODUTO: $('#imagemPRODUTO').val()
                
            },
            success:  function(data) { 
            
            $('#imagemPRODUTO').val('')
            fotosProdutos();

            } 
            });


        }


        function ExcluiFoto(CODIGO){


            if(confirm("Deseja realmente deletar esta imagem?") == true){ 
        

        $('#Produtos').ajaxSubmit({
        url  : 'inc/paginas/produtos/ajax/ExcluiFoto.php',
        type : 'POST', 
        data: {

            codigo: CODIGO
        },
        success:  function(data) { 
        
        fotosProdutos();

        } 
        });

        }


        }



        function padraoFoto(CODIGO,PRODUTO){


        if(confirm("Deseja realmente tornar esta imagem padrao?") == true){ 


        $('#Produtos').ajaxSubmit({
        url  : 'inc/paginas/produtos/ajax/padraoFoto.php',
        type : 'POST', 
        data: {

        codigo: CODIGO,
        produto: PRODUTO
        },
        success:  function(data) { 

        fotosProdutos();

        } 
        });

        }


        }

        function buscaBlocoCategoria(CODIGO){
            $('#bloco-filtro').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/bloco-categoria.php',
            type : 'POST', 
            data: {

            grupo: CODIGO
            },
            success:  function(data) { 
        
            $('#bloco-categoria').html(data);

        } 
        });

        }

        function buscaBlocoVeiculo(CODIGO){
            $('#bloco-filtro').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/bloco-veiculo.php',
            type : 'POST', 
            data: {

            veiculos: CODIGO
            },
            success:  function(data) { 
        
            $('#bloco-montadora').html(data);

        } 
        });

        }

        

///////////////TERMINA FOTO COMECA INCUSAO DE RELACIONADOS




        function listaProdutosRelacionados()
        {
            $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/produtosrelacionados.php',
            type : 'POST', 
            success:  function(data) { 
                
                $('#ProdutosRelacionados').html(data);
                
            } 
            });
        }



        function IncluiProdutosRelacionados()
        {
            $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/incluiprodutosrelacionados.php',
            type : 'POST', 
            data:{
                produtoPRODUTORELACIONADO: $('#codigoPRODUTO').val(),
                subprodutoPRODUTORELACIONADO:  $('#subprodutoPRODUTORELACIONADO').val(),
                tipoPRODUTORELACIONADO:  $('#tipoPRODUTORELACIONADO').val(),
            },
            success:   function(data) {  

                listaProdutosRelacionados();
            } 
            });
        } 


 
	    
        function ExcluiProdutoRelacionado(CODIGO)
      {
		  if(confirm("Tem Certeza que deseja excluir?")){
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/excluiprodutosrelacionados.php',
            type : 'POST', 
            data:{
                
                codigo: CODIGO

            },
			success:    function(data) { 
				listaProdutosRelacionados(); 
			 
			} 
         });
		  }
      }	  

/////////////TERMINA RELACIONADOS COMECA LINHA

        function listaLinhas()
            {
                $('#Produtos').ajaxSubmit({
                    url  : 'inc/paginas/produtos/ajax/linhas.php',
                    type : 'POST', 
                    data: {
                        codigoPRODUTO: $('#codigoPRODUTO').val()
                    },
                    success:  function(data) { 
                    
                        $('#listaLinhas').html(data);
                    
                    } 
                });
            }




        function IncluiLinhas()
        {
            $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/incluilinhas.php',
            type : 'POST', 
            data:{
                produtoLINHAVINCULO: $('#codigoPRODUTO').val(),
                linhaLINHAVINCULO:  $('#linhaLINHAVINCULO').val() 
            },
            success:   function(data) {  
                
                listaLinhas();
            } 
            });
        } 

            

        function ExcluiLinha(CODIGO)
            {
                    if(confirm("Tem Certeza que deseja excluir?")){
                    $('#Produtos').ajaxSubmit({
                    url  : 'inc/paginas/produtos/ajax/Excluilinha.php',
                    type : 'POST', 
                    data: {
                        codigoLINHAVINCULO: CODIGO
                    },
                    success:    function(data) { 
                        listaLinhas();
                        
                    } 
                    });
                    }
                }


      /////////////////////////// MONTADORAS
 

      function buscaVeiulos(MONTADORA)
      {
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/buscaveiculos.php',
            type : 'POST', 
            data: {
                montadoraVEICULO: MONTADORA
            }, 
			success:  function(data) { 
			 
				$('#result_veiculos').html(data);
			 
			} 
         });
      }
	   
 
      
	  function listaCarros()
      {
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/aplicacao.php',
            type : 'POST',
            data:{
                codigoPRODUTO:  $('#codigoPRODUTO').val()
            },
			success:  function(data) { 
			 
				$('#VeiculosRelacionados').html(data);
			 
			} 
         });
      }
	  
	  function incluiVeiculo()
      {
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/incluiveiculo.php',
            type : 'POST', 
            data: {
                codigoPRODUTO:  $('#codigoPRODUTO').val(),
                montadoraLISTA:   $('#montadoraMONTADORAVINCULO').val(),
                veiculosLISTA:   $('#veiculoVEICULOVINCULO').val(),
                valorLISTA:   $('#valorVEICULOVINCULO').val(),
            },
			success:   function(data) { 
			 	
				listaCarros();
			} 
         });
      }
	  
	   function apagaMontadora(MONTADORA)
		{
			if(confirm("Tem Certeza que deseja excluir?"))
			{
				$('#Produtos').ajaxSubmit({
					url  : 'inc/paginas/produtos/ajax/apagamontadora.php',
					type : 'POST', 
                    data: {
                        codigoPRODUTO:  $('#codigoPRODUTO').val(),
                        montadora: MONTADORA
                    },
					success:    function(data) { 
					
						var dados = parseInt(data);
						
							 if(dados=='1'){ alert('Montadora apagada com sucesso');listaCarros(); }
						else if(dados=='2'){ alert('Não é possivel apagar a montadora, pois tem veiculos atrelados');listaCarros(); }
						else if(dados=='0'){ alert('Erro!!!!!'); }

					} 
				});
			}
		}
	  
	  function apagaVeiculo(VEICULO)
      {
		  if(confirm("Tem Certeza que deseja excluir?")){
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/apagaveiculo.php',
            type : 'POST', 
            data: {
                codigoPRODUTO:  $('#codigoPRODUTO').val(),
                veiculo: VEICULO
            }, 
			success:    function(data) { 
				listaCarros();
			 
			} 
         });
		  }
      }
	  
	  
	  
	  
	  
	 	  function IncluiCategorias()
      {
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/incluicategorias.php',
            type : 'POST', 
			success:   function(data) { 
			 
				 var Categoriasxx = parseInt(data); 
				
				listaCategorias();
			} 
         });
      } 

	  	  function listaCategorias()
      {
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/categorias.php',
            type : 'POST', 
			success:  function(data) { 
			 
				$('#listaCategorias').html(data);
			 
			} 
         });
      }
	    
	   
	   
	   	  function apagaCategoria(CATEGORIA)
      {
		  if(confirm("Tem Certeza que deseja excluir?")){
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/apagacategoria.php?categoria='+CATEGORIA,
            type : 'POST', 
			success:    function(data) { 
				var dados = parseInt(data);
					 if(dados=='1'){ alert('Categoria apagada com sucesso');listaCategorias(); }
				else if(dados=='2'){ alert('Erro!!!!!');}
			 
			} 
         });
		  }
      }






      


      function listaConcorrentes()
      {
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/concorrentes.php',
            type : 'POST', 
            data: {
                produtoVINCULOCONCORRENTE:  $('#codigoPRODUTO').val()                
            }, 
			success:  function(data) { 
			 
				$('#listaConcorrentes').html(data);
			 
			} 
         });
      }
	    


      
	 	  function IncluiConcorrentes()
      {
   
        
         $('#Produtos').ajaxSubmit({
          url  : 'inc/paginas/produtos/ajax/incluiconcorrente.php',
            type : 'POST', 
            data: {
                produtoVINCULOCONCORRENTE:  $('#codigoPRODUTO').val(),
                concorrenteVINCULOCONCORRENTE: $('#concorrenteVINCULOCONCORRENTE').val(),
                valorVINCULOCONCORRENTE: $('#valorVINCULOCONCORRENTE').val()
            }, 
			success:   function(data) {  
				 
				listaConcorrentes();
                $('#concorrenteVINCULOCONCORRENTE').val('');
                $('#valorVINCULOCONCORRENTE').val('')
			} 
         });
      } 


	   
	   
	   	  function apagaConcorrentes(CODIGO)
      {
		  if(confirm("Tem Certeza que deseja excluir?")){
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/apagaconcorrente.php',
            type : 'POST', 
            data: {
                codigoVINCULOCONCORRENTE:  CODIGO              
            }, 
			success:    function(data) { 
				var dados = parseInt(data);
					 if(dados=='1'){ alert('Produto do Concorrente apagado com sucesso');listaConcorrentes(); }
				else if(dados=='2'){ alert('Erro!!!!!');}
			 
			} 
         });
		  }
      }





      function listaIntercambiabilidades()
      {
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/intercambiabilidades.php',
            type : 'POST', 
            data: {
                produtoVINCULOINTERCAMBIABILIDADE:  $('#codigoPRODUTO').val()                
            }, 
			success:  function(data) { 
			 
				$('#listaIntercambiabilidades').html(data);
			 
			} 
         });
      }
	    


      
	 	  function IncluiIntercambiabilidades()
      {
   
        
         $('#Produtos').ajaxSubmit({
          url  : 'inc/paginas/produtos/ajax/incluiintercambiabilidade.php',
            type : 'POST', 
            data: {
                produtoVINCULOINTERCAMBIABILIDADE:  $('#codigoPRODUTO').val(),
                intercambiabilidadeVINCULOINTERCAMBIABILIDADE: $('#intercambiabilidadeVINCULOINTERCAMBIABILIDADE').val(),
                valorVINCULOINTERCAMBIABILIDADE: $('#valorVINCULOINTERCAMBIABILIDADE').val()
            }, 
			success:   function(data) {  
				 
				listaIntercambiabilidades();
                $('#intercambiabilidadeVINCULOINTERCAMBIABILIDADE').val('');
                $('#valorVINCULOINTERCAMBIABILIDADE').val('')
			} 
         });
      } 


	   
	   
	   	  function apagaIntercambiabilidades(CODIGO)
      {
		  if(confirm("Tem Certeza que deseja excluir?")){
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/apagaintercambiabilidade.php',
            type : 'POST', 
            data: {
                codigoVINCULOINTERCAMBIABILIDADE:  CODIGO              
            }, 
			success:    function(data) { 
				var dados = parseInt(data);
					 if(dados=='1'){ alert('Intercambiabilidade apagado com sucesso');listaIntercambiabilidades(); }
				else if(dados=='2'){ alert('Erro!!!!!');}
			 
			} 
         });
		  }
      }



      function listaReferenciasoriginais()
      {
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/referenciasoriginais.php',
            type : 'POST', 
            data: {
                produtoORIGINALREFERENCIA:  $('#codigoPRODUTO').val()                
            }, 
			success:  function(data) { 
			 
				$('#listaReferenciasoriginais').html(data);
			 
			} 
         });
      }
	    


      
	 	  function IncluiReferenciasoriginais()
      {
   
        
         $('#Produtos').ajaxSubmit({
          url  : 'inc/paginas/produtos/ajax/incluireferenciasoriginais.php',
            type : 'POST', 
            data: {
                produtoORIGINALREFERENCIA:  $('#codigoPRODUTO').val(),
                fabricanteORIGINALREFERENCIA: $('#fabricanteORIGINALREFERENCIA').val(),
                valorORIGINALREFERENCIA: $('#valorORIGINALREFERENCIA').val()
            }, 
			success:   function(data) {  
			 
				listaReferenciasoriginais();
                $('#fabricanteORIGINALREFERENCIA').val('');
                $('#valorORIGINALREFERENCIA').val('')
			} 
         });
      } 


	   
	   
	   	  function apagaReferenciasoriginais(CODIGO)
      {
		  if(confirm("Tem Certeza que deseja excluir?")){
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/apagareferenciasoriginais.php',
            type : 'POST', 
            data: {
                codigoORIGINALREFERENCIA:  CODIGO              
            }, 
			success:    function(data) { 
				var dados = parseInt(data);
					 if(dados=='1'){ alert('Referência apagada com sucesso');listaReferenciasoriginais(); }
				else if(dados=='2'){ alert('Erro!!!!!');}
			 
			} 
         });
		  }
      }








      function listaEspecificacoes()
      {
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/especificacoes.php',
            type : 'POST', 
            data: {
                produtoVINCULOESPECIFICAO:  $('#codigoPRODUTO').val()                
            }, 
			success:  function(data) { 
			 
				$('#listaEspecificacoes').html(data);
			 
			} 
         });
      }
	    


      
	 	  function IncluiEspecificacoes()
      {
   
        
         $('#Produtos').ajaxSubmit({
          url  : 'inc/paginas/produtos/ajax/incluiespecificacoes.php',
            type : 'POST', 
            data: {
                produtoVINCULOESPECIFICAO:  $('#codigoPRODUTO').val(),
                especificaoVINCULOESPECIFICAO: $('#especificaoVINCULOESPECIFICAO').val(),
                valorVINCULOESPECIFICAO: $('#valorVINCULOESPECIFICAO').val()
            }, 
			success:   function(data) {  
			 
				listaEspecificacoes();
                $('#especificaoVINCULOESPECIFICAO').val('');
                $('#valorVINCULOESPECIFICAO').val('')
			} 
         });
      } 


	   
	   
	   	  function apagaEspecificacoes(CODIGO)
      {
		  if(confirm("Tem Certeza que deseja excluir?")){
         $('#Produtos').ajaxSubmit({
            url  : 'inc/paginas/produtos/ajax/apagaespecificacoes.php',
            type : 'POST', 
            data: {
                codigoVINCULOESPECIFICAO:  CODIGO              
            }, 
			success:    function(data) { 
				var dados = parseInt(data);
					 if(dados=='1'){ alert('Especificação apagado com sucesso');listaEspecificacoes(); }
				else if(dados=='2'){ alert('Erro!!!!!');}
			 
			} 
         });
		  }
      }


      
	</script>
   
   
    </body>

</html>