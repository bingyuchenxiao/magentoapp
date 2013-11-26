<?php
/**
 * Magento
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
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Adminhtml
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Adminhtml tier price item renderer
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author     Magento Core Team <core@magentocommerce.com>'wplan/contractpaytow_edit_qudao'
 */
class Inchoo_CustomLinkedProducts_Block_Adminhtml_Catalog_Product_Edit_Tab_Tieroptions
    extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Initialize block
     */

    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $html = '<tr style="width:600px; !important">
				    <td class="label">Add Group Options <span class="required">*</span></td>
				    <td colspan="10" class="grid tier">
    				<table style=" width:100% !important;" cellspacing="0" class="data border" id="tier_options_table">
                		<col width="150" />
        				<col />
        				<col width="1" />
				        <thead>
				            <tr class="headings">
				                <th style="display: none;"></th>

				                <th width="50px">Option1</th>
				                <th width="50px">Option2</th>
				                <th width="50px">Option3</th>
				                <th width="20px" class="last">Action</th>
				            </tr>
				        </thead>
				        <tbody id="group_option_container"></tbody>
				        <tfoot>
				            <tr>
				                <td style="display: none;"></td>
				                <td colspan="6" class="a-right"><button  id="id_231c00b1f97fdd06705bb702086cf9ee" title="Add Custom Options" type="button" class="scalable add" onclick="return groupOptionControl.addItem();" style=""><span>Add</span></button></td>
				            </tr>
				        </tfoot>
				    </table>
			</td></tr>';

        return $html;
    }


}
