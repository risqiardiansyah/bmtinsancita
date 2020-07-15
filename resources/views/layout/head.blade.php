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

    <title>{{ $title }}</title>
    <link rel="icon" href="{{ asset('public/upload/image/'.$site->icon) }}" type="image/x-icon">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("public/frontend/html") }}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="{{ asset("public/frontend/html") }}/fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="{{ asset("public/frontend/html") }}/css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="{{ asset("public/frontend/html") }}/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset("public/frontend/html") }}/owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="{{ asset("public/frontend/html") }}/css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="{{ asset("public/frontend/html") }}/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset("public/frontend/html") }}/css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset("public/frontend/html") }}/css/responsive.css" rel="stylesheet">

    @stack("custom-css")

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>
    <script src="{{ asset("public/frontend/html") }}/js/vendor/modernizr-2.8.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function () {
            OneSignal.init({
                appId: "7c4a806c-6b05-48e8-b4dc-a179b2629f54",
            });
        });

    </script>

<?php echo $site->metatext; ?>
</head>
<body>
    <div id="st-container" class="st-container">
        <div class="st-pusher">
            <div class="st-content">
                <div class="st-content-inner">
