<?php declare(strict_types=1);

namespace ExampleOneBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;

class Operator
{
    private $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function isOperator(): bool
    {
        $operator = $this->session->get('customer');
        if (isset($operator) && $operator->isOperator()) {
            return true;
        } 

        return false;
    }
}
