<?php

/*
 * Return the view
 */
require(__DIR__ . '/../models/class.cinema.php');

function getView($model, $name) {
    return file_get_contents(__DIR__ . '/../views/'.$model.'View/'.$name.'.xhtml');
}

if (isset($_POST['locate'])) {
    $locate = $_POST['locate'];
    switch ($locate):
        case 'getHome':
            break;
        case 'AlaUne':
            $cine = new cinema('feed://www.cinemarium.fr/rss/rss.xml'); 
            $feed = $cine->getFeed();
            $con ='';
            $con .= '<div class="alert alert-info">
                  <a class="close" data-dismiss="alert">×</a>
                  <i class="icon icon-info"></i> <b>Bienvenue à la page d accueil !</b> Toutes les actualités à la une .</i>
                </div>';
            foreach ($feed->get_items() as $item):
                $html = str_get_html($item->get_description());
                echo $image = $html->find('img', 0); 
                $el = $html->find('a');
                $con .= '
                <div>
                    <div class="top-bar">
                        <h3>'. $item->get_title().'</h3>
                    </div>
                    <div class="well">  
                        <p>'.str_replace($el, "", $item->get_description()).'</p>
                    </div>
                </div>';
            endforeach;
            echo $con;
            break;
    endswitch;
}

if (isset($_POST['bread'])) {
    $bread = $_POST['bread'];
    switch ($bread):
        case '#all-cinema-actu':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> Cinéma <span class="divider">/</span></li>
                                        <li> Toute l actu cinéma</li>';
            break;
         case '#all-cinema-new-outs':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> Cinéma <span class="divider">/</span></li>
                                        <li> Les sorties de la semaine</li>';
            break;
         case '#all-series-news':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> Séries <span class="divider">/</span></li>
                                        <li> Toute l actu cinéma</li>';
            break;
         case '#all-musiques-news':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> Musique <span class="divider">/</span></li>
                                        <li> Toute l actu musique</li>';
            break;
         case '#all-musiques-events':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> Musique <span class="divider">/</span></li>
                                        <li> Les événements MCM</li>';
            break;
         case '#all-tv-news':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> DVD/VOD <span class="divider">/</span></li>
                                        <li> Toute l actu télé/li>';
            break;
         case '#all-tv-programs':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> Télé <span class="divider">/</span></li>
                                        <li> Le programme TV</li>';
            break;
         case '#all-tv-selections':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> Télé <span class="divider">/</span></li>
                                        <li> Notre sélection</li>';
            break;
         case '#all-dvd-news':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> Télé <span class="divider">/</span></li>
                                        <li> Toute l actu cinéma</li>';
            break;
         case '#contact':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> Contact</li>';
            break;
        case '#gallery':
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
					<li> Galerie</li>';
            break;
        default :
            $breadcrumb = '<li><a href="#"><i class="icon-home"></i> Home</a></li>';
    endswitch;
    echo $breadcrumb;
}


?>
