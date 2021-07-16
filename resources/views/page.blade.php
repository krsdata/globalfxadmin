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
    @if($content->slug!="contact-us")
    <section class>
    <h2 class="heading small">{{$content->title??'Page not found'}}</h2>
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
            <div class=row><h2 class="heading small">{{$content->title??'Page not found'}}</h2>

                <p class=headParagraph> {!!$content->page_content!!}</p>

                <div class=innerWrapper>
                    <ul class="contact_icon clearfix">
                        <li><a><i class="fa fa-phone"></i> <span>{{$settings->mobile}}</span></a></li>
                        <li><a><i class="fa fa-envelope-o"></i>
                            <span>{{$settings->website_email}}</span></a></li>
                        <li><a href=#><i class="fa fa-map-marker"></i> <span>{{$settings->company_address}}</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif
  
