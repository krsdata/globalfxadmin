@extends('layouts.master')
@section('content') 
<body>
   <!-- Google Tag Manager (noscript) -->
   <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVN6NHG"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
   @include('layouts.menu') -->
   <div class="innerbannerwrap">
     <!--  @php
      if((Request::get('_branch_name')))
      $url  = "downloadapk?_branch_name=".$_REQUEST['_branch_name'];
      else
      $url  = "downloadapk?_branch_name=010O";
      @endphp -->
      <div class="innerbannerinstall">
         <h2 class="bannerHeadline">
            <a href="{{$settings->playstore_url}}" class="btn btn-white">Download Now</a>
            <a href="{{$settings->playstore_url}}" style="color:#ffffff; display: block;">If downloading not started click above button </a>
         </h2>
      </div>
   </div>
   <section class="latest_news bg-white">
      <div class="container">
         <div class="row">
            <h2 class="heading line">How To<span> Install</span></h2>
            <p class="headParagraph headParagraphInsta">Fantasy sports that allow you to win money are not allowed on the google play store</p>
            <div class="LatestNews_wrap clearfix">
               <div class="tab-content news_display_container clearfix">
                  <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                  <ul id="club_new" class="tab-pane active clearfix  club_new">
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01><img src="{{URL::asset('webmedia/images/widget/01.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01><img src="{{URL::asset('webmedia/images/widget/02.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01><img src="{{URL::asset('webmedia/images/widget/03.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                  </ul>
                  <div class="secure_safe"><img src="{{URL::asset('webmedia/images/widget/safe_secure.jpg')}}" alt=image></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <section class="latest_news bg-white">
      <div class="container">
         <div class="row">
            <h2 class="heading line">Our Rating Says,<span> You Love Us</span></h2>
            <div class="LatestNews_wrap clearfix">
               <div class="tab-content news_display_container clearfix">
                  <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                  <ul id=club_news class="tab-pane active clearfix slideHeroes">
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01>
                                 <div class="bg-black01 fig02">
                                    <img src="{{URL::asset('webmedia/images/testimonial/himani.png')}}" style="width:50px">
                                    <h6 class="paragraph02">Himani Shankarv</h6>
                                    <p class="uppercaseheading red">Mumbai</p>
                                    <p>JustKhelo is a very easy platform to create teams and play. I have tried other fantasy games but to my disappointment they were hard to understand. I have also actually won on this app and OH BOY! I LOVE IT!!</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01>
                                 <div class="bg-black01 fig02">
                                    <img src="{{URL::asset('webmedia/images/testimonial/mohit.png')}}" style="width:50px">
                                    <h6 class="paragraph02">Mohit J</h6>
                                    <p class="uppercaseheading red">Delhi</p>
                                    <p>During lockdown being busy was a task. At home all day and nothing to do. JustKhelo came as a blessing. Selecting players and playing was fun and easy. When i got my first payout, I was over the moon! Play Hard and Earn Well was a reality. 
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01>
                                 <div class="bg-black01 fig02">
                                    <img src="{{URL::asset('webmedia/images/testimonial/kapil.png')}}" style="width:50px">
                                    <h6 class="paragraph02">Kapil D</h6>
                                    <p class="uppercaseheading red">Jaipur</p>
                                    <p>If you play on JustKhelo you will forget other game apps. It is so engaging and the process of payout, customer service is seamless. It is a MUST TRY APP!
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="secure_safe"> <img src="{{URL::asset('webmedia/images/rating.jpg')}}" alt=image></div>
            </div>
         </div>
      </div>
   </section>
   <section class="latest_news bg-white">
      <div class="container">
         <div class="row">
            <h2 class="heading line">Get the App and<span> Win Crores</span></h2>
            <div class="LatestNews_wrap clearfix">
               <div class="tab-content news_display_container clearfix">
                  <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                  <ul id="club_news" class="tab-pane active clearfix slideHeroes">
                     <li>
                        <div class="figure">
                           <div class="column-news">
                              <div class="figure-01"><img src="{{URL::asset('webmedia/images/app/01.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="figure">
                           <div class="column-news">
                              <div class="figure-01"><img src="{{URL::asset('webmedia/images/app/02.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="figure">
                           <div class="column-news">
                              <div class="figure-01"><img src="{{URL::asset('webmedia/images/app/03.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script>
      // window.setTimeout(function(){
      
      //    window.location.href = "{{$url}}";
      
      // }, 3000);
      
   </script>
   @stop