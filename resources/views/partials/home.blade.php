<body>
    @php
      if((Request::get('_branch_name')))
      $url  = "downloadapk?_branch_name=".$_REQUEST['_branch_name'];
      else
      $url  = "downloadapk?_branch_name=010O";
      @endphp 
   <div class=wrapper>
   @include('layouts.menu')
   <section class="slider-up">
      <div class="container-fluid">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
               <div class="item active">
                  <img src="webmedia/images/banner/background02.jpg" alt="jk">
                  <div class="container">
                     <div class="carousel-caption">
                        <h1>Join & Play The Best Fantasy Sports In India Anytime & Anywhere! </h1>
                        <p>You will receive a welcome bonus of INR 100</p>
                        <p>
                  <a class="btn btn-lg btn-primary" href="{{$url}}" role="button">GET INR 100 BONUS NOW</a></p>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="webmedia/images/banner/background.jpg" alt="jk">
                  <div class="container">
                     <div class="carousel-caption">
                        <h1>ON JUSTKHELO, DIL SE KHELO</h1>
                        <p>We define entertainment and deliver it to the world</p>

                        <p>
                           <a class="btn btn-lg btn-primary" href="{{$url}}" role="button">Dil se khelo now</a></p>
                        </div>
                  </div>
               </div>
               <div class="item">
                  <img src="webmedia/images/banner/background-02.jpg" alt="jk">
                  <div class="container">
                     <div class="carousel-caption">
                        <!-- <h1>Download Now </h1>
                           <p>Get INR 100 as welcome bonus</p>
                           <p><a class="btn btn-lg btn-primary" href="{{$url}}" role="button">Download Now</a></p> -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Left and right controls -->
         </div>
      </div>
   </section>
   <div class=banner-text>
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center download">
               <a href="{{$url}}" class="btn btn-default" role="button">Download Now</a>
            </div>
            <div class="col-md-12">
               Dil Se khelo On JUSTKHELO
            </div>
         </div>
      </div>
   </div>
   <section class="booking bookticket ">
      <div class="container">
         <div class="col-md-12 text-center">
            <h2 class="heading line">JUSTKHELO<span> THE BEST FANTASY APP</span></h2>
            <h4 class="subtitle">Enjoy fantasy sports with the best fantasy app Justkhelo</h4>

            <p class="text justify">The Best Fantasy App of Justkhelo lets you showcase your expertise and knowledge. We offer one of the biggest virtual cricket fantasy sports platforms of India. We let you pick your team from a pool of the best cricketers from all around the world. Lets  keep a watch on your fan base through shared posts in the feed. The more you invest in learning to Invest in Fantasy Sports </a> and advancing to the next level, the more Cash Bonuses and other Rewards you receive. </p>

            <div class="col-md-12 text-center download">

               <a href="https://justkhelo.com/download-app?_branch_name=001" class="btn btn-info" role="button">DOWNLOAD AND START INVESTING NOW</a>

          

            </div>
         </div>
      </div>
   </section>
   <section class="sponsors">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="heading line">How<span>Justkhelo Works</span></h2>
              <h4 class="subtitle">Justkhelo provides a simplified view of how to earn rewards using your skills.</h4>
            </div>
            <div class="col-md-4">
               <div class="box">
                  <div class="box-icon">
                     <span ><img src="webmedia/images/icons/step1.png" class="img-responsive" alt="how-Justkhelo-works-process-1" width="100">
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
                     <p>Play & win considerable amounts by paying a small entry fee. You will also receive rewards based on your ranking.
