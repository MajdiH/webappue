<?php

require(__DIR__ . '/controller.php');
require(__DIR__ . '/../models/class.dvd.php');

if (isset($_POST['locate'])) {

    $locate = $_POST['locate'];

    switch ($locate):

        case 'getAllDVDNews':
            $cine = new dvd('http://www.premiere.fr/var/premiere/storage/rss/sorties_semaine_dvd.xml');
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
