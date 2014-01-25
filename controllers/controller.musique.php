<?php

require(__DIR__ . '/controller.php');
require(__DIR__ . '/../models/class.musique.php');

if (isset($_POST['locate'])) {

    $locate = $_POST['locate'];

    switch ($locate):

        case 'getAllMusiquesNews':
            $cine = new musique('http://musique.premiere.fr/var/premiere/storage/rss/musique_actu.xml');
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
         case 'getAllMusiquesEvents':
            $cine = new musique('http://musique.premiere.fr/var/premiere/storage/rss/evenements_mcm.xml');
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
