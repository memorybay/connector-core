<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * TaxClass Model
 * @access public
 */
class TaxClass extends DataModel
{
    /**
     * @var int
     */
    protected $_id = 0;
    
    /**
     * @var string
     */
    protected $_name;
    
    /**
     * @var string
     */
    protected $_default;
    
    /**
     * TaxClass Setter
     *
     * @param string $name
     * @param string $value
     */
    public function __set($name, $value)
    {
        if ($value === null) {
            $this->$name = null;
            return;
        }
        
        switch ($name) {
            case "_id":
            
                if (is_numeric($value)) {
                    $this->$name = (int)$value;                
                }
                break;
        
            case "_name":
            case "_default":
            
                if (is_string($value) && strlen(trim($value)) > 0) {
                    $this->$name = (string)$value;
                }
                break;
        
        }
    }
    
    /**
     * (non-PHPdoc)
     * @see \jtl\Core\Model\DataModel::map()
     */ 
    public function map($toWawi = false, \stdClass $obj = null)
    {
    
    }
}
?>