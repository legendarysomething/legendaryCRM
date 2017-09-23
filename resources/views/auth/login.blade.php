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


               <form class="form-horizontal" role="form" id="form_login" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-login-error {{ ($errors->has('email') || $errors->has('password')) ? 'visible' : '' }}">
                        <h3>Invalid Login Credentials</h3>
                    </div>
                    <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-addon"> <i class="fa fa-user"></i> </div>
                            <input type="text" class="form-control" name="email" id="email" placeholder="E-Mail" autocomplete="off" value="superadministrator@app.com"/> 
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-addon"> <i class="fa fa-key"></i> </div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" value="password"/>
                     </div>
                  </div>
                  <div class="form-group"> <button type="submit" class="btn btn-primary btn-block btn-login"> <i class="fa fa-sign-in"></i>
                     Log In
                     </button> 
                  </div>
                  

               </form>
               <div class="login-bottom-links"> 
	               <a href="{{ route('password.request') }}" class="link">Forgot your password?</a> 
	               <br /> 
	               <a href="{{route('register')}}">Register Here!</a> 
               </div>
            </div>
         </div>
      </div>




@include('_includes.login.footer')
