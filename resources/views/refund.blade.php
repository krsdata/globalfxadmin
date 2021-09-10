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
 <section class="refund_policy">
      <div class="container">
           <div class="row">
          <div class="col-md-12">
           <div class="heading-section">
            <h2 class="heading line"> REFUND POLICY<span> FOR JUSTKHELO</span></h2>
           </div> 
           <div class="paragraph-Pp">
            <p>All contests are final. Our fantasy program and services are evaluated by our team of experts to ensure they meet the requirements of our customers, so we do not offer refunds or cancellations. Make sure to read our terms and conditions prior to subscribing to our fantasy program, so that you know how the fantasy world works. We do not offer refunds on any contest that has already been taken. Once you enter the contest, there is no partial refund or cancellation allowed.

</p>

<p>The amount received twice for a single transaction may be refunded via the same source within seven to ten working days in case of any technical reasons.</p>



           </div>
</div>
  </div>
    </div>
     </section>  


 <section class="refund_policy">
      <div class="container">
           <div class="row">
          <div class="col-md-12">
           <div class="heading-section">
            <h2 class="heading line">REFUND POLICY <span>THINGS TO CONSIDER</span></h2>
           </div> 
           <div class="paragraph-Pp">
            <p>It is important to read all information regarding our products, services, and support offered to our clients before making any payment.</p>

<ul>
    <li>Visit our About Us page for more information</li>
 <li>Check out the Terms of Service.</li>
  <li> Take a look at our Privacy Policy.</li>
   <li>Statement of disclaimer</li>
    <li>Terms of payment</li>
</ul>

<p>o make sure that no one pays for a Membership without your permission, do not let children or other unauthorized family members or friends have access to your credit card or account information. You acknowledge and agree that you have read and agree to the above Refund Policy before subscribing to our site.
</p>



           </div>
</div>
  </div>
    </div>
     </section>  

@stop