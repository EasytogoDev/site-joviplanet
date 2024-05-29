	<?php
	require_once('../../../config.php');
	$codigoPRODUTO = $_POST['codigoPRODUTO'];


	$query_fotos = mysqli_query($conexao, "
	SELECT 
	codigoIMAGEMPRODUTO, 
	imagemIMAGEMPRODUTO,
	padraoIMAGEMPRODUTO
	FROM `tb0019_imagens_produtos`  
	WHERE `produtoIMAGEMPRODUTO` = '".$codigoPRODUTO."' 
	ORDER BY ordemIMAGEMPRODUTO ASC
	");

	$fotosCount = mysqli_num_rows($query_fotos);

	$inicio = 1;



	while($fotos = mysqli_fetch_assoc($query_fotos)){

		

		if($inicio==1){

			$margens = '10px 10px 10px 0px';
		}else if($inicio==$fotosCount){

			$margens = '10px 0px 10px 10px';

		}else{

			$margens = '10px 10px 10px 10px';

		}



		if($fotos['padraoIMAGEMPRODUTO']==1){

			$border = 'green 2px solid';

		}else{
			
		$border = 'gray 1px solid';

		}
	?>
   
<div style="
   
   
    position: relative;
    box-sizing: content-box;
    cursor:pointer;
    display: block;
    height: 120px;
    width: 100px;
    text-align: center;
    line-height: 100px; 
	padding: 0 20px 0 0px;
	margin:<?php echo $margens;?>;
	float: left;
">
   <span onclick="padraoFoto('<?php echo $fotos['codigoIMAGEMPRODUTO']; ?>','<?php echo $codigoPRODUTO;?>');" style="
    
	
    position: relative;
    box-sizing: content-box;
    cursor:pointer;
    display: block;
    height: 100px;
    width: 100px;
	margin-bottom:10px;
	border: <?php echo $border;?>;
">
		<img src="<?php echo $fotos['imagemIMAGEMPRODUTO']; ?>" width="100"> 
		</span>
		<div style="position: relative; margin-left: 20px;">
			<a href="javascript:;" onclick="ExcluiFoto('<?php echo $fotos['codigoIMAGEMPRODUTO']; ?>');" class="form-control btn btn-primary btn-sm rounded pull-right"> Excluir </a>
		</div>
	

</div>
		
<?php 
	$inicio++;} 
?> 
 