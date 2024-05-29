  <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Categorias <a href="?make=<?php echo $make; ?>&acao=adicionar-categoria" class="btn btn-primary btn-sm rounded-s">
						Adicionar
					</a>
                                        <!--
				 --> 
                                    </h3>
                                    <p class="title-description"> Lista das categorias dos categorias</p>
                                </div>
                            </div>
                        </div>
                        <div class="items-search">
                            <form class="form-inline">
                                <div class="input-group"> <input type="text" class="form-control boxed rounded-s" placeholder="Pesquisar por..."> <span class="input-group-btn">
					<button class="btn btn-secondary rounded-s" type="button">
						<i class="fa fa-search"></i>
					</button>
				</span> </div>
                            </form>
                        </div>
                    </div>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                
                                <div class="item-row">
                                   
                                    <div class="item-col item-col-header item-col-title">
                                        <div> <span>Categoria</span> </div>
                                    </div>
                                    
                                     
                                    <div class="item-col item-col-header item-col-category">
                                        <div class="no-overflow"> <span>Categoria Pai</span> </div>
                                    </div>
                                     
                                     
                                    <div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
                                </div>
                            </li>

      <?php
	  // Pegar a página atual por GET 
	  $p = @$_GET["p"]; 
	  
	  // Verifica se a variável tá declarada, senão deixa na primeira página como padrão 
	  if(isset($p)) { $p = $p; } else { $p = 1; } 
	  
	  // Defina aqui a quantidade máxima de registros por página. 
	  $qnt = 5; 
	  
	  // O sistema calcula o início da seleção calculando: 
	  // (página atual * quantidade por página) - quantidade por página 
	  
	  $inicio = ($p*$qnt) - $qnt;
		
		$query_total = mysqli_query($conexao, "SELECT * FROM tb080_categorias ");
	  	$total_registros = mysqli_num_rows($query_total);
		
		$pags = ceil($total_registros/$qnt);
		$max_links = 3;
		
		$query_categorias = mysqli_query($conexao, "SELECT * FROM tb080_categorias LIMIT $inicio, $qnt ");
		$contagem = '1';
		while($categorias = mysqli_fetch_assoc($query_categorias)){
			
			$query_categorias_pai = mysqli_query($conexao, "SELECT * FROM tb080_categorias WHERE codigoCATEGORIA='".$categorias['vinculoCATEGORIA']."' ");
	$categorias_pai = mysqli_fetch_assoc($query_categorias_pai);

		?>
                            <li class="item">
                                <div class="item-row">
                                   
                                  
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Categoria</div>
                                        <div>
                                            <a href="?make=<?php echo $make; ?>&acao=editar-categoria&codigo=<?php echo $categorias['codigoCATEGORIA'];?>" class="">
                                                <h4 class="item-title"> <?php echo $categorias['nomeCATEGORIA'];?> </h4>
                                            </a>
                                        </div>
                                    </div> 
                                    <div class="item-col item-col-category no-overflow">
                                        <div class="item-heading">Categoria Pai</div>
                                        <div class="no-overflow"> <a href="?make=<?php echo $make; ?>&acao=editar-categoria&codigo=<?php echo $categorias['codigoCATEGORIA'];?>"><?php echo @$categorias_pai['nomeCATEGORIA'];?></a> </div>
                                    </div> 
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                           
                                            <a class="item-actions-toggle-btn <?php if($categorias['ativoCATEGORIA']=='1'){ echo 'check';}else{echo 'remove';}
?>">
									<i class="fa fa-cog"></i>
								 
								</span> </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
<?php

if($categorias['ativoCATEGORIA']=='0'){
?>                                                    
<a class="remove" href="?make=<?php echo $make; ?>&acao=funcao-categoria&act=ativar&p=<?php echo $p;?>&codigo=<?php echo $categorias['codigoCATEGORIA'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}else{
?>
<a class="check" href="?make=<?php echo $make; ?>&acao=funcao-categoria&act=desativar&p=<?php echo $p;?>&codigo=<?php echo $categorias['codigoCATEGORIA'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}
?>

                                                    </li>
                                                    <li>
                                                        <a class="edit" href="?make=<?php echo $make; ?>&acao=editar-categoria&p=<?php echo $p;?>&codigo=<?php echo $categorias['codigoCATEGORIA'];?>"> <i class="fa fa-pencil"></i> </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a class="remove" href="javascript:;" onclick="apagarcategoria('<?php echo $p;?>','<?php echo $categorias['codigoCATEGORIA'];?>')" > <i class="fa fa-trash-o "></i> </a>
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
                            <li class="page-item"> <a class="page-link" href="?make=<?php echo $make; ?>&acao=categorias&p=1">
				Primeira
			</a> </li>
			
			<?php 
for($i = $p-$max_links; $i <= $p-1; $i++) { 


if($i <=0) { 

} else { 

echo " <li class='page-item'> <a class='page-link' href='?make=".$make."&acao=categorias&p=".$i."'>
				".$i."
			</a> </li> "; 
}

 }

echo " <li class='page-item active'> <a class='page-link' href='#'>".$p."</a> </li>";


for($i = $p+1; $i <= $p+$max_links; $i++) { 


if($i > $pags) { 


} else {

echo " <li class='page-item '> <a class='page-link' href='?make=".$make."&acao=categorias&p=".$i."'>
				".$i."
			</a> </li> "; 

} 

}





?>                           
        
<li class="page-item"> <a class="page-link" href="?make=<?php echo $make; ?>&acao=categorias&p=<?php echo $pags;?>">Última</a> </li>

                        </ul>
                    </nav>