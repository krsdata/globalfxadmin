<header class="header-main">
   <div class="menubar">
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
            </button>
            <a href="{{url('/')}}" class="navbar-brand "><img src="{{URL::asset('webmedia/images/logo.png')}}" alt=image></a>
         </div>
         <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="{{url('/')}}">Home</a></li>
               <li><a href="{{url('/about-us')}}">About</a></li>
               <li><a href="{{url('/contact-us')}}">Contact</a></li>
               <!-- social icon-->
               <div class="social_icon">
                  <li class="nav-item">
                     <a href="{{$settings->facebook_url}}" class="social-link">
                     <img src="webmedia/images/banner/fb.svg" class="img-thumbnail" alt="social" width="40px">
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{$settings->instagram_url}}" class="social-link">
                     <img src="webmedia/images/banner/insta.svg" class="img-thumbnail" alt="social" width="40px" >
                     </a>
                  </li>
                  <li class="nav-item"><a href="{{$settings->twitter_url}}" class="social-link">
                     <img src="webmedia\images\banner/twitter.svg" class="img-thumbnail " alt="social" width="40px">
                     </a>
                  </li>
                  <li class="nav-item"><a href="{$settings->youtube_url}}" class="social-link">
                     <img src="webmedia\images\banner/youtube.svg" class="img-thumbnail" alt="social" width="40px">
                     </a>
                  </li>
               </div>
            </ul>
         </div>
   </nav>
   </div>
</header>
<script>
   $('.navbar-header').addClass('original').clone().insertAfter('.navbar-header').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();
   
   scrollIntervalID = setInterval(stickIt, 10);
   
   
   function stickIt() {
   
     var orgElementPos = $('.original').offset();
     orgElementTop = orgElementPos.top;               
   
     if ($(window).scrollTop() >= (orgElementTop)) {
       // scrolled past the original position; now only show the cloned, sticky element.
   
       // Cloned element should always have same left position and width as original element.     
       orgElement = $('.original');
       coordsOrgElement = orgElement.offset();
       leftOrgElement = coordsOrgElement.left;  
       widthOrgElement = orgElement.css('width');
       $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
       $('.original').css('visibility','hidden');
     } else {
       // not scrolled past the menu; only show the original menu.
       $('.cloned').hide();
       $('.original').css('visibility','visible');
     }
   }
</script>