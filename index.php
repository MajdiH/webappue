<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>My Open List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Majdi Houidi">

        <!-- Styles -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/theme/myopenlist.css" rel="stylesheet" type="text/css" id="theme-style">
        <link href='assets/css/photoswipe.css' rel='stylesheet' tyle="text/css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'> 
        <style type="text/css">
            body { padding-top: 102px; }
        </style>
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

        <!-- JavaScript/jQuery, Pre-DOM -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
        <script src="assets/js/main.js"></script>
        <script src="assets/js/vendor/jquery/jquery.jpanelmenu.min.js"></script>
        <script src="assets/js/myopenlist-predom.js"></script>

        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

                    <a href="#">
                        <button type="button" class="btn btn-navbar mobile-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </a>
                    <a class="brand" href="#"><i class="icon-folder-open-alt"></i> MyOpen<b>List</b></a>
                    <ul class="nav pull-right">

                        <li>
                            <a id="gallery" href="#">
                                <i class="icon-picture icon-white"></i> 
                                <span class="hidden-phone">Galerie</span>
                            </a>
                        </li>
                        <li>
                            <a id="contact" href="#">
                                <i class="icon-coffee icon-white"></i> 
                                <span class="hidden-phone">Contact</span>
                            </a>
                        </li>

                    </ul>


                </div>

            </div>
            <div class="breadcrumb clearfix">
                <div class="container">
                    <ul class="pull-left" id="position">
                        <div id="loading-bread">
                            <center><img src="assets/img/loader-position.gif"></center>
                        </div>
                    </ul>
                </div>

            </div>
        </div>


        <div class="container">


            <!-- Main Navigation: Box -->
            <div class="navbar navbar-inverse" id="nav">

                <!-- Main Navigation: Inner -->
                <div class="navbar-inner">

                    <!-- Main Navigation: Nav -->
                    <ul class="nav">

                        <li class="active"><a id="home" href="#home"><i class="icon-align-justify"></i> Home</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-film"></i> Cinéma <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a id="all-cinema-actu" href="#"><i class="icon-caret-right"></i> Toute l'actu cinéma</a></li>
                                <li><a id="all-cinema-new-outs" href="#"><i class="icon-caret-right"></i> Les sorties de la semaine</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-desktop"></i> Télé <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a id="all-tv-news" href="#"><i class="icon-caret-right"></i> Toute l'actu télé</a></li>
                                <li><a id="all-tv-programs" href="#"><i class="icon-caret-right"></i> Le programme TV</a></li>
                                <li><a id="all-tv-selections" href="#"><i class="icon-caret-right"></i> Notre sélection</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-expand"></i> Séries <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a id="all-series-news" href="#"><i class="icon-caret-right"></i> Toute l'actu séries TV</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-headphones"></i> Musique <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a id="all-musiques-news" href="#"><i class="icon-caret-right"></i> Toute l'actu musique</a></li>
                                <li><a id="all-musiques-events" href="#"><i class="icon-caret-right"></i> Les événements MCM</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-laptop"></i> DVD/VOD <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a id="all-dvd-news" href="#"><i class="icon-caret-right"></i> Les sorties DVD, Blu-ray et VOD</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- / Main Navigation: Nav -->


                </div>
                <!-- / Main Navigation: Inner -->

            </div>
            <!-- / Main Navigation: Box -->


            <div class="alert alert-light">
                <a class="close" data-dismiss="alert">&times;</a>
                <i class="icon-comment"></i> <b>Suivez notre fil info !</b> Soyez informé en temps réél de nos denières actualités sur vos sujets préférés !
            </div>
            <div id="loading">
                <center><img src="assets/img/ajax-loader.gif"></center>
            </div>

            <div id="content">



            </div>


        </div> 
        <footer class="footer">
            <div class="container">
                <p><small>MyOpen List - EPSI I5 - 2014 - Projet WebAppUE</small></p>
            </div>
        </footer>


    <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/code.photoswipe-3.0.5.min.js"></script>
    </body>





</html>