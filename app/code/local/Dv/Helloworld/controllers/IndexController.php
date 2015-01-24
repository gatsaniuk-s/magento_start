<?php

class Dv_Helloworld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        echo 'Hello Index!';
    }

    public function goodbyeAction() {
        echo 'Goodbye World!';
    }

    public function paramsAction() {
        echo '<dl>';
        foreach($this->getRequest()->getParams() as $key=>$value) {
            echo "<dt><strong>$key: </strong>".$value.'</dt>';
        }
        echo '</dl>';
    }
}
