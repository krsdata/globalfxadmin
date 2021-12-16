@extends('layouts.website.app')

@section('internal_css') 

 
@endsection

@section('content')
@php
if((Request::get('_branch_name')))
$url  = "downloadapk?_branch_name=".$_REQUEST['_branch_name'];
else
$url  = "downloadapk?_branch_name=010O";
@endphp
<head>   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>{{ strip_tags(isset($content->meta_title) ? $content->meta_title : $settings->meta_title) }}</title>
      <meta name="description" content="{{strip_tags(isset($content->meta_description) ? $content->meta_description :$settings->meta_description)}}" />
      <meta name="keywords" content="{{strip_tags(isset($content->meta_key) ? $content->meta_key : $settings->meta_key)}}"/>

      <meta name="google-site-verification" content="UHF02krjE6P_UzBkn8ZNRZK8R7FGkcyAkQ4VtR3NQoI">
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="website/images/Background/slide1.jpg" alt="justkeloimg1" class="img-thumbnail">
            <div class="carousel-caption slideheading">
                <h1>Join & Play The <span>Best Fantasy Sports </span> In India Anytime & Anywhere!</h1>
                <p>We define entertainment and deliver it to the world</p>

                {{-- <button type="button" class="btn btn-primary active"></button> --}}
                <a href="{{$url}}" class="btn btn-primary active">Download App Now</a>
                <!-- <button type="button" class="btn btn-secondary">Start Investing Now</button> -->
                <a href="{{url('just-khelo-download-app')}}" class="btn btn-secondary">Start Investing Now</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="website/images/Background/slide2.jpg" alt="justkeloimg2" class="img-thumbnail">
            <div class="carousel-caption  slideheading">
                <a href="{{url('just-khelo-download-app')}}">
                <h1 class="text-white">ON JUSTKHELO<span> DIL SE KHELO</span></h1></a>
                <p>You will receive a welcome bonus of INR 100</p>
                <button type="button" class="btn btn-primary active">Get INR 100 Bonus</button>
                <a href="{{url('just-khelo-download-app')}}">
                <button type="button" class="btn btn-secondary">Start Investing Now</button></a>
            </div>

        </div>
        <div class="carousel-item">
            <img src="website/images/Background/slide3.jpg" alt="justkeloimg3" class="img-thumbnail">
            <div class="carousel-caption  slideheading">
                <h1>100% Bonus Cash<span> on First Deposit </span></h1>
                <p> Earn 100% Bonus Cash by making the first deposit in the application</p>
                <button type="button" class="btn btn-primary active">Dil se Khelo Now</button> <a href="{{url('just-khelo-download-app')}}">
                <button type="button" class="btn btn-secondary">Start Investing Now</button></a>
            </div>
        </div>

    </div>

    <!-- Left and right controls -->
    <!--   <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a> -->

</div>
<!-- end slider -->
<section class="clienttele">
    <div class="container">
        <div class="row align-items-center">
            <ul class="inner">
                <li>
                    <img src="website/images/Background/activeuser.svg" alt="info" width="50" class="img-fluid">
                    <p><b>4 Lakhs+</b><br>Active users</p>
                </li>

                <li>
                    <img src="website/images/Background/cashwining.svg" alt="info" width="40" class="img-fluid">
                    <p><b>4 Lakhs+</b><br>Active users</p>
                </li>

                <li>
                    <img src="website/images/Background/contestsplayed.svg" alt="info" width="50" class="img-fluid">
                    <p><b>4 Lakhs+</b><br>Active users</p>
                </li>

                <li>
                    <img src="website/images/Background/coinredeem.svg" alt="info" width="50" class="img-fluid">
                    <p><b>4 Lakhs+</b><br>Active users</p>

                </li>
            </ul>
        </div>
    </div>
</section>


