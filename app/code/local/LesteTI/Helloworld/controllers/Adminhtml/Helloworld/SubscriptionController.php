<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 24/07/16
 * Time: 22:10
 */

class LesteTI_Helloworld_Adminhtml_Helloworld_SubscriptionController extends Mage_Adminhtml_Controller_Action {

    public function indexAction() {
        $this->loadLayout();

        $this->_addContent($this->getLayout()->createBlock('helloworld/adminhtml_subscription'));

        $this->renderLayout();
    }

}