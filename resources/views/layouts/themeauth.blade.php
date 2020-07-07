    @include('layouts.head')

    <body class="sign-in">
        <div class="wrapper">
            <div class="sign-in-page">
                <div class="signin-popup">
                    <div class="signin-pop">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cmp-info">
                                    <div class="cm-logo">
                                        <img src="{{ asset('assets/images/cm-logo.png') }}" alt="">
                                    </div><!--cm-logo end-->	
                                    <img src="{{ asset('assets/images/cm-main-img.png') }}" alt="">			
                                </div><!--cmp-info end-->
                            </div>
                            <div class="col-lg-6">
                                <div class="login-sec">		
                                    <div class="sign_in_sec current" >
                                        <h3>Se connecter</h3>
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>		
                    </div><!--signin-pop end-->
                </div><!--signin-popup end-->
                
        @include('layouts.scriptlogin')
        
