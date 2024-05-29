  <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Usuários <a href="?make=<?php echo $make;?>&acao=adicionar" class="btn btn-primary btn-sm rounded-s">
						Adicionar
					</a>
                                        <!--
				 --> 
                                    </h3>
                                    <p class="title-description"> Lista dos usuários do portal</p>
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
                                    <div class="item-col fixed item-col-check">  
						<span></span>
					</label> </div>
                                   
									<div class="item-col item-col-header item-col-author">
                                        <div class="no-overflow"> <span>Nome</span> </div>
                                    </div>
									
                                    <div class="item-col item-col-header item-col-author">
                                        <div class="no-overflow"> <span>Sobrenome</span> </div>
                                    </div>
									
                                    <div class="item-col item-col-header item-col-date">
                                        <div> <span>Email</span> </div>
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
		
		$query_total = mysqli_query($conexao, "SELECT * FROM tb0301_usuarios ");
	  	$total_registros = mysqli_num_rows($query_total);
		
		$pags = ceil($total_registros/$qnt);
		$max_links = 3;
		
		$query_usuarios = mysqli_query($conexao, "SELECT * FROM tb0301_usuarios  LIMIT $inicio, $qnt ");
		$contagem = '1';
		while($usuarios = mysqli_fetch_assoc($query_usuarios)){
			
			
			if($usuarios['codigoUSUARIO']!=$usuario['codigoUSUARIO']){

		?>
                            <li class="item">
                                <div class="item-row">
                                   
                                  
                                  
                                    <div class="item-col item-col-author">
                                        <div class="item-heading">Nome</div>
                                        <div class="no-overflow"> <a href="?make=<?php echo $make;?>&acao=editar&codigo=<?php echo $usuarios['codigoUSUARIO'];?>"><?php echo $usuarios['nomeUSUARIO'];?></a> </div>
                                    </div>
                                  
                                    <div class="item-col item-col-author">
                                        <div class="item-heading">sobrenome</div>
                                        <div class="no-overflow"> <a href="?make=<?php echo $make;?>&acao=editar&codigo=<?php echo $usuarios['codigoUSUARIO'];?>"><?php echo $usuarios['sobrenomeUSUARIO'];?></a> </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">E-mail</div>
                                        <div class="no-overflow"> <?php echo $usuarios['emailUSUARIO'];?> </div>
                                    </div>
                                    <div class="item-col fixed item-col-actions-dropdown">
                                        <div class="item-actions-dropdown">
                                           
                                            <a class="item-actions-toggle-btn <?php if($usuarios['ativoUSUARIO']=='1'){ echo 'check';}else{echo 'remove';}
?>">
									<i class="fa fa-cog"></i>
								 
								</span> </a>
                                            <div class="item-actions-block">
                                                <ul class="item-actions-list">
                                                    <li>
<?php

if($usuarios['ativoUSUARIO']=='0'){
?>                                                    
<a class="remove" href="?make=<?php echo $make;?>&acao=funcao&act=ativar&p=<?php echo $p;?>&codigo=<?php echo $usuarios['codigoUSUARIO'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}else{
?>
<a class="check" href="?make=<?php echo $make;?>&acao=funcao&act=desativar&p=<?php echo $p;?>&codigo=<?php echo $usuarios['codigoUSUARIO'];?>" > <i class="fa fa-adjust"></i> </a>
<?php 
}
?>

                                                    </li>
                                                    <li>
                                                        <a class="edit" href="?make=<?php echo $make;?>&acao=editar&p=<?php echo $p;?>&codigo=<?php echo $usuarios['codigoUSUARIO'];?>"> <i class="fa fa-pencil"></i> </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a class="remove" href="javascript:;" onclick="apagar('<?php echo $p;?>','<?php echo $usuarios['codigoUSUARIO'];?>')" > <i class="fa fa-trash-o "></i> </a>
                                                    </li>
													
											
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
							 <?php
}

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