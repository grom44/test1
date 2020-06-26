<?php declare(strict_types=1);

namespace ExampleOneBundle\Entity;

use ExampleOneBundle\Model\Visitor;

class Operator implements Visitor 
{
    protected $name = 'Pani Bożenka z obsługi klienta';

    public function isOperator(): bool
    {
        return true;
    }
}
