<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 23/07/16
 * Time: 21:31
 */

class LesteTI_Helloworld_Block_Newproducts extends Mage_Core_Block_Template {

    public function getProducts() {
        $products = Mage::getModel('catalog/product')->getCollection()
            ->addAttributeToSelect('*')
            ->setOrder('created_at')
            ->setPageSize(5);

        return $products;
    }

}