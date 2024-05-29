<?php
	  // Pegar a página atual por GET 
	  $p = @$_GET["p"]; 
	  $codigo = @$_GET["codigo"];

$cotacao = mysqli_query($conexao, "
SELECT * FROM tb0031_cotacoes  
		LEFT JOIN tb0301_usuarios ON codigoUSUARIO = usuarioCOTACAO
		WHERE codigoCOTACAO = '".$codigo."' 
		");

		$cotacoes = mysqli_fetch_assoc($cotacao);
?>
<div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Cotação solicitada por <?php echo $cotacoes['nomeUSUARIO']?> <?php echo $cotacoes['sobrenomeUSUARIO']?> 
                                        <!--
				 --> 
                                    </h3>
                                    <p class="title-description">T.: <?php echo $cotacoes['telefoneUSUARIO']?> E.:<?php echo $cotacoes['emailUSUARIO']?> </p>
                                </div>
                            </div>
                        </div>
                        <div class="items-search">
                            
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
                                        <div> <span></span> </div>
                                    </div>
									
                                    <div class="item-col item-col-header item-col-title">
                                        <div> <span>Partnumber</span> </div>
                                    </div>
                                 
									
                                    <div class="item-col item-col-header item-col-title">
                                        <div class="no-overflow"> <span>Especificação</span> </div>
                                    </div>
									
                                    <div class="item-col item-col-header item-col-date">
                                        <div> <span>Quantidade</span> </div>
                                    </div>
									
                                    
                                </div>
                            </li>

      <?php
	  
	  // Verifica se a variável tá declarada, senão deixa na primeira página como padrão 
	  if(isset($p)) { $p = $p; } else { $p = 1; } 
	  
	  // Defina aqui a quantidade máxima de registros por página. 
	  $qnt = 5; 
	  
	  // O sistema calcula o início da seleção calculando: 
	  // (página atual * quantidade por página) - quantidade por página 
	  
	  $inicio = ($p*$qnt) - $qnt;
		
		$query_total = mysqli_query($conexao, "SELECT * FROM tb0032_itens 
		LEFT JOIN tb0015_produtos ON codigoPRODUTO = produtoITEM 
		WHERE cotacaoITEM = '".$codigo."'  ");
	  	$total_registros = mysqli_num_rows($query_total);
		
		$pags = ceil($total_registros/$qnt);
		$max_links = 3;
		
		$query_pedidos = mysqli_query($conexao, "SELECT * FROM tb0032_itens 
		LEFT JOIN tb0015_produtos ON codigoPRODUTO = produtoITEM
		WHERE cotacaoITEM = '".$codigo."' LIMIT $inicio, $qnt ");
		$contagem = '1';
		while($pedidos = mysqli_fetch_assoc($query_pedidos)){

		?>
                            <li class="item">
                                <div class="item-row">
                                   
                                    <div class="item-col fixed item-col-img md">
                                            <div class="item-img rounded" style="background-image: url(<?php echo $pedidos['imagemPRODUTO'];?>)"></div>
                                       
                                    </div>
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Partnumber</div>
                                        <div>
                                            
                                                <h4 class="item-title"> <?php echo $pedidos['partnumberPRODUTO'];?> </h4>
                                          
                                        </div>
                                    </div>
                                  
									
                                  
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Especificação</div>
                                        <div class="no-overflow"> <?php echo $pedidos['especificacaoPRODUTO'];?> </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Quantidade</div>
                                        <div class="no-overflow"> <?php echo $pedidos['quantidadeITEM'];?> </div>
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
                            <li class="page-item"> <a class="page-link" href="?make=<?php echo $make;?>&p=1">
				Primeira
			</a> </li>
			
			<?php 
for($i = $p-$max_links; $i <= $p-1; $i++) { 


if($i <=0) { 

} else { 

echo " <li class='page-item'> <a class='page-link' href='?make=".$make."&p=".$i."'>
				".$i."
			</a> </li> "; 
}

 }

echo " <li class='page-item active'> <a class='page-link' href='#'>".$p."</a> </li>";


for($i = $p+1; $i <= $p+$max_links; $i++) { 


if($i > $pags) { 


} else {

echo " <li class='page-item '> <a class='page-link' href='?make=".$make."&p=".$i."'>
				".$i."
			</a> </li> "; 

} 

}





?>                           
        
<li class="page-item"> <a class="page-link" href="?make=<?php echo $make;?>&p=<?php echo $pags;?>">Última</a> </li>

                        </ul>
                    </nav>