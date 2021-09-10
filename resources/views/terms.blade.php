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
            <p>All sales are final as justkhelo & Advisory offers free 2-day evaluation to ensure that our products and services will meet your needs without the need to purchase, there will be ABSOLUTELY NO REFUNDS and CANCELLATIONS.</p>

<p>Before deciding to subscribe to our services, please make sure to take our 2 day free trial, the evaluation version that we provide. We do not offer refunds on subscriptions that have already been taken. We believe in our services and support and even give two-day free trial that without any exception we have NO REFUND POLICY.</p>


<p>Before deciding to subscribe to our services, please make sure to take our 2 day free trial, the evaluation version that we provide. We do not offer refunds on subscriptions that have already been taken. We believe in our services and support and even give two-day free trial that without any exception we have NO REFUND POLICY.
</p>
           </div>
</div>
  </div>
    </div>
     </section>  



@stop