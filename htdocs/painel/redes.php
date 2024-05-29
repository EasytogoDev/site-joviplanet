<?php require_once("inc/restrito.php");?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Midias - Karmake Comunicação</title>
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


 function apagar(PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=apagar&p='+PAG+'&codigo='+CODIGO;
	
	}
	
}

 function apagarcategoria(PAG,CODIGO){
	
	if (confirm("Tem Certeza que deseja excluir?"))
	{
		
		location.href='?make=<?php echo $make;?>&acao=apagar-categoria&p='+PAG+'&codigo='+CODIGO;
	
	}
	
}
 </script>
    </head>

    <body>
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
                <article class="content items-list-page"> <?php
			  
				  
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
        </div><script src="ckeditor/ckeditor.js"></script>        
<script>
CKEDITOR.editorConfig = function(config) {
 config.filebrowserBrowseUrl = 'kcfinder/browse.php?type=files';
 config.filebrowserImageBrowseUrl = 'kcfinder/browse.php?type=images';
 config.filebrowserFlashBrowseUrl = 'kcfinder/browse.php?type=flash';
 config.filebrowserUploadUrl = 'kcfinder/upload.php?type=files';
 config.filebrowserImageUploadUrl = 'kcfinder/upload.php?type=images';
 config.filebrowserFlashUploadUrl = 'kcfinder/upload.php?type=flash';
};
</script>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
    </body>

</html>