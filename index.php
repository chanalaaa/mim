<?php
ob_start('ob_gzhandler');
 ?>
    <html>

    <head>
        <title>MIM (demo)</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="js/jquery-1.11.3.min.js?v=1001"></script>
        <script type="text/javascript" src="js/imagesloaded.js"></script>
        <script type="text/javascript" src="js/enquire.min.js"></script>
        <!-- <script type="text/javascript" src="js/javascript.fullPage.min.js"></script>
        <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
        <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="js/jquery.pagepiling.min.js">
        <link rel="stylesheet" href="css/jquery.pagepiling.css"></script> -->
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div id="wrapper">
            <?php include("views/header.php"); ?>
                <?php include("views/content.php"); ?>
                    <?php //include("views/footer.php"); ?>
        </div>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.animate-enhanced.min.js"></script>
        <script type="text/javascript" src="js/hammer.min.js"></script>
        <script type="text/javascript" src="js/jquery.superslides.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>

    </html>
