<?php declare(strict_types=1);

namespace ExampleOneBundle\Service\Price;

use ExampleOneBundle\Model\ItemBuilderInterface;
use ExampleOneBundle\Entity\Item;
use ExampleOneBundle\Entity\PriceVo;

class ItemBuilder implements ItemBuilderInterface
{
    private Item $item;
    private $name;
    private $price;
    private $currency;

    public function __construct (string $name, int $price, string $currency)
    {   
        $this->name = $name;
        $this->price = $price;
        $this->currency = $currency;
    }

    public function addName(): void
    {
        $this->item->setName($this->name);
       
    }

    public function addPrice(): void
    {
        $this->item->setPrice(new PriceVo($this->price, $this->currency));
    }

    public function createItem(): void
    {
        $this->item = new Item();
    }

    public function getItem(): Item
    {
        return $this->item;
    }
}
