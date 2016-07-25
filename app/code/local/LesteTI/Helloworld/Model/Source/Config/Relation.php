<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 25/07/16
 * Time: 00:04
 */

class LesteTI_Helloworld_Model_Source_Config_Relation {

    public function toOptionArray() {
        return array(
            array(
                'value' => null,
                'label'=>Mage::helper('helloworld')->__('--Please Select--'),
            ),
            array(
                'value' => 'bronze',
                'label'=>Mage::helper('helloworld')->__('Bronze'),
            ),
            array(
                'value' => 'silver',
                'label'=>Mage::helper('helloworld')->__('Silver'),
            ),
            array(
                'value' => 'gold',
                'label'=>Mage::helper('helloworld')->__('Gold'),
            ),
        );
    }

}