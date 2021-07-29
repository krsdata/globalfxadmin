@extends('layouts.master') 

    @section('content') 
<body>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVN6NHG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class=wrapper>
@include('layouts.menu')

    
    @if($content->slug!="contact-us" && $content->slug != "contact_us")
    <div class=innerbannerwrap>
        <div class=innerbanner><h2 class=bannerHeadline>{{$content->title??'Page not found'}}</h2></div>
    </div>
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
    <div class=innerbannerwrap>
        <div class=innerbanner><h2 class=bannerHeadline>{{$content->title??'Page not found'}}</h2></div>
    </div>
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
  
    @stop