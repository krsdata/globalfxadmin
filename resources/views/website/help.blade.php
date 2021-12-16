@extends('layouts.website.app')

@section('internal_css')


@endsection

@section('content')
<head>   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ strip_tags(isset($content->meta_title) ? $content->meta_title : $settings->meta_title) }}</title>
      <meta name="description" content="{{strip_tags(isset($content->meta_description) ? $content->meta_description :$settings->meta_description)}}" />
      <meta name="keywords" content="{{strip_tags(isset($content->meta_key) ? $content->meta_key : $settings->meta_key)}}"/>

      <meta name="google-site-verification" content="UHF02krjE6P_UzBkn8ZNRZK8R7FGkcyAkQ4VtR3NQoI">
<div class="bannerwrap">
    <div class="aboutbanner">
    <div class="bannertxt">
    <h1>Contact<span> Us</span></h1></div>
    </div>
    
    <section class="howworks">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="mt-2 mb-5">
        <img src="website/assets/Contact-us.svg" alt="help" class="img-fluid" width="500">
        </div>
    </div>
    
    <div class="col-lg-6">
    <div class="j_heading">
        <h2>Get<span> in touch</span></h2></div>
    <div class="worksitem  d-flex text-left help_cont">
     <span><img src="website/assets/mail.svg" alt="jkmail" class="img-fluid" width="60"> </span>
    <h2>InstaIT Technologies | info@justkhelo.com</h2>
    
    </div>
    
    <div class="worksitem  d-flex text-left  help_cont">
      <span><img src="website/assets/call.svg" alt="jkcontact" class="img-fluid" width="60"></span>
      <h2>Mon - Fri 08:00 – 21:00 | +91 9329922484</h2>
    </div>
    
    <div class="worksitem  d-flex text-left  help_cont">
      <span><img src="website/assets/address.svg" alt="jkaddress" class="img-fluid" width="60"></span>
      <h2 class="w-75">205, II Floor, Airen Heights, Plot No-13, Scheme No-54, PU-3, A.B.Road, Indore, M.P.</h2></div>
    <div class="worksitem  d-flex text-center">
    <h4></h4>
    </div>
    
    </div>
    
    
      </div>
    </div>
    </section>

@endsection
</head>