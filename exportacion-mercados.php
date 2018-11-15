<?php include('parts/head.php') ?>


<body id="primary" class="container-fluid no-padding">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<?php include('parts/navbar.php') ?>
<?php include('parts/header.php') ?>

    <div class="container-fluid relative no-padding">
       
        <section class="relative">
            <div id="mercados" class="container">
                <div class="col-xs-12 col-sm-12 no-padding">
                    <h1 class="h1 text-left"><b>Nuestros Mercados</b></h1>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12 col-sm-6 text-center pull-right disp-xs-none map h100 border-box">
                        <div class="inline-block">
                            
                            <img class="img-responsive inline-block" src="img/schck-map.png" alt="">
                            <div class="clearfix"></div>
                            <button type="button" href="#" class="relative pull-right btn btn-md btn-primary">VER MÁS</button>
                        </div>
               
                </div> 
                <div class="col-xs-12 col-sm-6 col-md-6 listado-paises border-box flexcroll">
                    <ul id="paises" class="list-inline">
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Italia</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Canada</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Holanda</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">México</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">España</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Puerto Rico</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Islas Canarias</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Cuba</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Alemania</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Barbados</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Bélgica</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Trinidad y Tobago</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Francia</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Brasil</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Portugal</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Argentina</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Suecia</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Sudáfrica</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Polonia</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Angola</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Rusia</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Gabón</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Ucrania</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Hong Kong</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Proveedura Marítima</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">Reino Unido</a></li>
                        <li class="col-xs-6 no-padding"><a href="javascript:;">USA</a></li>
                    </ul>
                </div>
                <!-- End cont-desc -->
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
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
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