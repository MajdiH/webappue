<?php

/**
 * Description of class
 *
 * @author majdih
 */
require_once('../requires/simplepie/autoloader.php');
require_once('../requires/html-dom.php');

class tele {

    private $feed;

    public function tele($link) {
        $feed = new SimplePie();
        $feed->set_feed_url($link);
        $feed->init();
        $feed->handle_content_type();
        $this->feed = $feed;
    }

    public function getFeed() {
        return $this->feed;
    }

}

?>
