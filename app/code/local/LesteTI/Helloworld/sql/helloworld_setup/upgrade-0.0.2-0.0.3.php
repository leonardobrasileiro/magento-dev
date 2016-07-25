<?php
/**
 * Verifica a versão do módulo via bd:
 * select * from core_resource where code = 'helloworld_setup'
 *
 *
 * Created by IntelliJ IDEA.
 * User: leonardo
 * Date: 24/07/16
 * Time: 23:17
 */

$installer = $this;

$installer->startSetup();

//Create the attribute loyaltynumber for the customer entity
$installer->addAttribute('customer','loyaltynumber', array(
    'type' => 'varchar',
    'input' => 'text',
    'required' => false,
    'label' => 'Loyalty Number',
    'visible' => true,
    'adminhtml_only' => true,
    'user_defined' => true,
));

$loyaltyAttribute = Mage::getSingleton('eav/config')->getAttribute('customer','loyaltynumber');
$loyaltyAttribute->setData('used_in_forms', array('adminhtml_customer'));
$loyaltyAttribute->save();

$installer->endSetup();
