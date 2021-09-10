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
  <section  id="termscondition">
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

     <section class="">
      <div class="container">
           <div class="row">
          <div class="col-md-12">
           <div class="heading-section">
            <h2 class="heading line">How to play <span>JustKhelo Fantasy Cricket?</span></h2>
            <h3><b>Here are the 5 steps:</b></h3>
              <div class="paragraph-Pp">
            <p>To avail of certain Services on the Portal, Users would be required to provide certain information for the registration process namely:

          <h3 class="process">Step 1: Pick a match</h3>
          <p>Browse the list of matches on the homepage until you find a match you like.</p>

          <h3 class="process">Step 2: Form a team</h3>
          <p>Select 11 of your best players from all those playing in the match. </p>

          <h3 class="process">Step 3:  Join a Contest</h3>
          <p>You can win money by participating in a contest or you can play in free competitions and practice. As a general rule, the more teams you participate in, the more chance you have of winning.
</p>

          <h3 class="process">Step 4: Watch the match</h3>
          <p>Your fantasy points are displayed on the leaderboard.</p>

          <h3 class="process">Step 5: Request your winnings</h3>
          <p>The industry's best win ratio is offered by JustKhelo. The chances of you winning are high. Once the match is finished, your winnings are credited to your winning wallet.
There is a minimum ₹100 winning withdrawal amount for the application.
</p>

           </div>
       </div>
       </div>
       </div>
       </div>

     </section>  



@stop