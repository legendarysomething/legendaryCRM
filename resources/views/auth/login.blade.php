@include('_includes.header')

{{-- uses custom js --}}

<body class="page-body login-page login-form-fall" data-url="http://demo.neontheme.com">

      <script type="text/javascript">
         // Redirect Location after Login
         // var baseurl = 'route('home')';
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
               
               {{-- Reference for later to add in the animation --}}
               {{-- <form method="post" role="form" id="form_login"> --}}


               <form class="form-horizontal" id="login-form-submit" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-login-error {{ ($errors->has('email') || $errors->has('password')) ? 'visible' : '' }}">
                        <h3>Invalid Login Credentials</h3>
                    </div>

                    <div class="form-group">
                        <div class="input-group {{ $errors->has('email') ? 'validate-has-error' : '' }}">
                            <div class="input-group-addon"> <i class="fa fa-user-o"></i> </div>
                            <input type="text" class="form-control custom-click-sam" name="email" id="email" placeholder="E-Mail" autocomplete="off" /> 
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group {{ $errors->has('password') ? 'validate-has-error' : '' }}">
                            <div class="input-group-addon"> <i class="fa fa-key"></i> </div>
                            <input type="password" class="form-control custom-click-sam" name="password" id="password" placeholder="Password" autocomplete="off" /> 
                        </div>
                    </div>
                  

                    <div class="form-group"> 
                        <div class="btn btn-primary btn-block btn-login">
                             {{-- <div onclick="event.preventDefault(); document.getElementById('login-form-submit').submit();"> --}}
                             <div id="custom-login-sam">
                                Log In<i class="fa fa-sign-in"></i> 
                            </div> 
                        </div>
                    </div>
                  {{-- <div class="form-group"> <em>- or -</em> </div> --}}

                 {{--  <div class="form-group"> <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
                     Login with Facebook
                     <i class="entypo-facebook"></i> </button> 
                  </div> --}}

               </form>
               <div class="login-bottom-links"> 
	               <a href="{{ route('password.request') }}" class="link">Forgot your password?</a> 
	               <br /> 
	               {{-- TODO: Link --}}
	               <a href="#">Contact Us!</a> 
               </div>
            </div>
         </div>
      </div>




@include('_includes.footer')
