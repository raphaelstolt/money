<?php

declare(strict_types=1);

namespace Brick\Money\Exception;

/**
 * Exception thrown when an exchange rate is not available.
 */
class CurrencyConversionException extends MoneyException
{
    /**
     * @param string      $sourceCurrencyCode
     * @param string      $targetCurrencyCode
     * @param string|null $info
     *
     * @return CurrencyConversionException
     */
    public static function exchangeRateNotAvailable(string $sourceCurrencyCode, string $targetCurrencyCode, string $info = null) : self
    {
        $message = sprintf(
            'No exchange rate available to convert %s to %s',
            $sourceCurrencyCode,
            $targetCurrencyCode
        );

        if ($info !== null) {
            $message .= ' (' . $info . ')';
        }

        return new self($message);
    }
}
