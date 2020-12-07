
(function($) {
  "use strict";

// Header Fixed
  // ---------------

  function fixedhead() {
    if ( $('.enable_fixhead').length ) 
    {
      if ( !$('.header-fixed').length && !$('.header-bottom').length ) 
      {
        $('.bliccaThemes-waypoint').css('marginTop', $('.bliccaThemes-header').outerHeight(true) );
      }  
    var head = $( '#bliccaThemes_header' );
    console.log(head);
    var wayoffset = '-1px';
    if ( $('.header-bottom').length ) {
    wayoffset =  $('.bliccaThemes-header').outerHeight(true)+'px'; 
    }
    $( '.bliccaThemes-waypoint' ).each( function(i) {"use strict";
        var el = jQuery( this ),
            animClassDown = el.data( 'animateDown' ),
            animClassUp = el.data( 'animateUp' );
     
        el.waypoint( function( direction ) {
            if( direction === 'down' && animClassDown ) 
            {
                head.removeClass('off-sticky');
                head.addClass('on-sticky');
            }
            else if( direction === 'up' && animClassUp ){
                head.removeClass('on-sticky');
                head.addClass('off-sticky');
            }
        }, { offset: wayoffset } );
    } );

    }
  }
// ANIMATION
  // ======================
  function bliccaThemes_animation() {
    var myclasses;
    var myclass;
    var ekclass;
    $('.blind').waypoint(function() {
    myclasses = this.className;
    myclass = myclasses.split(" ");
    ekclass = myclass[0].split("-");
     if ( ekclass[0] !== "no_animation" && myclass[1] === "blind") {
                 $(this).addClass('v '+ekclass[0]);
                                                    }
 }, { offset: '70%' });
 }

// Dropdown
//----------
function bliccaThemes_themes_dropdown() {
      // Mobile Menu
        var browser_width = $( window ).width();
        if ( browser_width < 992 ) {
           $( ".navbar-collapse li:not(.menu-item-has-children) a" ).click(function() {
             $( ".bliccaThemes-scroll" ).removeClass( "in", 200 );
           });
        }
    
    $( '.menu-item-has-children' ).each( function() {
        $(this).addClass('dropdown');
    });
    if ( browser_width > 992 ) {
      $('ul.nav li.dropdown').hover(function() {
        $(this).find('>.dropdown-menu').stop(true, true).delay(50).fadeIn(400);
      }, function() {
        $(this).find('>.dropdown-menu').stop(true, true).delay(300).fadeOut(400);
      });
    }
  
    else {
      $('ul.nav li.dropdown>a').click(function( event ) {
        event.preventDefault();          
        var clickedmenu = $(this).parent();
        clickedmenu.find('>.dropdown-menu').toggle();

      });

    }
}
  // Parallax
  // ======================
  function bliccaThemes_parallax() {
    $.stellar({
        horizontalScrolling: false,
        scrollProperty: 'scroll',
        positionProperty: 'position',
      });
  }
  
  //SCROLL TO TOP
  // ====================== 
  $(window).scroll(function(){
    if ($(this).scrollTop() > 1000) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
// Restaurant Menu 
 // --------------- 
 function blicca_themes_menu_filter() {
  if( $('.bliccaThemes-menu-grid').length ) { 
      $( ".bt-menu-items" ).each(function() {       
           var foodgutter = 30;
           if ( $( window ).width() > 1200 ) { 
              foodgutter = 22;
           }
           else {
              foodgutter = 22; 
           }
       
          
        var container = $(this);
       

          // Start
          container.imagesLoaded( function(){ 
              container.isotope({
              // main isotope options
              itemSelector: '.bt-menu-item-s1',
              
              // options for masonry layout mode
              masonry: {
              columnWidth: '.bt-menu-item-s1',
              transitionDuration: '0.8s',
              gutter: foodgutter
              }
            });
           });

           $('.bt-menu-filter').on( 'click', 'a', function() {
                  var nav=$('.bt-menu-filter');
                  var menuactive = $(this).attr('href');
                  var category = $(this).attr('id');
                  
                  nav.find('li').removeClass('active'); /* Portfolio menu remove active */
                  nav.find('li.slug-'+category).addClass('active');
              var filterValue = $(this).attr('data-filter');
              container.isotope({ filter: filterValue, transitionDuration: '0.8s' });
            });    
          // Finish
      });
  }
}
// Slider
function bliccaThemes_themes_event_slider() {
  $('.bt-events-slider').flexslider({
      selector: ".bt-events-container > .bt-event", 
      controlNav: false,             
      directionNav: true,
      smoothHeight: false, 
      animation: "slide",
      animationLoop: true,
      itemWidth: 1140,
      itemMargin: 0,
      minItems: 1,
      maxItems: 1,
      move: 1,
      prevText: "",
      nextText: "",
      start: function(slider){
      $('.bt-events-slider').resize();
      }
  });
}
function remove_free_tags(params) {
  $('div.Header__Component-sc-17gc7x6-0.dVhtUm').addClass('hilang');
  $('div.CommonLayout__Inner-d1flxf-1.iJGCgt').find('a').addClass('hilang');
}
// READY FUNCTION
// ====================== 
$(document).ready(function(){
  bliccaThemes_themes_event_slider()
  fixedhead();
  blicca_themes_menu_filter();

  bliccaThemes_themes_dropdown();
  if ( jQuery( window ).width() > 1024 ) 
  { 
      bliccaThemes_parallax();
  }

  if ( jQuery( window ).width() > 1024 ) { 
    bliccaThemes_animation();
  }

  $('#ourspeciality').click();
  setTimeout(function() {
    //your code to be executed after 1 second
    remove_free_tags();
  }, 8000);
  
});

})(jQuery);
