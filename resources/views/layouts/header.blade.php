<!doctype html>
<html class=no-js lang="">
   <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
   <head>
      <meta charset="utf-8">
      <meta name="description content=">
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
      <title>{{isset($content->meta_title) ? $content->meta_title : $settings->meta_title}}</title>
      <meta name="description"content="{{isset($content->meta_description) ? $content->meta_description :$settings->meta_description}}" />
      <meta name="keywords"
         content="{{isset($content->meta_key) ? $content->meta_key : $settings->meta_key}}" />
      <link rel="shortcut icon" href="{{ URL::asset('webmedia/images/favicon.png')}}">
      <link rel=stylesheet href="{{ URL::asset('webmedia/css/vendor.css')}}">
      <link rel=stylesheet href="{{ URL::asset('webmedia/css/style.css')}}">
      <link rel=stylesheet type=text/css href="{{ URL::asset('webmedia/css/layerslider.css')}}">
      <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
      <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
      <script src="{{ URL::asset('webmedia/js/vendor/modernizr.js')}}"></script>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-KVN6NHG');
      </script>
      <!-- End Google Tag Manager -->
   </head>