<?php declare(strict_types=1);

namespace ExampleOneBundle\Service;

use ExampleOneBundle\Model\PriceInterface;

class PriceModifier implements PriceInterface
{
    /**
     * @var int
     */
    protected $modifier; 

    /**
     * @var Operator
     */
    protected $operator;

    public function __construct(int $modifier, Operator $operator)
    {
        $this->modifier = $modifier;
        $this->operator = $operator;
    }

    public function recalculatePrice(float $price): float
    {
        if ($this->operator->isOperator() && $this->modifier > 0) {

            $modifier = ($this->modifier / 100);

            $price = $price * $modifier;
        }

        return $price;
    }
}
