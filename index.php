<?php
ob_start('ob_gzhandler');
 ?>
    <html>

    <head>
        <title>MIM ADMISSION</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="js/min/jquery-1.11.3.min.js?v=1001"></script>
        <script type="text/javascript" src="js/min/imagesloaded.min.js?v=1001"></script>
        <script type="text/javascript" src="js/min/enquire.min.js?v=1001"></script>
        <script type="text/javascript" src="js/min/jquery.easing.1.3.min.js?v=1001"></script>
        <script type="text/javascript" src="js/min/jquery.animate-enhanced.min.js?v=1001"></script>
        <script type="text/javascript" src="js/min/hammer.min.js?v=1001"></script>
        <script type="text/javascript" src="js/min/jquery.superslides.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/min/skrollr.min.js"></script>
        <link rel="stylesheet" href="css/font-awesome.min.css?v=1001">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="stylesheet" href="css/style.css">
        <!-- google analytics -->
        <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-63096423-1', 'auto');
        ga('send', 'pageview');
        </script>
        <!-- end google analytics -->
        <!-- Facebook Pixel Code -->
        <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1009484729078192');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1009484729078192&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
        <!-- Facebook Conversion Code for MIM_Landing -->
        <script>
        (function() {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6022063516771', {
            'value': '0.00',
            'currency': 'USD'
        }]);
        </script>
        <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6022063516771&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
        <!-- End Facebook Conversion Code for MIM_Landing -->
        <!-- Google Code for Remarketing Tag -->
        <!-- ------------------------------------------------
            Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup------------------------------------------------- -->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 980643741;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/980643741/?value=0&amp;guid=ON&amp;script=0" />
            </div>
        </noscript>
        <!-- End Google Code for Remarketing Tag -->
    </head>

    <body>
        <div id="wrapper">
            <?php include("views/header.php"); ?>
                <?php include("views/content.php"); ?>
                    <?php //include("views/footer.php"); ?>
        </div>
        </script>
        <script type="text/javascript" src="js/min/main.min.js"></script>
    </body>

    </html>