<section class="bestfantasy">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 contentimg">
                <img src="website/images/jkimagecontest.svg" alt="justkeloimgwin" width="100%">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 Heading1">
                <h2>Justkhelo<span> The best fantasy </span> app</h2>

                <p>The Best Fantasy App of Justkhelo lets you showcase your expertise and knowledge. We offer one of the
                    biggest virtual cricket fantasy sports platforms of India. We let you pick your team from a pool of
                    the best cricketers from all around the world. Lets keep a watch on your fan base through shared
                    posts in the feed. The more you invest in learning to Invest in Fantasy Sports and advancing to the
                    next level, the more cash bonuses and other rewards you receive.</p>
            </div>
        </div>
    </div>

</section>

<section class="jkworks">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12 Heading1 text-center">
                <h2 class="bgtxt">How<span> Justkhelo</span> Works</h2>
                <p class="bgtxt">Justkhelo provides a simplified view of how to earn rewards using your skills.
                <p>
            </div>

            <div class="col-sm-4">
                <div class="box">
                    <div class="space"><img src="website/images/Background/checkout1.svg" alt="jkprocess1"
                            class="img-fluid" width="100"></div>
                    <h3>Check Out Contest For the League</h3>
                    <p>Check out the list of participating teams in recent matches, and you can also see the ticket
                        price.</p>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="box">
                    <div class="space"><img src="website/images/Background/bestteam.svg" alt="jkprocess2"
                            class="img-fluid" width="100"></div>
                    <h3>Create your Best Team</h3>
                    <p>You can build the best team of real-life players and get paid for your knowledge and expertise by
                        winning cash rewards.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box">
                    <div class="space"><img src="website/images/Background/winbig.svg" alt="jkprocess3"
                            class="img-fluid" width="100"></div>
                    <h3>Pay Small And Win Big</h3>
                    <p>Play & win considerable amounts by paying a small entry fee. You will also receive rewards based
                        on your ranking.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- endjkwoks -->

<section class="whypopular">
    <div class="container text-center">
        <div class="row ">
            <div class="col-sm-12 Heading1 text-center">
                <h2>WHAT MAKES <span> JUSTKHELO</span> SO POPULAR?</h2>
                <p class="w-txt">Feel the winning feeling this season with Justkhelo's cricket fantasy.
                <p>
            </div>



            <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-2 box1">
                                <div class="space"><img src="website/images/Background/Quikgame.svg" alt="jkprocess1"
                                        class="img-fluid" width="80"></div>
                                <div class="card-body">
                                    <h3 class="card-title">India’s Quickest <br> Fantasy Game</h3>
                                    <p class="card-text">Enjoy Fantasy Gaming by creating your own teams of 2 to 4
                                        players.</p>
                                    <h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-2 box1">
                                <div class="space"><img src="website/images/Background/winbonus2.svg" alt="jkprocess1"
                                        class="img-fluid" width="80"></div>
                                <div class="card-body">
                                    <h3 class="card-title">Win 100% Bonuses &<br>Free Entry Contests</h3>
                                    <p class="card-text">Participate in Free Entry Contests using 100% of your
                                        sign-up bonus.</p>
                                    <h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-2 box1">
                                <div class="space">
                                    <img src="website/images/Background/wintroffy.svg" alt="jkprocess1" class="img-fluid"
                                        width="80">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">50% higher chances <br> of winning </h3>
                                    <p class="card-text">With JustKhelo, you'll always have a 50% chance of
                                        winning.</p>
                                    <h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-2 box1">
                                <div class="space"><img src="website/images/Background/instantwelcome.svg"
                                        alt="jkprocess1" class="img-fluid" width="80"></div>
                                <div class="card-body">
                                    <h3 class="card-title">Instant INR 100 <br> Welcome Bonus</h3>
                                    <p class="card-text">Join now and get a 100% welcome bonus of up to INR 5000 on
                                        your Fixed Deposits.</p>
                                    <h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-2 box1">
                                <div class="space">
                                    <img src="website/images/Background/lowestcredit.svg" alt="jkprocess1"
                                        class="img-fluid" width="80">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Lowest Credit<br>Scores</h3>
                                    <p class="card-text">With our 11-player game, you'll find the lowest Credit
                                        Scores of all players.</p>
                                    <h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-lg-4 col-md-6">
                            <div class="card mb-2 box1">
                                <div class="space">
                                    <img src="website/images/Background/support.svg" alt="jkprocess1" class="img-fluid"
                                        width="80">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">Best Customer<br> Support</h3>
                                    <p class="card-text">The Support Team is ready to answer your KYC and
                                        Withdrawal inquiries via email or social media.</p>
                                    <h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>

