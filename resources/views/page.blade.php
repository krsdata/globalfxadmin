@extends('layouts.master') 
@section('content') 
<body>
   @include('layouts.menu')
   <div class=innerbannerwrap>
      @php
      if((Request::get('_branch_name')))
      $url  = "downloadapk?_branch_name=".$_REQUEST['_branch_name'];
      else
      $url  = "downloadapk?_branch_name=010O";
      @endphp
      <div class=innerbannerinstall>
         <h2 class=bannerHeadline>
            <h2 style="color:#1041b7; display: block; padding:10px;">{{$content->title??'Page not found'}}</h2>
         </h2>
      </div>
   </div>
   @if($content->slug!="contact-us" && $content->slug != "contact_us")
   <section class>
      <div class=container>
         <div class=row>
            <p class=headParagraph> {!!$content->page_content!!}</p>
         </div>
      </div>
      <br>
   </section>
   @else
   <section class=innerpage_all_wrap>
      <div class=container>
         <div class=row>
            <ul class="contact_icon clearfix">
               <li>
                  <a><i class="fa fa-phone"></i>
                  <span>+917999587754</span></a>
               </li>
               <li><a><i class="fa fa-envelope-o"></i>
                  <span>info@justkhelo.com</span></a>
               </li>
               <li>
                  <a href="#"><i class="fa fa-map-marker"></i>
                  <span class="address">{{$settings->company_address}}</span>
                  </a>
               </li>
            </ul>
         </div>
      </div>
      </div>
   </section>
   @endif
   @stop