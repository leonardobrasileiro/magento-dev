<?php
/**
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 24/07/16
 * Time: 22:35
 */

class LesteTI_Helloworld_Block_Adminhtml_Subscription_Grid extends Mage_Adminhtml_Block_Widget_Grid {

    public function __construct() {
        parent::__construct();

        $this->setId('subscription_grid');
        $this->setDefaultSort('subscription_id');
        $this->setDefaultDir('DESC');
    }

    protected function _prepareCollection() {
        $collection = Mage::getModel('helloworld/subscription')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns() {

        $this->addColumn('subscription_id', array (
            'index' => 'subscription_id',
            'header' => Mage::helper('helloworld')->__
            ('Subscription id'),
            'type' => 'number',
            'sortable' => true,
            'width' => '100px',
        ));
        $this->addColumn('firstname', array (
            'index' => 'firstname',
            'header' => Mage::helper('helloworld')->__('Firstname'),
            'sortable' => false,
        ));
        $this->addColumn('lastname', array (
            'index' => 'lastname',
            'header' => Mage::helper('helloworld')->__('Lastname'),
            'sortable' => false,
        ));
        $this->addColumn('email', array (
            'index' => 'email',
            'header' => Mage::helper('helloworld')->__('Email'),
            'sortable' => false,
        ));
        $this->addColumn('status', array (
            'index' => 'status',
            'header' => Mage::helper('helloworld')->__('Status'),
            'sortable' => true,
            'frame_callback' => array($this, 'prepareStatusLayout'),
            'width' => '150px',
        ));

        return parent::_prepareColumns();
    }

    public function getGridUrl() {
        return $this->getUrl('*/*/grid', array(
            '_current' => true,
        ));
    }

    public function prepareStatusLayout($value) {
        $class = '';
        switch ($value) {
            case 'pending':
                $class = 'grid-severity-notice';
                break;
            case 'approved':
                $class = 'grid-severity-major';
                break;
            case 'declined':
                $class = 'grid-severity-critical';
                break;
        }
        return '<spen class="'.$class.'"><span>'.$value.'</span></span>';
    }

}