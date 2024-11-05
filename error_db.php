<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">        
        <title>Simer Salsipuedes</title>
        <!--
		<link rel="icon" type="image/ico" href="http://techarise.com/wp-content/themes/techarise/favicon.ico">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="shortcut icon" href="http://techarise.com/php-free-script-demos/">
        <link rel="pingback" href="http://techarise.com/xmlrpc.php">
        <!--[if lt IE 9]>
        <script src="http://techarise.com/wp-content/themes/techarise/includes/js/html5.js"></script>
        <![endif]-->

		
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
		
		
		
        <!-- All in One SEO Pack 2.3.12.5 by Michael Torbert of Semper Fi Web Design[229,283] -->
        <meta name="description" content="Sistema de Mesa de Entrada y Respuesta">
<!--
        <link rel="canonical" href="http://techarise.com/php-free-script-demos/">
        <!-- /all in one seo pack -->
        <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
        <link rel="dns-prefetch" href="https://s.w.org/">
 <!--        
	   <link rel="alternate" type="application/rss+xml" title="Tech Arise � Feed" href="http://techarise.com/feed/">
        <link rel="alternate" type="application/rss+xml" title="Tech Arise � Comments Feed" href="http://techarise.com/comments/feed/">
-->
        <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>bootstrap/bootstrap-theme.min.css">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>style.css">
        <link rel="stylesheet" href="<?php print HTTP_CSS_PATH; ?>imgareaselect.css">

		<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqDpAsEVkH_Ksnu0JMf3EsRHhs3uC0oJ4"></script> -->
		
		<!--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCQWOtv1qxG4CJ9EisXsL27LRdQ_i--Xw&callback=initMap"></script> -- >
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCQWOtv1qxG4CJ9EisXsL27LRdQ_i--Xw"></script> -->
																			
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCQWOtv1qxG4CJ9EisXsL27LRdQ_i--Xw"></script>
		<script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		
        <!-- jQuery -->
        <link rel="icon" type="image/ico" href="https://salsipuedes.gov.ar/favicon.ico">
    </head>
    <body class="page-template-default page page-id-116 logged-in admin-bar  customize-support" cz-shortcut-listen="true">
        <header id="masthead" class="site-header" role="banner">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="logo">
                                <div class="site-header-inner col-sm-12">
                                    <div class="site-branding">
                                        
										<img border="0" src="<?php print site_url(); ?>assets/images/elogo.png" alt="<?php print APPLICATION_NAME; ?>" title="<?php print APPLICATION_NAME; ?>" style="border:none;color:#ffffff;font-size:58px;line-height:52px;max-width:100%;margin:0 auto;display:block;" />
										<!--
										<h1 class="site-title">
                                            <a href="https://salsipuedes.gov.ar/websimer" title="SIMER" rel="home">
                                               SIMER SALSIPUEDES               </a>
                                        </h1>
                                        <h4 class="site-description">Sistema de mesa de entrada y respuesta</h4> -->
                                    </div>
                                </div>
                            </div>
                        </div><!--.col-sm-3-->
                        <div class="col-sm-6">
                            <div class="header-social-icon-wrap">
                                <ul class="social-icons">
								</ul>
                            </div><!--.header-social-icon-wrap-->
                        </div><!-- .col-sm-6-->
                    </div>
                </div>
            </div>
            <div id="header-main" class="header-bottom">
                <div class="header-bottom-inner">
                    <div class="container">
                        <div class="row">                 

                            <div class="col-sm-12">                        
                                <div class="site-navigation">
                                    <nav class="main-menu" style="display: block;">
                                        <ul id="menu-primari_menu" class="header-nav clearfix"><li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-40 current-menu-item"><a href="<?php print site_url() ?>profile">Inicio</a></li>
                                            <li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom "><a target="_blank" href="https://salsipuedes.gov.ar/contacto/">Contactenos</a></li>                                
											<li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom "><a target="_blank"href="https://municipalidad.com/salsipuedes">Consultar Deuda</a>
                                            </li>	
											<!--li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="<?php// print site_url() ?>profile/faq">Requisitos de tramites <?php //print base_url(uri_string());?></a>
											</li>
											<li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom "><a href="<?php //print site_url() ?>consultar">Consultar Tramite <?php //print base_url(uri_string());?></a>
											</li-->
										</ul>        
										</nav>
                                    <div id="responsive-menu-container"></div>
                                </div><!-- .site-navigation -->
                            </div><!--.col-sm-12-->
                        </div><!--.row-->
                    </div><!-- .container -->
                </div><!--.header-bottom-inner-->
            </div><!--.header-bottom-->

			
			
        </header><!-- #masthead -->
		
        <div class="main-content">
            <div class="container">
                <div id="content" class="main-content-inner">

                    <div class="row">
                        <div class="col-sm-12 col-md-10">
                            <div class="row box">

							

<div class="row page-content">
    <div class="col-lg-12 text-right">
       
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card hovercard">                    
			
                    <div class="card-body info">
                        <div class="title text-left">
					    <?php echo $heading; ?> 
                        NOS ENCONTRAMOS HACIENDO MANTENIMIENTO.
                        </div>
                        
						Disculpe las molestias.
						
						Puede enviar su reclamo a sistema@salsipuedes.gov.ar detallando bien la ubicación.
					
                    </div>
                </div>
            </div>
        </div>
</div>
</div><!-- /.row -->
</div>
</div>
<!--
<div class="col-sm-12 col-md-4">
    <div class="row box">

        <div class="sidebar">
            <div class="sidebar-padder">

			   
            </div><!-- close .sidebar-padder 
        </div><!-- close .sidebar 
    </div>
</div> -->
</div>
</div><!-- close .*-inner (main-content) -->
</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div id="footer-info">
        <div class="container">
            <div class="site-info">
                Copyright &copy; 2018 - <?php echo date("Y", time()); ?>  <a href="https://salsipuedes.gov.ar/" title="salsipuedes.gov.ar">Municipalidad de Salsipuedes</a>  todos los derechos reservados.
            </div><!-- close .site-info -->
        </div>
    </div>
</footer><!-- close #colophon -->
<script type="text/javascript" src="<?php print HTTP_JS_PATH; ?>jquery.min.js"></script>
<!--<script type="text/javascript" src="<?php //print HTTP_JS_PATH; ?>/bootstrap/bootstrap.min.js"></script> -->

</body>
</html>