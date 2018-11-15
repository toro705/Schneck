<?php $uri=explode('-', basename($_SERVER['PHP_SELF'])) ?> 
    <div class="container-fluid relative no-padding">
        <div class="relative">
            <a id="brand-main" href="index.html" class="absolute <?php if ($uri[0] == 'empresa' || $uri[0] == 'exportacion'  || $uri[0] == 'contacto.php' ) echo 'state2' ?>">"</a>
            <div id="social" class="absolute">
                <div class="inline-block <?php if ($uri[0] == 'empresa' || $uri[0] == 'exportacion'  || $uri[0] == 'contacto.php' ) echo 'socunder' ?> sprites soc3">
                    <a href="javascript:;"></a>
                </div>
                <div class="inline-block <?php if ($uri[0] == 'empresa' || $uri[0] == 'exportacion'  || $uri[0] == 'contacto.php' ) echo 'socunder' ?> sprites soc2">
                    <a href="javascript:;"></a>
                </div>
                <div class="inline-block <?php if ($uri[0] == 'empresa' || $uri[0] == 'exportacion'  || $uri[0] == 'contacto.php' ) echo 'socunder' ?> sprites soc1">
                    <a href="javascript:;"></a>
                </div>
            </div>
        </div>
        <div id="footer-mobile" class="navbar-fixed-bottom">
            <div id="social-mobile" class="relative inline-block pull-left">
                <div class="inline-block sprites soc6">
                    <a href="javascript:;"></a>
                </div>
                <div class="inline-block sprites soc5">
                    <a href="javascript:;"></a>
                </div>
                <div class="inline-block sprites soc4">
                    <a href="javascript:;"></a>
                </div>
            </div>
            <a href="http://schneckciclismo.uy/" target="_blank" class="sprites schneck-ccl-mob pull-right"><img src="img/schck-ccl.svg" alt=""></a>
        </div>
    </div>