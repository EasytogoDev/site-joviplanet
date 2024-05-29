
                    <div class="header-block header-block-collapse hidden-lg-up"> <button class="collapse-btn" id="sidebar-collapse-btn">
    			<i class="fa fa-bars"></i>
    		</button> </div>
                    <div class="header-block header-block-search hidden-sm-down">
                        <!--<form role="search">
                            <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Pesquisar">
                                <div class="underline"></div>
                            </div>
                        </form>-->
                    </div>
                    
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="notifications new"><?php
                            $query_resultados = mysqli_query($conexao, "SELECT * FROM tb0101_atendimentos WHERE ativoATENDIMENTO = '1' ORDER BY codigoATENDIMENTO DESC LIMIT 10");
                                    $contagem = mysqli_num_rows($query_resultados);
                            ?>
                                <a href="" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <sup>
    			      <span class="counter"><?php echo $contagem;?></span>
    			    </sup> </a>
                                <div class="dropdown-menu notifications-dropdown-menu">
                                    <ul class="notifications-container">
                                    
                                    <?php
									
									while($resultados = mysqli_fetch_assoc($query_resultados)){
									
									?>
                                        <li>
                                            <a href="?make=atendimento&acao=ver&codigo=<?php echo ($resultados['codigoATENDIMENTO']);?>" class="notification-item">
                                                <div class="body-col">
                                                    <p> <span class="accent"><?php echo ($resultados['nomeATENDIMENTO']);?></span>: <span  ><?php echo substr($resultados['mensagemATENDIMENTO'], 0, 30 ), '...';?></span>. </p>
                                                </div>
                                            </a>
                                        </li>
                                   <?php
                                    
									}
									
									?>
                                   
                                        
                                        
                                        
                                    </ul>
                                    <footer>
                                        <ul>
                                            <li> <a href="?make=atendimento">
    			           Visualizar Todos
    			          </a> </li>
                                        </ul>
                                    </footer>
                                </div>
                            </li>
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <div class="img" ><img src="<?php echo $configuracoes['logoEMPRESA'];?>" height="32" width="32" /></div> <span class="name">
    			      <?php echo $usuario['nomeUSUARIO']?>
    			    </span> </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="?make=cadastro"> <i class="fa fa-user icon"></i> Dados da Empresa </a>
                                    <a class="dropdown-item" href="?make=cadastro&acao=perfil"> <i class="fa fa-user icon"></i> Meu Perfil </a>
                                    <a class="dropdown-item" href="?make=atendimento"> <i class="fa fa-user icon"></i>Atendimento </a>
                                   
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="?make=login&acao=logout"> <i class="fa fa-power-off icon"></i> Sair </a>
                                </div>
                            </li>
                        </ul>
                    </div>