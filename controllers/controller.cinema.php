<?php

require(__DIR__ . '/controller.php');

if (isset($_POST['locate'])) {

    $locate = $_POST['locate'];

    switch ($locate):

        case 'getAllCinemaNews':
            $cine = new cinema('http://www.premiere.fr/var/premiere/storage/rss/cinema_actu.xml');
            $feed = $cine->getFeed();
            $con ='';
            foreach ($feed->get_items() as $item):
                $html = str_get_html($item->get_description());
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
         case 'getAllCinemaNewOuts':
            $cine = new cinema('http://www.premiere.fr/var/premiere/storage/rss/sorties_semaine_films.xml');
            $feed = $cine->getFeed();
            $con ='';
            foreach ($feed->get_items() as $item):
                $html = str_get_html($item->get_description());
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




        default:
            echo "Never Mind";

    endswitch;
}
?>
