<nav class="navbar navbar-default navbar-fixed-bottom container-fluid no-padding" role="navigation">
    <div class="navbar-header block">
        <div class="block">
            <button type="button" class="navbar-toggle collapsed sprites open-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
            </button>
            <a class="mobile-brand" href="#"><img src="img/schneck-logo-nav.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse no-transition collapse">
            <?php $uri=explode('-', basename($_SERVER['PHP_SELF'])) ?>
                <ul class="navbar-nav relative list-unstyled">

                    <li class="<?php if ($uri[0] == 'index') echo 'active' ?>"><a href="index.php"><b>HOME</b></a></li>
                    <li class="dropdown <?php if ($uri[0] == 'empresa') echo 'active' ?>"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>LA EMPRESA</b></a>
                        <ul class="dropdown-menu dropdown-menu-top" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Misión y visión</a></li>
                            <li><a href="#">Plantas y ubicación</a></li>
                            <li><a href="#">Reseña histórica</a></li>
                            <li><a href="empresa-calidad.php">Calidad</a></li>
                            <li><a href="#">Comunidad y medio ambiente</a></li>
                            <li><a href="empresa-publicidad.php">Publicidad</a></li>
                        </ul>
                    </li>
                    <!-- --END Dropdown-- -->
                    <li class="dropdown <?php if ($uri[0] == 'productos') echo 'active' ?>"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>PRODUCTOS</b></a>
                        <ul class="dropdown-menu dropdown-menu-top" aria-labelledby="dropdownMenu2">
                            <li><a href="productos-schneck.php">Schneck</a></li>
                            <li><a href="productos-guillermina.php">La Guillermina</a></li>
                            <li><a href="#">Burgy</a></li>
                        </ul>
                    </li>
                    <!-- --END Dropdown-- -->
                    <li class="dropdown <?php if ($uri[0] == 'exportacion') echo 'active' ?>"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>EXPORTACIÓN</b></a>
                        <ul class="dropdown-menu dropdown-menu-top" aria-labelledby="dropdownMenu3">
                            <li><a href="#">Nuestro Ganado</a></li>
                            <li><a href="exportacion-menudencias.php">Carnes Vacunas y Menudencias</a></li>
                            <li><a href="exportacion-mercados.php">Mercados</a></li>
                            <li><a href="#">Enlaces de interés</a></li>
                        </ul>
                    </li>
                    <!-- --END Dropdown-- -->
                    <li class="<?php if ($uri[0] == 'contacto.php') echo 'active' ?>"><a href="contacto.php"><b>CONTACTO</b></a></li>
                </ul>
                <a class="pull-right relative" target="_blank" href="http://schneckciclismo.uy/"><img id="sch-ciclismo" src="img/Sch-Ciclismo.png" /></a>
        </div>
    </div>
    <!--navbar-collapse -->

    <div id="sub-nav" class="no-padding <?php if(count($uri) <= 1) echo 'hidden' ?>    ">
        <ul class="list-inline <?php if ($uri[0] == 'empresa') echo 'block' ?>">
            <li class="text-center"><a class="<?php if ($uri[1] == 'vision.php') echo 'active' ?>" href="#">Misión y visión</a></li>
            <li class="text-center"><a class="<?php if ($uri[1] == 'ubicacion.php') echo 'active' ?>" href="#">Plantas y ubicación</a></li>
            <li class="text-center"><a class="<?php if ($uri[1] == 'historica.php') echo 'active' ?>" href="#">Reseña histórica</a></li>
            <li class="text-center"><a class="<?php if ($uri[1] == 'calidad.php') echo 'active' ?>" href="empresa-calidad.php">Calidad</a></li>
            <li class="text-center"><a class="<?php if ($uri[1] == 'ambiente.php') echo 'active' ?>" href="#">Comunidad y medio ambiente</a></li>
            <li class="text-center"><a class="<?php if ($uri[1] == 'publicidad.php') echo 'active' ?>" href="empresa-publicidad.php">Publicidad</a></li>
        </ul>
        <ul class="list-inline <?php if ($uri[0] == 'exportacion') echo 'block' ?>">
            <li class="text-center"><a class="<?php if ($uri[1] == 'ganado.php') echo 'active' ?>" href="#">Nuestro Ganado</a></li>
            <li class="text-center"><a class="<?php if ($uri[1] == 'menudencias.php') echo 'active' ?>" href="exportacion-menudencias.php">Carnes vacunas y menudencias</a></li>
            <li class="text-center"><a class="<?php if ($uri[1] == 'mercados.php') echo 'active' ?>" href="exportacion-mercados.php">Mercados</a></li>
            <li class="text-center"><a class="<?php if ($uri[1] == 'interes.php') echo 'active' ?>" href="#">Enlaces de interes</a></li>
        </ul>
        <ul class="list-inline <?php if ($uri[0] == 'productos') echo 'block' ?>">
            <li class="text-center"><a class="<?php if ($uri[1] == 'schneck.php') echo 'active' ?>" href="productos-schneck.php">Schneck</a></li>
            <li class="text-center"><a class="<?php if ($uri[1] == 'guillermina.php') echo 'active' ?>" href="productos-guillermina.php">La Guillermina</a></li>
            <li class="text-center"><a class="<?php if ($uri[1] == 'burgy.php') echo 'active' ?>" href="#">Burgy</a></li>
        </ul>

    </div>


</nav>