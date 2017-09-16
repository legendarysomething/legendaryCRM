@include('_includes.header')


<body class="page-body login-page login-form-fall" data-url="http://demo.neontheme.com">
      <!-- TS15054631954222: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> <script type="text/javascript">
         var baseurl = 'http://demo.neontheme.com/';
      </script> 
      <div class="login-container">
         <div class="login-header login-caret">
            <div class="login-content">
               <a href="#" class="logo"> <img src="{{ asset('images/logos/logo.png')}}" width="300" alt="" /> </a> 
               <p class="description">Welcome! Kindly log in to access your profile!</p>
               <!-- progress bar indicator --> 
               <div class="login-progressbar-indicator">
                  <h3>43%</h3>
                  <span>logging in...</span> 
               </div>
            </div>
         </div>

         <div class="login-progressbar">
            <div></div>
         </div>

         <div class="login-form">
            <div class="login-content">
               <div class="form-login-error">
                  <h3>Invalid login</h3>
               </div>
               <form method="post" role="form" id="form_login">
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-addon"> <i class="fa fa-user-o"></i> </div>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" /> 
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-addon"> <i class="fa fa-key"></i> </div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" /> 
                     </div>
                  </div>
                  <div class="form-group"> <button type="submit" class="btn btn-primary btn-block btn-login"> <i class="fa fa-sign-in"></i>
                     Login In
                     </button> 
                  </div>
                  {{-- <div class="form-group"> <em>- or -</em> </div> --}}

                 {{--  <div class="form-group"> <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
                     Login with Facebook
                     <i class="entypo-facebook"></i> </button> 
                  </div> --}}

               </form>
               <div class="login-bottom-links"> 
	               <a href="../forgot-password/index.html" class="link">Forgot your password?</a> 
	               <br /> 
	               {{-- TODO: Link --}}
	               <a href="#">Contact Us!</a> 
               </div>
            </div>
         </div>
      </div>







@include('_includes.footer')
