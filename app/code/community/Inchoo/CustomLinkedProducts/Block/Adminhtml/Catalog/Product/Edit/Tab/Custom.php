<?php
/**
* Inchoo
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@magentocommerce.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Please do not edit or add to this file if you wish to upgrade
* Magento or this extension to newer versions in the future.
** Inchoo *give their best to conform to
* "non-obtrusive, best Magento practices" style of coding.
* However,* Inchoo *guarantee functional accuracy of
* specific extension behavior. Additionally we take no responsibility
* for any possible issue(s) resulting from extension usage.
* We reserve the full right not to provide any kind of support for our free extensions.
* Thank you for your understanding.
*
* @category Inchoo
* @package CustomLinkedProducts
* @author Marko Martinović <marko.martinovic@inchoo.net>
* @copyright Copyright (c) Inchoo (http://inchoo.net/)
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
*/

class Inchoo_CustomLinkedProducts_Block_Adminhtml_Catalog_Product_Edit_Tab_Custom extends Mage_Adminhtml_Block_Widget_Form
{
     protected function _prepareForm()
    {

        //$product = Mage::registry('product');

        $form = new Varien_Data_Form();
        $fieldset = $form->addFieldset('linked_options', array('legend'=>Mage::helper('catalog')->__('Linked Options')));

        $fieldset->addField('tier_options', 'text', array(
                'name'=>'tier_options',
                'class'=>'requried-entry',
        ));
        $form->getElement('tier_options')->setRenderer(
            $this->getLayout()->createBlock('inchoo_customlinkedproducts/adminhtml_catalog_product_edit_tab_tieroptions')
        );

        $this->setForm($form);
    }
}// Class Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Custom END