</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="booking bookticket">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="heading line">WHAT MAKES <span>JUSTKHELO SO POPULAR? </span></h2>
               <p>Feel the winning feeling this season with Justkhelo's cricket fantasy.</p>
            </div>
            <div class="col-md-12">
               <div class="col-md-4 spacing">
   <div class="img_space"><img src="{{URL::asset('webmedia/images/icons/1Quickest.png')}}" alt="what-makes-Justkhelo-so-popular-1?" class="img-thumbnail" width="70"></div>
                  <h4>India’s Quickest Fantasy Game</h4>
                  <p>Enjoy Fantasy Gaming by creating your own teams of 2 to 4 players.</p>
               </div>
               <div class="col-md-4 spacing">
         <div class="img_space"><img src="{{URL::asset('webmedia/images/icons/2bonus.png')}}" alt="what-makes-Justkhelo-so-popular-2?" class="img-thumbnail" width="70"></div>
                  <h4>Win 100% Bonuses and Free Entry Contests</h4>
                  <p>Participate in Free Entry Contests using 100% of your sign-up bonus.</p>
               </div>
               <div class="col-md-4 spacing">
                  <div class="img_space"><img src="{{URL::asset('webmedia/images/icons/3winning.png')}}" alt="what-makes-Justkhelo-so-popular-3?" class="img-thumbnail" width="70"></div>
                  <h4>50% higher chances of winning</h4>
                  <p>With JustKhelo, you'll always have a 50% chance of winning.</p>
               </div>
            </div>
            <div class="col-md-4 spacing">
               <div class="img_space"><img src="{{URL::asset('webmedia/images/icons/4instantbonus.png')}}" alt="what-makes-Justkhelo-so-popular-4?" class="img-thumbnail" width="70"></div>
               <h4>Instant INR 100 Welcome Bonus</h4>
               <p>Join now and get a 100% welcome bonus of up to INR 5000 on your Fixed Deposits.</p>
            </div>
            <div class="col-md-4 spacing">
               <div class="img_space"><img src="{{URL::asset('webmedia/images/icons/5creditscore.png')}}" alt="what-makes-Justkhelo-so-popular-5?" class="img-thumbnail" width="70"></div>
               <h4>Lowest Credit Scores</h4>
               <p>With our 11-player game, you'll find the lowest Credit Scores of all players.</p>
            </div>
            <div class="col-md-4 spacing">
               <div class="img_space"><img src="{{URL::asset('webmedia/images/icons/6support.png')}}" alt="what-makes-Justkhelo-so-popular-6?" class="img-thumbnail" width="70"></div>
               <h4>Best Customer Support</h4>
               <p>The Support Team is ready to answer your KYC and Withdrawal inquiries via email or social media.</p>
            </div>
         </div>
      </div>
   </section>
   @if (!empty($completed)) 
   <section class="latestResult">
      <div class="container">
         <div class="row">
            <h2 class="heading">latest <span style="color: white;">result</span></h2>
            <div class="latestResult-wrap">
               <h4 style="color: white;">{{$completed->title }} ({{$completed->subtitle }})</h4>
               <p style="color:white;">{{$completed->status_note }}</p>
            </div>
            <div class="result clearfix">
               <div class="result-details">
                  <div class="content">
                     <h4>{{$completed->teama->name }}</h4>
                     <p></p>
                  </div>
                  <div class="figure">
                     <div class="team-logo">
      <div style="background:url('{{$completed->teama->thumb_url }}')" class="teamLogoImg"></div>
                     </div>
                  </div>
               </div>
               <div class="result-count">
                  <div class="count-number"><span class="lose-team">{{$completed->teama->scores_full }}</span> <span>-</span> <span
                     class="win-team">{{$completed->teamb->scores_full }}</span></div>
                  <div class="dateTime">
                     <div class="dateTime-container"><span class="date">{{$completed->date_start }}</span></div>
                     <div class="country-wrap"><span class="field">{{$completed->venue->name }}</span> 
                     </div>
                  </div>
               </div>
               <div class="result-details">
                  <div class="content contentresult">
                     <h4>{{$completed->teamb->name }}</h4>
                     <p></p>
                  </div>
                  <div class="figure figresult">
                     <div class="team-logo">
                        <div style="background:url('{{$completed->teamb->thumb_url }}')" class="teamLogoImg"></div>
                     </div>
                  </div>
               </div>
               <div class="center"><a href=# class="btn btn-red score-btn">{{$completed->status_note }}</a></div>
            </div>
         </div>
      </div>
   </section>
   @endif
   @if (!empty($upcomings)) 
   <section class="matchSchedule">
      <div class="container">
         <div class=row>
            <h2 class="heading line">match<span>schedule</span></h2>
            <div class="matchSchedule_details row">
               <div class="match_versus-wrap">
                  <div class="wrap_match-innerdetails">
                     <ul class="home_tInfo scrollable">
                        @foreach($upcomings as $key =>  $upcoming)
                        <li>
                           <a href="#">
                              <ul class="t_info match_info01 headline01 clearfix">
                                 <li>{{$key +1}}</li>
                                 <li>
                                    <div class="headline01 clearfix"><span>{{$upcoming->teama->name}}</span>
                                       <span class=vs>vs</span> <span>{{$upcoming->teamb->name}}</span>
                                    </div>
                                    <div class="paragraph02 clearfix">
                                       <span style="color:#ffffff; text-align: center;">{{$upcoming->date_start}}</span>
                                    </div>
                                 </li>
                              </ul>
                           </a>
                        </li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   @endif

   <section class="social-media">
      <div class="container">
         <div class="row">
            <h2 class=heading><span style="color:white;">Payment</span></h2>
            <p class="headParagraph" style="color:#fff;">
               Payment Accepted by All Major Banks & Payment Wallets
            </p>

            <div class="LatestNews_wrap clearfix">
               <div class="tab-content news_display_container clearfix">
                  <ul id="club_news" class="tab-pane active clearfix boardmember">
                     <li>
                        <div class="figure">
                           <div class="column-news">
                              <div class="figure-01 payment-img"><img src="{{URL::asset('webmedia/images/payment/paytm.svg')}}" alt="image"  class="img-responsive" ></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="figure">
                           <div class=column-news>
                              <div class="figure-01 payment-img"><img src="{{URL::asset('webmedia/images/payment/visa.svg')}}" alt="image"  class="img-responsive"></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="figure">
                           <div class=column-news>
                              <div class="figure-01 payment-img"><img src="{{URL::asset('webmedia/images/payment/mastercard.svg')}}" alt="image" class="img-responsive" ></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="figure">
                           <div class="column-news">
                              <div class="figure-01 payment-img"><img src="{{URL::asset('webmedia/images/payment/rupay.svg')}}" alt="image" class="img-responsive"></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="figure">
                           <div class=column-news>
                              <div class="figure-01 payment-img"><img src="{{URL::asset('webmedia/images/payment/Rozor_pay.svg')}}" alt="image" class="img-responsive" ></div>
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

