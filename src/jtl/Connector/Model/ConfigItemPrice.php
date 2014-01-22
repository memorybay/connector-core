<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * ConfigItemPrice Model
 * Customer group price for config item.
 *
 * @access public
 */
class ConfigItemPrice extends DataModel
{
    /**
     * @var string - Reference to configItem
     */
    protected $_configItemId = '';
    
    /**
     * @var string - Reference to customerGroup
     */
    protected $_customerGroupId = '';
    
    /**
     * @var float - Net price or percental value to add/deduct to/from product price (depending on type). Positive value means surcharge, negative value means discount. Also see configItem.vat for value added tax.
     */
    protected $_price;
    
    /**
     * @var int - Optional type. Default is fixed price (Type 0). Type 1 defines percental price type.
     */
    protected $_type = 0;
    
    /**
     * ConfigItemPrice Setter
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        if (property_exists($this, $name)) {
            if ($value === null) {
                $this->$name = null;
                return;
            }
        
            switch ($name) {
                case "_configItemId":
                case "_customerGroupId":
                
                    $this->$name = (string)$value;
                    break;
            
                case "_price":
                
                    $this->$name = (float)$value;
                    break;
            
                case "_type":
                
                    $this->$name = (int)$value;
                    break;
            
            }
        }
    }
    
    /**
     * @param string $configItemId
     * @return \jtl\Connector\Model\ConfigItemPrice
     */
    public function setConfigItemId($configItemId)
    {
        $this->_configItemId = (string)$configItemId;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getConfigItemId()
    {
        return $this->_configItemId;
    }
    
    /**
     * @param string $customerGroupId
     * @return \jtl\Connector\Model\ConfigItemPrice
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->_customerGroupId = (string)$customerGroupId;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCustomerGroupId()
    {
        return $this->_customerGroupId;
    }
    
    /**
     * @param float $price
     * @return \jtl\Connector\Model\ConfigItemPrice
     */
    public function setPrice($price)
    {
        $this->_price = (float)$price;
        return $this;
    }
    
    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->_price;
    }
    
    /**
     * @param int $type
     * @return \jtl\Connector\Model\ConfigItemPrice
     */
    public function setType($type)
    {
        $this->_type = (int)$type;
        return $this;
    }
    
    /**
     * @return int
     */
    public function getType()
    {
        return $this->_type;
    }
    
    /**
     * (non-PHPdoc)
     * @see \jtl\Core\Model\DataModel::map()
     */ 
    public function map($toWawi = false, \stdClass $obj = null)
    {
    
    }
}