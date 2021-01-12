/*------------------------------------------------*/
/*-- jQuery Scripts--*/
/*------------------------------------------------*/

/*-- Opening jQuery function --*/ 
$(document).ready(function(){
    
    /*-- Sticky Navigation Bar --*/ 
    /* Selects Section features to enable/disable sticky navigation bar. Appears based on direction of user. */
    /* Waypoint package in index file. */
    $('.js--section-features').waypoint(function(direction) {
        /* If/Then statement. If user scrolls down, Nav class calls sticky class into action. */
        if (direction == "down") {
            $('nav').addClass('sticky');
        }
        /* If user scrolls up past Features section, Sticky class disappears. */
        else {
            $('nav').removeClass('sticky'); 
        }
        /* Offset below calls menu to "transition" at a certain percentage, or as 60px (as defined below). */
        }, {
         offset: '60px'
    });
    
    /* -- Buttons Scroll -- */
    /* Calls "I'm Hungry" Button in Section 0 and jumps/scrolls to Section 6 - Plans when selected. */
    $('.js--scroll-to-plans').click(function () {
        /* Jumops to top of Plans section at a speed of 1000 ms (one second). */
       $('html, body').animate({scrollTop: $('.js--section-plans').offset().top}, 1000);
    });
    
    /* Calls "Show me More" Button in Section 0 and jumps/scrolls to Section 1 - How it works when selected. */
    $('.js--scroll-to-start').click(function () {
        /* Jumops to top of Plans section at a speed of 1000 ms (one second). */
       $('html, body').animate({scrollTop: $('.js--section-features').offset().top}, 1000);
    });
    
    /* -- Navigation Scroll -- */
    /* Navigation scroll code from https://css-tricks.com/snippets/jquery/smooth-scrolling/ */
     $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    
    /* -- Animations on Scroll (when section is reached) -- */
    /* Animates Features Row when scrolled to Section. */
    $('.js--wp-1').waypoint(function(direction) {
        /* Calls fadeIn animation as defined from CSS Style sheet. */
        $('.js--wp-1').addClass('animated fadeIn');
        /* Offset below calls menu to "transition" at 50% of the page. */
        }, {
        offset: '50%'
    });
    
    /* Animates/fadeInUp iPhone image when scrolled to Section. */
    $('.js--wp-2').waypoint(function(direction) {
        /* Calls fadeInUp animation as defined from CSS Style sheet. */
        $('.js--wp-2').addClass('animated fadeInUp');
        /* Offset below calls menu to "transition" at 50% of the page. */
        }, {
        offset: '50%'
    });
    
    /* Animates/fadeIn Cities Row when scrolled to Section. */
    $('.js--wp-3').waypoint(function(direction) {
        /* Calls fadeIn animation as defined from CSS Style sheet. */
        $('.js--wp-3').addClass('animated fadeIn');
        /* Offset below calls menu to "transition" at 50% of the page. */
        }, {
        offset: '50%'
    });
    
    /* Animates "Premium Plan" when scrolled to Section. */
    $('.js--wp-4').waypoint(function(direction) {
        /* Calls Pulse animation as defined from CSS Style sheet. */
        $('.js--wp-4').addClass('animated pulse');
        /* Offset below calls menu to "transition" at 50% of the page. */
        }, {
        offset: '50%'
    });
/*-- Ending Query Methods --*/     
});
