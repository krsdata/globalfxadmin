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
           <a style="color:#1041b7; display: block; padding:10px; font-weight: 600;">{{$content->title}}</a> </h2>
          
        
      </div>
   </div>


  <!--Section: Content-->
  <section  id="termscondition">
      <div class="container">
           <div class="row">
					<div class="col-md-12">
           <div class="heading-section">
						<h2 class="heading line">JUSTKHELO <span>LEGALITY</span></h2>
           </div> 
           <div class="paragraph-Pp">
            <p>The Public Gambling Act of 1867 does not apply to games of skill, since they are excluded from Indian gambling legislations. The Indian Supreme Court in the cases of State of Andhra Pradesh v. K Satyanarayana (AIR 1968 SC 825) and KR Lakshmanan v. State of Tamil Nadu (AIR 1996 SC 1153) has held that a game in which success depends predominantly upon the superior knowledge, training, attention, experience, and adroitness of the player shall be classified as a game of skill.

<p>Contest described above (same across Ninja Services) are games of skill since success depends upon Participants' knowledge of statistics of cricket, football, basketball, hockey, volleyball, kabaddi, knowledge of players' relative form, players' performance in a particular territory, conditions format (such as ODIs, test cricket and Twenty20 in the cricket fantasy game), attention and dedication towards the Contest(s) and adroitness in playing the Contest(s). The Contest(s) also require that Participants field well-balanced sides with limited resources and make substitutions when appropriate in order to obtain the maximum points.</p>
  <p>
Participation in this Contest(s) constitutes the Participant's acknowledgement and agreement that he/she is participating in a game of skill.</p>
 

</p>
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
            <h2 class="heading line">ELIGI<span>BILITY</span></h2>
              <div class="paragraph-Pp">
            
<ul class="paragraph-Pp">
<li>The Contest(s) is/are open only to individuals 18 years or older.</li>
<li>Contest(s) are open only to persons residing in India.</li>
<li>Persons who wish to participate must have a valid email address.</li>
<li>Participants from certain Indian states may not be allowed to participate in the Contest(s), in accordance with state laws. Currently, residents living in the Indian states of Assam, Odisha, Sikkim, Nagaland or Telangana are forbidden from participating in the paid version of the Contest since state laws forbid people from participating in skill-based games where they must pay to enter.
</li>
<li>Upon receiving information, JUSTKHELO may bar an individual from participating and/or withdrawing winnings if that individual has inside knowledge about the teams participating in any given contest/match, organizing boards, leagues, etc.
</li>
<li>All Participants who have successfully registered on JUSTKHELO and registered prior to each match as described above will be eligible to participate in the Contest and win prizes.
</li>  
 </ul>


           </div>
       </div>
       </div>
       </div>
       </div>

     </section>  



@stop