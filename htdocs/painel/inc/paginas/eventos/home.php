  <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Eventos <a href="?make=<?php echo $make;?>&acao=adicionar" class="btn btn-primary btn-sm rounded-s">
						Adicionar
					</a>
                                        <!--
				 --> 
                                    </h3>
                                    <p class="title-description"> Lista dos eventos da empresa </p>
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
                                   
					
					
					
                                    <div class="item-col item-col-header fixed item-col-img md">
                                        <div> <span>Mídia</span> </div>
                                    </div>
									
									
                                    <div class="item-col item-col-header item-col-title">
                                        <div> <span>Titulo</span> </div>
                                    </div>
									
									 
                                    <div class="item-col item-col-header item-col-date">
                                        <div> <span>Data</span> </div>
                                    </div>
									
									
									
                                    <div class="item-col item-col-header fixed item-col-actions-dropdown">
                                        <div> <span>Ações</span> </div></div>
									
									
									
                                </div>
                            </li>

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
		
		$query_total = mysqli_query($conexao, "SELECT * FROM tb0075_eventos ");
	  	$total_registros = mysqli_num_rows($query_total);
		
		$pags = ceil($total_registros/$qnt);
		$max_links = 3;
		
		$query_EVENTOs = mysqli_query($conexao, "SELECT * FROM tb0075_eventos LIMIT $inicio, $qnt ");
		$contagem = '1';
		while($eventos = mysqli_fetch_assoc($query_EVENTOs)){

		?>
                            <li class="item">
                                <div class="item-row">
                                   
                                    <div class="item-col fixed item-col-img md">
                                        <a href="?make=<?php echo $make;?>&acao=editar&codigo=<?php echo $eventos['codigoEVENTO'];?>">
                                            <div class="item-img rounded" style="background-image: url(<?php echo $eventos['imagemEVENTO'];?>)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Titulo</div>
                                        <div>
                                            <a href="?make=<?php echo $make;?>&acao=editar&codigo=<?php echo $eventos['codigoEVENTO'];?>" class="">
                                                <h4 class="item-title"> <?php echo $eventos['nomeEVENTO'];?> </h4>
                                            </a>
                                        </div>
                                    </div> 
									
									
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Data</div>
                                        <div class="no-overflow"> <?php echo $eventos['dataEVENTO'];?> </div>
                                    </div>
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                           
                                            <a class="item-actions-toggle-btn <?php if($eventos['ativoEVENTO']=='1'){ echo 'check';}else{echo 'remove';}
?>">
									<i class="fa fa-cog"></i>
								 
								</span> </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
<?php

if($eventos['ativoEVENTO']=='0'){
?>                                                    
<a class="remove" href="?make=<?php echo $make;?>&acao=funcao&act=ativar&p=<?php echo $p;?>&codigo=<?php echo $eventos['codigoEVENTO'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}else{
?>
<a class="check" href="?make=<?php echo $make;?>&acao=funcao&act=desativar&p=<?php echo $p;?>&codigo=<?php echo $eventos['codigoEVENTO'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}
?>

                                                    </li>
                                                    <li>
                                                        <a class="edit" href="?make=<?php echo $make;?>&acao=editar&p=<?php echo $p;?>&codigo=<?php echo $eventos['codigoEVENTO'];?>"> <i class="fa fa-pencil"></i> </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a class="remove" href="javascript:;" onclick="apagar('<?php echo $p;?>','<?php echo $eventos['codigoEVENTO'];?>')" > <i class="fa fa-trash-o "></i> </a>
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
                            <li class="page-item"> <a class="page-link" href="?make=eventos&p=1">
				Primeira
			</a> </li>
			
			<?php 
for($i = $p-$max_links; $i <= $p-1; $i++) { 


if($i <=0) { 

} else { 

echo " <li class='page-item'> <a class='page-link' href='?make=eventos&p=".$i."'>
				".$i."
			</a> </li> "; 
}

 }

echo " <li class='page-item active'> <a class='page-link' href='#'>".$p."</a> </li>";


for($i = $p+1; $i <= $p+$max_links; $i++) { 


if($i > $pags) { 


} else {

echo " <li class='page-item '> <a class='page-link' href='?make=eventos&p=".$i."'>
				".$i."
			</a> </li> "; 

} 

}





?>                           
        
<li class="page-item"> <a class="page-link" href="?make=eventos&p=<?php echo $pags;?>">Última</a> </li>

                        </ul>
                    </nav>