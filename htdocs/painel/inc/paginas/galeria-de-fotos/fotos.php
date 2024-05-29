<?php

if(@$_POST['bt_salvar']=='Adicionar'){
	
	
	
	$fotoGALERIA = $_POST['fotoGALERIA'];
	$codigoGALERIA = $_POST['codigoGALERIA'];
	$eventoGALERIA = $_POST['eventoGALERIA'];
	
	
	


$query = mysqli_query($conexao, "
INSERT INTO  tb0150_galeria (
	vinculoGALERIA,
			fotoGALERIA,
					eventoGALERIA,
				ordemGALERIA,	
					capaGALERIA,
						ativoGALERIA
	)
VALUES (
 '".$codigoGALERIA."',
		'".$fotoGALERIA."',
		'".$eventoGALERIA."',
				'0',	
					'0',
						'1'
);
");



if($query)
		{
		echo '<script>alert("Foto inserida com sucesso!");top.location.href="?make='.$make.'&acao=fotos&p=1&codigo='.$codigoGALERIA.'";</script>';
		}
		else{
			echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
			}

	
}else{

	$codigoGALERIA = addslashes(trim(@$_GET['codigo']));
	$query_galeria = mysqli_query($conexao, 'SELECT * FROM tb0150_galeria
LEFT JOIN tb0075_eventos ON codigoEVENTO = eventoGALERIA WHERE codigoGALERIA = "'.$codigoGALERIA.'" ORDER BY codigoGALERIA DESC');
	$galeria = mysqli_fetch_assoc($query_galeria);

	
	
		$query_foto = mysqli_query($conexao, 'SELECT * FROM tb0150_galeria WHERE capaGALERIA="1" AND vinculoGALERIA = "'.$codigoGALERIA.'" ');
	$foto = mysqli_fetch_assoc($query_foto);
	
	
	
	
?>  <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> <img src="<?php 
									
									echo $foto['fotoGALERIA'];?>" width="100"><br>
									
									Editando album: <?php echo $galeria['nomeEVENTO']; ?>  
                                        <!--
				 --> 
                                    </h3>
                                    <p class="title-description"> <?php echo $galeria['nomeGALERIA']; ?>  </p>
                                </div>
                            </div>
                        </div>
                        <div class="items-search">
                   
							<form class="form-inline" enctype="multipart/form-data" id="meuForm" name="formgeral" action="" method="post">

                                <div class="input-group"> 
								
								<input type="file"  name="arquivo[]" multiple class="form-control boxed rounded-s" placeholder="Adicionar Foto"> 
								<input type="hidden" name="bt_salvar" value="Adicionar"> 
								
								
								
								
								<input type="hidden" name="codigoGALERIA" value="<?php echo $galeria['codigoGALERIA']; ?>"> 
								<input type="hidden" name="eventoGALERIA" value="<?php echo $galeria['eventoGALERIA']; ?>">
								
								
								
								<span class="input-group-btn">
					<button class="btn btn-secondary rounded-s" type="button" id="enviar">
						<i class="fa fa-edit"></i>
					</button>
				</span> </div>
                            </form>
							<div id="mensagens"></div>
							
	<script>
	$("#enviar").on('click', function(e)
	{
		
		$("#mensagens").html('<img src="/painel/img/loading.gif" width="50" height="50" alt="Carregando"  class="carregamento" style="margin:20px;"/>');
		
		
		e.preventDefault();
		var form = $('form')[0];
		var formData = new FormData(form);
		
		$.ajax({
			
			url:'inc/enviar.php?codigoGALERIA=<?php echo $galeria['codigoGALERIA']; ?>&eventoGALERIA=<?php echo $galeria['eventoGALERIA']; ?>">',
			type:'post',
			data: formData,
			processData:false,
			contentType:false,
			success: function(data)
			{
				$("#mensagens").html(data);
			}
			
		})
	});
	 
	
	
	
	</script>
                        </div>
                    </div>
                    <div >
					
					
					
                       <!-- <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
							
							
                                <div class="item-row">
                                   
					
					
					
                                    <div class="item-col item-col-header fixed item-col-img md">
                                        <div> <span>Mídia</span> </div>
                                    </div>
									
									  <div class="item-col item-col-header fixed item-col-title">
                                        <div> <span>Tipo</span> </div>
                                    </div>
									
									  
									
                                    <div class="item-col item-col-header fixed item-col-actions-dropdown">
                                        <div> <span>Ações</span> </div></div>
									
									
									
                                </div>
                            </li>-->
<section class="section" style="text-align:left;">  

	
      <?php
	  // Pegar a página atual por GET 
	  $p = @$_GET["p"]; 
	  
	  // Verifica se a variável tá declarada, senão deixa na primeira página como padrão 
	  if(isset($p)) { $p = $p; } else { $p = 1; } 
	  
	  // Defina aqui a quantidade máxima de registros por página. 
	  $qnt = 20; 
	  
	  // O sistema calcula o início da seleção calculando: 
	  // (página atual * quantidade por página) - quantidade por página 
	  
	  $inicio = ($p*$qnt) - $qnt;
		
		$query_total = mysqli_query($conexao, "SELECT * FROM tb0150_galeria WHERE vinculoGALERIA='".$codigoGALERIA."' ORDER BY codigoGALERIA DESC ");
	  	$total_registros = mysqli_num_rows($query_total);
		
		$pags = ceil($total_registros/$qnt);
		$max_links = 3;
		
		$query_GALERIAs = mysqli_query($conexao, "SELECT * FROM tb0150_galeria WHERE vinculoGALERIA='".$codigoGALERIA."' ORDER BY codigoGALERIA DESC LIMIT $inicio, $qnt ");
		$contagem = '1';
		while($eventos = mysqli_fetch_assoc($query_GALERIAs)){

		?>
		
		
		<div class="row sameheight-container"> 

				   
	  
<div class="col-md-3">



<div class="card sameheight-item stats" data-exclude="xs" >

<div class="card-block">
                                        <div class="title-block">
                                            <h4 class="title"> <img src="<?php echo $eventos['fotoGALERIA'];?>" width="100"> </h4>
                                            <p class="title-description">  </p>
                                        </div>
                                        <div class="row row-sm stats-container">
                                            
											
                                            <div class="col-xs-12 col-sm-6 stat-col"> 
                                                <div class="stat"> 
                                                </div>
                                                <div class="stat-icon"> 
												
												<a href="javascript:apagarfoto('<?php echo $eventos['vinculoGALERIA']; ?>','<?php echo $eventos['codigoGALERIA']; ?>');" class="btn btn-primary btn-md rounded-s"> Excluir </a> 
												
												</div>
											</div>
                                        </div>
                                    </div>
									
									
									
									
									
                                
                                     
                                </div>
                     
 
	 			   
	  

 
 
                           <!-- <li class="item">
                                <div class="item-row">
                                   
                                    <div class="item-col fixed item-col-img md">
                                        <a href="?make=<?php echo $make;?>&acao=editar&codigo=<?php echo $eventos['codigoGALERIA'];?>">
                                            <div class="item-img rounded" style="background-image: url(<?php echo $eventos['fotoGALERIA'];?>)"></div>
                                        </a>
                                    </div>
									
									
									   <div class="item-col fixed item-col-title">
                                        <a href="?make=<?php echo $make;?>&acao=editar&codigo=<?php echo $eventos['codigoGALERIA'];?>">
                                           Tornar Capa
                                        </a>
                                    </div>
									
									
                                   
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                           
                                            <a class="item-actions-toggle-btn <?php if($eventos['ativoGALERIA']=='1'){ echo 'check';}else{echo 'remove';}
?>">
									<i class="fa fa-cog"></i>
								 
								</span> </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
<?php

if($eventos['ativoGALERIA']=='0'){
?>                                                    
<a class="remove" href="?make=<?php echo $make;?>&acao=funcao&act=ativar&p=<?php echo $p;?>&codigo=<?php echo $eventos['codigoGALERIA'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}else{
?>
<a class="check" href="?make=<?php echo $make;?>&acao=funcao&act=desativar&p=<?php echo $p;?>&codigo=<?php echo $eventos['codigoGALERIA'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}
?>

                                                    </li>
                                                    <li>
                                                        <a class="edit" href="?make=<?php echo $make;?>&acao=editar&p=<?php echo $p;?>&codigo=<?php echo $eventos['codigoGALERIA'];?>"> <i class="fa fa-pencil"></i> </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a class="remove" href="javascript:;" onclick="apagar('<?php echo $p;?>','<?php echo $eventos['codigoGALERIA'];?>')" > <i class="fa fa-trash-o "></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>-->
							 <?php if(($contagem % 4) == 0){
		 
		 echo '</div></section><section class="section" style="text-align:left;"> <div class="row sameheight-container">';
	 }
	 
	 echo '  </div>';
	 
	 $contagem++;
}


 ?>       </section>
                        <!--</ul>-->
                    </div>
                    <nav class="text-xs-right">
                        <ul class="pagination">
                            <li class="page-item"> <a class="page-link" href="?make=<?php echo $make;?>&acao=fotos&codigo=<?php echo $codigoGALERIA ?>&p=1">
				Primeira
			</a> </li>
			
			<?php 
for($i = $p-$max_links; $i <= $p-1; $i++) { 


if($i <=0) { 

} else { 

echo " <li class='page-item'> <a class='page-link' href='?make=".$make."&acao=fotos&codigo=".$codigoGALERIA."&p=".$i."'>
				".$i."
			</a> </li> "; 
}

 }

echo " <li class='page-item active'> <a class='page-link' href='#'>".$p."</a> </li>";


for($i = $p+1; $i <= $p+$max_links; $i++) { 


if($i > $pags) { 


} else {

echo " <li class='page-item '> <a class='page-link' href='?make=".$make."&acao=fotos&codigo=".$codigoGALERIA."&p=".$i."'>
				".$i."
			</a> </li> "; 

} 

}





?>                           
        
<li class="page-item"> <a class="page-link" href="?make=<?php echo $make;?>&acao=fotos&codigo=<?php echo $codigoGALERIA ?>&p=<?php echo $pags;?>">Última</a> </li>

                        </ul>
                    </nav>
					
<?php } ?>