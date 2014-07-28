<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

/**
 * Product to FileDownload allocation..
 *
 * @access public
 * @package jtl\Connector\Model
 */
class ProductFileDownload extends DataModel
{
    /**
     * @type Identity Reference to fileDownload
     */
    protected $fileDownloadId = null;

    /**
     * @type Identity Reference to product
     */
    protected $productId = null;


    /**
     * @type array list of identities
     */
    public $identities = array(
        'productId',
        'fileDownloadId',
    );

    /**
     * @type array list of navigations
     */
    public $navigations = array(
    );

    /**
     * @return array 
     */
    public function getIdentities()
    {
        return $this->identities;
    }

    /**
     * @return array 
     */
    public function getNavigations()
    {
        return $this->navigations;
    }

    /**
     * @param  Identity $productId Reference to product
     * @return \jtl\Connector\Model\ProductFileDownload
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setProductId(Identity $productId)
    {
        return $this->setProperty('productId', $productId, 'Identity');
    }
    
    /**
     * @return Identity Reference to product
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param  Identity $fileDownloadId Reference to fileDownload
     * @return \jtl\Connector\Model\ProductFileDownload
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setFileDownloadId(Identity $fileDownloadId)
    {
        return $this->setProperty('fileDownloadId', $fileDownloadId, 'Identity');
    }
    
    /**
     * @return Identity Reference to fileDownload
     */
    public function getFileDownloadId()
    {
        return $this->fileDownloadId;
    }
}