<section class="FaQ_question">
<div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="section-title text-center wow zoomIn">
                  <h2 class="heading line">Frequently<span> Asked Questions</span></h2>
                 
               </div>
            </div>
         </div>
         <div class="row">          
            <div class="col-md-12">
               <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              In India, is Fantasy Cricket legal? </a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                           <p>Fantasy Sports App is a skill game that is different from gambling. It thus falls under the category of skill-based games, and it is also considered legal. We are a registered company in the market, and we have been growing our market presence among different companies. Additionally, we will protect your personal information by not selling, reusing, renting, lending, or otherwise disclosing it.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Where can I download the JustKhelo app for my phone?

                           </a>
                        </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                           <p>To access JustKhelo Fantasy Cricket App, download the app from this location:</p>
                           <p>The official App Store app is available for Apple mobile users.</p>
<p>Android users can download the official app from this download link on the JustKhelo website.
</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                             Where can I sign up for JustKhelo?

                           </a>
                        </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                           <p>To access JustKhelo Fantasy Cricket App, download the app from this location:</p>
<p>The official App Store app is available for Apple mobile users</p>
<p>Android users can download the official app from this download link on the JustKhelo website.</p>
<p>Once the software has been downloaded and installed, click on Join to create an account. To create a new account, enter the following details:</p>
<ul class="list">
<li>Name</li>
<li>Mobile Number</li>
<li>Email</li>
<li>State (of residence)</li>
<li>Username and password</li>
</ul>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              When I feel my JustKhelo account has been misused, what should I do?

                           </a>
                        </h4>
                     </div>
                     <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                           <p>Every time you make a transaction, you'll receive an email with details about that transaction. 
If you suspect a transaction was not done by you, please let us know at
<a href="https://justkhelo.com/"> info@justkhelo.com.</a> Please reset your password as soon as possible.  
</p>
                        </div>
                     </div>
                  </div>

                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              When I forget my verified mobile number and email ID, how do I log in?

                           </a>
                        </h4>
                     </div>
                     <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
<p>In order to access your account, you will need your user name and password. Neither an email address nor a phone number is needed to log in. Contact info@justkhelo.com along with account-specific details like your email address and phone number if you've forgotten your username. You can even log in to the JustKhelo account using your Facebook and Google IDs. 
Mobile numbers are collected during registration. Whenever you wish to update the mobile number, you can do so by navigating to the KYC section in Settings.
 </p>
                        </div>
                     </div>
                  </div>

                   <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingsix">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                             How do I reset my password if I have forgotten it?


                           </a>
                        </h4>
                     </div>

                     <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                        <div class="panel-body">
                           <p>Following are some steps you can take if you forgot your password:</p>
