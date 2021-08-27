<footer class=footer-type01>
   <div class=container>
      <div class=row>
         <ul class=footer-widget>
            <li class=widget-about>
               <h4 class=footerheading>About <span>Us</span></h4>
               <p>{{$settings->website_description}}</p>
               <p><span class=uppercaseheading>address:</span>{{$settings->company_address}}</p>
               <p><span class=uppercaseheading>Email:</span> 
                  <span class=red> <a href= "{{$settings->website_email}}">{{$settings->website_email}}</a></span>
               </p>
            </li>
            <li class="widget-product">
               <h4 class="footerheading">Quick <span>Links</span></h4>
               <ul class="widget_productdetails">
                  
                  <li><a href="#" class="clearfix">
                     <a  href="{{url('/')}}">Home</a>
                  </li>
                  <li><a href="#" class="clearfix">
                     <a  href="{{url('about-us')}}">About Us</a>
                  </li>
                 
                  <li><a href="#" class="clearfix">
                     <a  href="{{url('how-to-play')}}">How To Play</a>
                  </li>
                  <li><a href="#" class="clearfix">
                     <a  href="{{url('legality')}}">Legality</a>
                  </li>
                  <li><a href="#" class="clearfix">
                     <a  href="{{url('disclaimer')}}">Disclaimer</a>
                  </li>
               </ul>
            </li>
            <li class="widget-product">
               <h4 class="footerheading">Quick <span>Links</span></h4>
               <ul class="widget_productdetails">
                  <li><a href="#" class="clearfix">
                     <a  href="{{url('terms-and-conditions')}}">Terms And Conditions</a>
                  </li>
                  <li><a href="#" class="clearfix">
                     <a  href="{{url('privacy-policy')}}">Privacy Policy</a>
                  </li>
                  <li><a href="#" class="clearfix">
                     <a  href="{{url('refund-policy')}}">Refund Policy</a>
                  </li>
                 
                 
                  <li><a href="#" class="clearfix">
                     <a  href="{{url('faqs')}}">FAQ</a>
                  </li>
                  <li><a href="#" class="clearfix">
                     <a  href="{{url('contact-us')}}">Help</a>
                  </li>
                
               </ul>
            </li>
         </ul>
      </div>
   </div>
   <div class="footer-type02">
      <div class="container">
         <div class="row">
            <a href="/" class="footer-logo"><img src="{{URL::asset('webmedia/images/jk-logo.svg')}}" alt=image></a>
            <div class=footer-container>
               <ul class=clearfix>
                  <li><a href="{{$settings->facebook_url}}" class=social-link>
                     <i><img src="webmedia/images/banner/fb.svg" class="img-thumbnail" alt="social" width="50px"></i>
                     </a>
                  </li>
                  <li><a href="{{$settings->instagram_url}}" class=social-link target=_blank>
                     <i><img src="webmedia/images/banner/insta.svg" class="img-thumbnail" alt="social" width="50px" ></i>
                     </a>
                  </li>
                  <li><a href="{{$settings->twitter_url}}" class=social-link target=_blank>
                     <i><img src="webmedia\images\banner/twitter.svg" class="img-thumbnail " alt="social" width="50px"></i>
                     </a>
                  </li>
                  <li><a href="{{$settings->youtube_url}}" class=social-link target=_blank>
                     <i><img src="webmedia\images\banner/youtube.svg" class="img-thumbnail" alt="social"width="50px"></i>
                     </a>
                  </li>
               </ul>
               <p class="copywriteline"><a target="_blank" href="{{$settings->website_url}}" >{{$settings->copywrite}}</a></p>
            </div>
            <div class=footer-appstore>
               <figure><a href="{{$settings->playstore_url}}"><img src="{{URL::asset('webmedia/images/appstore/google.png')}}" alt=image></a></figure>
            </div>
         </div>
      </div>
   </div>
</footer>
</div>
<script src="{{ URL::asset('webmedia/js/vendor/vendor.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('webmedia/js/main.js')}}"></script>
</body>
</html>