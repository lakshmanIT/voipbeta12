<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Voip Admin Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--base css styles-->
         <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		<link href="{{ url('/') }}/theme_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
		<link href="{{ url('/') }}/css/admin/bootstrap.min.css" rel="stylesheet" type="text/css">
		
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/admin/loading.css" />

        <!--flaty css styles-->
        <link rel="stylesheet" href="{{ url('/') }}/css/admin/flaty.css">
        <link rel="stylesheet" href="{{ url('/') }}/css/admin/flaty-responsive.css">

        <link rel="shortcut icon" href="{{ url('/') }}/img/favicon.png">
        

        <style type="text/css">
        .error
        {
            color: red;
        }

        .login-page:before{background: none!important}

        #form-login , #form-forgot
        {
            box-shadow    : 1px 1px 7px 1px #000;
            border-radius : 3px;
        }

        </style>

    </head>

        
     <body class="login-page" style='background-image: url({{url('/')}}/images/4.jpg) !important;background-position: center top;
    background-repeat: no-repeat;background-size: cover;' id="background">
        

        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            
            {!! Form::open([ 'url' => $admin_panel_slug.'/process_login',
                                 'method'=>'POST',
                                 'id'=>'form-login' 
                                ]) !!} 
                                    
                 {{ csrf_field() }}

                <h3>Login to your account</h3>
                <hr/>
                <div class="form-group ">
                    <div class="controls">
                        {!! Form::text('email',null,['class'=>'form-control',
                                        'data-rule-required'=>'true',
                                        'data-rule-email'=>'true',
                                        'placeholder'=>'Email']) !!}

                        <span class="error">{{ $errors->first('email') }} </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        

                        {!! Form::password('password',['class'=>'form-control',
                                        'data-rule-required'=>'true',
                                        'placeholder'=>'Password']) !!}

                        <span class="error">{{ $errors->first('password') }} </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                    {{-- {!! Form::Submit('Sign In',['class'=>'btn btn-primary form-control']) !!} --}}
                    <button  class="btn btn-info form-control" >Sign In</button>        
                    </div>
                </div>
                <hr/>
                <p class="clearfix">
                    <a href="#" class="goto-forgot pull-left">Forgot Password?</a>
                </p>
            </form>
            <!-- END Login Form -->

            <!-- BEGIN Forgot Password Form -->
            <form id="form-forgot" action="{{ url($admin_panel_slug.'/process_forgot_password') }}" method="post" style="display:none">
                 {{ csrf_field() }}

                <h3>Get back your password</h3>
                <hr/>
                <div class="form-group">
                    <div class="controls">
                        <input type="text" placeholder="Email" class="form-control" data-rule-required="true" data-rule-email="true" name="email"/>
                        <span class="error">{{ $errors->first('email') }} </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-info form-control call_loader">Recover</button>
                    </div>
                </div>
                <hr/>
                <p class="clearfix">
                    <a href="#" class="goto-login pull-left">← Back to login form</a>
                </p>
            </form>
            <!-- END Forgot Password Form -->
        </div>
        <!-- END Main Content -->


        <script src="{{ url('/') }}/theme_assets/js/main/jquery.min.js"></script>
		<script src="{{ url('/') }}/theme_assets/js/main/bootstrap.bundle.min.js"></script>
		<script src="{{ url('/') }}/theme_assets/js/plugins/loaders/blockui.min.js"></script>
        

        <!--flaty scripts-->
        <script src="{{ url('/') }}/js/admin/flaty.js"></script>
        <script src="{{ url('/') }}/js/admin/flaty-demo-codes.js"></script>
        <script src="{{ url('/') }}/js/admin/validation.js"></script>

        <script src="{{ url('/') }}/js/admin/loading.js"></script>


    </body>
</html>

