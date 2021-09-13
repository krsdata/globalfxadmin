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
           <a style="color:#1041b7; display: block; padding:10px; font-weight: 600; padding: 10px 35px 10px;">Help</a> </h2>
          
        
      </div>
   </div>


  <!--Section: Content-->
  <section class="sponsors">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="heading line">Get in touch & let us know <span>How we can help?</span></h2>
             
            </div>
            <div class="col-md-4">
               <div class="box">
                  <div class="box-icon">
                     <span><img src="webmedia/images/icons/mail.svg" class="img-responsive" alt="mail-us" width="100">
                     </span>
                  </div>
                  <div class="info1">
                     <h5 class="text-center">Mail us</h5>
                     <p class="text-center"><a href="">info@justkhelo.com</a></p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box">
                  <div class="box-icon">
    <span><img src="webmedia/images/icons/call.svg" class="img-responsive" alt="Call-us" width="100"></span>
                  </div>
                  <div class="info1">
                     <h5 class="text-center">Call us</h5>
                     <p class="text-center">Mon - Fri 08:00 – 21:00</p>
                     <p class="text-center">+91 9329922484</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box">
                  <div class="box-icon">
                     <span><img src="webmedia/images/icons/address.svg" class="img-responsive" alt="Address" width="100"></span>
                  </div>
                  <div class="info1">
                     <h5 class="text-center">GET IN TOUCH </h5>
                     <p>InstaIT Technologies,</p>
                    <p>205, II Floor, Airen Heights, Plot No-13, Scheme No-54, PU-3, A.B.Road, Indore, M.P.
</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>  


@stop