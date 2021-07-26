<header class=header-main>
        
        <div class="header-lower clearfix">
            <div class=container>
                <div class=row><h1 class=logo><a href="/"><img src="{{URL::asset('webmedia/images/logo.png')}}" alt=image></a></h1>

                    <div class=menubar>
                        <nav class=navbar>
                            <div class=nav-wrapper>
                                <div class=navbar-header>
                                    <button type=button class=navbar-toggle><span class=sr-only>Toggle navigation</span>
                                        <span class=icon-bar></span></button>
                                </div>
                                <div class=nav-menu>
                                    <ul class="nav navbar-nav menu-bar">
                                        <li><a href="/" class="{{ (request()->path() === '/') ? 'active' : '' }}">Home <span></span> <span></span>
                                            <span></span> <span></span></a></li>
                                        <li><a href="about-us" class="{{ (request()->path() === 'about-us')  ? 'active' : '' }}"> about </a></li>
                                        <li><a href="contact-us" class="{{ (request()->path() === 'contact-us')  ? 'active' : '' }}">contact </a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
              
                    <div class=social>
                    <a href="{{$settings->facebook_url}}" class=><i
                                    class="fa fa-facebook"></i></a>
                                    <a href="{{$settings->twitter_url}}"  target=_blank><i
                                    class="fa fa-twitter"></i></a>
                                    <a href="{{$settings->instagram_url}}"  target=_blank><i
                                    class="fa fa-instagram"></i></a>
                         </div>
                </div>
            </div>
        </div>
    </header>