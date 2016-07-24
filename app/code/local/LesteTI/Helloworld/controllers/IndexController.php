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

    public function subscriptionAction() {
        $subscription = Mage::getModel('helloworld/subscription');

        $subscription->setFirstname('John');
        $subscription->setLastname('Doe');
        $subscription->setEmail('john.doe@example.com');
        $subscription->setMessage('A short message to test');

        $subscription->save();

        echo 'Success';
    }

    /**
     * Guia completo para uso de collections:
     *
     * https://magento2.atlassian.net/wiki/display/m1wiki/Using+Magento+1.x+collections
     *
     */
    public function collectionAction() {
        $productCollection = Mage::getModel('catalog/product')
            ->getCollection()
            ->addAttributeToSelect('price')
            ->addAttributeToSelect('image')
//            ->addAttributeToFilter('name', 'French Cuff Cotton Twill Oxford')
//            ->addAttributeToFilter('entity_id', array('in' => array(624,625)))
            ->addAttributeToFilter('name', array('like' => 'French%'))
            ->setPageSize(10,1);

        echo $productCollection->getSelect()->__toString();

//      atualiza preço de todos os registros selecionados.
//        $productCollection->setDataToAll('price',180.0);
//        $productCollection->save();

        foreach ($productCollection as $product) {
            Zend_Debug::dump($product->debug());
        }
    }

}
