<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 24/07/16
 * Time: 11:06
 */

class LesteTI_Helloworld_Adminhtml_Helloworld_IndexController extends Mage_Adminhtml_Controller_Action {

    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

}