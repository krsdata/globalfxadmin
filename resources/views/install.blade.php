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
      <div class="innerbannerinstall">
        
         <h2 class="bannerHeadline">
           <a href="{{$url}}" >Download Play & Win</a> </h2>
           <p>In Respect Of Legands</p>
        
      </div>
   </div>

<section class="wining_slider">
<div class="container">
         <div class="row">
            <h2 class="heading line">LATEST<span>WINNER</span></h2>
            <div class="LatestNews_wrap clearfix">
               <div class="tab-content news_display_container clearfix">
                  <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                  <ul id=club_news class="tab-pane active clearfix slideHeroes">
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01>
                                 <div class="bg-black01 fig02">
                                    <img src="{{URL::asset('webmedia/images/background/Himani.png')}}" style="width:100px">
                                    <h6 class="paragraph02">Himani Shankarv</h6>
                                    <p class="uppercaseheading red">RS.25,000</p>
                                    <p>Himani Won 25,000 rs In IND VS ENG</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01>
                                 <div class="bg-black01 fig02">
                                    <img src="{{URL::asset('webmedia/images/background/mohit.png')}}" style="width:100px">
                                    <h6 class="paragraph02">Mohit J</h6>
                                    <p class="uppercaseheading red">Rs 45,000</p>
                                    <p>Mohit won 45000 Rs IN IPL </p>
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01>
                                 <div class="bg-black01 fig02">
                                    <img src="{{URL::asset('webmedia/images/background/kapil.png')}}" style="width:100px">
                                    <h6 class="paragraph02">Kapil D</h6>
                                    <p class="uppercaseheading red">100,000</p>
                                    <p>Kapil Won 100,000 RS in CPL.</p>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01>
                                 <div class="bg-black01 fig02">
                                    <img src="{{URL::asset('webmedia/images/background/Anand.png')}}" style="width:100px">
                                    <h6 class="paragraph02">Kapil D</h6>
                                    <p class="uppercaseheading red">100,000</p>
                                    <p>Kapil Won 100,000 RS in CPL.</p>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               
            </div>
         </div>
      </div>
</section>
   

<section class="latest_news bg-white">
      <div class="container">
         <div class="row">
            <h2 class="heading line">How To<span> Install</span></h2>
            <p class="headParagraph headParagraphInsta">Fantasy sports that allow you to win money are not allowed on the google play store</p>
            <div class="LatestNews_wrap clearfix">
               <div class="tab-content news_display_container clearfix">
                  <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                  <ul id="club_new" class="tab-pane active clearfix  club_new">
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01><img src="{{URL::asset('webmedia/images/widget/01.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01><img src="{{URL::asset('webmedia/images/widget/02.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01><img src="{{URL::asset('webmedia/images/widget/03.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                  </ul>
                  <div class="secure_safe"><img src="{{URL::asset('webmedia/images/widget/safe_secure.jpg')}}" alt=image></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <section class="latest_news bg-white">
      <div class="container">
         <div class="row">
            <h2 class="heading line">Our Rating Says,<span> You Love Us</span></h2>
            <div class="LatestNews_wrap clearfix">
               <div class="tab-content news_display_container clearfix">
                  <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                  <ul id=club_news class="tab-pane active clearfix slideHeroes">
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01>
                                 <div class="bg-black01 fig02">
                                    <img src="{{URL::asset('webmedia/images/testimonial/himani.png')}}" style="width:50px">
                                    <h6 class="paragraph02">Himani Shankarv</h6>
                                    <p class="uppercaseheading red">Mumbai</p>
                                    <p>JustKhelo is a very easy platform to create teams and play. I have tried other fantasy games but to my disappointment they were hard to understand. I have also actually won on this app and OH BOY! I LOVE IT!!</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01>
                                 <div class="bg-black01 fig02">
                                    <img src="{{URL::asset('webmedia/images/testimonial/mohit.png')}}" style="width:50px">
                                    <h6 class="paragraph02">Mohit J</h6>
                                    <p class="uppercaseheading red">Delhi</p>
                                    <p>During lockdown being busy was a task. At home all day and nothing to do. JustKhelo came as a blessing. Selecting players and playing was fun and easy. When i got my first payout, I was over the moon! Play Hard and Earn Well was a reality. 
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class=figure>
                           <div class=column-news>
                              <div class=figure-01>
                                 <div class="bg-black01 fig02">
                                    <img src="{{URL::asset('webmedia/images/testimonial/kapil.png')}}" style="width:50px">
                                    <h6 class="paragraph02">Kapil D</h6>
                                    <p class="uppercaseheading red">Jaipur</p>
                                    <p>If you play on JustKhelo you will forget other game apps. It is so engaging and the process of payout, customer service is seamless. It is a MUST TRY APP!
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="secure_safe"> <img src="{{URL::asset('webmedia/images/rating.jpg')}}" alt=image></div>
            </div>
         </div>
      </div>
   </section>
   <section class="latest_news bg-white">
      <div class="container">
         <div class="row">
            <h2 class="heading line">Get the App and<span> Win Crores</span></h2>
            <div class="LatestNews_wrap clearfix">
               <div class="tab-content news_display_container clearfix">
                  <a class="prv club_prev"></a> <a class="nxt club_next"></a>
                  <ul id="club_news" class="tab-pane active clearfix slideHeroes">
                     <li>
                        <div class="figure">
                           <div class="column-news">
                              <div class="figure-01"><img src="{{URL::asset('webmedia/images/app/01.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="figure">
                           <div class="column-news">
                              <div class="figure-01"><img src="{{URL::asset('webmedia/images/app/02.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="figure">
                           <div class="column-news">
                              <div class="figure-01"><img src="{{URL::asset('webmedia/images/app/03.png')}}" alt=image></div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <script>
       //window.setTimeout(function(){
      
        //window.location.href = "{{$url}}";
      
     // }, 3000);
      
   </script>
<script>
   $(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
   
</script>
 




   @stop