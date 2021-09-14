@if ($remove_header != true) 
<header class="header-main">
   <div class="menubar">
   
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
         <div class="navbar-header">
         @if (isset($is_mobile) &&  $is_mobile != true)  
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
            </button>
            @endif
            <a href="{{url('/')}}" class="navbar-brand "><img src="{{URL::asset('webmedia/images/jk-logo.svg')}}" alt="image-logo"></a>
         </div>
         <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="{{url('/')}}">Home</a></li>
               <li><a  href="{{url('how-to-play')}}">How To Play</a></li>
                <li><a  href="https://justkhelo.com/just-khelo-download-app?_branch_name=001">How To Install</a></li>
                <li><a href="{{url('/about-us')}}">About</a></li>
                <li><a  href="{{url('contact-us')}}">Help</a></li>


              
             </ul>
            
         </div>
      </div>
   </nav>
   

         </div>
      
</header>
<script>
   $('.navbar-header').addClass('original').clone().insertAfter('.navbar-header').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();  
</script>
@endif