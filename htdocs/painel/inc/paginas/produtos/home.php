 <?php
 	  // Pegar a página atual por GET 
	  $p = @$_GET["p"]; 
	  $q = @$_GET["q"]; 
	  $catproduto = @$_GET['catproduto'];
	  
	  
	  
	  if($catproduto != ''){
		  
		  $tagBusca = "codigoCATEGORIA = '".$catproduto."' AND ";
		  
	  }else{
		  
		  $tagBusca = "";
		  
	  }
	  
	  
?>
<div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Produtos <a href="?make=produtos&acao=adicionar" class="btn btn-primary btn-sm rounded-s">
						Adicionar
					</a>
                                        <!--
				 --> 
                                    </h3>
                                    <p class="title-description"> Lista dos produtos do portal</p>
                                </div>
                            </div>
                        </div>
                        <div class="items-search">
                            <form class="form-inline" method="GET">
                                <div class="input-group"> 
								<input type="hidden" name="make" id="make" value="<?php echo $_GET['make']?>">
								<input type="hidden" name="catproduto" id="catproduto" value="<?php echo @$_GET['catproduto']?>">

 					
								<input type="text" class="form-control boxed rounded-s" value="<?php echo $q;?>"  name="q" id="q" placeholder="Pesquisar por..." > 
								<span class="input-group-btn">
					<button class="btn btn-secondary rounded-s" type="submit">
						<i class="fa fa-search"></i>
					</button>
				</span> </div>
                            </form>
                        </div>
						
						
					<a href="?make=produtos&q=<?php echo $q;?>" class="btn btn-primary btn-sm rounded-s" <?php if(@$_GET['catproduto']==""){?>style="background:#66a027 !important;"<?php } ?> >Todos</a>
					
					<?php 
					
					$query_categorias = mysqli_query($conexao, "SELECT * FROM tb0012_categorias
					WHERE ativoCATEGORIA='1' ");
		$contagem = '1';
		while($categorias = mysqli_fetch_assoc($query_categorias)){

						
					?><a href="?make=produtos&q=<?php echo $q;?>&catproduto=<?php echo $categorias['codigoCATEGORIA'];?>" class="btn btn-primary btn-sm rounded-s" <?php if($categorias['codigoCATEGORIA']==@$_GET['catproduto']){?>style="background:#66a027 !important;"<?php } ?> >
						<?php echo $categorias['nomeCATEGORIA']?>
					</a>
					<?php 
					
					}
					?>
					
					
					
					
                    </div>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="item-row">
                                    <div class="item-col fixed item-col-check">  
						<span></span>
					</label> </div>
                                    <div class="item-col item-col-header fixed item-col-img md">
                                        <div> <span>Imagem</span> </div>
                                    </div>
									
									
                                    <div class="item-col item-col-header item-col-title">
                                        <div> <span>SKU</span> </div>
                                    </div> 
									
									 <div class="item-col item-col-header item-col-title">
                                        <div> <span>Descrição</span> </div>
                                    </div> 
                                     
                                    <div class="item-col item-col-header item-col-category">
                                        <div class="no-overflow"> <span>Categoria</span> </div>
                                    </div> 
                                    <div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
                                </div>
                            </li>

      <?php

	  
	   
	   
	  
	  // Verifica se a variável tá declarada, senão deixa na primeira página como padrão 
	  if(isset($p)) { $p = $p; } else { $p = 1; } 
	  
	  // Defina aqui a quantidade máxima de registros por página. 
	  $qnt = 20; 
	  
	  // O sistema calcula o início da seleção calculando: 
	  // (página atual * quantidade por página) - quantidade por página 
	  
	  $inicio = ($p*$qnt) - $qnt;
		
		$query_total = mysqli_query($conexao, "SELECT * FROM tb0015_produtos 
		INNER JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
		INNER JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO
		WHERE ".$tagBusca." (
		(partnumberPRODUTO LIKE '%".$q."%') OR 
		(originalPRODUTO LIKE '%".$q."%') OR 
		(especificacaoPRODUTO LIKE '%".$q."%') OR 
		(modeloPRODUTO LIKE '%".$q."%') OR 
		(fabricanteoriginalPRODUTO LIKE '%".$q."%')
		)");
	  	$total_registros = mysqli_num_rows($query_total);
		
		$pags = ceil($total_registros/$qnt);
		$max_links = 3;
		
		$query_produtos = mysqli_query($conexao, "SELECT * FROM tb0015_produtos 
		INNER JOIN tb0012_categorias_vinculos ON codigoPRODUTO = produtoCATEGORIAVINCULO
		INNER JOIN tb0012_categorias ON codigoCATEGORIA = categoriaCATEGORIAVINCULO
		WHERE ".$tagBusca." (
		(partnumberPRODUTO LIKE '%".$q."%') OR 
		(originalPRODUTO LIKE '%".$q."%') OR 
		(especificacaoPRODUTO LIKE '%".$q."%') OR 
		(modeloPRODUTO LIKE '%".$q."%') OR 
		(fabricanteoriginalPRODUTO LIKE '%".$q."%')
		)
		LIMIT $inicio, $qnt ");
		$contagem = '1';
		while($produtos = mysqli_fetch_assoc($query_produtos)){

		?>
                            <li class="item" <?php if($produtos['lancamentoPRODUTO']=='1'){ ?> style="background:#85CE36;" <?php } ?>>
                                <div class="item-row">
                                   
                                    <div class="item-col fixed item-col-img md">
                                        <a href="?make=produtos&acao=editar&codigo=<?php echo $produtos['codigoPRODUTO'];?>">
                                            <div class="item-img rounded" style="background-image: url(<?php echo $produtos['imagemPRODUTO'];?>)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Titulo</div>
                                        <div>
                                            <a href="?make=produtos&acao=editar&codigo=<?php echo $produtos['codigoPRODUTO'];?>" class="">
                                                <h4 class="item-title"> <?php echo $produtos['partnumberPRODUTO'];?> </h4>
                                            </a>
                                        </div>
                                    </div> 
									
									  <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Descricao</div>
                                        <div>
                                            <a href="?make=produtos&acao=editar&codigo=<?php echo $produtos['codigoPRODUTO'];?>" class="">
                                                <h4 class="item-title"> <?php echo $produtos['descricaoPRODUTO'];?> </h4>
                                            </a>
                                        </div>
                                    </div> 
                                    
                                    <div class="item-col item-col-category no-overflow">
                                        <div class="item-heading">Categoria</div>
                                        <div class="no-overflow"> <?php echo $produtos['nomeCATEGORIA'];?>  </div>
                                    </div> 
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                           
                                            <a class="item-actions-toggle-btn <?php if($produtos['ativoPRODUTO']=='1'){ echo 'check';}else{echo 'remove';}
?>">
									<i class="fa fa-cog"></i>
								 
								</span> </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    
													
 <li>
<?php

if($produtos['lancamentoPRODUTO']=='0'){
?>                                                    
<a class="remove" href="?make=produtos&q=<?php echo @$_GET['q']?>&catproduto=<?php echo @$_GET['catproduto'];?>&acao=lancamento&act=ativar&p=<?php echo $p;?>&codigo=<?php echo $produtos['codigoPRODUTO'];?>" > <i class="fa fa-star-o"></i> </a>
<?php 
}else{
?>
<a class="check" href="?make=produtos&q=<?php echo @$_GET['q']?>&catproduto=<?php echo @$_GET['catproduto'];?>&acao=lancamento&act=desativar&p=<?php echo $p;?>&codigo=<?php echo $produtos['codigoPRODUTO'];?>" > <i class="fa fa-star"></i> </a>
<?php 
}
?>

                                                    </li>													
													
													
													
													
													
													
													
													
													
													
													
													
													
													<li>
<?php

if($produtos['ativoPRODUTO']=='0'){
?>                                                    
<a class="remove" href="?make=produtos&q=<?php echo @$_GET['q']?>&catproduto=<?php echo @$_GET['catproduto'];?>&acao=funcao&act=ativar&p=<?php echo $p;?>&codigo=<?php echo $produtos['codigoPRODUTO'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}else{
?>
<a class="check" href="?make=produtos&q=<?php echo @$_GET['q']?>&catproduto=<?php echo @$_GET['catproduto'];?>&acao=funcao&act=desativar&p=<?php echo $p;?>&codigo=<?php echo $produtos['codigoPRODUTO'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}
?>

                                                    </li>
                                                    <li>
                                                        <a class="edit" href="?make=produtos&catproduto=<?php echo @$_GET['catproduto'];?>&acao=editar&p=<?php echo $p;?>&codigo=<?php echo $produtos['codigoPRODUTO'];?>"> <i class="fa fa-pencil"></i> </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a class="remove" href="javascript:apagar('<?php echo $catproduto;?>','<?php echo $q;?>','<?php echo $p;?>','<?php echo $produtos['codigoPRODUTO'];?>');" > <i class="fa fa-trash-o "></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
							 <?php
}


 ?>
                        </ul>
                    </div>
                    <nav class="text-xs-right">
                        <ul class="pagination">
                            <li class="page-item"> <a class="page-link" href="?make=produtos&q=<?php echo @$q;?>&catproduto=<?php echo @$_GET['catproduto'];?>&p=1">
				Primeira
			</a> </li>
			
			<?php 
for($i = $p-$max_links; $i <= $p-1; $i++) { 


if($i <=0) { 

} else { 

echo " <li class='page-item'> <a class='page-link' href='?make=produtos&q=". $q."&catproduto=". @$_GET['catproduto']."&p=".$i."'>
				".$i."
			</a> </li> "; 
}

 }

echo " <li class='page-item active'> <a class='page-link' href='#'>".$p."</a> </li>";


for($i = $p+1; $i <= $p+$max_links; $i++) { 


if($i > $pags) { 


} else {

echo " <li class='page-item '> <a class='page-link' href='?make=produtos&q=". $q."&catproduto=". @$_GET['catproduto']."&p=".$i."'>
				".$i."
			</a> </li> "; 

} 

}





?>                           
        
<li class="page-item"> <a class="page-link" href="?make=produtos&q=<?php echo @$q;?>&catproduto=<?php echo @$_GET['catproduto'];?>&p=<?php echo $pags;?>">Última</a> </li>

                        </ul>
                    </nav>