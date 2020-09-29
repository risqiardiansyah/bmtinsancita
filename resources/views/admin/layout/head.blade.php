<?php
use Illuminate\Support\Facades\DB;
use App\Nav_model;
$site                 = DB::table('konfigurasi')->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{ $title }}</title>
<!-- icon -->
<link rel="shortcut icon" href="{{ asset('upload/image/icon/'.$site->icon) }}">
<!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Custom fonts for this template -->
  <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
  <!-- JQUERY UI -->
  <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.min.css') }}">
  <script src="{{ asset('jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
  <!-- timepicker -->
  <link rel="stylesheet" href="{{ asset('jquery-timepicker/jquery.timepicker.min.css') }}">
  <!-- Custom styles for this page -->
  <link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  <!-- sweetalert -->
  <script src="{{ asset('sweetalert/js/sweetalert.min.js') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('sweetalert/css/sweetalert.css') }}">
  <!-- TINYMCE -->
  <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('jquery-chained/jquery.chained.js') }}"></script>
  <style type="text/css" media="screen">
    body {
      color: #000 !important;
    }
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #bfbfbf  !important;
      opacity: 1; /* Firefox */
    }
    form small.text-gray {
      color: #bfbfbf !important;
    }
    br {
      margin: 0 !important;
      padding:  0 !important;
    }
    hr.jarak {
      padding: 2px 0;
      margin: 2px 0;
    }
    iframe.youtube {
      max-width: 200px;
      height: auto;
    }
  </style>
  </head>

<body id="page-top">