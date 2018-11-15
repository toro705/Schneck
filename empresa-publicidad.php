<?php include('parts/head.php') ?>


<body id="primary" class="container-fluid no-padding">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<?php include('parts/navbar.php') ?>
<?php include('parts/header.php') ?>

    <div class="container-fluid relative no-padding">
 
        <section id="pub" class="relative">
            <h1 class="h1"><b>Publicidad</b></h1>
            <div id="rep-vid" class="inline-block text-center">
                <iframe height="100%" width="100%" src="http://www.youtube.com/embed/2X_57zy73Ns" frameborder="0" allowfullscreen></iframe> 
            </div>
            <div id="vid-line" class="inline-block border-box text-center flexcroll">
                <ul class="list-inline">
                    <li>
                        <a class="clearfix" href="javascript:;"><img src="img/vid.jpg"></a>
                    </li>
                    <li>
                        <a class="clearfix" href="javascript:;"><img src="img/vid.jpg"></a>
                    </li>
                    <li>
                        <a href="javascript:;"><img src="img/vid.jpg"></a>
                    </li>
                    <li>
                        <a href="javascript:;"><img src="img/vid.jpg"></a>
                    </li>
                    <li>
                        <a href="javascript:;"><img src="img/vid.jpg"></a>
                    </li>
                    <li>
                        <a href="javascript:;"><img src="img/vid.jpg"></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vegas/vegas.min.js"></script>
    <script src="js/slick/slick.js"></script>
    <script src="js/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.event.move.js"></script>
    <script src="js/jquery.event.swipe.js"></script>
    <script type='text/javascript' src="js/script/flexcroll.js"></script>
    <script src="js/main.js"></script>

    <script>
        (function (b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = '//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>