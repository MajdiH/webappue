<?php

require(__DIR__ . '/controller.php');
require(__DIR__ . '/../models/class.tele.php');

if (isset($_POST['locate'])) {

    $locate = $_POST['locate'];

    switch ($locate):

        case 'getAllTVNews':
            $cine = new tele('http://tele.premiere.fr/var/premiere/storage/rss/tele_actu.xml');
            $feed = $cine->getFeed();
            $con = '';
            foreach ($feed->get_items() as $item):
                $html = str_get_html($item->get_description());
                $el = $html->find('a');

                $con .= '
                <div>
                    <div class="top-bar">
                        <h3>' . $item->get_title() . '</h3>
                    </div>
                    <div class="well">  
                        <p>' . str_replace($el, "", $item->get_description()) . '</p>
                    </div>
                </div>';
            endforeach;
            echo $con;
            break;

        case 'getAllTVPrograms':
            $cine = new tele('http://www.webnext.fr/epg_cache/programme-tv-xml_' . date("Y-m-d") . '.xml');
            $feed = $cine->getFeed();
            $con = '';
            
            $con .= '<div class="row-fluid">';
            $con .= getHeaderTvProgram('TF1');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'TF1')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            
            $con .= getHeaderTvProgram('France 2');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'France 2')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            
            $con .= getHeaderTvProgram('France 3');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'France 3')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            
            $con .= getHeaderTvProgram('Canal+');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'Canal+')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            $con .= '</div>';
            
            $con .= '<div class="row-fluid">';
            $con .= getHeaderTvProgram('France 5');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'France 5')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            
            $con .= getHeaderTvProgram('M6');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'M6')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            
            $con .= getHeaderTvProgram('Arte');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'Arte')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            
            $con .= getHeaderTvProgram('NRJ 12');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'NRJ 12')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            $con .= '</div>';
            
            $con .= '<div class="row-fluid">';
            $con .= getHeaderTvProgram('France 4');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'France 4')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            
            $con .= getHeaderTvProgram('iTélé');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'iTélé')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            
            $con .= getHeaderTvProgram('D17');
            foreach ($feed->get_items() as $item):
                $title = explode(" | ", $item->get_title());
                if ($title[0] == 'D17')
                    $con .='<tr><td>' . $title[1] . ' - ' . $title[2] . '</td></tr>';
            endforeach;
            $con .= getFooterTvProgram();
            $con .= '</div>';
            
            echo $con;
            break;


        case 'getAllTVSelections':
            $cine = new tele('http://tele.premiere.fr/var/premiere/storage/rss/selection_tele.xml');
            $feed = $cine->getFeed();
            $con = '';
            foreach ($feed->get_items() as $item):
                $html = str_get_html($item->get_description());
                $el = $html->find('a');

                $con .= '
                <div>
                    <div class="top-bar">
                        <h3>' . $item->get_title() . '</h3>
                    </div>
                    <div class="well">  
                        <p>' . str_replace($el, "", $item->get_description()) . '</p>
                    </div>
                </div>';
            endforeach;
            echo $con;
            break;



        default:
            echo "Never Mind";

    endswitch;
}

function getHeaderTvProgram($chaine){
    $ch='';
    $ch .= '
                
                    <div class="span3">
                        <div class="top-bar">
                            <h3><i class="icon-calendar"></i> '.$chaine.'</h3>
                        </div>
                        <div class="well no-padding">
                            <table class="table">
                                <tbody>';
    return $ch;
}
function getFooterTvProgram(){
    $ch ='</tbody>
                            </table>
                        </div>
                    </div>
                ';
    return $ch;
}
?>
