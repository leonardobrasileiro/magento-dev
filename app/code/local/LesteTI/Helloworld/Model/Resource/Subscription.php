<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 24/07/16
 * Time: 09:58
 */

class LesteTI_Helloworld_Model_Resource_Subscription extends Mage_Core_Model_Resource_Db_Abstract {

    protected function _construct() {
        $this->_init('helloworld/subscription', 'subscription_id');
    }

}