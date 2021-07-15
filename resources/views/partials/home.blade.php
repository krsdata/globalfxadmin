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
            <div class=booking-fig><h2>Download Application</h2></div>
            <a href=bookTicket.html
                                                                                        class="btn btn-red">Download Now</a></div>
        </div>
    </section>
   
    <section class=latestResult>
        <div class=container>
            <div class=row><h2 class=heading>latest <span>result</span></h2>

                <div class=latestResult-wrap><h4>{{$com->title }} ({{$com->subtitle }})</h4>

                    <p>{{$com->status_note }}</p></div>
                <div class="result clearfix">
                    <div class=result-details>
                        <div class=content><h4>fc Dragons</h4>

                            <p>lose</p>

                            <p>Shannon Skelly(23)</p></div>
                        <div class=figure>
                            <div class=team-logo>
                                <div style="background:url('{{URL::asset('webmedia/images/team-logo/logo01.png')}}')" class=teamLogoImg></div>
                            </div>
                        </div>
                    </div>
                    <div class=result-count>
                        <div class=count-number><span class=lose-team>1</span> <span>-</span> <span
                                class=win-team>3</span></div>
                        <div class=dateTime>
                            <div class=dateTime-container><span class=date>may 16,2015</span> <span
                                    class=time>15:30pm</span></div>
                            <div class=country-wrap><span class=field>wbeysley stadium</span> <span class=country>(london)</span>
                            </div>
                        </div>
                    </div>
                    <div class=result-details>
                        <div class="content contentresult"><h4>fc Zulu Ninjas</h4>

                            <p>win</p>

                            <p>Leland Lagos(29)</p>

                            <p>Lelnd Lagos(39)</p></div>
                        <div class="figure figresult">
                            <div class=team-logo>
                                <div style="background:url('{{URL::asset('webmedia/images/team-logo/logo02.png')}}')"class=teamLogoImg></div>
                            </div>
                        </div>
                    </div>
                    <div class=center><a href=# class="btn btn-red score-btn">Score board</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class=matchSchedule>
        <div class=container>
            <div class=row><h2 class=heading>match <span>schedule</span></h2>

                <p class=headParagraph>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil debitis mollitia
                    qui libero voluptate ratione, molestias! Necessitatibus voluptatem temporibus doloremque non, vel
                    ipsam, nesciunt dolores consequatur, est tempora ut! Est?>Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Nihil debitis mollitia qui libero voluptate ratione, molestias! Necessitatibus
                    voluptatem temporibus doloremque non, vel ipsam, nesciunt dolores consequatur, est tempora ut!
                    Est.</p>

                <div class="matchSchedule_details row">
                    <div class="match_next right-triangle">
                        <div class="wrap_match_next right-triangle">
                            <div class=right-padding><h4 class=headline03>next match</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                    <div class=match_versus>
                        <div class="bg-blackimg match_versus02">
                            <div class=nextmatchDetails><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Esse harum animi a ipsa distinctio veritatis suscipit amet.</p>

                                <div class="wrap-logo clearfix">
                                    <div class=logo-match><img src="{{URL::asset('webmedia/images/matchResult/logo01.png')}}" alt=image></div>
                                    <div class=match_vs>vs</div>
                                    <div class=logo-match><img src="{{URL::asset('webmedia/images/matchResult/logo02.png')}}" alt=image></div>
                                </div>
                                <p class=match_dtls>October 31, 2015 | 18:25PM</p>

                                <p class=match_dtls>Wemsddley stadium (london)</p></div>
                        </div>
                    </div>
                    <div class=match_timing>
                        <ul class=counter-wrap>
                            <li><span>12</span>days</li>
                            <li><span>18</span>hours</li>
                            <li><span>27</span>minutes</li>
                            <li><span>55</span>seconds</li>
                        </ul>
                    </div>
                </div>
                <div class="matchSchedule_details row">
                    <div class=match_versus-wrap>
                        <div class=wrap_match-innerdetails>
                            <ul class="home_tInfo scrollable">
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>1</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Militant Flyers</span><span
                                                    class=vs>vs</span> <span>fc Black & White Blasters</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>2</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Crimson Buccaneers</span><span
                                                    class=vs>vs</span> <span>fc Poison Reapers</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>3</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Muffin Kickers</span><span
                                                    class=vs>vs</span> <span>fc Ghost Assassins</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>4</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Demolition Rockets</span><span
                                                    class=vs>vs</span> <span>fc Wind Flyers</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>5</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Alpha Monsters</span><span
                                                    class=vs>vs</span> <span>fc Delta Miners</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                                <li><a href="#">
                                    <ul class="t_info match_info01 headline01 clearfix">
                                        <li>6</li>
                                        <li>
                                            <div class="headline01 clearfix"><span>FC Zulu Ninjas</span><span class=vs>vs</span>
                                                <span>fc Sneaky Mutants</span></div>
                                            <div class="paragraph02 clearfix"><span>August 24,2015</span>
                                                <span>18.25pm</span></div>
                                        </li>
                                    </ul>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=match_next>
                        <div class="wrap_match_next left_triangle">
                            <div class=left_padding><h4 class=headline03>upcoming feature</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </section>
    <section class="booking bookticket">
        <div class=container>
            <div class=booking-fig><h2>Download the App</h2></div>
            <div class=booking-content><a href=# class="btn btn-white">Download Now</a></div>
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
  