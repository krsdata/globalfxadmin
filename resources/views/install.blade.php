@extends('layouts.master')
@section('content') 
<body>

   @include('layouts.menu')
   <div class="innerbannerwrap">
       @php
      if((Request::get('_branch_name')))
      $url  = "downloadapk?_branch_name=".$_REQUEST['_branch_name'];
      else
      $url  = "downloadapk?_branch_name=010O";
      @endphp 
      <div class="innerbannerinstall">
         <!-- <img src="webmedia/images/background/innerinstallBg.jpg" alt="bg" class="img-responsive"> -->
         <h2 class="bannerHeadline">
           <a href="{{$url}}" >Download Play & Win</a> </h2>
           <p>In Respect Of Legands</p>
        
      </div>
   </div>

<!-- <section class="wining_slider ">
<div class="container text-center">
  <div class="row">
    <h2 class="heading line">Latest <span>Winning </span></h2>
  </div>
  <div class='row'>
    <div class='col-md-12'>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-4">
               <div class="box1">
                <a class="thumbnail" href="#">
                  <img alt="wining_user" src="webmedia/images/background/himani.png"></a>
                  <div class="carousel-caption caption">
                   <h3>Himani <span>contest Winner</span></h3>
                   <h4>Rs. 35,000</h4>
                    <p>Justkhelo is the best App for Entertainment.</p>
                   </div>
                     </div> 
              </div>

              <div class="col-md-4">
                <div class="box1">
                <a class="thumbnail" href="#">
                  <img alt="wining_user" src="webmedia/images/background/kapil.png"></a>
                  <div class="carousel-caption caption">
                   <h3>kapil <span>contest Winner</span></h3>
                   <h4>Rs. 30,000</h4>
                    <p>Justkhelo is the best App for Entertainment.</p>
                   </div>
                     </div> 
               </div>
           <div class="col-md-4">
               <div class="box1">
                <a class="thumbnail" href="#">
                  <img alt="wining_user" src="webmedia/images/background/mohit.png"></a>
                  <div class="carousel-caption caption">
                   <h3>Mohit <span>contest Winner</span></h3>
                   <h4>Rs. 25,000</h4>
                    <p>Justkhelo is the best App for Entertainment.</p>
                   </div>
                     </div> 
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <div class="box1">
                <a class="thumbnail" href="#">
                  <img alt="wining_user" src="webmedia/images/background/himani.png"></a>
                  <div class="carousel-caption caption">
                   <h3>Himani<span>contest Winner</span></h3>
                   <h4>Rs. 15,000</h4>
                    <p>Justkhelo is the best App for Entertainment.</p>
                   </div>
                     </div> 
              </div>          
              <div class="col-md-4">
                <div class="box1">
                <a class="thumbnail" href="#">
                  <img alt="wining_user" src="webmedia/images/background/kapil.png"></a>
                  <div class="carousel-caption caption">
                  <h3>Kapil<span>contest Winner</span></h3>
                   <h4>Rs. 17,000</h4>
                    <p>Justkhelo is the best App for Entertainment.</p>
                   </div>
                     </div> 
              </div>
              <div class="col-md-4">
                <div class="box1">
                <a class="thumbnail" href="#">
                  <img alt="wining_user" src="webmedia/images/background/mohit.png"></a>
                  <div class="carousel-caption caption">
                  <h3>Mohit <span>contest Winner</span></h3>
                   <h4>Rs. 25,000</h4>
                    <p>Justkhelo is the best App for Entertainment.</p>
                   </div>
                     </div> 
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <div class="box1">
                <a class="thumbnail" href="#">
                  <img alt="wining_user" src="webmedia/images/background/himani.png"></a>
                  <div class="carousel-caption caption">
                   <h3>Himani <span>contest Winner</span></h3>
                   <h4>Rs. 30,000</h4>
                    <p>Justkhelo is the best App for Entertainment.</p>
                   </div>
                     </div> 
              </div>          
              <div class="col-md-4">
                <div class="box1">
                <a class="thumbnail" href="#">
                  <img alt="wining_user" src="webmedia/images/background/kapil.png"></a>
                  <div class="carousel-caption caption">
                   <h3>kapil<span>contest Winner</span></h3>
                   <h4>Rs. 15,000</h4>
                    <p>Justkhelo is the best App for Entertainment.</p>
                   </div>
                     </div> 
              </div>
              <div class="col-md-4">
                <div class="box1">
                <a class="thumbnail" href="#">
                  <img alt="wining_user" src="webmedia/images/background/mohit.png"></a>
                  <div class="carousel-caption caption">
                   <h3>Mohit<span>contest Winner</span></h3>
                   <h4>Rs. 20,000</h4>
                    <p>Justkhelo is the best App for Entertainment.</p>
                   </div>
                     </div> 
              </div>      
            </div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>                          
    </div>
  </div>
</div>
</section> -->
   

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
       //window.setTimeout(function(){
      
        //window.location.href = "{{$url}}";
      
     // }, 3000);
      
   </script>

<script>
   $(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});

</script>
 




   @stop