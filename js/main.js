$(document).ready(function() {

    // Setup variables
    $window = $(window);
    $slide = $('.initp1');
    $slideTall = $('.initp');
    $slideTall2 = $('.homeSlideTall2');
    $body = $('body');

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

        var s = skrollr.init({


            //forceHeight: false,
            smoothScrolling: true,
            smoothScrollingDuration: 300,
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
        winH = $window.height();

        // Keep minimum height 550
        if (winH <= 550) {
            winH = 550;
        }

        // Resize our slides
        $slide.height(winH);
        $slideTall.height(winH);
        $slideTall2.height(winH * 3);

        // Refresh Skrollr after resizing our sections
        // Init Skrollr


        s.refresh($('.initp'));



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