</section>



<section class="Fixtureresult">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 col-sm-12 Heading1">
                <h2 class="bgtxt">Fixture & <span> Result </span></h2>
            </div>
            <div class="col-lg-12 boxresult pb-5">
                <ul class="seprator">
                    <li><a>
                            <h4><i class="fa fa-circle" aria-hidden="true"></i> Live</h4>
                        </a></li>
                    <li  style="width:500px;"><a>
                            <h4 >{{ $completed->status_note}}</h4>
                        </a></li>
                    <li><a>
                            <h4>Time:{{date('H:i:s', strtotime($completed->date_start))}}</h4>
                        </a></li>
                </ul>

                <div class="row">

                    <div class="col-md-4 mt-3">
                        <img src="{{str_replace('-32x32','',$completed->teama->thumb_url) }}" alt="teamlogo" class="img-fluid" width="150">
                        <h4 class="mt-3">{{$completed->teama->name}}</h4>
                    </div>

                    <div class="col-md-4 pt-5">

                        <h4>{{$completed->teama->scores_full }} </h4>

                        <h4>{{$completed->teamb->scores_full }}</h4>
                    </div>

                    <div class="col-md-4 mt-3">
                        <img src="{{str_replace('-32x32','',$completed->teamb->thumb_url) }}" alt="teamlogo" class="img-fluid" width="150">
                        <h4 class="mt-3">{{$completed->teamb->name}}</h4>
                    </div>
                </div>

                <div class="col-lg-12 pt-5 ">
                    <h4 class="mt-3"> {{ $completed->title}})</h4>


                    <div class="d-flex justify-content-center pt-3">

                        <h4 class="p-3"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('d-m-Y', strtotime($completed->date_start)) }}</h4>
                        <h4 class="p-3"><i class="fa fa-location-arrow" aria-hidden="true"></i> {{$completed->venue->name }}</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>




<section class="Schedule">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 Heading1 text-center">
                <h2 class="">League Table & <span> Schedule</span></h2>
            </div>

            <div class="allcontent col-lg-12">
                <div class="table-responsive p-2 ">
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Team A</th>
                                <th>Team B</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($upcomings as $key=>$value)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{date('d-m-Y', strtotime($value->date_start))}}</td>
                                <td>{{date('H:i:s', strtotime($value->date_start))}}</td>
                                <td>{{$value->teama->name}}</td>
                                <td>{{$value->teamb->name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
             </div>

        </div>
    </div>
</section>
<section class="payment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 Heading1 text-center">
                <h2 class="">Pay<span>ment</span></h2>
                <p class="w-txt">Payment Accepted by All Major Banks & Payment Wallets</p>
                <div class="paymentlogo">
                    <img src="website/images/Background/payment.png" alt="paymentlogo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq">
  <div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12 Heading_f text-center">
      <h1 class="page-title">Frequently <span>Asked Questions</span></h1></div>
       <div class="row">          
            <div class="col-md-8 mt-5">
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


                  
</div>
</div>





  <div class="col-lg-4 col-sm-4  col-xs-12 mt-3">
  <img src="website/images/Background/appimage.png" alt="appimage" class="img-fluid appimage">
</div>


</div>
</div>
</div>
</section>


@endsection
@section('footer_script')
    

<script>
    $(document).ready(function() {
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function() {
            $(this).prev(".card-header").addClass("highlight");
        });

        // Highlight open collapsed element 
        $(".card-header .btn").click(function() {
            $(".card-header").not($(this).parents()).removeClass("highlight");
            $(this).parents(".card-header").toggleClass("highlight");
        });
    });
</script>



<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
@endsection
</head>
