<?php

namespace ExampleOneBundle\Model;

interface PriceInterface
{
    /**
     * @return string
     */
    public function recalculatePrice(float $price): float;
}
