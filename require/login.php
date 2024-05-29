<div class="modal fade login-register login-register-modal" id="login-register-modal" tabindex="-1" role="dialog"
     aria-labelledby="login-register-modal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered mxw-571" role="document">
        <div class="modal-content">
          <div class="modal-header p-0">
            <div class="nav nav-tabs row w-100 no-gutters" id="myTab" role="tablist">
              <a class="nav-item col-sm-3 ml-0 nav-link pr-6 py-4 pl-9 active fs-18" id="login-tab"
                       data-toggle="tab"
                       href="#login"
                       role="tab"
                       aria-controls="login" aria-selected="true">Login</a>
              <a class="nav-item col-sm-3 ml-0 nav-link py-4 px-6 fs-18" id="register-tab" data-toggle="tab"
                       href="#register"
                       role="tab"
                       aria-controls="register" aria-selected="false">Register</a>
              <div class="nav-item col-sm-6 ml-0 d-flex align-items-center justify-content-end">
                <button type="button" class="close m-0 fs-23" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
          <div class="modal-body p-4 py-sm-7 px-sm-8">
            <div class="tab-content shadow-none p-0" id="myTabContent">
              <div class="tab-pane fade show active" id="login" role="tabpanel"
                         aria-labelledby="login-tab">


                <div id="retornoLogin"></div>


                <form class="form" id="login_form" name="login_form" method="post">
                  <div class="form-group mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <div class="input-group input-group-lg">
                      <div class="input-group-prepend ">
                        <span class="input-group-text bg-gray-01 text-muted fs-18"
                                                      id="inputGroup-sizing-lg">
                          <i class="far fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control shadow-none fs-13"
                                           id="username" name="username" required
                                           placeholder="Username / Your email">
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <div class="input-group input-group-lg">
                      <div class="input-group-prepend ">
                        <span class="input-group-text bg-gray-01 text-muted fs-18">
                          <i class="far fa-lock"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control shadow-none fs-13"
                                           id="password" name="password" required
                                           placeholder="Password">
                      <div class="input-group-append">
                        <span class="input-group-text bg-gray-01 text-body fs-18" style="cursor:pointer" onclick="mostraSenha()">
                          <i class="far fa-eye-slash" id="elementoEye"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex mb-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="remember-me" name="remember-me">
                      <label class="form-check-label" for="remember-me">
                        Remember me
                      </label>
                    </div>
                    <a href="/lost-password" class="d-inline-block ml-auto text-orange fs-15">
                      Lost password?
                    </a>
                  </div>
                  <div class="d-flex   align-items-center mb-4">
                   
                    <div class="d-inline-block ml-auto g-recaptcha" 
                    data-sitekey="6LfTspkpAAAAAHlAAktkVIs28kbm2csg4kRfDON5" 
                    ></div>
 


                  </div>
                  <button type="button" class="btn btn-primary btn-lg btn-block" onclick="checkRecaptcha()">Log in</button>
                </form>
                <div class="divider text-center my-2">
                  <span class="px-4 bg-white lh-17 text">
                    or continue with
                  </span>
                </div>
                <div class="row no-gutters mx-n2">
                   
                  <div class="col-12 px-2 mb-12">
                   
                    <div id="g_id_onload"
     data-client_id="35484172793-d3ckles74e0qf6938ak070cinhii80vi.apps.googleusercontent.com"
     data-context="signin"
     data-ux_mode="popup"
     data-callback="handleLoginResponse"
     data-nonce=""
     data-auto_select="false"
     data-itp_support="true">
</div>





<div class="g_id_signin"
     data-type="standard"
     data-shape="rectangular"
     data-theme="outline"
     data-text="signin_with"
     data-size="large"
     data-logo_alignment="center">
</div>


                  </div>
                   
                </div>
              </div>
              <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form class="form">
                  <div class="form-group mb-4">
                    <label for="full-name" class="sr-only">Full name</label>
                    <div class="input-group input-group-lg">
                      <div class="input-group-prepend ">
                        <span class="input-group-text bg-gray-01 text-muted fs-18">
                          <i class="far fa-address-card"></i></span>
                      </div>
                      <input type="text" class="form-control shadow-none fs-13"
                                           id="full-name" name="full-name" required
                                           placeholder="Full name">
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <label for="username01" class="sr-only">Username</label>
                    <div class="input-group input-group-lg">
                      <div class="input-group-prepend ">
                        <span class="input-group-text bg-gray-01 text-muted fs-18">
                          <i class="far fa-user"></i></span>
                      </div>
                      <input type="text" class="form-control shadow-none fs-13"
                                           id="username01" name="username01" required
                                           placeholder="Username / Your email">
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <label for="password01" class="sr-only">Password</label>
                    <div class="input-group input-group-lg">
                      <div class="input-group-prepend ">
                        <span class="input-group-text bg-gray-01 text-muted fs-18">
                          <i class="far fa-lock"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control shadow-none fs-13"
                                           id="password01" name="password01" required
                                           placeholder="Password">
                      <div class="input-group-append">
                        <span class="input-group-text bg-gray-01 text-body fs-18">
                          <i class="far fa-eye-slash"></i>
                        </span>
                      </div>
                    </div>
                    <p class="form-text">Minimum 8 characters with 1 number and 1 letter</p>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Sign up</button>
                </form>
                <div class="divider text-center my-2">
                  <span class="px-4 bg-white lh-17 text">
                    or continue with
                  </span>
                </div>
                <div class="row no-gutters mx-n2">
                   
                  <div class="col-12 px-2 mb-12">
                  <div class="g_id_signin"
                      data-type="standard"
                      data-shape="rectangular"
                      data-theme="outline"
                      data-text="signin_with"
                      data-size="large"
                      data-logo_alignment="center">
                  </div>
                  </div>
                   
                </div>
                <div class="mt-2">By creating an account, you agree to JoviPlanet
                  <a class="text-heading" href="#"><u>Terms of Use</u> </a> and
                  <a class="text-heading" href="#"><u>Privacy Policy</u></a>.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>