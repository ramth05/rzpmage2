<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Razorpay\Magento\Test\Unit\Model;
use Magento\Payment\Model\Method\AbstractMethod;
use Razorpay\Magento\Model\PaymentAction;
class PaymentActionTest extends \PHPUnit\Framework\TestCase
{
    public function testToOptionArray()
    {
        $sourceModel = new PaymentAction();
        static::assertEquals(
            [
                [
                    'value' => AbstractMethod::ACTION_AUTHORIZE,
                    'label' => __('Authorize Only')
                ],
                [
                    'value' => AbstractMethod::ACTION_AUTHORIZE_CAPTURE,
                    'label' => __('Authorize and Capture')
                ]
            ],
            $sourceModel->toOptionArray()
        );
    }

    public function testToOptionArray2()
    {
        $sourceModel = new PaymentAction();
        static::assertEquals(
            [
                [
                    'value' => AbstractMethod::ACTION_AUTHORIZE,
                    'label' => __('Authorize Only2')
                ],
                [
                    'value' => AbstractMethod::ACTION_AUTHORIZE_CAPTURE,
                    'label' => __('Authorize and Capture')
                ]
            ],
            $sourceModel->toOptionArray()
        );
    }
}
