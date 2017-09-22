@include('_includes.login.header')

{{-- uses custom js --}}

<body class="page-body login-page login-form-fall" data-url="http://demo.neontheme.com">

      <script type="text/javascript">
         // Redirect Location after Login
         // var baseurl = 'route('home')';
      </script> 

      <div class="login-container">
         <div class="login-header login-caret">
            <div class="login-content">
               <a href="#" class="logo"> <img src="{{ asset('img/logo.png')}}" width="300" alt="" /> </a> 
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
                        <div class="input-group {{ $errors->has('email') ? 'validate-has-error' : 'focused' }}">
                            <div class="input-group-addon"> <i class="fa fa-user"></i> </div>
                            <input type="text" class="form-control custom-click-sam" name="email" id="email" placeholder="E-Mail" autocomplete="off" value="superadministrator@app.com"/> 
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group {{ $errors->has('password') ? 'validate-has-error' : 'focused' }}">
                            <div class="input-group-addon"> <i class="fa fa-key"></i> </div>
                            <input type="password" class="form-control custom-click-sam" name="password" id="password" placeholder="Password" autocomplete="off" value="password"/>
                        </div>
                    </div>
                    
                   {{--  <div class="form-group">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div> --}}

                    <div class="form-group"> 
                        <div id="custom-login-sam">
                            <div class="btn btn-primary btn-block btn-login">
                                {{-- <div onclick="event.preventDefault(); document.getElementById('login-form-submit').submit();"> --}}
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
	               <a href="{{route('register')}}">Register Here!</a> 
               </div>
            </div>
         </div>
      </div>




@include('_includes.login.footer')
