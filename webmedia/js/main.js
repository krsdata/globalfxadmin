'use strict';

/**
 * requestAnimationFrame Shim 
 */
window.requestAnimFrame = (function()
{
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();

$(document).ready(function () {

    /*------Resize End Event -- Debounces resize of browser event-----------*/
    //http://stackoverflow.com/questions/5489946/jquery-how-to-wait-for-the-end-of-resize-event-and-only-then-perform-an-ac
    //https://learn.jquery.com/events/introduction-to-custom-events/

    var rtime;
    var timeout = false;
    var delta = 200;
    var $windowWidth = $(window).width();

    function resizeend() {
      if (new Date() - rtime < delta) {
          setTimeout(resizeend, delta);
      } else {
          timeout = false;
          $windowWidth = $(window).width();
          $(document).trigger('sccResizeEnd');
      }
    }

    $(window).on('resize', function () {
        rtime = new Date();
        if (timeout === false) {
            timeout = true;
            setTimeout(resizeend, delta);
        }
    });

    /*---------- Header image scroll n blur-----------*/

    if($('.innerbannerwrap .innerbanner').length){
      var scrollOptions = {
       test : $('.innerbannerwrap .innerbanner')
      };

      var scrolling = new Scroller();  
      scrolling.init(scrollOptions);
    }

    /*---------- navbar menu-----------*/

    $('.navbar-toggle').on('click', function () {
        $(this).toggleClass('is-active');
        $('.nav-menu').toggleClass('open-nav');
        var wH = $(window).height();

        if ($('.nav-menu').hasClass('open-nav')) {
            $('.wrapper').css('height', wH);
        } else {
            $('.wrapper').css('height', 'auto');
        }
    });

    /*-------------- sticky up menu-----------*/

    var lastScrollTop = 0,
        scrollDelta = 5,
        navbarHeight = $('.header-lower').outerHeight(),
        st;

    //Stick Up Menu

    $(window).on('scroll', function(){
      st = $(this).scrollTop();

      if(Math.abs(lastScrollTop - st) <= scrollDelta){
        return;
      }

      if(st < 40){
        $('.header-lower').removeClass('nav-down').removeClass('sticky-menu');
      }
      else if (st > lastScrollTop && st > navbarHeight){
        $('.header-lower').removeClass('sticky-menu').addClass('nav-down');
      } else {
        if(st + $(window).height() < $(document).height()) {
          $('.header-lower').addClass('sticky-menu').removeClass('nav-down');
        }
      }

      lastScrollTop = st;
    });

    /* ----------- menu dropdown ------------*/

    $('.menu-bar li').on('click', function () {
        $(this).find('.sub-menu').toggleClass('addSubMenu');
    });

    
    /* ---------- players ------------*/

    if($('.slideHeroes').length){
        $('.slideHeroes').slick({
          infinite:true,
          slidesToShow: 3,
          slidesToScroll:1,
          dots:false,
          centerMode: true,
          centerPadding: '0px',
          prevArrow: '.prev-player',
          nextArrow: '.next-player',
          responsive: [
              {
                breakpoint: 2000,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll:1,
                  centerMode: false,
                  centerPadding: '0px'
                }
              },
              {
                breakpoint:480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll:1,
                  centerMode: false,
                  centerPadding: '0px',
                }
              }
          ]
        });
    }

   

    var slickOptions = {
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '.club_prev',
        nextArrow: '.club_next',
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 3,
                slidesToScroll:1,
                infinite:true
              }
            },
            {
              breakpoint:600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              },  
            },
            {
              breakpoint:480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              },
            }
        ]
    };

    var slickOptions1 = {
      infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
      prevArrow: '.club_prev',
      nextArrow: '.club_next',
      responsive: [
        {
          breakpoint: 2000,
          settings: {
            slidesToShow:4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll:1
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll:1
          }
        },
        {
          breakpoint:600,
          settings: {
            slidesToShow: 2,
            slidesToScroll:1
          }
        }
    ]
  };

    if (('#club_news,  .club_new').length){
        $('#club_news').slick(slickOptions1);
    }
    
    $('#world_news_button').on('shown.bs.tab', function () {
        $('#club_news').slick('unslick');
        $('#world_news').slick(slickOptions1);
    });

    $('#club_news_button').on('shown.bs.tab', function () {
        $('#world_news').slick('unslick');
        $('#club_news').slick(slickOptions1);
    });

    
    /* ------------- Hero Banner  -------------*/

    if($('#layerSlider').length){
        $('#layerSlider').layerSlider({
            autoStart : false,
            skin : 'noskin',
            skinsPath : '/css/skins/'
        });
    }

  

    /*------------ tab animation ------------------*/

    $('#aboutTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });


    /*--------------- Waypoint -- Animation on scroll  ------------------*/

    function wayPoint() {
        if ($windowWidth >= 1200){
            $('.latestResult').waypoint(function() {
                setTimeout(function() {
                    $('.figure').addClass('addfigure');
                }, 100);
                setTimeout(function() {
                    $('.team-logo').css('opacity' , '1');
                }, 1000);
                setTimeout(function() {
                    $('.figure').addClass('animatefig-before');
                }, 1000);
                setTimeout(function() {
                    $('.content').css('opacity' , '1');
                }, 2000);

            }, { offset: '70%' });
        }   

        $('.achivementwrapper').waypoint(function() {
            setTimeout(function() {
                $('.achievement .fig img').addClass('figachvadd');
            }, 600);

        }, { offset: '70%' });

        
    }
    
    if ($windowWidth >= 992) { wayPoint(); }


  
    
    /* ------------- scrollbar ---------------*/
      if($('.scrollable').length){
        if ($(window).width() > 768){
          $('.scrollable').slimScroll({
              alwaysVisible: false,
              railVisible: false,
              height: '400px',
              size: '0px',
          });
        }  
      }   

});