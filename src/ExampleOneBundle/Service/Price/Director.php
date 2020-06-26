<?php declare(strict_types=1);

namespace ExampleOneBundle\Service\Price;

use ExampleOneBundle\Entity\Item;

class Director
{
    public function build(ItemBuilder $builder): Item
    {
        $builder->createItem();
        $builder->addName();
        $builder->addPrice();
       
        return $builder->getItem();
    }
}