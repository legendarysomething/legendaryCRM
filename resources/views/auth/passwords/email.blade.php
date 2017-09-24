@include('_includes.login.header')



<body class="page-body login-page login-form-fall" data-url="#">

      <script type="text/javascript">
         var baseurl = '#';
      </script> 

      <div class="login-container">
         <div class="login-header login-caret">
            <div class="login-content">
               <a href="../../dashboard/main/index.html" class="logo"> <img src="{{asset('img/logo.png')}}" width="300" alt="" /> </a> 
               <p class="description">Enter your email, and we will send the reset link.</p>
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
               <form method="POST" action="{{ route('password.email') }}" role="form" id="form_forgot_password">
                  {{ csrf_field() }}

                  
                  @if ($errors->any())
                    {{-- Error Handling --}}
                        <div class="form-login-error visible"> 
                            <h3>Password Reset Failed.</h3>
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    @if (session('status'))
                    {{-- Success Message --}}
                        <div class="form-forgotpassword-success visible">
                            <h3>Reset email has been sent.</h3>
                            <p>{{ session('status') }}</p>
                        </div>
                    @endif

                  <div class="form-steps">
                     <div class="step current" id="step-1">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon"> <i class="fa fa-envelope"></i> </div>
                              <input type="text" class="form-control" name="email" id="email" placeholder="Email" data-mask="email" autocomplete="off" /> 
                           </div>
                        </div>
                        <div class="form-group"> 
                            <button type="submit" class="btn btn-info btn-block btn-login">
                            Send Me The Email
                            <i class="fa fa-chevron-right"></i> 
                            </button> 
                        </div>
                     </div>
                  </div>
               </form>
               <div class="login-bottom-links"> 
               	{{-- TODO: redirection to login page --}}
               	<a href="{{ route('login') }}" class="link"> 
               		<i class="fa fa-lock"></i>&nbsp;&nbsp;Return to Login Page
                </a> 
                <br /> 
                    <a href="{{route('register')}}">Register Here!</a> 
               </div>
            </div>
         </div>
      </div>



@include('_includes.login.footer')
