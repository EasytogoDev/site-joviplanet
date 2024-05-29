  <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Combustível <a href="?make=<?php echo $make?>&acao=<?php echo $acao?>&act=adicionar" class="btn btn-primary btn-sm rounded-s">
						Adicionar
					</a>
                                        <!--
				 --> 
                                    </h3>
                                    <p class="title-description"> Lista de <?php echo $acao?> do portal</p>
                                </div>
                            </div>
                        </div>
                        <div class="items-search">
                            <form class="form-inline" method="GET">
                                <div class="input-group"> 
								<input type="hidden" name="make" id="make" value="<?php echo $_GET['make']?>">
								<input type="hidden" name="acao" id="acao" value="<?php echo $_GET['acao']?>">

 					
								<input type="text" class="form-control boxed rounded-s"  name="q" id="q" placeholder="Pesquisar por..."> <span class="input-group-btn">
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
                                    <div class="item-col fixed item-col-check">  
						<span></span>
					</label> </div>
                                    <div class="item-col item-col-header fixed item-col-img md">
                                        <div> <span>Imagem</span> </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-title">
                                        <div> <span>PN</span> </div>
                                    </div> 
                                     
                                   
                                    <div class="item-col item-col-header fixed item-col-actions-dropdown"> </div>
                                </div>
                            </li>

      <?php
	  // Pegar a página atual por GET 
	  $p = @$_GET["p"]; 
	  $q = @$_GET["q"]; 
	  
	  // Verifica se a variável tá declarada, senão deixa na primeira página como padrão 
	  if(isset($p)) { $p = $p; } else { $p = 1; } 
	  
	  // Defina aqui a quantidade máxima de registros por página. 
	  $qnt = 20; 
	  
	  // O sistema calcula o início da seleção calculando: 
	  // (página atual * quantidade por página) - quantidade por página 
	  
	  $inicio = ($p*$qnt) - $qnt;
		
		$query_total = mysqli_query($conexao, "SELECT * FROM tb0023_combustiveis
		WHERE nomeCOMBUSTIVEL LIKE '%".$q."%'  ");
	  	$total_registros = mysqli_num_rows($query_total);
		
		$pags = ceil($total_registros/$qnt);
		$max_links = 3;
		
		$query_montadoras = mysqli_query($conexao, "SELECT * FROM tb0023_combustiveis
		WHERE  nomeCOMBUSTIVEL LIKE '%".$q."%' LIMIT $inicio, $qnt ");
		$contagem = '1';
		while($montadoras = mysqli_fetch_assoc($query_montadoras)){

		?>
                            <li class="item">
                                <div class="item-row">
                                   
                                    <div class="item-col fixed item-col-img md">
                                        <a href="?make=<?php echo $make?>&acao=<?php echo $acao?>&act=editar&codigo=<?php echo $montadoras['codigoCOMBUSTIVEL'];?>">
                                            <div class="item-img rounded" style="background-image: url(/images/<?php echo $acao?>/<?php echo $montadoras['imagemCOMBUSTIVEL'];?>)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">PN</div>
                                        <div>
                                            <a href="?make=<?php echo $make?>&acao=<?php echo $acao?>&act=editar&codigo=<?php echo $montadoras['codigoCOMBUSTIVEL'];?>" class="">
                                                <h4 class="item-title"> <?php echo $montadoras['nomeCOMBUSTIVEL'];?> </h4>
                                            </a>
                                        </div>
                                    </div> 
                                     
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                           
                                            <a class="item-actions-toggle-btn <?php if($montadoras['ativoCOMBUSTIVEL']=='1'){ echo 'check';}else{echo 'remove';}
?>">
									<i class="fa fa-cog"></i>
								 
								</span> </a>
                                           <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
<?php

if($montadoras['ativoCOMBUSTIVEL']=='0'){
?>                                                    
<a class="remove" href="?make=<?php echo $make?>&acao=<?php echo $acao?>&act=funcao&action=ativar&q=<?php echo $q;?>&p=<?php echo $p;?>&codigo=<?php echo $montadoras['codigoCOMBUSTIVEL'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}else{
?>
<a class="check" href="?make=<?php echo $make?>&acao=<?php echo $acao?>&act=funcao&action=desativar&q=<?php echo $q;?>&p=<?php echo $p;?>&codigo=<?php echo $montadoras['codigoCOMBUSTIVEL'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}
?>

                                                    </li>
                                                    <li>
                                                        <a class="edit" href="?make=<?php echo $make?>&acao=<?php echo $acao?>&act=editar&p=<?php echo $p;?>&codigo=<?php echo $montadoras['codigoCOMBUSTIVEL'];?>"> <i class="fa fa-pencil"></i> </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a class="remove" href="javascript:;" onclick="apagarcombustivel('<?php echo $q;?>','<?php echo $p;?>','<?php echo $montadoras['codigoCOMBUSTIVEL'];?>')" > <i class="fa fa-trash-o "></i> </a>
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
                            <li class="page-item"> <a class="page-link" href="?make=<?php echo $make?>&acao=<?php echo $acao?>&p=1">
				Primeira
			</a> </li>
			
			<?php 
for($i = $p-$max_links; $i <= $p-1; $i++) { 


if($i <=0) { 

} else { 

echo " <li class='page-item'> <a class='page-link' href='?make=". $make ."&acao=". $acao."&p=".$i."'>
				".$i."
			</a> </li> "; 
}

 }

echo " <li class='page-item active'> <a class='page-link' href='#'>".$p."</a> </li>";


for($i = $p+1; $i <= $p+$max_links; $i++) { 


if($i > $pags) { 


} else {

echo " <li class='page-item '> <a class='page-link' href='?make=". $make ."&acao=". $acao ."&p=".$i."'>
				".$i."
			</a> </li> "; 

} 

}





?>                           
        
<li class="page-item"> <a class="page-link" href="?make=<?php echo $make?>&acao=<?php echo $acao?>&p=<?php echo $pags;?>">Última</a> </li>

                        </ul>
                    </nav>