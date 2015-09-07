$(document).ready(function() {

    // Setup variables
    $window = $(window);
    $slide = $('.initp');
    $body = $('body');

    causeRepaintsOn = $("h1, h2, h3, p");
    $(window).resize(function() {
        causeRepaintsOn.css("z-index", 1);
    });
    //FadeIn all sections   
    $body.imagesLoaded(function() {
        setTimeout(function() {

            // Resize sections
            adjustWindow();

            // Fade in sections
            $body.removeClass('loading').addClass('loaded');

        }, 800);
    });

    function adjustWindow() {


        winH = $window.height();
        winW = $window.width();

        // Keep minimum height 550
        if (winH <= 550) {
            winH = 550;
        }
        if (winW > 768) {
            var s = skrollr.init({
                //forceHeight: false,
                smoothScrolling: true,
                smoothScrollingDuration: 250,
                render: function(data) {},
                constants: {

                    //fill the box for a "duration" of 150% of the viewport (pause for 150%)
                    //adjust for shorter/longer pause
                    box: '100p',
                    box2: '350p',
                    box3: '550p',
                }


            });
            // Get window size

            // Resize our slides
            $slide.height(winH);

            // Refresh Skrollr after resizing our sections
            // Init Skrollr
            s.refresh($('.initp'));
        } else {

            // Init Skrollr
            var s = skrollr.init();
            s.destroy();


        }


    }

    function initAdjustWindow() {
        return {
            match: function() {
                adjustWindow();
            },
            unmatch: function() {
                adjustWindow();
            }
        };
    }

    //func. on mobile
    if ($(window).width() <= 768) {

        var $slides = $('#slides-2,#slides-3,#slides-4');


        Hammer($slide[1]).on("swipeleft", function(e) {
            $('#slides-2').data('superslides').animate('next');
        });

        Hammer($slide[1]).on("swiperight", function(e) {
            $('#slides-2').data('superslides').animate('prev');
        });

        Hammer($slide[2]).on("swipeleft", function(e) {
            $('#slides-3').data('superslides').animate('next');
        });

        Hammer($slide[2]).on("swiperight", function(e) {
            $('#slides-3').data('superslides').animate('prev');
        });

        Hammer($slide[3]).on("swipeleft", function(e) {
            $('#slides-4').data('superslides').animate('next');
        });

        Hammer($slide[3]).on("swiperight", function(e) {
            $('#slides-4').data('superslides').animate('prev');
        });

        enquire.register("screen and (max-width : 768px)", initAdjustWindow(), false)
            .listen(100);

        $slides.superslides({
            hashchange: false
        });


        var p = $("section#slide-5");
        var position = p.position();

        $(window).bind('scroll', function() {
            if ($(window).scrollTop() < position.top - 50) {
                $('.nav-sec2').css("visibility", "visible");
            } else {
                $('.nav-sec2').css("visibility", "hidden");
            }
        });

    }





    /*
   
    fullpage.initialize('#fullpage', {
                menu: '#menu',
                anchors: ['firstPage', 'secondPage', '3rdPage'],
                sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
                autoScrolling: false
            });
             */
    /*
      
       fullpage.initialize('#fullpage', {
            anchors: ['firstPage'],
            menu: '#menu',
            sectionsColor: ['#4A6FB1'],
            autoScrolling: false,
            css3: true,
            fitToSection: false
        });

    $('#nav').localScroll(800);
        
        //.parallax(xPosition, speedFactor, outerHeight) options:
        //xPosition - Horizontal position of the element
        //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
        //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
        $('#intro').parallax("50%", 0.1);
        $('#second').parallax("50%", 0.1);
        $('.bg').parallax("50%", 0.4);
        $('#third').parallax("50%", 0.3);
        

    */
    /*
         $(function() {
         
        });
      */


});
