<?php
namespace Jtl\Connector\Test\Core\Definition;

use Jtl\Connector\Core\Definition\PaymentType;
use Jtl\Connector\Test\Core\TestCase;

/**
 * Class PaymentTypeTest
 * @package Jtl\Connector\Test\Core\Definition
 */
class PaymentTypeTest extends TestCase
{
    /**
     * @dataProvider isTypeDataProvider
     *
     * @param $type
     * @param bool $shouldBePaymentType
     * @throws \ReflectionException
     */
    public function testIsType($type, bool $shouldBePaymentType)
    {
        $isType = PaymentType::isType($type);
        $this->assertSame($shouldBePaymentType, $isType);
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    public function isTypeDataProvider(): array
    {
        $testCases = $this->getCorrectConstantsTestCases(PaymentType::class);
        $testCases[] = [false, false];
        $testCases[] = ['', false];
        $testCases[] = ['pm worldpay', false];
        $testCases[] = ['PM_WORLDPAY', false];

        return $testCases;
    }

}