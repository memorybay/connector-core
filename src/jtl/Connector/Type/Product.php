<?php
/**
 * @copyright 2010-2014 JTL-Software GmbH
 * @package jtl\Connector\Type
 */

namespace jtl\Connector\Type;

use \jtl\Connector\Type\PropertyInfo;

/**
 * @access public
 * @package jtl\Connector\Type
 */
class Product extends DataType
{
    protected function loadProperties()
    {
        return array(
            new PropertyInfo('basePriceUnitId', 'Identity', null, false, true, false),
            new PropertyInfo('deliveryStatusId', 'Identity', null, false, true, false),
            new PropertyInfo('id', 'Identity', null, true, true, false),
            new PropertyInfo('manufacturerId', 'Identity', null, false, true, false),
            new PropertyInfo('masterProductId', 'Identity', null, false, true, false),
            new PropertyInfo('measurementUnitId', 'Identity', null, false, true, false),
            new PropertyInfo('partsListId', 'Identity', null, false, true, false),
            new PropertyInfo('productTypeId', 'Identity', null, false, true, false),
            new PropertyInfo('shippingClassId', 'Identity', null, false, true, false),
            new PropertyInfo('unitId', 'Identity', null, false, true, false),
            new PropertyInfo('asin', 'string', '', false, false, false),
            new PropertyInfo('availableFrom', 'DateTime', null, false, false, false),
            new PropertyInfo('basePriceDivisor', 'double', 0.0, false, false, false),
            new PropertyInfo('basePriceQuantity', 'double', 0.0, false, false, false),
            new PropertyInfo('buffer', 'string', '', false, false, false),
            new PropertyInfo('considerBasePrice', 'boolean', false, false, false, false),
            new PropertyInfo('considerStock', 'boolean', false, false, false, false),
            new PropertyInfo('considerVariationStock', 'boolean', false, false, false, false),
            new PropertyInfo('creationDate', 'DateTime', null, false, false, false),
            new PropertyInfo('ean', 'string', '', false, false, false),
            new PropertyInfo('epid', 'string', '', false, false, false),
            new PropertyInfo('hazardIdNumber', 'string', '', false, false, false),
            new PropertyInfo('height', 'double', 0.0, false, false, false),
            new PropertyInfo('isActive', 'boolean', false, false, false, false),
            new PropertyInfo('isBatch', 'boolean', false, false, false, false),
            new PropertyInfo('isBestBefore', 'boolean', false, false, false, false),
            new PropertyInfo('isbn', 'string', '', false, false, false),
            new PropertyInfo('isDivisible', 'boolean', false, false, false, false),
            new PropertyInfo('isMasterProduct', 'boolean', false, false, false, false),
            new PropertyInfo('isNewProduct', 'boolean', false, false, false, false),
            new PropertyInfo('isSerialNumber', 'boolean', false, false, false, false),
            new PropertyInfo('isTopProduct', 'boolean', false, false, false, false),
            new PropertyInfo('keywords', 'string', '', false, false, false),
            new PropertyInfo('length', 'double', 0.0, false, false, false),
            new PropertyInfo('manufacturerNumber', 'string', '', false, false, false),
            new PropertyInfo('measurementQuantity', 'double', 0.0, false, false, false),
            new PropertyInfo('nextAvailableInflowDate', 'DateTime', null, false, false, false),
            new PropertyInfo('nextAvailableInflowQuantity', 'double', 0.0, false, false, false),
            new PropertyInfo('note', 'string', '', false, false, false),
            new PropertyInfo('originCountry', 'string', '', false, false, false),
            new PropertyInfo('packagingQuantity', 'double', 0.0, false, false, false),
            new PropertyInfo('permitNegativeStock', 'boolean', false, false, false, false),
            new PropertyInfo('productWeight', 'double', 0.0, false, false, false),
            new PropertyInfo('recommendedRetailPrice', 'double', 0.0, false, false, false),
            new PropertyInfo('serialNumber', 'string', '', false, false, false),
            new PropertyInfo('shippingWeight', 'double', 0.0, false, false, false),
            new PropertyInfo('sku', 'string', '', false, false, false),
            new PropertyInfo('sort', 'string', '', false, false, false),
            new PropertyInfo('stockLevel', 'string', '', false, false, false),
            new PropertyInfo('taric', 'string', '', false, false, false),
            new PropertyInfo('unNumber', 'string', '', false, false, false),
            new PropertyInfo('upc', 'string', '', false, false, false),
            new PropertyInfo('width', 'double', 0.0, false, false, false),
            new PropertyInfo('attributes', '\jtl\Connector\Model\ProductAttr', null, false, false, true),
            new PropertyInfo('categories', '\jtl\Connector\Model\Product2Category', null, false, false, true),
            new PropertyInfo('configGroups', '\jtl\Connector\Model\ProductConfigGroup', null, false, false, true),
            new PropertyInfo('crossSellings', '\jtl\Connector\Model\CrossSelling', null, false, false, true),
            new PropertyInfo('fileDownloads', '\jtl\Connector\Model\ProductFileDownload', null, false, false, true),
            new PropertyInfo('i18ns', '\jtl\Connector\Model\ProductI18n', null, false, false, true),
            new PropertyInfo('invisibilities', '\jtl\Connector\Model\ProductInvisibility', null, false, false, true),
            new PropertyInfo('mediaFiles', '\jtl\Connector\Model\MediaFile', null, false, false, true),
            new PropertyInfo('partsLists', '\jtl\Connector\Model\PartsList', null, false, false, true),
            new PropertyInfo('prices', '\jtl\Connector\Model\ProductPrice', null, false, false, true),
            new PropertyInfo('specialPrices', '\jtl\Connector\Model\ProductSpecialPrice', null, false, false, true),
            new PropertyInfo('specifics', '\jtl\Connector\Model\ProductSpecific', null, false, false, true),
            new PropertyInfo('varCombinations', '\jtl\Connector\Model\ProductVarCombination', null, false, false, true),
            new PropertyInfo('variations', '\jtl\Connector\Model\ProductVariation', null, false, false, true),
            new PropertyInfo('warehouseInfos', '\jtl\Connector\Model\ProductWarehouseInfo', null, false, false, true),
        );
    }

    public function isMain()
    {
        return true;
    }
}
