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
      <div class="innerbanner">
        
         <h2 class="bannerHeadline">
           <a style="color:#1041b7; display: block; padding:10px; font-weight: 600;">About Us</a> </h2>
          
        
      </div>
   </div>
<section class="About-us">
      <div class="container">
           <div class="row">
					<div class="col-md-12">
           <div class="heading-section">
						<h2 class="heading line"> About <span>Us</span></h2>
           </div> 
           <div class="paragraph-Pp">
            <p>We are the biggest Virtual Fantasy Sports Platform. We let you set-up your PERSONAL FAN-BASE by keeping a watch over your shared posts in the feed. Not just this, you can also improve your game by playing continuously and reaching the different levels and be rewarded with exciting CASH REWARDS. You can CREATE YOUR OWN TEAM by choosing favorite players which help you earn coins in contests. JUSTKHELO Fantasy League is a stage that permits you to play virtually by participating with real-life players and earn points using your game expertise and knowledge. 
</p>
           </div>
</div>
  </div>
    </div>
     </section>  


   <section class="feature">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 text-center">
               <h2 class="heading line">OUR<span> FEATURES</span></h2>
               <p></p></div>

<div class="col-sm-12">  
   <div class="col-sm-3 spacingabout">
    <div class="img_spaceabout">
      <img src="webmedia/images/icons/easytojoincontest.svg" alt="easytojoin" class="img-thumbnail" width="70"></div>

                  <h4>Easy To Join Contest</h4>
                  <p>As the name tells JOINING a CONTEST is very easy. Go to HOME, ENTER A MATCH, CREATE TEAM and JOIN CONTEST.</p>
               </div>

      <div class="col-sm-3 spacingabout">
         <div class="img_spaceabout"><img src="webmedia/images/icons/highspeed.svg" alt="Highspeed" class="img-thumbnail" width="70"></div>
         <h4>High Speedy App</h4>
                  <p>JUSTKHELO boasts of quick DOWNLOADS and UPLOADS, the user experience is very smooth as it doesn't lag. This means quick PAYOUTS of your CASH REWARDS.</p>
               </div>

               <div class="col-sm-3 spacingabout">
                  <div class="img_spaceabout"><img src="webmedia/images/icons/fullprotection.svg" alt="Privacy" class="img-thumbnail" width="70"></div>
                  <h4>Privacy</h4>
                  <p>We take all necessary safety measures i.e,registration via Email/Phone/Facebook/Google. Content or details are not shared with 3P. </p>
               </div>
          
            <div class="col-sm-3 spacingabout">
      <div class="img_spaceabout"><img src="webmedia/images/icons/easytowithdraw.svg" alt="withdraw" class="img-thumbnail" width="70"></div>
               <h4>Easy To Withdraw</h4>
               <p>It doesn't get easier than this. Register and Verify your bank. Earn rewards and cash points HIT Withdraw and VOILA you get the money in your account. </p>
               </div>

               
            
           </div>
         </div>
          </div>
      </div>
   </section>

 <section class="About-us">
      <div class="container">
           <div class="row">
          <div class="col-md-12">
           <div class="heading-section">
            <h2 class="heading line">OUR <span> WORKS</span></h2>
           </div> 
           <div class="paragraph-Pp">
            <p>The Best Fantasy App Justkhelo lets you showcase your expertise and knowledge. We offer one of India's largest online fantasy cricket platform. We let you choose your team from the best cricket players worldwide. Let's keep a watch on your fan base through shared posts in the feed. The more you invest in the Fantasy Sports and advance to the next level, the more you receive Cash Bonuses and other rewards.
</p>
           </div>
</div>
  </div>
    </div>
     </section>  

<section class="sponsors">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="heading line">How <span> Justkhelo Works</span></h2>
              <h4 class="subtitle">Justkhelo provides a simplified view of how to earn rewards using your skills.</h4>
            </div>
            <div class="col-md-4">
               <div class="box">
                  <div class="box-icon">
                     <span><img src="webmedia/images/icons/step1.png" class="img-responsive" alt="how-Justkhelo-works-process-1" width="100">
                     </span>
                  </div>
                  <div class="info">
                     <h5 class="text-center">Check Out Contest For the League</h5>
                     <p>Check out the list of participating teams in recent matches, and you can also see the ticket price.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box">
                  <div class="box-icon">
                     <span><img src="webmedia/images/icons/step2.png" class="img-responsive" alt="how-Justkhelo-works-process-2" width="100"></span>
                  </div>
                  <div class="info">
                     <h5 class="text-center">Create your Best Team</h5>
                     <p>You can build the best team of real-life players and get paid for your knowledge and expertise by winning cash rewards.
</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box">
                  <div class="box-icon">
                     <span><img src="webmedia/images/icons/step3.png" class="img-responsive" alt="how-Justkhelo-works-process-3" width="100"></span>
                  </div>
                  <div class="info">
                     <h5 class="text-center">Pay Small And Win Big</h5>
                     <p>Play &amp; win considerable amounts by paying a small entry fee. You will also receive rewards based on your ranking.
</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

@stop