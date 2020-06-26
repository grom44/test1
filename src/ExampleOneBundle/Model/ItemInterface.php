<?php

namespace ExampleOneBundle\Model;

interface ItemInterface
{
    /**
     * @return int
     */
    public function getPrice(): int;

    /**
     * @return string
     */
    public function getName(): string;
}
