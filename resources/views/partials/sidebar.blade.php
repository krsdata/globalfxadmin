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
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
<div class="page-sidebar-wrapper">
   <!-- BEGIN SIDEBAR -->
   <div class="page-sidebar navbar-collapse collapse">
      <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
         <li class="nav-item start active open">
            <a href="javascript:;" class="nav-link nav-toggle">
            <i class="icon-home"></i>
            <span class="title">Dashboard</span>
            <span class="selected"></span>
            <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
               <li class="nav-item start active open">
                  <a href="{{ url('admin')}}" class="nav-link ">
                  <i class="icon-bar-chart"></i>
                  <span class="title">Dashboard</span>
                  <span class="selected"></span>
                  </a>
               </li>
            </ul>
         </li>
         <li class="nav-item start active {{ (isset($page_title) && $page_title=='Role')?'open':'' }}">
            <a href="javascript:;" class="nav-link nav-toggle">
            <i class="glyphicon glyphicon-th"></i>
            <span class="title">Roles</span>
            <span class="arrow {{ (isset($page_title) && $page_title=='Blog')?'open':'' }}"></span>
            </a>
            <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='View Role')?'block':'none' }}">
               <li class="nav-item  {{ (isset($page_title) && $page_action=='View Role')?'active':'' }}">
                  <a href="{{ route('role') }}" class="nav-link ">
                  <i class="glyphicon glyphicon-eye-open"></i>
                  <span class="title">
                  View Roles
                  </span>
                  </a>
               </li>
               <li class="nav-item  {{ (isset($page_title) && $page_action=='Create Role')?'active':'' }}">
                  <a href="{{ route('role.create') }}" class="nav-link ">
                  <i class="glyphicon glyphicon-eye-open"></i>
                  <span class="title">
                  Create Role
                  </span>
                  </a>
               </li>
               <li class="nav-item  {{ (isset($page_title) && $page_action=='Update Permission')?'active':'' }}">
                  <a href="{{ url('admin/permission') }}" class="nav-link ">
                  <i class="glyphicon glyphicon-eye-open"></i>
                  <span class="title">
                  Set Permission
                  </span>
                  </a>
               </li>
            </ul>
         </li>
         <li class="nav-item  start active  {{ (isset($page_title) && ($page_title=='Admin User' || $page_title=='Client User') )?'open':'' }}">
            <a href="javascript:;" class="nav-link nav-toggle">
            <i class="glyphicon glyphicon-user"></i>
            <span class="title">Manage User</span>
            <span class="arrow {{ (isset($page_title) && $page_title=='Admin User')?'open':'' }}"></span>
            </a>
            <ul class="sub-menu" style="display: {{ (isset($page_title) && ($page_title=='Admin User' OR $page_title=='Client User' ))?'block':'none' }}">
               <li class="nav-item  {{ (isset($page_title) && $page_title=='Admin User')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="icon-user"></i>
                  <span class="title">Admin User</span>
                  <span class="arrow {{ (isset($page_title) && $page_title=='Admin User')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='Admin User')?'block':'none' }}">
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='Create Admin User')?'active':'' }}">
                        <a href="{{ route('user.create') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-plus-sign"></i>
                        <span class="title">
                        Create User
                        </span>
                        </a>
                     </li>
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='View Admin User')?'active':'' }}">
                        <a href="{{ route('user') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        <span class="title">
                        View Users
                        </span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item  {{ (isset($page_title) && $page_title=='Client User')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="icon-user"></i>
                  <span class="title">Customer</span>
                  <span class="arrow {{ (isset($page_title) && $page_title=='Client User')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='Client User')?'block':'none' }}">
                     <!-- <li class="nav-item  {{ (isset($page_title) && $page_action=='Create Client User')?'active':'' }}">
                        <a href="{{ route('clientuser.create') }}" class="nav-link ">
                            <i class="glyphicon glyphicon-plus-sign"></i>
                            <span class="title">
                                Create User
                            </span>
                        </a>
                        </li> -->
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='View Client User')?'active':'' }}">
                        <a href="{{ route('clientuser') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        <span class="title">
                        View Customer
                        </span>
                        </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </li>
         <li class="nav-item  start active {{ (isset($page_title) && $page_title=='Banner')?'open':'' }}">
            <a href="javascript:;" class="nav-link nav-toggle">
            <i class="fa fa-folder-open-o"></i>
            <span class="title">Manage Fantasy</span>
            <span class="arrow {{ (isset($page_title) && $page_title=='Banner')?'open':'' }}"></span>
            </a>
            <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='Match')?'block':'none' }}">
               <li class="nav-item  {{ (isset($sub_page_title) && $sub_page_title=='Match')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="glyphicon glyphicon-th"></i>
                  <span class="title">Matches</span>
                  <span class="arrow {{ (isset($sub_page_title) && $sub_page_title=='Match')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu"  style="display: {{ (isset($sub_page_title) && $sub_page_title=='Match')?'block':'' }}">
                     <li class="nav-item {{ (isset($page_action) && $page_action=='View  Match')?'open':'' }}">
                        <a href="{{ route('match') }}" class="nav-link "  >View Match</a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item  {{ (isset($sub_page_title) && $sub_page_title=='defaultContest')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="glyphicon glyphicon-th"></i>
                  <span class="title">Default Contest</span>
                  <span class="arrow {{ (isset($sub_page_title) && $sub_page_title=='defaultContest')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu"  style="display: {{ (isset($sub_page_title) && $sub_page_title=='defaultContest')?'block':'' }}">
                     <li class="nav-item {{ (isset($page_action) && $page_action=='View  Match')?'open':'' }}">
                        <a href="{{ route('defaultContest') }}" class="nav-link "  > Default Contest</a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item  {{ (isset($sub_page_title) && $sub_page_title=='Banner')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="glyphicon glyphicon-th"></i>
                  <span class="title">Banner</span>
                  <span class="arrow {{ (isset($sub_page_title) && $sub_page_title=='Banner')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu"  style="display: {{ (isset($sub_page_title) && $sub_page_title=='Banner')?'block':'' }}">
                     <li class="nav-item {{ (isset($page_action) && $page_action=='Create  Banner')?'open':'' }}">
                        <a href="{{ route('banner.create') }}" class="nav-link " > Create Banner</a>
                     </li>
                     <li class="nav-item {{ (isset($page_action) && $page_action=='View  Banner')?'open':'' }}">
                        <a href="{{ route('banner') }}" class="nav-link "  >View Banner</a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item  {{ (isset($sub_page_title) && $sub_page_title=='Contest Type')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="glyphicon glyphicon-th"></i>
                  <span class="title">contest Type</span>
                  <span class="arrow {{ (isset($sub_page_title) && $sub_page_title=='Contest Type')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu"  style="display: {{ (isset($sub_page_title) && $sub_page_title=='Contest Type')?'block':'' }}">
                     <li class="nav-item {{ (isset($page_action) && $page_action=='Create  Banner')?'open':'' }}">
                        <a href="{{ route('contestType.create') }}" class="nav-link " > Create Contest Type</a>
                     </li>
                     <li class="nav-item {{ (isset($page_action) && $page_action=='View  Contest Type')?'open':'' }}">
                        <a href="{{ route('contestType') }}" class="nav-link "  >View Contest Type</a>
                     </li>
                  </ul>
               </li>
               </li> 
               <li class="nav-item start active {{ (isset($page_title) && $page_title=='Program')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="glyphicon glyphicon-th"></i>
                  <span class="title">Promotions</span>
                  <span class="arrow {{ (isset($page_title) && $page_title=='Program')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='Program')?'block':'none' }}">
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='View Program')?'active':'' }}">
                        <a href="{{ route('program') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        <span class="title">
                        View Promotion
                        </span>
                        </a>
                     </li>
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='Create Program')?'active':'' }}">
                        <a href="{{ route('program.create') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-plus-sign"></i>
                        <span class="title">
                        Create Promotion
                        </span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item start active {{ (isset($page_title) && $page_title=='Payment')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="glyphicon glyphicon-th"></i>
                  <span class="title">Payment </span>
                  <span class="arrow {{ (isset($page_title) && $page_title=='Payment')?'open':'' }}"></span>
                  </a>
               </li>
               <li class="nav-item start active {{ (isset($page_title) && $page_title=='setting')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="glyphicon glyphicon-th"></i>
                  <span class="title">Website Setting </span>
                  <span class="arrow {{ (isset($page_title) && $page_title=='setting')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='setting')?'block':'none' }}">
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='View setting')?'active':'' }}">
                        <a href="{{ route('setting') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-eye-open"></i> 
                        <span class="title">
                        View Settings
                        </span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item start active {{ (isset($page_title) && $page_title=='setting')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="glyphicon glyphicon-th"></i>
                  <span class="title">Static Pages </span>
                  <span class="arrow {{ (isset($page_title) && $page_title=='Page')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='Page')?'block':'none' }}">
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='View Page')?'active':'' }}">
                        <a href="{{ route('content') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-eye-open"></i> 
                        <span class="title">
                        View Pages
                        </span>
                        </a>
                     </li>
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='Create Page')?'active':'' }}">
                        <a href="{{ route('content.create') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-eye-open"></i> 
                        <span class="title">
                        Create Page
                        </span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item start active {{ (isset($page_title) && $page_title=='setting')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="glyphicon glyphicon-th"></i>
                  <span class="title">Apk Update </span>
                  <span class="arrow {{ (isset($page_title) && $page_title=='apkUpdate')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='apkUpdate')?'block':'none' }}">
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='View apkUpdate')?'active':'' }}">
                        <a href="{{ route('apkUpdate') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-eye-open"></i> 
                        <span class="title">
                        View Apk Update
                        </span>
                        </a>
                     </li>
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='Create apkUpdate')?'active':'' }}">
                        <a href="{{ route('apkUpdate.create') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-eye-open"></i> 
                        <span class="title">
                        Add Apk 
                        </span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li class="nav-item start active {{ (isset($page_title) && $page_title=='ErrorLog')?'open':'' }}">
                  <a href="javascript:;" class="nav-link nav-toggle">
                  <i class="glyphicon glyphicon-th"></i>
                  <span class="title">Error Message </span>
                  <span class="arrow {{ (isset($page_title) && $page_title=='ErrorLog')?'open':'' }}"></span>
                  </a>
                  <ul class="sub-menu" style="display: {{ (isset($page_title) && $page_title=='ErrorLog')?'block':'none' }}">
                     <li class="nav-item  {{ (isset($page_title) && $page_action=='View ErrorLog')?'active':'' }}">
                        <a href="{{ route('errorLog') }}" class="nav-link ">
                        <i class="glyphicon glyphicon-eye-open"></i> 
                        <span class="title">
                        View ErrorLog
                        </span>
                        </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </li>
         <!-- posttask end-->
      </ul>
      <!-- END SIDEBAR MENU -->
   </div>
   <!-- END SIDEBAR -->
</div>