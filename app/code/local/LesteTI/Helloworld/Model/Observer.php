<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 28/07/16
 * Time: 09:33
 */

class LesteTI_Helloworld_Model_Observer {

    public function registerVisit(Varien_Event_Observer $observer) {
        Mage::log('helloworld: Registered');
        Mage::log('helloworld: ' . $observer->getProduct()->debug());
        Mage::log('helloworld: ' . $observer->getCategory()->debug());
    }

    public function checkCartQty($observer) {
        if ($observer->getProduct()->getQty() % 2 == 0) {
            Mage::getSingleton('checkout/session')->addNotice('Helloworld: Even quantity added');
        } else {
            Mage::throwException('Quantity is odd. It needs to be even');
        }

    }

}