<?php

require(__DIR__ . '/controller.php');
require(__DIR__ . '/../models/class.contact.php');


if (isset($_POST['locate'])) {

    $locate = $_POST['locate'];

    switch ($locate):

        case 'getContactForm':
            $view = getView('contact', 'contact');
            echo $view;
            break;

        case 'sendContactEmail':
            $view = '';
            $view .='
        <div class="alert alert-success">
          <a class="close" data-dismiss="alert">×</a>
          <i class="icon icon-thumbs-up-alt"></i> <b>Merci !</b> Votre Email a été bien envoyé.</i>
        </div>';
            echo $view;
            break;


        default:
            echo "Never Mind";

    endswitch;
}
?>
