<footer class=footer-type01>
        <div class=container>
            <div class=row>
                <ul class=footer-widget>
                    <li class=widget-about><h4 class=footerheading>about <span>soccer club</span></h4>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis vitae, velit perferendis
                            dolor atque magni, </p>

                        <p><span class=uppercaseheading>address:</span>{{env('company_address')}}</p>

                        <p><span class=uppercaseheading>Email:</span> <span class=red>{{env('company_email')}}</span></p>
                        
                        </li>
                        <li class="widget-product"><h4 class="footerheading">Importnant <span>Links</span></h4>
                       
                        <ul class="widget_productdetails">
                        @foreach($static_page as $key =>  $result)
                            @if($key > 5)
                            <?php continue; ?>
                            @endif
                            <li><a href="#" class=clearfix>
                                <a  href="{{url($result->slug)}}">{{$result->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="widget-product"><h4 class="footerheading">Importnant <span>Links</span></h4>
                       
                       <ul class="widget_productdetails">
                        @foreach($static_page as $key =>  $result)
                        @if($key < 4)
                            <?php continue; ?>
                            @endif
                            <li><a href="#" class=clearfix>
                                <a  href="{{url($result->slug)}}">{{$result->title}}</a></li>
                            @endforeach
                           
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class=footer-type02>
            <div class=container>
                <div class=row><a href=index-2.html class=footer-logo><img src="{{URL::asset('webmedia/images/logo.png')}}" alt=image></a>

                    <div class=footer-container>
                        <ul class=clearfix>
                            <li><a href=https://www.facebook.com/templatespoint.net class=bigsocial-link><i
                                    class="fa fa-facebook"></i></a></li>
                            <li><a href=https://twitter.com/ class=bigsocial-link target=_blank><i
                                    class="fa fa-twitter"></i></a></li>
                          
                        </ul>
                        <p><a target="_blank" href="https://www.templateshub.net">{{env('company_name')}} © All rights reserved {{date('Y')}}.</a>
                        </div>
                    <div class=footer-appstore>
                       
                        <figure><a href=#><img src="{{URL::asset('webmedia/images/appstore/google.png')}}" alt=image></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{ URL::asset('webmedia/js/vendor/vendor.js')}}"></script>
<script src="{{ URL::asset('webmedia/js/main.js')}}"></script>
</body>

</html>