<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 23/07/16
 * Time: 18:05
 */

class LesteTI_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $resource = Mage::getSingleton('core/resource');
        $connection = $resource->getConnection('core_read');

        $results = $connection->query('select * from core_store')->fetchAll();

        Zend_Debug::dump($results);
    }

    public function flatAction() {
        $reviews = Mage::getModel('review/review')->getCollection();

        foreach ($reviews as $_review) {
            echo $_review->getReviewUrl() . '<br/>';
        }
    }

    public function helloAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

}
