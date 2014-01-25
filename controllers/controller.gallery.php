<?php

require(__DIR__ . '/controller.php');
require(__DIR__ . '/../models/class.gallery.php');


if (isset($_POST['locate'])) {

    $locate = $_POST['locate'];

    switch ($locate):

        case 'getGallery':
            $view = getView('gallery', 'gallery');
            echo $view;
            break;

        


        default:
            echo "Never Mind";

    endswitch;
}
?>
