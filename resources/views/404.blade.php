@extends('layouts.master') 
   
<body><!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
 @include('layouts.menu')
   <div class=innerbannerwrap>
      
      <div class=innerbannerinstall>
         <h2 class=bannerHeadline>
            <h2 style="color:#ffffff; display: block;">{{$content->title??'Page not found'}}</h2>
         </h2>
      </div>
   </div>
