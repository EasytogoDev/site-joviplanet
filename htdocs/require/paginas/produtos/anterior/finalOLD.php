<?php
$query_produtos = mysqli_query($conexao, "SELECT * FROM  tb0001_produtos 
							INNER JOIN tb0001_categorias 
							ON categoriaPRODUTO = codigoCATEGORIA 
							INNER JOIN tb0001_grupos 
							ON grupoCATEGORIA = codigoGRUPO 							
							INNER JOIN tb0001_grupos_descricao 
							ON codigoGRUPO = grupoGRUPODESCRICAO
							INNER JOIN tb00401_idiomas 
							ON idiomaGRUPODESCRICAO = codigoIDIOMA
							LEFT JOIN  tb0001_complementos
							ON codigoPRODUTO = produtoCOMPLEMENTO
							LEFT JOIN  tb0002_aplicados
							ON aplicadoPRODUTO = codigoAPLICADO
							WHERE ativoPRODUTO='1' AND codigoPRODUTO='".$pgb."' AND abreviacaoIDIOMA='".$idioma."'");
							 
$produtos = mysqli_fetch_assoc($query_produtos);
								
?><section id="page-title" class="page-title-parallax page-title-dark" style="padding: 70px 0px 0px; background-image: url('/images/produtos.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

			<div class="container clearfix">
				<div class="col_two_fifth"><h1><?php echo $produtos['sulfixoPRODUTO'];?> <?php echo $produtos['partnumberPRODUTO'];?></h1>
				<span><?php echo $traducao['produtos'];?> <?php echo strtoupper($produtos['nomeGRUPODESCRICAO']);?></span> 
</div>	
<div class="col_three_fifth col_last">
	<form id="searchform" data-caption-animate="fadeInUp" data-caption-delay="200" action="/<?php echo $idioma;?>/<?php echo $traducao['ulr_produtos'];?>/<?php echo $traducao['ulr_pesquisar'];?>" method="post">

									<i class="icon"><img src="/images/icons/icon_lupa.png"></i>

	<input type="text"  name="q"  value=""  id="inputString" onkeyup="lookup(this.value);" placeholder="<?php echo $traducao['txt1'];?>"  autocomplete="off" />
	<input type="submit" class="form-trigger button animate" title="<?php echo $traducao['buscar'];?>" value="<?php echo $traducao['buscar'];?>" />
	<div id="suggestions"></div> 

	</form> 
</div>	
<ol class="breadcrumb">
<li><a href="/<?php echo $idioma;?>/<?php echo $traducao['ulr_home'];?>"><?php echo $traducao['home'];?></a></li>					
<li><a href="/<?php echo $idioma;?>/<?php echo $traducao['ulr_produtos'];?>"><?php echo $traducao['produtos'];?></a></li>
<li><a href="/<?php echo $idioma;?>/produtos/<?php echo $produtos['slugGRUPODESCRICAO'];?>/"><?php echo $produtos['nomeGRUPODESCRICAO'];?></a></li>
<li><a href="/<?php echo $idioma;?>/produtos/<?php echo $produtos['slugGRUPODESCRICAO'];?>/<?php echo $produtos['slugCATEGORIA'];?>"><?php echo $produtos['nomeCATEGORIA'];?></a></li>
<li class="active"><?php echo $produtos['sulfixoPRODUTO'];?> <?php echo $produtos['partnumberPRODUTO'];?></li>

</ol>
</div>

		</section>
		
		 <!-- #page-title end --
		
		<!-- Page Sub Menu
		============================================= -->
			<?php
		require_once('require/paginas/produtos/submenu.php');
		
		?>
		<!-- #page-menu end -->
		 
		
		
		
		<!-- Content
		============================================= -->
		<section id="content">
		
		

			<div class="content-wrap">
				
				<div class="container clearfix">
<!-- Sidebar
					============================================= -->
					<?php 
		require_once('require/paginas/produtos/lateral.php');
					?><!-- .sidebar end -->

				<div class="col_full col_last">

						<div class="single-product">

							<div class="product">

								<div class="col_half">

									<!-- Product Single - Gallery
									============================================= -->
									<?php if($produtos['aplicadoPRODUTO']!='0'){?>
									<div style="background:#CCC; border-radius:5px;text-align:center; Color:#FF0000; padding:10px 5px; font-size:20px;margin:0px 0px 5px 0px; ">
									<?php echo $produtos['nomeAPLICADO'];?>
									</div>
									<?php } ?>
									
									
									<div class="product-image" style="border-radius:5px;border:1px solid #FF0000;   ">
										<div  >
											<div class="flexslider">
												
											
								
							
							
							<a href="/include/produto.php?i=<?php echo $produtos['imagemPRODUTO'];?>" data-lightbox="image"  >
							
											 <img src="/include/produto.php?i=<?php echo $produtos['imagemPRODUTO'];?>" alt="<?php echo $produtos['descricaoPRODUTO'];?>" title="<?php echo $produtos['descricaoPRODUTO'];?>"> 
											  
								<div class="overlay"><div class="overlay-wrap"><i class="icon-line-plus"></i></div></div>
							</a>
							
										</div>
										</div> 
										<?php if($produtos['lancamentoPRODUTO']=="1"){?><div class="sale-flash"><?php echo $traducao['lancamento'];?></div><?php } ?>
									</div><!-- Product Single - Gallery End -->

								</div>

								<div class="col_half col_last product-desc">

									<!-- Product Single - Price
									============================================= -->
									<div class="product-price"> <ins><?php echo $produtos['sulfixoPRODUTO'];?> <?php echo $produtos['partnumberPRODUTO'];?></ins></div><!-- Product Single - Price End -->

								 

									<div class="clear"></div>
									
									<div class="line"></div>
									
									 
									<p><?php echo utf8_encode($produtos['descricaoPRODUTO']);?></p><!-- Product Single - Short Description End -->
									<p><?php echo utf8_encode($produtos['aplicacaoPRODUTO']);?></p><!-- Product Single - Short Description End -->


<!-- Product Single - Short Description
									============================================= -->
									<p><?php echo ($produtos['especificacaoPRODUTO']);?></p>
									<ul class="iconlist">
										<?php
							
							$montadora_query = mysqli_query($conexao, "SELECT * FROM `tb0001_produtos` 
                    INNER JOIN tb0013_montadoras_vinculos ON codigoPRODUTO = produtoMONTADORAVINCULO
                    INNER JOIN tb0013_montadoras ON codigoMONTADORA = montadoraMONTADORAVINCULO
					WHERE codigoPRODUTO = '".$produtos['codigoPRODUTO']."' 
					GROUP BY nomeMONTADORA");
							
					while($montadora = mysqli_fetch_assoc($montadora_query)){
					 
					 ?>
                                <li><i class="icon-caret-down"></i> <strong><?php echo $montadora['nomeMONTADORA']?></strong>
					
<table width="100%">

	<!--<thead>
		<tr> 
			<td>Veículo</td>
			<td>Motor</td>
			<td>Ano</td> 
		</tr>
	</thead>-->
	
					
								<?php
							
							$veiculos_query = mysqli_query($conexao, "SELECT * FROM `tb0001_produtos` 
                    INNER JOIN tb0014_veiculos_vinculo ON codigoPRODUTO = produtoVEICULOVINCULO
                    INNER JOIN tb0014_veiculos ON codigoVEICULO = veiculoVEICULOVINCULO 
					WHERE produtoVEICULOVINCULO = '".$produtos['codigoPRODUTO']."' AND montadoraVEICULO = '".$montadora['codigoMONTADORA']."'
					GROUP BY nomeVEICULO ");
							
					while($veiculos = mysqli_fetch_assoc($veiculos_query)){
					 
					 ?>
					 
					 

	<tbody>
		<tr> 
			<td><?php echo ($veiculos['nomeVEICULO']);?></td> 
			 
		</tr>
	</tbody>



					 
					<?php }?>
					</table> </li> 
					<?php }?>
									</ul><!-- Product Single - Short Description End -->
									
									
									<!-- Product Single - Meta
									============================================= -->
									<div class="panel panel-default product-meta">
										<div class="panel-body">
											<span itemprop="productID" class="sku_wrapper"><?php echo $traducao['PART_NUMBER'];?>: 
											<BR><span class="sku"><?php echo $produtos['sulfixoPRODUTO'];?> <?php echo $produtos['partnumberPRODUTO'];?></span></span>
											
											
											<span class="posted_in">
											<?php if($produtos['tipoPRODUTO']!=''){ ?><?php echo $traducao['TIPO'];?>: <BR>
											<?php echo $produtos['tipoPRODUTO'];?><?php } ?>
											</span>
											
											
											
											<?php 
											
											$query_categoriasprodutos = mysqli_query($conexao, "SELECT * FROM tb0001_vinculoscategorias
											INNER JOIN tb0001_categorias ON codigoCATEGORIA = categoriaVINCULOCATEGORIA
											INNER JOIN tb0001_grupos ON codigoGRUPO = grupoCATEGORIA
											WHERE produtoVINCULOCATEGORIA='".$produtos['codigoPRODUTO']."' ORDER BY nomeCATEGORIA ASC");
											
											$contagemgeral = '1';
											
											$quant = mysqli_num_rows($query_categoriasprodutos);
											
											
											?><span class="posted_in">
											<?php if($quant>1){ ?> 
											<?php echo $traducao['categorias'];?>: 
											<?php }else{ ?>
											<?php echo $traducao['categoria'];?>: 
											<?php } ?>
											
											<br>
											<?php
											
											while($categoriasprodutos = mysqli_fetch_assoc($query_categoriasprodutos)){
											?>
											<a href="/produtos/<?php echo $categoriasprodutos['slugGRUPO'];?>/<?php echo $categoriasprodutos['slugCATEGORIA'];?>" rel="tag"><?php echo utf8_encode($categoriasprodutos['nomeCATEGORIA']);?></a> 
											
											<?php if($quant>1){ ?> / <?php } ?>
											
											
											<?php
											$contagemgeral++;
											}
											?>
											
											
											
											
											
											
											</span>
											
											<span class="posted_in"><?php echo $traducao['EMBALAGEM'];?>: <br><a href="#" rel="tag">
											<?php 
											
											if($produtos['embalagemPRODUTO']!='0'){
											
											
											echo $produtos['embalagemPRODUTO'];
											
											}else{
												
												
											if($produtos['embalagemCOMPLEMENTO']!=''){
												
												echo ($produtos['embalagemCOMPLEMENTO']);
												
											}else{
												
												echo '1 UN';
												
											}
											
											}
												?></a>.</span>
											
											
											<?php if($produtos['medidafiosCOMPLEMENTO']!=''){ ?>
											<span class="posted_in"><?php echo $traducao['FIOS'];?> (<?php echo $traducao['MEDIDA'];?>): <br><a href="#" rel="tag"><?php echo ($produtos['medidafiosCOMPLEMENTO']);?></a>.</span>
											<?php } ?>
											 
											<span class="tagged_as"><?php echo $traducao['linhas'];?>:<br>
										<?php
										
										$sql_linhas = mysqli_query($conexao, "SELECT * FROM tb0001_linhas INNER JOIN tb0001_vinculos ON codigoLINHA = linhaVINCULO WHERE produtoVINCULO = '".$produtos['codigoPRODUTO']."' ORDER BY ordemLINHA ASC ");
										
										while($linhasgerais = mysqli_fetch_assoc($sql_linhas)){
										
										
										if($linhasgerais['codigoLINHA']=='9'){
											
											?>	
											<img src="<?php echo $linhasgerais['icone128LINHA']?>" width="128"> 
										<?php
											
										}else{
										?>	
											<img src="<?php echo $linhasgerais['icone64LINHA']?>" width="32"> 
										<?php
										}
										}
										?>	
											 </span>
										</div>
									</div> 

								</div>

								<div class="col_full nobottommargin">

									<div class="tabs clearfix nobottommargin ui-tabs ui-widget ui-widget-content ui-corner-all" id="tab-1">

										<ul class="tab-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
											<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><i class="icon-align-justify2"></i><span class="hidden-xs"> <?php echo $traducao['DESCRICAO'];?></span></a></li>
											
											<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><i class="icon-info-sign"></i><span class="hidden-xs"> <?php echo $traducao['INFORMACOES'];?></span></a></li>
											
											<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a href="#tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3"><i class="icon-align-justify"></i><span class="hidden-xs"><?php echo $traducao['PRODUTOS_RELACIONADOS'];?></span></a></li>
											 
										</ul>

										<div class="tab-container">

											<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
												<?php echo utf8_encode($produtos['descricaoPRODUTO']);?><BR>
												
												<?php echo $produtos['originalCOMPLEMENTO'];?><BR>
												
												<?php if($produtos['originalPRODUTO']!=''){ ?><?php echo $traducao['ORIGINAL'];?>: <?php echo $produtos['originalPRODUTO'];?><BR><?php } ?>
												
												<?php if($produtos['motorPRODUTO']!=''){ ?><?php echo $traducao['MOTOR'];?>: <?php echo $produtos['motorPRODUTO'];?> <BR><?php } ?>
											</div>
											
											
											<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-2" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">

												<table class="table table-striped table-bordered">
													<tbody>
													<?php if($produtos['embalagemCOMPLEMENTO']!=''){
														?>
														<tr>
															<td><?php echo $traducao['EMBALAGEM'];?></td>
															<td><?php echo $produtos['embalagemCOMPLEMENTO'];?></td>
														</tr>
													<?php
													}
																										
													if($produtos['viasCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['VIAS'];?></td>
															<td><?php echo $produtos['viasCOMPLEMENTO'];?></td>
														</tr>
														 <?php
													}
																										
													if($produtos['fiosCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['FIOS'];?></td>
															<td><?php echo $produtos['fiosCOMPLEMENTO'];?></td>
														</tr>
														 <?php
													}
																										
													if($produtos['medidafiosCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['MEDIDA_DOS_FIOS'];?></td>
															<td><?php echo $produtos['medidafiosCOMPLEMENTO'];?></td>
														</tr> 
														<?php
													}
																										
													if($produtos['poloCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['POLOS'];?></td>
															<td><?php echo $produtos['poloCOMPLEMENTO'];?></td>
														</tr><?php
													}
																										
													if($produtos['pinosCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['PINOS'];?></td>
															<td><?php echo $produtos['pinosCOMPLEMENTO'];?></td>
														</tr> 
														
														<?php
													}
																										
													if($produtos['mmCOMPLEMENTO']!=''){
													?>	
														
														<tr>
															<td><?php echo $traducao['MILIMETRO'];?></td>
															<td><?php echo $produtos['mmCOMPLEMENTO'];?></td>
														</tr> 
														<?php
													}
																										
													if($produtos['diametroCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['DIAMETRO'];?></td>
															<td><?php echo $produtos['diametroCOMPLEMENTO'];?></td>
														</tr> 
														<?php
													}
																										
													if($produtos['comprimentoCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['COMPRIMENTO'];?></td>
															<td><?php echo $produtos['comprimentoCOMPLEMENTO'];?></td>
														</tr>
														<?php
													}
																										
													if($produtos['espessuraCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['ESPESSURA'];?></td>
															<td><?php echo $produtos['espessuraCOMPLEMENTO'];?></td>
														</tr>
														<?php
													}
																										
													if($produtos['corCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['COR'];?></td>
															<td><?php echo $produtos['corCOMPLEMENTO'];?></td>
														</tr>
														<?php
													}
																										
													if($produtos['paginaCOMPLEMENTO']!=''){
													?>	
														
														<tr>
															<td><?php echo $traducao['PAGINA_DO_CATALOGO'];?></td>
															<td><?php echo $produtos['paginaCOMPLEMENTO'];?></td>
														</tr><?php
													}
															 
													?>	
													</tbody>
												</table><!---->

											</div>
											
											
											
											
											<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-3" aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">

												<table class="table table-striped table-bordered">
													<tbody><?php
													 
																										
													if($produtos['chicoteCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['CHICOTE'];?></td>
															<td><?php echo utf8_encode($produtos['chicoteCOMPLEMENTO']);?></td>
														</tr><?php
													}
																										
													if($produtos['kitCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['KIT'];?></td>
															<td><?php echo utf8_encode($produtos['kitCOMPLEMENTO']);?></td>
														</tr><?php
													}
																										
													if($produtos['contrtapecaCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['CONTRAPECA'];?></td>
															<td><?php echo utf8_encode($produtos['contrtapecaCOMPLEMENTO']);?></td>
														</tr><?php
													}
																										
													if($produtos['terminalCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['APLICA_SE'];?> <?php echo $traducao['TERMINAL'];?></td>
															<td><?php echo utf8_encode($produtos['terminalCOMPLEMENTO']);?></td>
														</tr><?php
													}
																										
													if($produtos['aplicacaoPRODUTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['APLICA_SE'];?></td>
															<td><?php echo utf8_encode($produtos['aplicacaoPRODUTO']);?></td>
														</tr><?php
													
													}
																										
													if($produtos['outrosCOMPLEMENTO']!=''){
													?>	
														<tr>
															<td><?php echo $traducao['APLICA_SE'];?></td>
															<td><?php echo utf8_encode($produtos['outrosCOMPLEMENTO']);?></td>
														</tr><?php
													}
																										
													if($produtos['correnteCOMPLEMENTO']!=''){
													?>	
														
														<tr>
															<td><?php echo $traducao['CORRENTE'];?></td>
															<td><?php echo utf8_encode($produtos['correnteCOMPLEMENTO']);?></td>
														</tr>
														<?php
													}
																						 
													?>	
														
														
														
														
													</tbody>
												</table><!---->

											</div>
											 

										</div>

									</div>

									 

									 

								</div>

							</div>

						</div>

						<div class="clear"></div><div class="line"></div>

						 

					</div>
					
				</div>
					 <!--GERAL FINAL COLL FULL-->
			</div> 

			

		</section><!-- #content end -->