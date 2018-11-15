<!DOCTYPE html>
<html lang="en">
<?php include('parts/head.php') ?>
  <body>
  
    <?php include('parts/head.php') ?>
    
    <!-- Search container -->
    <div class="pm-search-container" id="pm-search-container">
        <!-- Search window -->
        <div class="pm-search-columns">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pm-center">
                        <p>Search News Posts</p>
                    </div>          
                </div>
                <div class="row">
                    <div class="col-lg-12">                       
                        <div class="pm-search-box">
                           <i class="fa-search pm-search-submit" id="pm-search-submit"></i>
                            <form name="searchform" id="pm-searchform" method="get" action="#">
                                <input type="text" name="s" placeholder="Type Keywords...">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-lg-12">
                        <i class="fa fa-times pm-search-exit" id="pm-search-exit"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search window end -->  
    </div>
    <!-- Search container end -->

	<div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode -->
    
    	<div class="pm-header-info">
        
        	<div class="container pm-header-info-container">
            </div>
            
        </div><!-- /pm-header-info -->

        <?php include('parts/header.php') ?>

                
        <!-- PRESENTATION AREA -->
        
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
               
                <div class="item item1 active" style="background-image: url(img/1.jpg)">
                    <div class="caption">
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                            <h1><img class="img-responsive" src="img/logo.png" alt="AESPCA" style="display: inline-block"></h1>
                       </div>
                       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                            <p class="h4">Asociación de Empresas<br>de Seguridad Privada<br><b>de Capitales Argentinos</b></p>                       
                       </div>
                        
                    </div>
                </div>
                <div class="item item2" style="background-image: url(img/2.jpg)">
                    <div class="caption">
                        <h1>TODOS LOS ASOCIADOS</h1>
                        <p class="h3">Tienen los mismos votos y el mismo valor para nosotros</p>
                    </div>
                </div>
                <div class="item item3" style="background-image: url(img/3.jpg)">
                    <div class="caption">
                        <h2>Protegiendo a las PyMEs de todo el país</h2>
                    </div>
                </div>
            </div>
            <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

            <a class="pm-page-scroll" href="#noticias-home"><i class="fa fa-angle-down"></i></a>
        </div>
 		<!-- PRESENTATION AREA end -->
        
        <!-- BODY CONTENT starts here -->
        
        <!-- NOTICIAS -->
        <div id="noticias-home" class="pm-column-container pm-containerPadding60 pm-mobile-center" style="background: url('img/boxed-patterns/07_pattern.png'); background-repeat: repeat; background-color:#57AADC;">
        	<div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       <h3 style="color: white">Ultimas noevedades</h3>
                        <article class="bg-2">
                            <div class="pm-blog-post-container index">

                                <div class="pm-blog-post-img-container" style="background-image:url(img/blog/01_post.jpg">

                                    <div class="pm-blog-post-date">
                                        <p class="pm-month">Mayo</p>
                                        <p class="pm-day">16</p>
                                    </div>
                                    <div class="pm-blog-post-title">
                                        <h2 class="pm-post-title">Primer encuentro de AESPCA</h2>
                                        <p class="pm-post-hover-excerpt">La Asociación de Empresas de Seguridad Privada de Capitales Argentinos (AESPCA) tendrá su <i>primer encuentro</i> el dia 16 de mayo de 9hs a 12hs en...</p>
                                        <a href="2016-05-16.php">Leer Más &rarr;</a>
                                    </div>

                                </div>
                            </div>
                        </article>
                    </div>
                    
                </div>
            </div>
        
        </div>
        <!-- /Services panels -->
        
        <!-- Intro Panel -->
        
        <div class="pm-column-container pm-containerPadding-bottom-80 pm-containerPadding-top-80 pm-container-border">
        
        	<div class="container pm-mobile-center">
                <div class="row">
                    <div class="col-xs-12">
                        <h3 class="h1 text-center" style="font-weight: 300; font-family: 'Roboto'; margin: 0"><i>Promoviendo el desarrollo de las empresas nacionales.</i></h3>
                    </div>
                </div>                	
                	
            </div>
        
        </div>
        
        <!-- /Intro Panel -->
        <!-- Workshop newsletter signup panel -->
        <div class="pm-column-container pm-workshop-signup pm-containerPadding60 pm-container-border pm-center pm-parallax-panel" data-stellar-background-ratio="0.5">
        
        	<div class="pm-column-container-icon">
            	<i class="fa fa-envelope"></i>
            </div>
        
        	<div class="container">
            	<div class="row">
                	
                    <div class="col-lg-12">
                        <div class="pm-cta-divider"></div>

                    	<p class="h3 pm-newsletter-form-text">Todos los votos tienen el mismo valor para nosotros.</p>
                        <p class="h3 pm-newsletter-form-text"><b>CONTACTENOS</b></p>
                        <div class="pm-cta-divider"></div>
                        
                     <div class="pm-workshop-newsletter-form-container">
                     	<form action="#" method="post" id="workshop-newsletter-form">
                        	<input name="" type="text" placeholder="Nombre">
                            <input name="" type="text" placeholder="E-Mail">
                            <input type="submit" class="pm-workshop-newsletter-submit-btn" value="Enviar" />
                        </form>
                     </div>
                        
                    </div>
                    
                </div>
            </div>
        
        </div>
        <!-- Workshop newsletter signup panel end -->
        <?php include('parts/footer.php') ?>

    
    </div><!-- /pm_layout-wrapper -->
    <?php include('parts/scripts.php') ?>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <p id="back-top" class="visible-lg visible-md visible-sm"> </p>
  </body>
</html>