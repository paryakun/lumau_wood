<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{$data->website_name}} | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <link rel="shortcut icon" href="{{asset('assets/frontend/img/icon.png')}}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('assets/admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/jquery.fileupload.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/components-rounded.min.css')}}" rel="stylesheet" id="style_components" type="text/css">

    <link href="{{asset('assets/admin/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{asset('assets/admin/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/css/toastr.min.css')}}" rel="stylesheet" type="text/css" />

    
    @yield('css')
</head>



<body class="page-header-fixed page-sidebar-closed-hide-logo">
    @include('admin.includes._header')

    <div class="clearfix"> </div>
    <div class="page-container">
        @include('admin.includes._sidebar')
        
        @yield('content')
    </div>
    

    @include('admin.includes._footer')

    <script src="{{asset('assets/admin/js/respond.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/excanvas.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.blockui.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/jquery.uniform.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/bootstrap-switch.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/app.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/layout.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/demo.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/toastr.min.js')}}"></script>
    {!! Toastr::render() !!}
    @yield('js')
    
</body>

</html>