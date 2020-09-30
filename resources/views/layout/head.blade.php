<?php 
$site = DB::table('konfigurasi')->first();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $deskripsi }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="{{ $site->namaweb }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('upload/image/icon/'.$site->icon) }}" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("frontend/html") }}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="{{ asset("frontend/html") }}/fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="{{ asset("frontend/html") }}/css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="{{ asset("frontend/html") }}/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset("frontend/html") }}/owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="{{ asset("frontend/html") }}/css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="{{ asset("frontend/html") }}/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset("frontend/html") }}/css/code-style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset("frontend/html") }}/css/responsive.css" rel="stylesheet">
    @stack("custom-css")

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
    <script src="{{ asset("frontend/html") }}/js/vendor/modernizr-2.8.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        .goog-te-gadget {
            display: none;
        }

        .goog-te-banner-frame {
            display: none;
        }
        .h3 .title::after{
            content:"";
            opacity: 0.5;
        }
        .hero-slide .carousel-caption{
            background: #ffffff;
            padding: 10px 20px;
            opacity : 0.7;
        }
        .hero-slide .carousel-caption a.btn:hover{
            background : #ffffff;
            color : #fcbb3c;
            outline : #fcbb3c;
        }
        .mitra .item{
            height: 250px;
        }
        .mitra .item img{
            width : 80%;
            height : 100%;
            margin : 0 auto;
        }
        .gallery-slider__thumbnails{
            position : absolute;
            bottom : 10px;
        }
            .gallery-slider__images .item .img-fill {
                height: 400px;
            }
            .gallery-slider__images .item .img-fill img {
                all: revert;    
            }
            
        .gallery-slider__images .item .img-fill img {
            position : absolute;
            height :100%;
            width : 100%;
            top : 0;
            left : 0;
            right : 0;
            bottom : 0;
        }
        /* Playground by EThaiZone */
        #parent {
            width: 200px;
            height: 200px;
            border:solid 1px #000;
            background-color: blanchedalmond;
            width: auto;
            height: 422px;
            margin-top: 20px;
            border-width: 11px;
            border-color: grey;
            padding: 0px;

        }
        iframe {
            width:100%;
            height:100%;
            border:0px;
        }

        #parent > a {
            opacity: 0.3;
            position:relative;
            float: right;
            right:10px;
            bottom:50px;
            transition: 0.5s;
        }
        #parent > a {
            opacity: 1;
        }  
  
    </style>
    <?php echo $site->metatext; ?>
    
</head>

<body id="google_translate_element">
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
