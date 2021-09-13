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
           <a  style="color:#1041b7; display: block; padding:10px; font-weight: 600;">{{$content->title}}</a> </h2>
          
        
      </div>
   </div>


  <!--Section: Content-->
 <section  id="termscondition">
      <div class="container">
           <div class="row">
          <div class="col-md-12">
           <div class="heading-section">
            <h2 class="heading line">TERMS & <span>CONDITIONS</span></h2>
           </div> 
           <div class="paragraph-Pp">
            <p>JUST KHELO is the flagship brand of Insta IT Technologies Through JUST KHELO, along with its sub-pages, and the JUST KHELO App, JUST KHELO operates five separate portals through which it offers cricket-based, football-based, basketball based, volleyball based, hockey based and kabaddi based online fantasy games. JUST KHELO, as used herein, shall be construed as a collective reference to JUST KHELO and the JUST KHELO App.</p>


<p>Before deciding to subscribe to our services, please make sure to take our 2 day free trial, the evaluation version that we provide. We do not offer refunds on subscriptions that have already been taken. We believe in our services and support and even give two-day free trial that without any exception we have NO REFUND POLICY.</p>


<p>Before deciding to subscribe to our services, please make sure to take our 2 day free trial, the evaluation version that we provide. We do not offer refunds on subscriptions that have already been taken. We believe in our services and support and even give two-day free trial that without any exception we have NO REFUND POLICY.
</p>
           </div>
</div>
  </div>
    </div>
     </section>  



@stop