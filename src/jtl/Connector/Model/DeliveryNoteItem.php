<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Model
 */

namespace jtl\Connector\Model;

/**
 * Delivery note item properties..
 *
 * @access public
 * @package jtl\Connector\Model
 */
class DeliveryNoteItem extends DataModel
{
    /**
     * @type Identity Reference to customerOrderItem
     */
    protected $customerOrderItemId = null;

    /**
     * @type Identity Reference to deliveryNote
     */
    protected $deliveryNoteId = null;

    /**
     * @type string 
     */
    protected $cHinweis = '';

    /**
     * @type float|null Quantity delivered
     */
    protected $quantity = 0.0;


    /**
     * @type array list of identities
     */
    public $identities = array(
        'deliveryNoteId',
        'customerOrderItemId',
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
     * @param  float $quantity Quantity delivered
     * @return \jtl\Connector\Model\DeliveryNoteItem
     * @throws InvalidArgumentException if the provided argument is not of type 'float'.
     */
    public function setQuantity($quantity)
    {
        return $this->setProperty('quantity', $quantity, 'float');
    }
    
    /**
     * @return float Quantity delivered
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param  string $cHinweis 
     * @return \jtl\Connector\Model\DeliveryNoteItem
     * @throws InvalidArgumentException if the provided argument is not of type 'string'.
     */
    public function setCHinweis($cHinweis)
    {
        return $this->setProperty('cHinweis', $cHinweis, 'string');
    }
    
    /**
     * @return string 
     */
    public function getCHinweis()
    {
        return $this->cHinweis;
    }

    /**
     * @param  Identity $deliveryNoteId Reference to deliveryNote
     * @return \jtl\Connector\Model\DeliveryNoteItem
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setDeliveryNoteId(Identity $deliveryNoteId)
    {
        return $this->setProperty('deliveryNoteId', $deliveryNoteId, 'Identity');
    }
    
    /**
     * @return Identity Reference to deliveryNote
     */
    public function getDeliveryNoteId()
    {
        return $this->deliveryNoteId;
    }

    /**
     * @param  Identity $customerOrderItemId Reference to customerOrderItem
     * @return \jtl\Connector\Model\DeliveryNoteItem
     * @throws InvalidArgumentException if the provided argument is not of type 'Identity'.
     */
    public function setCustomerOrderItemId(Identity $customerOrderItemId)
    {
        return $this->setProperty('customerOrderItemId', $customerOrderItemId, 'Identity');
    }
    
    /**
     * @return Identity Reference to customerOrderItem
     */
    public function getCustomerOrderItemId()
    {
        return $this->customerOrderItemId;
    }
}

