<body><!--[if lt IE 10]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class=wrapper>
   
@include('layouts.menu')
    <div class=banner id=layerSlider style="width: 100%;">
        <div class=ls-slide data-ls="transition3d: 33,15; slidedelay: 8000 ; durationin:0;"><img
                src="{{ URL::asset('webmedia/images/banner/background01.jpg')}}" class=ls-bg alt="Slide background">

            <div class="ls-l layercontent01" style="top: 50%; left: 50%; z-index:4;"
                 data-ls="offsetxin:left; offsetxout:right; durationin: 4000; parallaxlevel: 8;"><img
                    src="{{URL::asset('webmedia/images/banner/player.png')}}"  alt=innerimage class=img-responsive
                    style="max-width: 100% !important ;"></div>
            <img src="{{ URL::asset('webmedia/images/banner/ball.png')}}" alt=innerimage class="ls-l layercontent02" style=z-index:5;
                 data-ls="offsetxin: right; offsetxout:left; rotatein:-360; easingin: easeoutquart; durationin: 4000; delayin: 250; parallaxlevel: -5;">
            <img src="{{URL::asset('webmedia/images/banner/front_particles.png')}}" alt=particles class=ls-l style="z-index:3; left:0;"
                 data-ls="offsetxin: left; offsetxout:left; scalexin:50; easingin: easeoutquart; durationin: 3000; delayin: 250;">
            <img src="{{URL::asset('webmedia/images/banner/back_particles.png')}}" alt=particles class=ls-l style="z-index:3; left:50%;"
                 data-ls="offsetxin: left; offsetxout:left; scalein:90; easingin: easeoutquart; durationin: 3000; delayin: 250;">

            <h2 class="ls-l bannertext layercontent03" data-ls="offsetxin:left; rotatexin:90 ; durationin: 3500;">
                DIL</h2>

            <h2 class="ls-l bannertext01 italic01 layercontent04"
                data-ls="offsetxin:left; scalexin:9; durationin: 4000;">se khelo </h2><h4
                    class="ls-l bannertext02 layercontent05" data-ls="offsetxin:left; rotatexin:90 ; durationin: 4500;">
                on</h4>

            <h2 class="ls-l bannertext01 layercontent06" style="left: 50%; top:760px;"
                data-ls="offsetxin:left; flipxin:90 ; durationin: 5000;">JUSTKHELO</h2></div>
    </div>
    <div class=banner-text>
        <div class=container>
            <div class=row>Dil Se khelo On <sup>st</sup>JUSTKHELO</div>
        </div>
    </div>
    <section class="booking bg-smallwhite">
        <div class=container>
            <div class=booking-fig></div>
            <a href="{{$settings->playstore_url}}" class="btn btn-red">Download App Now</a></div>
        </div>
    </section>
   
    <section class=latestResult>
        <div class=container>
            <div class=row><h2 class=heading>latest <span>result</span></h2>

                <div class=latestResult-wrap><h4>{{$completed->title }} ({{$completed->subtitle }})</h4>

                    <p>{{$completed->status_note }}</p></div>
                <div class="result clearfix">
                    <div class=result-details>
                        <div class=content><h4>{{$completed->teama->name }}</h4>

                            <p></p>

                           </div>
                        <div class=figure>
                            <div class=team-logo>
                                <div style="background:url('{{$completed->teama->thumb_url }}')" class=teamLogoImg></div>
                            </div>
                        </div>
                    </div>
                    <div class=result-count>
                        <div class=count-number><span class=lose-team>{{$completed->teama->scores_full }}</span> <span>-</span> <span
                                class=win-team>{{$completed->teamb->scores_full }}</span></div>
                        <div class=dateTime>
                            <div class=dateTime-container><span class=date>{{$completed->date_start }}</span></div>
                            <div class=country-wrap><span class=field>{{$completed->venue->name }}</span> 
                            </div>
                        </div>
                    </div>
                    <div class=result-details>
                        <div class="content contentresult"><h4>{{$completed->teamb->name }}</h4>

                            <p></p></div>
                        <div class="figure figresult">
                            <div class=team-logo>
                                <div style="background:url('{{$completed->teamb->thumb_url }}')"class=teamLogoImg></div>
                            </div>
                        </div>
                    </div>
                    <div class=center><a href=# class="btn btn-red score-btn">{{$completed->status_note }}</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class=matchSchedule>
        <div class=container>
            <div class=row><h2 class=heading>match <span>schedule</span></h2>

                

               
                <div class="matchSchedule_details row">
                    <div class=match_versus-wrap>
                        <div class=wrap_match-innerdetails>
                            <ul class="home_tInfo scrollable">
                            @foreach($upcomings as $key =>  $upcoming)
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>{{$key +1}}</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>{{$upcoming->teama->name}}</span><span
                                                    class=vs>vs</span> <span>{{$upcoming->teamb->name}}</span></div>
                                            <div class="paragraph02 clearfix"><span>{{$upcoming->date_start}}</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                @endforeach
                              
                            </ul>
                        </div>
                    </div>
                    <div class=match_next>
                        <div class="wrap_match_next left_triangle">
                            <div class=left_padding><h4 class=headline03>Upcoming Matches</h4>
</div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <section class="booking bookticket">
        <div class=container>
            <div class=booking-fig><h2></h2></div>
            <div class=booking-content><a href="{{$settings->playstore_url}}" class="btn btn-white">Download Now</a></div>
        </div>
    </section> 
    <section class="social-media">
        <div class=container>
            <div class=row><h2 class=heading></span><span>Payment</span></h2>

                <p class=headParagraph>Payment Accepted by
All Major Banks & Payment Wallets</p>

                <div class="LatestNews_wrap clearfix">
                   
                    <div class="tab-content news_display_container clearfix">
                    <ul id=club_news class="tab-pane active clearfix">
                           
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src="{{URL::asset('webmedia/images/payment/paytm.png')}}" alt=image></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src="{{URL::asset('webmedia/images/payment/visa.png')}}" alt=image></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src="{{URL::asset('webmedia/images/payment/master.png')}}" alt=image></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=figure>
                                    <div class=column-news>
                                        <div class=figure-01><img src="{{URL::asset('webmedia/images/payment/rupay.png')}}" alt=image></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
  