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
<style type="text/css">
  .page_title{
    margin-top: -135px;right: 10px;position: absolute;background: #fff;padding: 10px;border-radius: 10px;
  }
</style>

  <!--Section: Content-->
  <section class="About-us">
      <div class="container">
           <div class="row">
					<div class="col-md-12">
           <div class="heading-section">
						<h2 class="heading line"> About <span>Us</span></h2>
           </div> 
           <div class="paragraph-Pp">
            <p>The Best Fantasy App of Justkhelo lets you showcase your expertise and knowledge. We offer one of the biggest virtual cricket fantasy sports platforms of India. We let you pick your team from a pool of the best cricketers from all around the world. Lets keep a watch on your fan base through shared posts in the feed. The more you invest in learning to Invest in Fantasy Sports and advancing to the next level, the more Cash Bonuses and other Rewards you receive.
</p>
           </div>
</div>
  </div>
    </div>
     </section>  


       <section class="booking bookticket">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="heading line">OUR<span> FEATURES</span></h2>
               <p></p>
            </div>
            <div class="col-md-12">
               <div class="col-md-4 spacing">
   <div class="img_space"><img src="webmedia/images/icons/1Quickest.png" alt="what-makes-Justkhelo-so-popular-1?" class="img-thumbnail" width="70"></div>
                  <h4>Easy To Join Contest</h4>
                  <p>JUSTKHELO Fantasy League allows you to participate in the fantasy sports where you can quickly level up your performance choosing your dream players. As you are just a step away from the contest, So, buy the entry ticket and get yourself enrolled for the upcoming contest just in a few clicks.</p>
               </div>
               <div class="col-md-4 spacing">
         <div class="img_space"><img src="webmedia/images/icons/2bonus.png" alt="what-makes-Justkhelo-so-popular-2?" class="img-thumbnail" width="70"></div>
                  <h4>High Speedy App</h4>
                  <p>Download the JUSTKHELO app to access exciting features easily. Also, the app is super easy to use as it fastens the speed so download it to win your cash rewards a few clicks away. Besides this, get instant notifications, offers and promotions in regards to your fantasy sport, upcoming contests, dream player, and so forth.</p>
               </div>
               <div class="col-md-4 spacing">
                  <div class="img_space"><img src="webmedia/images/icons/3winning.png" alt="what-makes-Justkhelo-so-popular-3?" class="img-thumbnail" width="70"></div>
                  <h4>Full Protection</h4>
                  <p>We understand safety measures, and that is why we make each participant register with their verified email address or phone number. Or you can log with your current Facebook or Google account as well. It will help check the user’s details for undertaking further procedures. Do not worry, as your details are safe with us and we do not share it with any third party without your consent.</p>
               </div>
            </div>
            <div class="col-md-4 spacing">
               <div class="img_space"><img src="webmedia/images/icons/4instantbonus.png" alt="what-makes-Justkhelo-so-popular-4?" class="img-thumbnail" width="70"></div>
               <h4>Easy To Withdraw</h4>
               <p>JUSTKHELO Fantasy League is a dream come true for the users, as they get an excellent chance to choose their ideal players alongside you can even earn points by winning the contest or a bonus by inviting a friend. After winning users switch to withdraw the earnings, with an easy withdrawal request procedure. As soon as the withdrawal request gets approved, your registered bank account will be verified to transfer the earnings into your account.</p>
            </div>
            <div class="col-md-4 spacing">
               <div class="img_space"><img src="webmedia/images/icons/5creditscore.png" alt="what-makes-Justkhelo-so-popular-5?" class="img-thumbnail" width="70"></div>
               <h4>India’s Quickest Fantasy Game</h4>
               <p>Enjoy Fantasy Gaming by creating your own teams of 2 to 4 players.</p>
            </div>
            <div class="col-md-4 spacing">
               <div class="img_space"><img src="webmedia/images/icons/6support.png" alt="what-makes-Justkhelo-so-popular-6?" class="img-thumbnail" width="70"></div>
               <h4>Best Customer Support</h4>
               <p>The Support Team is ready to answer your KYC and Withdrawal inquiries via email or social media.</p>
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
            <p>The Best Fantasy App of Justkhelo lets you showcase your expertise and knowledge. We offer one of the biggest virtual cricket fantasy sports platforms of India. We let you pick your team from a pool of the best cricketers from all around the world. Lets keep a watch on your fan base through shared posts in the feed. The more you invest in learning to Invest in Fantasy Sports and advancing to the next level, the more Cash Bonuses and other Rewards you receive.
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