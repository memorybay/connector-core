<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * SetArticle Model
 * Define set articles / parts lists. 
 *
 * @access public
 */
class SetArticle extends DataModel
{
    /**
     * @var string - Unique setArticle id, referenced by product.setArticleId
     */
    protected $_id = '';
    
    /**
     * @var string - Reference to a component / product
     */
    protected $_productId = '';
    
    /**
     * @var double - Component quantity
     */
    protected $_quantity = 0.0;
    
    /**
     * SetArticle Setter
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
                case "_id":
                case "_productId":
                
                    $this->$name = (string)$value;
                    break;
            
                case "_quantity":
                
                    $this->$name = (double)$value;
                    break;
            
            }
        }
    }
    
    /**
     * @param string $id
     * @return \jtl\Connector\Model\SetArticle
     */
    public function setId($id)
    {
        $this->_id = (string)$id;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }
    
    /**
     * @param string $productId
     * @return \jtl\Connector\Model\SetArticle
     */
    public function setProductId($productId)
    {
        $this->_productId = (string)$productId;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->_productId;
    }
    
    /**
     * @param double $quantity
     * @return \jtl\Connector\Model\SetArticle
     */
    public function setQuantity($quantity)
    {
        $this->_quantity = (double)$quantity;
        return $this;
    }
    
    /**
     * @return double
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }
    
    /**
     * (non-PHPdoc)
     * @see \jtl\Core\Model\DataModel::map()
     */ 
    public function map($toWawi = false, \stdClass $obj = null)
    {
    
    }
}