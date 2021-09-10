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
           <a style="color:#1041b7; display: block; padding:10px; font-weight: 600;">How To Play</a> </h2>
          
        
      </div>
   </div>


  <!--Section: Content-->
  <section>
      <div class="container">
           <div class="row">
					<div class="col-md-12">
           <div class="heading-section">
						<h2 class="heading line">HOW <span> TO PLAY</span></h2>
           </div> 
           <div class="paragraph-Pp">
            <p>The JustKhelo platform allows cricket enthusiasts to experience the most genuine cricket experience, virtually!</p>

            <p>By trying out your skills and learning more about the field, you can improve. Therefore, it is time to change the game and handle the situation yourself!</p>

<p>Here are a few simple steps to prepare you for a fantastic experience to remember!</p>


           </div>
</div>
  </div>
    </div>
     </section>  

    <section class="sponsors">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="heading line">How to play <span>JustKhelo Fantasy Cricket?</span></h2>
              <h4 class="subtitle">JTo avail of certain Services on the Portal, Users would be required to provide certain information for the registration process namely:</h4>
            </div>
            <div class="col-md-4">
               <div class="box">
                 <div class="info">
                     <h5 class="text-center">Step 1: Pick a match</h5>
                     <p>Browse the list of matches on the homepage until you find a match you like.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box">
                 <div class="info">
                     <h5 class="text-center">Step 2: Form a team</h5>
                     <p>Select 11 of your best players from all those playing in the match.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box">
                  <div class="info">
                     <h5 class="text-center">Step 3: Join a Contest</h5>
                     <p>You can win money by participating in a contest or you can play in free competitions and practice. As a general rule, the more teams you participate in, the more chance you have of winning.
</p>
                  </div>
               </div>
            </div>


     <div class="col-md-4">
               <div class="box">
                  <div class="info">
                     <h5 class="text-center">Step 4: Watch the match</h5>
                     <p>Your fantasy points are displayed on the leaderboard.
</p>
                  </div>
               </div>
            </div>


                 <div class="col-md-4">
               <div class="box">
                  <div class="info">
                     <h5 class="text-center">Request your winnings</h5>
                     <p>The industry's best win ratio is offered by JustKhelo. The chances of you winning are high. Once the match is finished, your winnings are credited to your winning wallet.
There is a minimum ₹100 winning withdrawal amount for the application.

</p>
                  </div>
               </div>
            </div>


                 <!-- <div class="col-md-4">
               <div class="box">
                  <div class="info">
                     <h5 class="text-center">Step 3: Join a Contest</h5>
                     <p>You can win money by participating in a contest or you can play in free competitions and practice. As a general rule, the more teams you participate in, the more chance you have of winning.
</p>
                  </div>
               </div>
            </div> -->

         </div>
      </div>
   </section>

   <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
<div class="well">The concept of the game is straightforward; you try to find the right team, earn points and cash. There are three C's to becoming a champion: Compete, Conquer, and Become a Champion!</div>
</div>
</div>
</div>
   </section>


     <section>
      <div class="container">
           <div class="row">
          <div class="col-md-12">
           <div class="heading-section">
            <h2 class="heading line">Answers to how to play <span>related questions</span></h2>
           </div> 
           <div class="paragraph-Pp">
            <h3><b>What if I want to delete the challenge I created?</b></h3>
            <p>The challenge you created can be deleted by you as long as it has not been accepted by anyone. The challenge cannot be deleted once it has been accepted by another player.</p>

<h3><b>Is there a way for me to change the amount of a challenge I created?</b></h3>
            <p>A challenge card you've created cannot be altered. However, the challenge can be deleted and a new one created with the desired amount.</p>


<h3><b>What happens if none of the challenges I present are accepted?</b></h3>
            <p>Upon failure to receive any response from the opponents, the challenge is considered EXPIRED, and the challenge amount is credited to your wallet.
</p>

           </div>
           <div class="infobtn">
          <a href="https://justkhelo.com/faqs"><button type="button" class="btn btn-info">Read More</button></a>
</div>
</div>
  </div>
    </div>
     </section>  


@stop