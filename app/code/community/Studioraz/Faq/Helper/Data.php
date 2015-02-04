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
class Studioraz_Faq_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Returns config data
     * 
     * @param string $field Requested field
     * @return array config Configuration information
     */
    public function getConfigData($field)
    {
        $path = 'faq/config/' . $field;
        $config = Mage::getStoreConfig($path, Mage::app()->getStore());
        return $config;
    }

    /**
     * Retrieve FAQ index url
     *
     * @return string
     */
    public function getFaqIndexUrl()
    {
        return $this->_getUrl('faq');
    }
}
