<?php
/**
 * FAQ for Magento
 *
 * @category   Studioraz
 * @package    Studioraz_Faq
 * @copyright  Copyright (c) 2009 Studioraz GmbH & Co. KG <magento@studioraz.de>
 */

/**
 * FAQ for Magento
 *
 * @category   Studioraz
 * @package    Studioraz_Faq
 * @author     Studioraz GmbH & Co. KG <magento@studioraz.de>
 */
class Studioraz_Faq_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Constructor for the FAQ edit form
     */
    public function __construct()
    {
        $this->_objectId = 'category_id';
        $this->_blockGroup = 'studioraz_faq';
        $this->_controller = 'adminhtml_category';
        
        parent::__construct();
        
        $this->_updateButton('save', 'label', Mage::helper('studioraz_faq')->__('Save FAQ Category'));
        $this->_updateButton('delete', 'label', Mage::helper('studioraz_faq')->__('Delete FAQ Category'));
        
        $this->_addButton('saveandcontinue', array (
                'label' => Mage::helper('studioraz_faq')->__('Save and continue edit'),
                'onclick' => 'saveAndContinueEdit()', 
                'class' => 'save' ), -100);
        
        $this->_formScripts[] = "
            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }
    
    /**
     * @return Studioraz_Faq_Model_Category
     */
    public function getCategory()
    {
        return Mage::registry('faq_category');
    }
    
    /**
     * @return string
     */
    public function getHeaderText()
    {
        if ($this->getCategory()->getId()) {
            return $this->escapeHtml($this->getCategory()->getCategoryName());
        }
        else {
            return $this->escapeHtml(Mage::helper('studioraz_faq')->__('New FAQ Category'));
        }
    }
    
    public function getFormActionUrl()
    {
        return $this->getUrl('*/*/save');
    }

    /**
     * Returns the CSS class for the header
     * 
     * Usually 'icon-head' and a more precise class is returned. We return
     * only an empty string to avoid spacing on the left of the header as we
     * don't have an icon.
     * 
     * @return string
     */
    public function getHeaderCssClass()
    {
        return '';
    }
}
