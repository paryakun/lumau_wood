<!DOCTYPE html>

<html lang="en">


    <head>
      <meta charset="utf-8" />
      <title> {{$data->website_name}} | Login </title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <meta content="" name="description" />
      <meta content="" name="author" />
    
       <link rel="shortcut icon" href="{{asset('assets/frontend/img/icon.png')}}" type="image/x-icon">

      <link href="{{asset('assets/admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/admin/css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/admin/css/jquery.fileupload.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/admin/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />

     
      <link href="{{asset('assets/admin/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/admin/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/admin/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/admin/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css">
      <link href="{{asset('assets/admin/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/admin/css/login.min.css')}}" rel="stylesheet" type="text/css" />
      <link rel="shortcut icon" href="favicon.ico" /> 


     </head>

    <body class=" login">
        <div class="menu-toggler sidebar-toggler"></div>
        <div class="logo">
            <a href="index.html">
                <img src="../assets/pages/img/logo-big.png" alt="" /> </a>
        </div>
        <div class="content">
            <form class="login-form" method="POST" action="{{ route('login') }}">
                <h3 class="form-title font-green">Sign In</h3>
                @csrf

                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input type="text" placeholder="Login" class="form-control login-username" id="login-username" autocomplete="off" name="name" /></div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input type="password" placeholder="Password" class="form-control login-password" autocomplete="off" id="login-password" name="password" /> 
                <div class="form-actions">
                    <button type="submit" style="width: 100%" class="btn green uppercase">Login</button>
                
                </div>
               
                
            </form>
          
        </div>
        <div class="copyright"> {{ date("Y")}} © {{$data->website_name}} </div>
  
<script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/js/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.blockui.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.uniform.min.js')}}"></script>
<script src="{{asset('assets/admin/js/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('assets/admin/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/jquery.backstretch.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/app.min.js')}}"></script>
<script src="{{asset('assets/admin/js/login-5.min.js')}}" type="text/javascript"></script>
    </body>

</html>