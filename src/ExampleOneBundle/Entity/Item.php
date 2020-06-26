<?php declare(strict_types=1);

namespace ExampleOneBundle\Entity;

use ExampleOneBundle\Model\ItemInterface;

class Item implements ItemInterface {

    protected $cena;
    protected $nazwa;

    public function setPrice(PriceVO $cena): void
    {
        $this->cena = $cena;
    }

    public function setName($nazwa): void
    {
        $this->nazwa = $nazwa;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->cena->getAmount();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->nazwa;
    }
}
