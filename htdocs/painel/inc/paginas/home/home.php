  <section class="section">
                        <!--<div class="row sameheight-container">
                            <div class="col-xl-12 col col-xs-12 col-sm-12 col-md-6 col-xl-5 stats-col">
                                <div class="card sameheight-item stats" data-exclude="xs">
                                    <div class="card-block">
                                        <div class="title-block">
                                            <h4 class="title"> estatísticas </h4>
                                            <p class="title-description">Relatorios de seu cadastro </p>
                                        </div>
                                        <div class="row row-sm stats-container">
                                            <div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> 5407 </div>
                                                    <div class="name"> artigos ativos </div>
                                                </div> <progress class="progress stat-progress" value="75" max="100">
            					<div class="progress">
            						<span class="progress-bar" style="width: 75%;"></span>
            					</div>
            				</progress> </div>
                                            <div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-shopping-cart"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> 78464 </div>
                                                    <div class="name"> Itens vendidos </div>
                                                </div> <progress class="progress stat-progress" value="25" max="100">
            					<div class="progress">
            						<span class="progress-bar" style="width: 25%;"></span>
            					</div>
            				</progress> </div>
                                            <div class="col-xs-12 col-sm-6  stat-col">
                                                <div class="stat-icon"> <i class="fa fa-line-chart"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> $80.560 </div>
                                                    <div class="name"> renda mensal </div>
                                                </div> <progress class="progress stat-progress" value="60" max="100">
            					<div class="progress">
            						<span class="progress-bar" style="width: 60%;"></span>
            					</div>
            				</progress> </div>
                                            <div class="col-xs-12 col-sm-6  stat-col">
                                                <div class="stat-icon"> <i class="fa fa-users"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> 359 </div>
                                                    <div class="name"> total de usuários
 </div>
                                                </div> <progress class="progress stat-progress" value="34" max="100">
            					<div class="progress">
            						<span class="progress-bar" style="width: 34%;"></span>
            					</div>
            				</progress> </div>
                                            <div class="col-xs-12 col-sm-6  stat-col">
                                                <div class="stat-icon"> <i class="fa fa-list-alt"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> 59 </div>
                                                    <div class="name"> bilhetes fechada </div>
                                                </div> <progress class="progress stat-progress" value="49" max="100">
            					<div class="progress">
            						<span class="progress-bar" style="width: 49%;"></span>
            					</div>
            				</progress> </div>
                                            <div class="col-xs-12 col-sm-6 stat-col">
                                                <div class="stat-icon"> <i class="fa fa-dollar"></i> </div>
                                                <div class="stat">
                                                    <div class="value"> $780.064 </div>
                                                    <div class="name"> Renda total </div>
                                                </div> <progress class="progress stat-progress" value="15" max="100">
            					<div class="progress">
            						<span class="progress-bar" style="width: 15%;"></span>
            					</div>
            				</progress> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </section>
                     
                    <section class="section map-tasks">
                        <div class="row sameheight-container">
                            <div class="col-xl-8">
                                <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                                    <div class="card-header bordered">
                                        <div class="header-block">
                                            <h3 class="title"> Campanhas Digitais que alcançaram o site</h3> 
                                            </div>
                                        <div class="header-block pull-right"> 
                                            <div class="pagination">
                                                <a href="" class="btn btn-primary btn-sm rounded"> <i class="fa fa-angle-up"></i> </a>
                                                <a href="" class="btn btn-primary btn-sm rounded"> <i class="fa fa-angle-down"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="item-list striped">
                                        <li class="item item-list-header hidden-sm-down">
                                            <div class="item-row"> 
                                                <div class="item-col item-col-header item-col-title">
                                                    <div> <span>Campanha</span> </div>
                                                </div>
                                                <div class="item-col item-col-header item-col-message">
                                                    <div> <span>Método</span> </div>
                                                </div>
                                               
                                                <div class="item-col item-col-header item-col-date">
                                                    <div> <span>Fonte</span> </div>
                                                </div>
												
												 <div class="item-col item-col-header item-col-date">
                                                    <div> <span>Cliques</span> </div>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <?php 
							
							 $query_notifications = mysqli_query($conexao, "SELECT campanhaCAMPANHA, meioCAMPANHA, fonteCAMPANHA, COUNT(campanhaCAMPANHA) AS TOTAL FROM tb0201_campanhas GROUP BY campanhaCAMPANHA, meioCAMPANHA, fonteCAMPANHA LIMIT 20");
							 while($notifications = mysqli_fetch_assoc($query_notifications)){?>
                                        <li class="item">
                                            <div class="item-row">
                                               
                                                <div class="item-col item-col-title no-overflow">
                                                <div class="item-heading">Campanha</div>
                                                    <div>
                                                       <?php echo ($notifications['campanhaCAMPANHA']);?>
                                                    </div>
                                                </div>
                                                <div class="item-col item-col-message">
                                                    <div class="item-heading">Método</div>
                                                    <div>
                                                        
                                                            <h4 class="item-title no-wrap"> <?php echo ($notifications['meioCAMPANHA']);?> </h4>
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="item-col item-col-date">
                                                    <div class="item-heading">Fonte</div>
                                                    <div> <?php echo $notifications['fonteCAMPANHA'];?> </div>
                                                </div>
												
												<div class="item-col item-col-date">
                                                    <div class="item-heading">Cliques</div>
                                                    <div> <?php echo $notifications['TOTAL'];?> </div>
                                                </div>
                                            </div>
                                        </li>
                                     <?php 
							
							 }?>
                                    </ul>
                                </div>
                            </div>
<div class="col-md-4">
	<div class="card tasks sameheight-item" data-exclude="xs,sm">
	
	
		<div class="card-header bordered">
			<div class="header-block">
				<h3 class="title"> Atendimentos </h3>
			</div>
			<div class="header-block pull-right"> 
			<a href="?make=atendimento" class="btn btn-primary btn-sm rounded pull-right">
				Ver Todos
			</a> 
			</div>
		</div>
		
		<div class="card-block">
			<div class="tasks-block">
				<ul class="item-list">

						<?php 
						$query_atendance = mysqli_query($conexao, "SELECT * FROM tb0101_atendimentos ORDER BY codigoATENDIMENTO DESC LIMIT 20");
						while($atendance = mysqli_fetch_assoc($query_atendance)){
						?>

							<li class="item">
								<div class="item-row">
								
									<div class="item-col item-col-title">
									
										<label>
											<input class="checkbox" type="checkbox" <?php if($atendance['ativoATENDIMENTO']=='0'){?>checked="checked"<?php }?>> 
											<span><?php echo $atendance['empresaATENDIMENTO'];?></span>
										</label> 
										
									</div>
									
									<div class="item-col fixed item-col-actions-dropdown">
										
										<div class="item-actions-dropdown">
										
											<a class="item-actions-toggle-btn"> 
											
												<span class="inactive"><i class="fa fa-cog"></i></span>
											
												<span class="active"> <i class="fa fa-chevron-circle-right"></i> </span> 
											</a>
											
											<div class="item-actions-block">
											
												<ul class="item-actions-list">
												
													<li>
													<a class="edit" href="?make=atendimento&acao=ver&codigo=<?php echo $atendance['codigoATENDIMENTO'];?>"> 
														<i class="fa fa-search"></i> 
													</a>
													</li>
													
												</ul>
											
											</div>
											
										</div>
									</div>
									
								</div>
							</li>

						<?php }?> 

				</ul>
			</div>
		</div>

	</div>
</div>
                      </div>
                    </section>