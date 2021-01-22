
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trodwé est une plate-forme de e-commerce, une boutique en ligne de matériels informatiques, ordinateurs, téléphone portable et accéssoires informatiques" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

<!-- start menu -->
<link href="{{asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />
{{-- <link href="{{asset('css/icon.css')}}" rel='stylesheet' type='text/css' /> --}}
{{-- <link href="css/semantic.css" rel='stylesheet' type='text/css' /> --}}
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
@yield('header')
</head>
<body>
<div class="wrap">
    <div class="container">
        <div class="content">
            @include('includes/navbar')

            @yield('content')

            @include('includes.footer')

            @yield('footer')
        </div>
    </div>
</div>

<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/megamenu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/stripe-checkout.js')}}"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
            $('body').removeClass('loading');
        }
        });
    });


    $('.dropdown-toggle').dropdown();
</script>
</body>
</html>
