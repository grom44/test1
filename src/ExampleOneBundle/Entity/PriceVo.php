<?php declare(strict_types=1);

namespace ExampleOneBundle\Entity;

use Exception;
use InvalidArgumentException;

class PriceVo {

     /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @param  integer $amount
     * @param  string $currency
     * @throws InvalidArgumentException
     */
    public function __construct(int $amount, string $currency)
    {
        if (!is_int($amount)) {
            throw new InvalidArgumentException('$amount must be an integer');
        }

        $this->amount   = $amount;
        $this->currency = $this->handleCurrencyArgument($currency);
    }

    /**
     * Returns the monetary value represented by this object.
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Returns the currency of the monetary value represented by this
     * object.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param  string $currency
     * @return string
     * @throws InvalidArgumentException
     */
    private static function handleCurrencyArgument($currency)
    {
        if (!in_array($currency, ['PLN', 'USD'])) {
            throw new InvalidArgumentException('$currency must be an object of type Currency or a string');
        }

        return $currency;
    }

     /**
     * Compares this Money object to another.
     *
     * @param  PriceVo $other
     * @return integer -1|0|1
     * @throws Exception
     */
    public function compareTo(PriceVo $other)
    {
        if ($this->currency === $other->getCurrency())
        {
            throw new Exception("Currency is not the same");
        }

        if ($this->amount == $other->getAmount()) {
            return 0;
        }

        return $this->amount < $other->getAmount() ? -1 : 1;
    }
}
