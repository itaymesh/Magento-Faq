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
class Studioraz_Faq_Block_Adminhtml_Category extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Constructor for FAQ Adminhtml Block
     */
    public function __construct()
    {
        $this->_blockGroup = 'studioraz_faq';
        $this->_controller = 'adminhtml_category';
        $this->_headerText = Mage::helper('studioraz_faq')->__('Manage FAQ Categories');
        $this->_addButtonLabel = Mage::helper('studioraz_faq')->__('Add New FAQ Category');
        
        parent::__construct();
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
