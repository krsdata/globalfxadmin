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
           <a  style="color:#1041b7; display: block; padding:10px; font-weight: 600;">Terms & Conditions</a> </h2>
          
        
      </div>
   </div>












@extends('layouts.master')
    @section('content') 
      @include('partials.navigation')
      <!-- Left side column. contains the logo and sidebar -->
     <!-- services -->
    
        
@stop