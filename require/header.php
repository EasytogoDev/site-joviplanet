<?php if ($make == "result-search" or $make == "contact" or $make == "cookies-policy" or $make == "privacy-policy" or $make == "faqs") { ?>

  <header class="main-header navbar-light header-sticky header-sticky-smart header-mobile-lg" style=" border-bottom: 1px solid #a2abba">

  <?php } else { ?>

  <header class="main-header position-absolute fixed-top m-0 navbar-dark header-sticky header-sticky-smart header-mobile-xl">

    <?php } ?>


    <div class="sticky-area" >
      <div class="container container-xxl">
        <div class="d-flex align-items-center">
          
          <nav class="navbar navbar-expand-xl bg-transparent px-0 w-100 w-xl-auto">
            <a class="navbar-brand mr-7" href="/">
 

            <?php 
            
              if ($make == "result-search" or $make == "contact" or $make == "cookies-policy" or $make == "privacy-policy" or $make == "faqs") { ?>
                

                <img src="/images/jovilogo.png" alt="Jovi Planet" class="normal-logo">
                <img src="/images/jovilogo.png" alt="Jovi Planet" class="sticky-logo">
  
             

              <?php } else { 
                
                ?>
                

                <img src="/images/jovilogo_normal.png" alt="Jovi Planet" class="normal-logo">
                <img src="/images/jovilogo.png" alt="Jovi Planet" class="sticky-logo">


              <?php } ?>


            </a>
            <a class="d-block d-xl-none ml-auto mr-4 position-relative text-white p-2" href="#">
              <i class="fal fa-heart fs-large-4"></i>
              <span class="badge badge-primary badge-circle badge-absolute">1</span>
            </a>
            <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse"
              data-target="#primaryMenu02" aria-controls="primaryMenu02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="text-white fs-24"><i class="fal fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse mt-3 mt-xl-0" id="primaryMenu02">
              <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n4">
                <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false"
                  class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                  <a class="nav-link p-0" style="" href="/about-us">
                  Sobre nós
                    <span class="caret"></span>
                  </a>

                </li>

                <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false"
                  class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                  <a class="nav-link p-0" style="" href="/prices">
                    Preços
                    <span class="caret"></span>
                  </a>

                </li>


                
                <li id="navbar-item-home" aria-haspopup="true" aria-expanded="false"
                  class="nav-item dropdown py-2 py-xl-5 px-0 px-xl-4">
                  <a class="nav-link p-0" style="" href="/contact">
                    Contato
                    <span class="caret"></span>
                  </a>

                </li>

              </ul>
              
              <div class="d-block d-xl-none">
                <ul class="navbar-nav flex-row ml-auto align-items-center justify-content-lg-end flex-wrap py-2">

                
                  <li class="divider"></li>
                  <li class="nav-item ">
                    <a class="nav-link pl-3 pr-2" data-toggle="modal" href="#login-register-modal">SIGN IN</a>
                  </li>
                  <li class="nav-item ml-auto w-100 w-sm-auto"> 
                    <a class="btn btn-primary btn-lg" style="" href="become-a-host">
                      Become a Host 
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="ml-auto d-none d-xl-block">
            <ul class="navbar-nav flex-row ml-auto align-items-center justify-content-lg-end flex-wrap py-2">
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-md-2 pr-2 pl-0 pl-lg-2" style="" href="#" id="bd-versions"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  US$
                </a>
                <div class="dropdown-menu dropdown-sm dropdown-menu-right" style="" aria-labelledby="bd-versions">
                  <a class="dropdown-item" style="" href="#">BLR</a>
                  <a class="dropdown-item active" style="" href="#">ENG</a>
                  <a class="dropdown-item" style=""  href="#">ARB</a>
                  <a class="dropdown-item" style="" href="#">KR</a>
                  <a class="dropdown-item" style="" href="#">JN</a>
                </div>
              </li> -->
              <li class="nav-item">&nbsp;</li>
              
              <?php
              
              if (isset($_SESSION['loginUSUARIO']) && isset($_SESSION['senhaUSUARIO'])){
                ?> 
                <li class="nav-item ">
                <a class="nav-link pl-3 pr-2"  href="/dashboard"><?php echo $usuario['nomeUSUARIO'];?> <?php echo $usuario['sobrenomeUSUARIO'];?></a>
              </li>
                <?php
              }else{
                ?> 
                <li class="nav-item ">
                <a class="nav-link pl-3 pr-2" style="" data-toggle="modal" href="#login-register-modal">Login</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link pl-3 pr-2" style="" data-toggle="modal" href="#login-register-modal">Register</a>
              </li>

                <?php
              }
              ?>
              
              <li class="nav-item">&nbsp;</li>
             

              <li class="nav-item">

              <?php 
            
            if ($make == "result-search" or $make == "contact" or $make == "cookies-policy" or $make == "privacy-policy" or $make == "faqs" ) { ?>
              

              <a class="btn btn-outline btn-lg text-primary rounded-lg bg-hover-primary hover-white border-primary d-none d-lg-block"
                  href="/become-a-host" style=""> Become a Host </a>

           

            <?php } else { 
              
              ?>
              

              <a class="btn btn-outline-light btn-lg text-white rounded-lg bg-hover-primary border-hover-primary hover-white d-none d-lg-block"
                  href="/become-a-host" style=""> Become a Host </a>


            <?php } ?>

                



                <a class="btn btn-primary btn-lg d-block d-lg-none" href="/become-a-host">
                  Become a Host
                 
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>