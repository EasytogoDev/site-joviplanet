<div class="d-flex px-3 px-xl-6 w-100">
                <a class="navbar-brand" href="/dashboard">
                  <img src="/images/jovilogo.png" alt="JoviPlanet">
                </a>
                <div class="ml-auto d-flex align-items-center ">
                  <div class="d-flex align-items-center d-xl-none">
                    
                  <div class="dropdown px-3">
                      <a href="#" class="dropdown-toggle d-flex align-items-center text-heading"
                           data-toggle="dropdown">
                        <div class="w-48px">
                          <img src="<?php echo $usuario['fotoUSUARIO']; ?>"
                                     alt="<?php echo $usuario['nomeUSUARIO']; ?>  <?php echo $usuario['sobrenomeUSUARIO']; ?>"   title="<?php echo $usuario['nomeUSUARIO']; ?>  <?php echo $usuario['sobrenomeUSUARIO']; ?>" class="rounded-circle">
                        </div>
                        <span class="fs-13 font-weight-500 d-none d-sm-inline ml-2">
                        <?php echo $usuario['nomeUSUARIO']; ?>  <?php echo $usuario['sobrenomeUSUARIO']; ?>
                        </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/profile">My Profile</a> 
                        <a class="dropdown-item g_id_signout" href="javascript:;" onclick="realizaLogout()">Logout</a>
                      </div>  
                    </div>
                     
                  </div>
                  <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse"
                        data-target="#primaryMenuSidebar"
                        aria-controls="primaryMenuSidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
              </div>