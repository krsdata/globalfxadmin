@extends('layouts.master') 
   
<body><!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class=wrapper>
@include('layouts.menu')

    <div class=innerbannerwrap>
        <div class=innerbanner><h2 class=bannerHeadline>{{$content->title??'Page not found'}}</h2></div>
    </div>
   
  
