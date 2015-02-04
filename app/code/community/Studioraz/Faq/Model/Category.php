<?php
/**
 * FAQ for Magento
 *
 * @category   Studioraz
 * @package    Studioraz_Faq
 * @copyright  Copyright (c) 2010 Studioraz GmbH & Co. KG <magento@studioraz.de>
 */

/**
 * Category Model for FAQ Items
 *
 * @category   Studioraz
 * @package    Studioraz_Faq
 * @author     Studioraz GmbH & Co. KG <magento@studioraz.de>
 */
class Studioraz_Faq_Model_Category extends Mage_Core_Model_Abstract
{
    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->_init('studioraz_faq/category');
    }
    
    public function getName()
    {
        return $this->getCategoryName();
    }
    
    public function getItemCollection()
    {
        $collection = $this->getData('item_collection');
        if (is_null($collection)) {
            $collection = Mage::getSingleton('studioraz_faq/faq')->getCollection()
                ->addCategoryFilter($this);
            $this->setData('item_collection', $collection);
        }
        return $collection;
    }
}
