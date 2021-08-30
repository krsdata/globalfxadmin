<!doctype html>
<!-- 
<html  class="no-js" lang="en">
<head>
     <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
      <meta charset="utf-8">
      <meta name="description content=">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 -->
<html class="no-js" lang="en">
   <head>
    
      <meta http-equiv="content-type" content="text/html;charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{isset($content->meta_title) ? $content->meta_title : $settings->meta_title}}</title>
      <meta name="description" content="{{isset($content->meta_description) ? $content->meta_description :$settings->meta_description}}" />
      <meta name="keywords" content="{{isset($content->meta_key) ? $content->meta_key : $settings->meta_key}}" />

      <meta name="google-site-verification" content="UHF02krjE6P_UzBkn8ZNRZK8R7FGkcyAkQ4VtR3NQoI" />


      <meta name="robots" content="index, follow" />

      <link rel="shortcut icon" href="{{ URL::asset('webmedia/images/JKfavicon.svg')}}">

      <link rel=stylesheet href="{{ URL::asset('webmedia/css/vendor.css')}}">
      <link rel=stylesheet href="{{ URL::asset('webmedia/css/style.css')}}">
      <link rel=stylesheet type=text/css href="{{ URL::asset('webmedia/css/layerslider.css')}}">
      <script src="{{ URL::asset('webmedia/js/vendor/modernizr.js')}}"></script>


      

     <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-8LSXV83R27"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-8LSXV83R27');
      </script>

   </head>