<ul class="list">
<li>Go to the login screen and enter your username.Click on the forgot password link.</li>
<li>To reset your password, you will receive a link to your registered email address.</li>
<li>By clicking on the link in the email, you can reset your password and log in with your new one.</li>
<li>We request you to check your promotions, spam, and junk folders if the email from JustKhelo is not found in your primary inbox.</li>
</ul>

 
                        </div>
                     </div>
                  </div>

                   <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingseven">
                        <h4 class="panel-title">
<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
   Why am I unable to log in using my mobile number? How can I resolve this? </a>
                        </h4>
                     </div>

                     <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                           <p>You can't sign up using your mobile number.
Contact us if you've forgotten your username <a href="">info@justkhelo.com</a>  Including account-specific information like email and phone number. Your Facebook and Google IDs are also accepted to log into the JustKhelo account.
</p>
</div>
 </div>
 </div>

                    <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingeight">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                            What should I do if I do not receive the OTP?</a>
                        </h4>
                     </div>

                     <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
                        <div class="panel-body">
                           <p>Your mobile number will be accompanied by an OTP within 30 seconds as soon as you enter it. In case you have not received the OTP, the following may have happened:
</p>
<ul class="list">
<li>The mobile number provided by you may be incorrect</li>
<li>Your mobile may be out of the network coverage area</li>
<li>If you are in a poor network area, we request you to be patient.</li>

</ul>
<p>In case you do not receive the OTP after a considerable wait,
Please write to us at<a href="https://justkhelo.com/"> info@justkhelo.com.</a>
</p>

 
                        </div>
                     </div>
                  </div>

                     <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingnine">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                            My password needs to be reset. How can I do that?</a>
                        </h4>
                     </div>

                     <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
                        <div class="panel-body">
                           <p>You may follow the steps mentioned below to reset your password:</p>
<ul class="list">
<li>Go to Settings in the app.</li>
<li>Click on the ‘Change’ password.</li>
<li>Enter the current and new password to reset it</li></ul>

<p>JustKhelo does not allow you to change your password if you are signed up using your social network credentials (like Facebook, Google, etc).
Changing the Password on your social network provider requires that you sign in there.

</p>
</div>
  </div>
   </div>

 <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingten">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseten" aria-expanded="false" aria-controls="collapseten">
                            Can I reactivate my deactivated JustKhelo account?</a>
                        </h4>
                     </div>

                     <div id="collapseten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingten">
                        <div class="panel-body">
   <p>The JustKhelo audit team may deactivate your account if they discover that the PAN card you entered on JustKhelo is not verified. JustKhelo will show your account is suspended in such situations.</p>

 <p>In such a case, you need to write to info@justkhelo.com and provide your PAN card details. Once the PAN details are verified by JustKhelo, your account shall be reactivated.</p>
</div>
   </div>
       </div>

       <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingeleven">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                            Is it possible to delete my JustKhelo account?</a>
                        </h4>
                     </div>

                     <div id="collapseeleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeleven">
                        <div class="panel-body">
   <p>JustKhelo accounts cannot be deleted by users alone. If you wish to delete your account,

</p>

 <p>Please email us at <a href="#">info@justkhelo.com</a> You can count on us to take the necessary actions for you.</p>

</div>
   </div>
       </div>

       <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingtwelve">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                            Do I have the option of creating more than one JustKhelo account?</a>
                        </h4>
                     </div>

                     <div id="collapsetwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwelve">
                        <div class="panel-body">
   <p>As far as the JustKhelo app is concerned, you cannot have more than one account.</p>

 
</div>
   </div>
       </div>


       <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingthirteen">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirteen" aria-expanded="false" aria-controls="collapsethirteen">
                            Are players under the age of 18 allowed to play?
</a>
                        </h4>
                     </div>

                     <div id="collapsethirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirteen">
                        <div class="panel-body">
   <p>We regret to inform you that if you are younger than 18 years old, you cannot play on JustKhelo.
</p>

 
</div>
   </div>
       </div>
          </div>

            </div><!--- END COL -->    
         </div><!--- END ROW -->       
      </div>

   </section>


   <script>
      function($) ({
   'use strict';
   
   jQuery(document).on('ready', function(){
   
         $('a.page-scroll').on('click', function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
               scrollTop: $(anchor.attr('href')).offset().top - 50
            }, 1500);
            e.preventDefault();
         });      

   });   

            
})  (jQuery);




   </script>