@include('_includes.login.header')

<body class="page-body login-page login-form-fall" data-url="http://demo.neontheme.com">
    <script type="text/javascript">
        var baseurl = '';
    </script>
    <div class="login-container">
        <div class="login-header login-caret">
            <div class="login-content"> 
                <a href="{{route('home')}}" class="logo"> 
                    <img src="{{ asset('img/logo.png')}}" width="300" alt="" /> 
                </a> 

                <p class="description">Create an account, and join us! </p>
                <!-- progress bar indicator -->
                <div class="login-progressbar-indicator">
                    <h3>43%</h3> <span>Registering your account ...</span> </div>
            </div>
        </div>
        <div class="login-progressbar">
            <div></div>
        </div>
        <div class="login-form">
            <div class="login-content">
                <form method="post" role="form" id="form_register" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    
                    {{-- <div class="form-register-success"> 
                        <i class="fa fa-check"></i>
                        <h3>You have been successfully registered.</h3>
                        <p>We have emailed you the confirmation link for your account.</p>
                    </div> --}}

                    @if ($errors->any())
                    {{-- Error Handling --}}
                        <div class="form-login-error visible"> 
                            <h3>Registration Failed.</h3>
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif


                    <div class="form-steps">
                        <div class="step current" id="step-1">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> 
                                        <i class="fa fa-user"></i> 
                                    </div> 
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" autocomplete="off" /> 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> 
                                        <i class="fa fa-user-plus"></i> </div> 
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Nickname" data-mask="[a-zA-Z0-9\.]+" data-is-regex="true" autocomplete="off" /> 
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                     <i class="fa fa-envelope"></i>
                                    </div> 
                                        <input type="text" class="form-control" name="email" id="email" data-mask="email" placeholder="E-mail" autocomplete="off" /> 
                                </div>
                            </div>
                            
                            <div class="form-group"> 
                                <button type="button" id="step-2-c" data-step="step-2" class="btn btn-primary btn-block btn-login"> 
                                    <i class="fa fa-arrow-right"></i>
                                    Next Step
                                </button> 
                            </div>
                            <div class="form-group">
                                Step 1 of 2
                            </div>
                        </div>
                        <div class="step" id="step-2">
                            
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-phone"></i> </div> <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Phone Number" data-mask="[0-9\.]+" data-is-regex="true" autocomplete="off" /> </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-lock"></i> </div> <input type="password" class="form-control" name="password" id="password" placeholder="Choose Password" autocomplete="off" /> </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-lock"></i> </div> <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" autocomplete="off" /> </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-users"></i> </div> <input type="referrer" class="form-control" name="referrer" id="referrer" placeholder="Referrer (optional)" autocomplete="off" /> </div>
                            </div>
                            <div class="form-group"> 
                                <button type="submit" class="btn btn-success btn-block btn-login"> 
                                    <i class="entypo-right-open-mini"></i>
                                    Complete Registration
                                </button> 
                            </div>
                            <div class="form-group">
                                Step 2 of 2
                            </div>
                        </div>
                    </div>
                </form>
                <div class="login-bottom-links"> 
                    <a href="{{route('login')}}" class="link"> 
                        <i class="fa fa-lock"></i>&nbsp;&nbsp;Return to Login Page
                    </a><br /> 
                    <a href="{{route('password.request')}}">Forgot your password?</a>
                </div>
            </div>
        </div>
    </div>
    

@include('_includes.login.footer')

