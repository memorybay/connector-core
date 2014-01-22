<?php
/**
 * @copyright 2010-2013 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

use \jtl\Core\Model\DataModel;

/**
 * SpecificValueI18n Model
 * Localized specific value text.
 *
 * @access public
 */
class SpecificValueI18n extends DataModel
{
    /**
     * @var string - locale
     */
    protected $_localeName = '';
    
    /**
     * @var string - Reference to specificValue
     */
    protected $_specificValueId = '';
    
    /**
     * @var string - Localized value
     */
    protected $_value = '';
    
    /**
     * @var string - Optional localized URL path
     */
    protected $_urlPath = '';
    
    /**
     * @var string - Optional localized description
     */
    protected $_description = '';
    
    /**
     * @var string - Optional localized meta description value
     */
    protected $_metaDescription = '';
    
    /**
     * @var string - Optional localized meta keywords value
     */
    protected $_metaKeywords = '';
    
    /**
     * @var string - Optional localized title tag value
     */
    protected $_titleTag = '';
    
    /**
     * SpecificValueI18n Setter
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
                case "_localeName":
                case "_specificValueId":
                case "_value":
                case "_urlPath":
                case "_description":
                case "_metaDescription":
                case "_metaKeywords":
                case "_titleTag":
                
                    $this->$name = (string)$value;
                    break;
            
            }
        }
    }
    
    /**
     * @param string $localeName
     * @return \jtl\Connector\Model\SpecificValueI18n
     */
    public function setLocaleName($localeName)
    {
        $this->_localeName = (string)$localeName;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getLocaleName()
    {
        return $this->_localeName;
    }
    
    /**
     * @param string $specificValueId
     * @return \jtl\Connector\Model\SpecificValueI18n
     */
    public function setSpecificValueId($specificValueId)
    {
        $this->_specificValueId = (string)$specificValueId;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getSpecificValueId()
    {
        return $this->_specificValueId;
    }
    
    /**
     * @param string $value
     * @return \jtl\Connector\Model\SpecificValueI18n
     */
    public function setValue($value)
    {
        $this->_value = (string)$value;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->_value;
    }
    
    /**
     * @param string $urlPath
     * @return \jtl\Connector\Model\SpecificValueI18n
     */
    public function setUrlPath($urlPath)
    {
        $this->_urlPath = (string)$urlPath;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getUrlPath()
    {
        return $this->_urlPath;
    }
    
    /**
     * @param string $description
     * @return \jtl\Connector\Model\SpecificValueI18n
     */
    public function setDescription($description)
    {
        $this->_description = (string)$description;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }
    
    /**
     * @param string $metaDescription
     * @return \jtl\Connector\Model\SpecificValueI18n
     */
    public function setMetaDescription($metaDescription)
    {
        $this->_metaDescription = (string)$metaDescription;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->_metaDescription;
    }
    
    /**
     * @param string $metaKeywords
     * @return \jtl\Connector\Model\SpecificValueI18n
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->_metaKeywords = (string)$metaKeywords;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getMetaKeywords()
    {
        return $this->_metaKeywords;
    }
    
    /**
     * @param string $titleTag
     * @return \jtl\Connector\Model\SpecificValueI18n
     */
    public function setTitleTag($titleTag)
    {
        $this->_titleTag = (string)$titleTag;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTitleTag()
    {
        return $this->_titleTag;
    }
    
    /**
     * (non-PHPdoc)
     * @see \jtl\Core\Model\DataModel::map()
     */ 
    public function map($toWawi = false, \stdClass $obj = null)
    {
    
    }
}