<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\Payment\Exception;

use Shopware\Core\Framework\Log\Package;

#[Package('checkout')]
/**
 * @deprecated tag:v6.6.0 - Will be removed without replacement
 */
class RefundNotEnabledException extends RefundProcessException
{
    public function __construct(?\Throwable $e = null)
    {
        parent::__construct(
            '',
            'The payment method does not allow refund handling.',
            [],
            $e
        );
    }

    public function getErrorCode(): string
    {
        return 'CHECKOUT__REFUND_NOT_ENABLED_ERROR';
    }
}
