<?php
	
	$conexao = new mysqli ("karmake.com.br","karmake_rainha","Zqz9gdil06","karmake_rainha");
	mysqli_set_charset($conexao, "utf-8");


	$sql = "SELECT * FROM tb0030_banners ORDER BY ordemBANNER ASC";

	$execute = $conexao->query($sql) or die(mysqli_error($conexao));

?>

<!DOCTYPE html>
<html>
<head>
	<title>PROD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script type="text/javascript" src="JS/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="JS/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		
		.dragHelper{
				display: block;
			   	padding: 30px;
			   	margin-top: 10px;
			    background: #fff;
			    border: 2px dashed #c2cdda;
			    border-radius: 3px;
			    text-align: center;
			    -webkit-transition: background-color 0.2s ease;
			    transition: background-color 0.2s ease;
			}	

		.item{
			margin-top: 10px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-12 sortable">
			
			<?php

				while ($retorno = mysqli_fetch_object($execute)) { ?>
					
					<div class="alert alert-info item" id="<?php echo $retorno->codigoBANNER; ?>">
						<?php echo $retorno->codigoBANNER ." - ". $retorno->imagemBANNER; ?>
					</div>

				<?php } ?>
		</div>
	</div>
</body>
<script type="text/javascript">
	
	$(function(){
       
            $(".sortable").sortable({
                connectWith: ".sortable",
                placeholder: 'dragHelper',
                scroll: true,
                revert: true,
                cursor: "move",
                update: function(event, ui) {
                     var cad_id_item_list = $(this).sortable('toArray').toString();
               	
                     $.ajax({
                         url: 'cad_ordenar_item.php',
                         type: 'POST',
                         data: {codigoBANNER : cad_id_item_list},
                         success: function(data) {
                            
                         }
                     });
                },
                start: function( event, ui ) {
                                                
                },
                stop: function( event, ui ) {
                     
                }
            });
        }); 

</script>
</html>