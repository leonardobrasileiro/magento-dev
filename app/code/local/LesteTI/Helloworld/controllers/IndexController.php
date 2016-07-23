<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 23/07/16
 * Time: 18:05
 */

class LesteTI_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function helloAction() {
        echo 'Action hello in Helloworld IndexController';
    }

}
