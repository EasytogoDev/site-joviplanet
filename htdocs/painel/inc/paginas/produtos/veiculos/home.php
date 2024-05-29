  <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Veiculos <a href="?make=produtos&acao=veiculos&act=adicionar" class="btn btn-primary btn-sm rounded-s">
						Adicionar
					</a>
                                        <!--
				 --> 
                                    </h3>
                                    <p class="title-description"> Lista das veiculos do portal</p>
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
                                     
                                    <!-- <div class="item-col item-col-header fixed item-col-img md">
                                        <div> <span>Imagem</span> </div>
                                    </div> -->
                                    <div class="item-col item-col-header item-col-title">
                                        <div> <span>Montadora</span> </div>
                                    </div>
									<div class="item-col item-col-header item-col-title">
                                        <div> <span>Veiculo</span> </div>
                                    </div>	


									<div class="item-col item-col-header item-col-title">
                                        <div> <span>Linha</span> </div>
                                    </div>										
                                     
                                   
                                    <div class="item-col item-col-header fixed item-col-actions-dropdown">  <div> <span>Ações</span> </div> </div>
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
		
		$query_total = mysqli_query($conexao, "SELECT * FROM tb0014_veiculos
		INNER JOIN tb0013_montadoras ON codigoMONTADORA = montadoraVEICULO
		LEFT JOIN tb0011_linhas ON codigoLINHA = linhaVEICULO
		WHERE  nomeVEICULO LIKE '%".$q."%'  ");
	  	$total_registros = mysqli_num_rows($query_total);
		
		$pags = ceil($total_registros/$qnt);
		$max_links = 3;
		
		$query_veiculos = mysqli_query($conexao, "SELECT * FROM tb0014_veiculos
		INNER JOIN tb0013_montadoras ON codigoMONTADORA = montadoraVEICULO
		LEFT JOIN tb0011_linhas ON codigoLINHA = linhaVEICULO
		WHERE  nomeVEICULO LIKE '%".$q."%' LIMIT $inicio, $qnt ");
		$contagem = '1';
		while($veiculos = mysqli_fetch_assoc($query_veiculos)){

		?>
                            <li class="item">
                                <div class="item-row">
                                   
                                    <!-- <div class="item-col fixed item-col-img md">
                                        <a href="?make=produtos&acao=veiculos&act=editar&codigo=<?php echo $veiculos['codigoVEICULO'];?>">
                                            <div class="item-img rounded" style="background-image: url(<?php echo $veiculos['imagemVEICULO'];?>)"></div>
                                        </a>
                                    </div> -->
									
									<div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Montadora</div>
                                        <div>
                                            <a href="?make=produtos&acao=veiculos&act=editar&codigo=<?php echo $veiculos['codigoVEICULO'];?>" class="">
                                                <h4 class="item-title"> <?php echo $veiculos['nomeMONTADORA'];?> </h4>
                                            </a>
                                        </div>
                                    </div> 
									
									
                                    <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Veiculo</div>
                                        <div>
                                            <a href="?make=produtos&acao=veiculos&act=editar&codigo=<?php echo $veiculos['codigoVEICULO'];?>" class="">
                                                <h4 class="item-title"> <?php echo $veiculos['nomeVEICULO'];?> </h4>
                                            </a>
                                        </div>
                                    </div> 
									
									
									  <div class="item-col fixed pull-left item-col-title">
                                        <div class="item-heading">Linha</div>
                                        <div>
                                            <a href="?make=produtos&acao=veiculos&act=editar&codigo=<?php echo $veiculos['codigoVEICULO'];?>" class="">
                                                <h4 class="item-title"> <?php echo $veiculos['nomeLINHA'];?> </h4>
                                            </a>
                                        </div>
                                    </div> 
                                     
                                     
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                           
                                            <a class="item-actions-toggle-btn <?php if($veiculos['ativoVEICULO']=='1'){ echo 'check';}else{echo 'remove';}
?>">
									<i class="fa fa-cog"></i>
								 
								</span> </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
<?php

if($veiculos['ativoVEICULO']=='0'){
?>                                                    
<a class="remove" href="?make=produtos&acao=veiculos&act=funcao&action=ativar&q=<?php echo $q;?>&p=<?php echo $p;?>&codigo=<?php echo $veiculos['codigoVEICULO'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}else{
?>
<a class="check" href="?make=produtos&acao=veiculos&act=funcao&action=desativar&q=<?php echo $q;?>&p=<?php echo $p;?>&codigo=<?php echo $veiculos['codigoVEICULO'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}
?>

                                                    </li>
                                                    <li>
                                                        <a class="edit" href="?make=produtos&acao=veiculos&act=editar&p=<?php echo $p;?>&codigo=<?php echo $veiculos['codigoVEICULO'];?>"> <i class="fa fa-pencil"></i> </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a class="remove" href="javascript:;" onclick="apagarveiculo('<?php echo $q;?>','<?php echo $p;?>','<?php echo $veiculos['codigoVEICULO'];?>')" > <i class="fa fa-trash-o "></i> </a>
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
                            <li class="page-item"> <a class="page-link" href="?make=produtos&acao=veiculos&q=<?php echo $q;?>&p=1">
				Primeira
			</a> </li>
			
			<?php 
for($i = $p-$max_links; $i <= $p-1; $i++) { 


if($i <=0) { 

} else { 

echo " <li class='page-item'> <a class='page-link' href='?make=produtos&acao=veiculos&q=".$q."&p=".$i."'>
				".$i."
			</a> </li> "; 
}

 }

echo " <li class='page-item active'> <a class='page-link' href='#'>".$p."</a> </li>";


for($i = $p+1; $i <= $p+$max_links; $i++) { 


if($i > $pags) { 


} else {

echo " <li class='page-item '> <a class='page-link' href='?make=produtos&acao=veiculos&q=".$q."&p=".$i."'>
				".$i."
			</a> </li> "; 

} 

}





?>                           
        
<li class="page-item"> <a class="page-link" href="?make=produtos&acao=veiculos&q=<?php echo $q;?>&p=<?php echo $pags;?>">Última</a> </li>

                        </ul>
                    </nav>