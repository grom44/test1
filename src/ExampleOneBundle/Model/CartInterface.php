<?php

namespace ExampleOneBundle\Model;

interface CartInterface
{
    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item): void;

    /**
     * @return int
     */
    public function getTotal(): int;

}
