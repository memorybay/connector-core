<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * Language Model
 * @access public
 */
class Language extends DataModel
{
    /**
     * @var int
     */
    protected $_id;
    
    /**
     * @var string
     */
    protected $_nameEnglish;
    
    /**
     * @var string
     */
    protected $_nameGerman;
    
    /**
     * @var string
     */
    protected $_localeName;
    
    /**
     * @var bool
     */
    protected $_isDefault = false;
    
    /**
     * @var bool
     */
    protected $_isConnectorDefault = false;
    
    /**
     * Language Setter
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
        
            case "_nameEnglish":
            case "_nameGerman":
            case "_localeName":
            
                if (strlen(trim($value)) > 0) {
                    $this->$name = (string)$value;
                }
                break;
        
            case "_isDefault":
            case "_isConnectorDefault":
            
                if (is_bool($value)) {
                    $this->$name = (bool)$value;
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