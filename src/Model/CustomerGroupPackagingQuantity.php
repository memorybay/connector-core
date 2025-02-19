<?php
/**
 * @copyright 2010-2015 JTL-Software GmbH
 * @package Jtl\Connector\Core\Model
 * @subpackage Product
 */

namespace Jtl\Connector\Core\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Packaging quantities for customergroups.
 *
 * @access public
 * @package Jtl\Connector\Core\Model
 * @subpackage Product
 * @Serializer\AccessType("public_method")
 */
class CustomerGroupPackagingQuantity extends AbstractModel
{
    /**
     * @var Identity Reference to customergroup.
     * @Serializer\Type("Jtl\Connector\Core\Model\Identity")
     * @Serializer\SerializedName("customerGroupId")
     * @Serializer\Accessor(getter="getCustomerGroupId",setter="setCustomerGroupId")
     */
    protected $customerGroupId = null;

    /**
     * @var double Contains the minimum quantity for a customergroup.
     * @Serializer\Type("double")
     * @Serializer\SerializedName("minimumOrderQuantity")
     * @Serializer\Accessor(getter="getMinimumOrderQuantity",setter="setMinimumOrderQuantity")
     */
    protected $minimumOrderQuantity = 0.0;
    
    /**
     * @var double Product can only be purchased in multiples of takeOffQuantity e.g. 5,10,15...
     * @Serializer\Type("double")
     * @Serializer\SerializedName("packagingQuantity")
     * @Serializer\Accessor(getter="getPackagingQuantity",setter="setPackagingQuantity")
     */
    protected $packagingQuantity = 0.0;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customerGroupId = new Identity();
    }
    
    /**
     * @param Identity $customerGroupId Reference to customer group.
     * @return CustomerGroupPackagingQuantity
     */
    public function setCustomerGroupId(Identity $customerGroupId): CustomerGroupPackagingQuantity
    {
        $this->customerGroupId = $customerGroupId;
        
        return $this;
    }
    
    /**
     * @return Identity Reference to customergroup.
     */
    public function getCustomerGroupId(): Identity
    {
        return $this->customerGroupId;
    }

    /**
     * @param double $minimumOrderQuantity Contains the minimum quantity for a customergroup.
     * @return CustomerGroupPackagingQuantity
     */
    public function setMinimumOrderQuantity(float $minimumOrderQuantity): CustomerGroupPackagingQuantity
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;
        
        return $this;
    }
    
    /**
     * @return double Contains the minimum quantity for a customergroup.
     */
    public function getMinimumOrderQuantity(): float
    {
        return $this->minimumOrderQuantity;
    }
    
    /**
     * @param double $packagingQuantity Product can only be purchased in multiples of takeOffQuantity e.g. 5,10,15...
     * @return CustomerGroupPackagingQuantity
     */
    public function setPackagingQuantity(float $packagingQuantity): CustomerGroupPackagingQuantity
    {
        $this->packagingQuantity = $packagingQuantity;
        
        return $this;
    }
    
    /**
     * @return double Product can only be purchased in multiples of takeOffQuantity e.g. 5,10,15...
     */
    public function getPackagingQuantity(): float
    {
        return $this->packagingQuantity;
    }
}
