<?php include('parts/head.php') ?>


<body id="primary" class="container-fluid no-padding">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
   
<?php include('parts/navbar.php') ?>
<?php include('parts/header.php') ?>



    <div class="container-fluid relative no-padding">
        <section class="relative over-auto-xs">
            <div id="CONTACTO" class="container no-padding">
                <div class="col-xs-12 col-sm-12 no-padding">
                    <h1 class="h1 text-left"><b>Contáctenos</b></h1>
                </div>
                <div class="clearfix"></div>
                <form id="form-schck" class="form-inline col-xs-12 col-sm-6 text-left border-box">
                    <div class="form-group">
                        <label for="Name">Nombre</label>
                        <input type="text" class="form-control" id="Name">
                    </div>
                    <div class="form-group">
                        <label for="Mail">Mail</label>
                        <input type="text" class="form-control" id="Mail">
                    </div>
                    <div class="form-group">
                        <label for="Tel">Teléfono</label>
                        <input type="text" class="form-control" id="Tel">
                    </div>
                    <div class="form-group">
                        <label class="vertTop" for="Mensaje">Mensaje</label>
                        <textarea class="form-control flexcroll" id="Mensaje" rows="5">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary pull-right">ENVIAR</button>
                    <button type="reset" class="btn btn-lg btn-primary pull-right m-lateral">BORRAR</button>
                </form>
                <div class="col-xs-12 col-sm-6">
                    <div class="cont-info">
                        <p class="lead"><b>Est. Nº 52</b></p>
                        <p><b>Planta de Faena y Desosado. </b></p>
                        <p><b>Planta de Elaboración de Productos Cárnicos Congelados:</b></p>
                        <p><b>Dirección:</b> Camino Colman 4598 / C.P.: 12400 </p>
                        <p><b>Teléfono:</b> (598 2) 320 93 00 - 320 13 93 </p>
                        <p><b>Fax:</b> (598 2) 320 32 82 </p>
                        <p><b>E-Mail:</b> info@schneck.com.uy </p>
                    </div>
                    <div class="cont-info">
                        <p class="lead"><b>Est. Nº 52</b></p>
                        <p><b>Planta de Faena y Desosado. </b></p>
                        <p><b>Planta de Elaboración de Productos Cárnicos Congelados:</b></p>
                        <p><b>Dirección:</b> Camino Colman 4598 / C.P.: 12400 </p>
                        <p><b>Teléfono:</b> (598 2) 320 93 00 - 320 13 93 </p>
                        <p><b>Fax:</b> (598 2) 320 32 82 </p>
                        <p><b>E-Mail:</b> info@schneck.com.uy </p>
                    </div>
                    <p class="lead"><b>Atención al cliente</b></p>
                    <p class="lead"><b>0800 8046</b></p>
                </div>
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