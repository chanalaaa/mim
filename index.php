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
    </head>

    <body>
        <div id="wrapper">
            <?php include("views/header.php"); ?>
                <?php include("views/content.php"); ?>
                    <?php //include("views/footer.php"); ?>
        </div>
        </script>
        <script type="text/javascript" src="js/min/main.min.js"></script>
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
    </body>

    </html>
