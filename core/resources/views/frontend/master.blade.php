<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data->website_name}} | {{$data->website_title}}</title>
    <link rel="shortcut icon" href="{{asset('assets/frontend/img/icon.png')}}" type="image/x-icon">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">

   <link href="{{url('/')}}/assets/frontend/css/color.php?firastColor={{$data->base_color}}&secondColor={{$data->sub_color}}" rel="stylesheet">
</head>

<body>
    <header class="header-area header-area-bg" id="home" style="background-image:url({{asset('assets/frontend/img/background-image.png')}});" >
        <nav class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{route('website')}}" class="logo" >
                            <img  style="  max-width: 190px;
                            max-height: 60px;" src="{{asset('assets/frontend/img/logo.png')}}" alt="logo image" >
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-6">
                        <div class="responsive-menu">
                        </div>
                        <ul id="main-menu">
                            <li class="active">
                                <a href="#home">Home</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#feature">Features</a>
                            </li>
                            <li>
                                <a href="#screen">Portfolio</a>
                            </li>
                            <li>
                                <a href="#team">Team</a>
                            </li>
                            <li>
                                <a href="#review">Review</a>
                            </li>
<!--                             <li>
                                <a href="#price">Price</a>
                            </li> -->
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{$data->menu_download_link}}" target="_blank" class="boxed-btn blank">Download </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="header-slider">
            <div class="single-header-slide-item">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('assets/frontend/img/advertise-image.png')}}" alt="header left image">
                        </div>
                        <div class="col-md-8">
                            <h1>
                                {{$data->header_title}}
                            </h1>
                            <p> {!! $data->header_text !!}</p>
                            <div class="header-btn-group">
                                <a href="{{$data->link_one}}" class="img-btn">
                                    <img src="{{asset('assets/frontend/img/link-one-image.png')}}" alt="google play store button">
                                </a>
                                <a href="{{$data->link_two}}" class="img-btn">
                                    <img src="{{asset('assets/frontend/img/link-two-image.png')}}" alt="Apple App store button">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="about-us-area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="content">
                        <h2>{{$data->company_title}}</h2>
                        <span class="sub-title">{{$data->company_short_title}}</span>
                        {!! $data->company_description !!}
                        <br>
                        <a href="{{$data->company_btn_link}}" class="boxed-btn blank">Download Now</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-us-right-image">
                        <img src="{{asset('assets/frontend/img/about-section-image.png')}}" alt="about us image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-app-area" >
        <div class="container">
            <div class="row">
                @foreach($productQuality as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="single-about-app-box">
                        <div class="icon" style="font-size: 30px;color:#8F00CF">
                            <i class="fa {{$item->icon}}"></i>
                        </div>
                        <div class="content">
                            <h4>
                                {{$item->title}}
                            </h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="feature-area" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title">
                        <h3>{{$data->feature_title}}</h3>
                        <span class="separator">
                            <img src="assets/frontend/img/separator.png" alt="separator">
                        </span>
                        <p>{!! $data->feature_text !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
               
                
                <div class="col-md-4 col-sm-12">
                    <div class="featured-right-item">
                        @foreach($latestFeature as $item)
                        <div class="single-featured-box">
                            <div class="icon">
                                <div class="icon-inner">
                                        <i class="fa {{$item->icon}}"></i>
                                </div>
                            </div>
                            <div class="content">
                                <h4>{{$item->title}}</h4>
                                <p>{!! $item->description !!}
                                </p>
                            </div>
                        </div>
                     @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 text-center">
                    <div class="center-img">
                        <img src="{{asset('assets/frontend/img/feature-image.png')}}" alt="fetured mobile ">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                        <div class="featured-left-item">
                            @foreach($oldFeature as $item)
                            <div class="single-featured-box">
                                <div class="icon">
                                    <div class="icon-inner">
                                            <i class="fa {{$item->icon}}"></i>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4>{{$item->title}}</h4>
                                    <p>{!! $item->description !!}
                                    </p>
                                </div>
                            </div>
                         @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="introduce-with-area" style="background-image: url(assets/frontend/img/video-section-bg-img.png)" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <a href="{{$data->video_link}}" class="video-play-btn mfp-iframe">
                        <i class="fas fa-play"></i>
                    </a>
                    <h3>
                        <span>{{$data->video_title}}</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-area">
        <div class="container">
            <div class="row">
                @foreach($achievements as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="single-counter-box text-center">
                        <div class="icon" >
                                <i class="fa {{$item->icon}}"></i>
                        </div>
                        <div class="content">
                            <span class="counter-text">{{$item->total}}</span>
                            <h6>{{$item->title}}</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="suitable-area suitable-area-bg" style="background-image: url({{asset('assets/frontend/img/suitable-section-bg-img.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="left-content">
                        <h3>
                            {{$data->suitable_title}}
                        </h3>
                        <p>{!! $data->suitable_description !!}</p>
                        <a href="{{$data->suitable_link}}" class="boxed-btn blank">Download</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-img">
            <img src="{{asset('assets/frontend/img/suitable-section-img.png')}}" alt="suitable right image">
        </div>
    </section>
    <section class="screenshort-area" id="screen">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title">
                        <h3>{{$data->screensoht_title}}</h3>
                        <span class="separator">
                            <img src="assets/frontend/img/separator.png" alt="separator">
                        </span>
                        <p>{!! $data->screensoht_description !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="screenshort-carousel">
                        @foreach($apps as $item)
                        <div class="single-carousel-item">
                            <img src="{{asset($item->image)}}" alt="screen short">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2  text-center">
                    <h3>
                        {{$data->subscriber_title}}
                    </h3>
                </div>
                <div class="col-md-6 col-md-offset-3">
                   
                    <div class="subscription-form">
                        <form id="subscriberForm" action="" method="POST">
                            <p>
                                <input type="text" name="email" id="subscriberMail" placeholder="Type your email here.....">
                                <button type="submit">
                                    <i class="far fa-envelope"></i> Subscribe
                                </button>
                                <span >
                                    <strong id="subEmail" style="color: red"></strong>
                                </span>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team-member-area" id="team">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title">
                        <h3>{{$data->team_title}}</h3>
                        <span class="separator">
                            <img src="assets/frontend/img/separator.png" alt="separator">
                        </span>
                        <p>{!! $data->team_description !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($teamMembers as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="single-team-member">
                        <div class="thumb">
                            <img src="{{asset($item->image)}}" alt="team member images">
                            <div class="hover">
                                <div class="content">
                                    <h6>{{$item->name}}</h6>
                                    <span class="post">{{$item->position}} </span>
                                </div>
                                <ul class="social">
                                    <li>
                                        <a href="{{$item->lnk_one}}" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$item->lnk_two}}" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$item->lnk_three}}" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$item->lnk_four}} ">
                                            <i class="fab fa-instagram" target="_blank"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="user-review-area" id="review">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title">
                        <ul class="user-review">
                            @for($i = 1; $i <= $data->user_review_star ; $i++)
                            <li>
                                <i class="fas fa-star"></i>
                            </li>
                            @endfor
                        </ul>
                        <h3>{{$data->user_review_title}}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="clients-review-carousel">
                    @foreach($userReview as $item)
                        <div class="single-review-item">
                            <div class="thumb">
                                <img src="{{$item->image}}" alt="reviewer images">
                            </div>
                            <div class="author-details">
                                <h6>{{$item->name}}</h6>
                                <span class="post">{{$item->position}}</span>
                            </div>
                            <div class="desciption">
                                <p>
                                    {!! $item->description !!}
                                </p>
                            </div>
                        </div>
                     @endforeach
                </div>
            </div>
        </div>
    </section>

<!--     <section class="pricing-area" id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-title">
                        <h3>{{$data->pricing_title}}</h3>
                        <span class="separator">
                            <img src="assets/frontend/img/separator.png" alt="separator">
                        </span>
                        <p>{!! $data->pricing_description !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($pricingPlan as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="single-pricing-plan pricing-bg" style="background-image: url(asset($item->image)) ;">
                        <div class="header">
                            <span class="name">{{$item->name}}</span>
                            <div class="price">
                                <h3>{{$item->type}}</h3>
                            </div>
                        </div>
                        <div class="body">
                            <ul>
                                @foreach($pricingPlanDetail as $detail)
                                @if($detail->plan_id == $item->id)
                                <li>
                                    <i class="fa {{ $detail->icon }}"></i> {{ $detail->title }}
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="footer">
                            <a href="{{$item->link}}" target="_blank" class="boxed-btn">try now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> -->

    <section class="faq-area" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h3>{{$data->question_title}}</h3>
                        <span class="separator">
                            <img src="assets/frontend/img/separator.png" alt="separator">
                        </span>
                        <p>{!! $data->question_description !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="left-image">
                        <img src="{{asset('assets/frontend/img/question-section-image.png')}}" alt="faq image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-accordion">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            @php

                            $a = true;
                        
                            @endphp
                            @foreach($qestions as $item)
                            @php 
                            $dynamic_id = rand(1202 ,5215);
                            if($a == true){
                                $aria_markup = "true";
                                $in_markup = "in";
                                
                                $a = false;
                            } else{
                                $aria_markup = "false";
                                $in_markup = "";
                            }
                            
                            @endphp
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#generalOne_{{$dynamic_id}}" aria-expanded="{{$aria_markup}}">
                                            {{$item->question}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="generalOne_{{$dynamic_id}}" class="panel-collapse collapse {{$in_markup}}" role="tabpanel">
                                    <div class="panel-body">
                                       {{$item->answer}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="get-in-touch-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="section-title">
                        <h3>{{$data->contact_title}}</h3>
                        <span class="separator">
                            <img src="assets/frontend/img/separator.png" alt="separator">
                        </span>
                        <p>{!! $data->contact_description !!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="get-in-touch-form-wrapper">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="left-content">
                                    <div class="single-get-in-touch-box">
                                        <div class="icon">
                                            <i class="fas fa-map"></i>
                                        </div>
                                        <div class="content">
                                            <h4>Address</h4>
                                            <p>{!! $data->address !!}</p>
                                        </div>
                                    </div>
                                    <div class="single-get-in-touch-box">
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <h4>Phone</h4>
                                            <p>{{$data->phone}}</p>
                                        </div>
                                    </div>
                                    <div class="single-get-in-touch-box">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <h4>Email</h4>
                                            <p>{{$data->email}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                               <form id="messageForm" action="" method="POST">
                                   {{csrf_field()}}
                                    <div class="contact-form">
                                            <input type="text" id="name" name="name" placeholder="Name" required>
                                            <span>
                                                <strong style="color: red" id="errName">
                                                </strong>
                                            </span>
                                            <input type="email" id="messageMail" name="email" placeholder="Email" required>
                                            <span >
                                                <strong style="color: red" id="msgMail">
                                                </strong>
                                            </span>
                                            <textarea name="message" id="message" cols="30" rows="5" placeholder="Message.. Write in 300 Characters" required></textarea>
                                            <span >
                                                <strong style="color: red" id="errMessage">
                                                </strong>
                                            </span>
                                          
                                            <input type="submit" name="btn" value="Get action">
                                        </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-area footer-bg" style="background-image: url({{asset('assets/frontend/img/footer-image.png')}})">
        <div class="container">
            <div class="col-md-6 col-sm-6">
                <div class="footer-logo">
                    <a href="{{route('website')}}" class="logo">
                        <img  style="  max-width: 190px;
                        max-height: 60px;" src="{{asset('assets/frontend/img/logo.png')}}" alt="footer logo">
                    </a>
                    <span class="copyright">© Copyright 2018 {{$data->website_name}}</span>
                </div>
            </div>
            <br><br>
            <div class="col-md-6 col-sm-6">
                <div class="footer-social">
                    <ul>
                        @foreach($footer as $item)
                        <li>
                            <a href="{{$item->link}}" target="_blank" class="facebook">
                                <i class="fab {{$item->icon}}"></i>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="back-to-top" style="display: block;">
        <i class="fas fa-angle-up"></i>
    </div>

    <div id="preloader" style="display: none;">
        <div id="loader"></div>
    </div>

    <script src="assets/frontend/js/jquery.js"></script>
    <script src="assets/frontend/js/bootstrap.min.js"></script>
    <script src="assets/frontend/js/jquery.slicknav.min.js"></script>
    <script src="assets/frontend/js/owl.carousel.min.js"></script>
    <script src="assets/frontend/js/jquery.magnific-popup.js"></script>
    <script src="assets/frontend/js/waypoints.min.js"></script>
    <script src="assets/frontend/js/jquery.counterup.min.js"></script>
    <script src="assets/frontend/js/toastr.min.js"></script>
    <script src="assets/frontend/js/main.js"></script>
    <script>
        $(document).ready(function(){

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("#subscriberForm").on("submit",function(e){
                e.preventDefault();
                var frmData = $(this).serialize();
                $.ajax({
                    url:"{{route('subscriber.mail')}}",
                    type:"POST",
                    data:frmData,
                })
                .done(function(daat){
                    toastr.success('Thanks..  For subscribed...');
                    setTimeout(function(){
                        $("#subscriberForm #subscriberMail").val('');
                    },2000)
                })
                .fail(function(error){
                    var errors = error.responseJSON;
                    var data = errors.errors;
                    console.log(data);
                    $("#subscriberForm #subEmail").empty().append(data.email);
                    setTimeout(function(){
                        location.reload();
                        $("#subscriberForm #subEmail").empty();
                        $("#subscriberForm #subscriberMail").val('');
                    },2000)
                });
            });

            $("#messageForm").on("submit",function(e){
                e.preventDefault();
                var frmData = $(this).serialize();
                $.ajax({
                    url:"{{route('user.message')}}",
                    type:"POST",
                    data:frmData,
                })
                .done(function(data){
                    toastr.success("Thanks..  Your Message is Submitted....");
                    setTimeout(function(){
                        $("#messageForm #name").val('');
                  $("#messageForm #messageMail").val('');
                  $("#messageForm #message").val('');
                    },2000)
                })
                .fail(function(error){
                  var errors = error.responseJSON;
                  var data = errors.errors;
                  console.log(data);
                  $("#messageForm #errName").empty().append(data.name);
                  $("#messageForm #msgMail").empty().append(data.email);
                  $("#messageForm #errMessage").empty().append(data.message);
                });
            });

        });
    </script>

    {!! Toastr::render() !!}
</body>

</html>