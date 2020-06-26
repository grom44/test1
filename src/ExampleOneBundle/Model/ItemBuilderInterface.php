<?php

namespace ExampleOneBundle\Model;

use ExampleOneBundle\Entity\PriceVo;

interface ItemBuilderInterface
{
    /**
     * @param ItemInterface $item
     */
    public function addName(): void;

    /**
     * @param PriceVo int
     */
    public function addPrice(): void;

}
