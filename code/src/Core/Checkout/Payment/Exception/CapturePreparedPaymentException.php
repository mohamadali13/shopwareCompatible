<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\Payment\Exception;

use Shopware\Core\Framework\Log\Package;

#[Package('checkout')]
/**
 * @deprecated tag:v6.6.0 - use PaymentException::capturePreparedException instead
 */
class CapturePreparedPaymentException extends PaymentProcessException
{
    public function __construct(
        string $orderTransactionId,
        string $errorMessage,
        ?\Throwable $e = null
    ) {
        parent::__construct(
            $orderTransactionId,
            'The capture process of the prepared payment was interrupted due to the following error:' . \PHP_EOL . '{{ errorMessage }}',
            ['errorMessage' => $errorMessage],
            $e
        );
    }

    public function getErrorCode(): string
    {
        return 'CHECKOUT__CAPTURE_PREPARED_PAYMENT_ERROR';
    }
}
