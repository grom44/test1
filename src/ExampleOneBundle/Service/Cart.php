<?php declare(strict_types=1);

namespace ExampleOneBundle\Service;

use ExampleOneBundle\Model\CartInterface;
use ExampleOneBundle\Model\ItemInterface;

class Cart implements CartInterface
{
    /**
     * @var ItemInterface[]
     */
    protected $items = [];

    /**
     * @var int
     */
    protected $total = 0;

    /**
     * @param ItemInterface $item
     */
    public function addItem(ItemInterface $item): void
    {
        $this->items[] = $item;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        $this->calculateTotal();
        return $this->total;
    }

    private function calculateTotal(): void
    {
        foreach ($this->items as $item) {
            $this->total += $item->getPrice();
        }
    }

    /**
     * @param int $total
     */
    private function setTotal(int $total): void
    {
        $this->total = $total;
    }
}
