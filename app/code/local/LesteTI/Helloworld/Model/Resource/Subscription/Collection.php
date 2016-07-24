<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 24/07/16
 * Time: 09:59
 */

class LesteTI_Helloworld_Model_Resource_Subscription_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract {

    protected function _construct() {
        $this->_init('helloworld/subscription');
    }

}