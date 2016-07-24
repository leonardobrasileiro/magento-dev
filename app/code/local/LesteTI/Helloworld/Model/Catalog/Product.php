<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 23/07/16
 * Time: 22:10
 */

class LesteTI_Helloworld_Model_Catalog_Product extends Mage_Catalog_Model_Product {

    public function getName() {
        return ':: ' . $this->_getData('name') . ' ::';
    }
}