<!DOCTYPE html>
<html lang="en" >
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8"/>
      <title>iLeads Software | Login</title>



       <!--begin::Page Custom Styles(used by this page) -->
          <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css" />
       <!--end::Page Custom Styles -->



      <!--*************************************************
             begin:: header files
      ************************************************* -->
      @include('commonFiles/header')
      <!--*************************************************
              end:: header files
      ************************************************* -->
   </head>
   <!-- end::Head -->
   <!-- begin::Body -->
   <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >
      <!-- begin:: Page -->
      <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
          <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor ">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
              <div class="kt-login__container">
                <div class="kt-login__logo">
                  <a href="#">
                    <img src="{{asset('images/loginLogo.png')}}" alt="loginLogo">   
                  </a>
                </div>
                <div class="kt-login__signin">
                  <div class="kt-login__head">
                    <h3 class="kt-login__title">Sign In To Admin</h3>
                  </div>
                   <form method="POST" class="kt-form" action="{{ route('login') }}">
                        @csrf
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                    </div>
                    <div class="input-group">
                      <input class="form-control" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="row kt-login__extra">
                      <div class="col">
                        <label class="kt-checkbox">
                          <input type="checkbox" name="remember"> Remember me
                          <span></span>
                        </label>
                      </div>
                      <div class="col kt-align-right">
                        <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                      </div>
                    </div>
                    <div class="kt-login__actions">
                      <button id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign In</button>
                    </div>
                  </form>
                </div>
                <div class="kt-login__signup">
                  <div class="kt-login__head">
                    <h3 class="kt-login__title">Sign Up</h3>
                    <div class="kt-login__desc">Enter your details to create your account:</div>
                  </div>
                  <form class="kt-form" action="#">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Fullname" name="fullname">
                    </div>
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                    </div>
                    <div class="input-group">
                      <input class="form-control" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="input-group">
                      <input class="form-control" type="password" placeholder="Confirm Password" name="rpassword">
                    </div>
                    <div class="row kt-login__extra">
                      <div class="col kt-align-left">
                        <label class="kt-checkbox">
                          <input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                          <span></span>
                        </label>
                        <span class="form-text text-muted"></span>
                      </div>
                    </div>
                    <div class="kt-login__actions">
                      <button id="kt_login_signup_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
                      <button id="kt_login_signup_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                    </div>
                  </form>
                </div>
                <div class="kt-login__forgot">
                  <div class="kt-login__head">
                    <h3 class="kt-login__title">Forgotten Password ?</h3>
                    <div class="kt-login__desc">Enter your email to reset your password:</div>
                  </div>
                  <form class="kt-form" action="#">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                    </div>
                    <div class="kt-login__actions">
                      <button id="kt_login_forgot_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                      <button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                    </div>
                  </form>
                </div>
                <div class="kt-login__account">
                  <span class="kt-login__account-msg">
                    Don't have an account yet ?
                  </span>
                  &nbsp;&nbsp;
                  <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a>
                </div>
              </div>  
            </div>
          </div>
        </div>  
      </div>
    <!-- end:: Page -->

    <!--*************************************************
       begin:: Footer
    ************************************************* -->
    @include('commonFiles/footer')
    <!--*************************************************
       end:: Footer
    ************************************************* -->


     <!--begin::Page Scripts(used by this page) -->
        <script src="{{asset('js/login.js')}}" type="text/javascript"></script>
     <!--end::Page Scripts -->
   </body>
   <!-- end::Body -->
</html>