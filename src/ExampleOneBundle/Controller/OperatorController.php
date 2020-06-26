<?php declare(strict_types=1);

namespace ExampleOneBundle\Controller;

use ExampleOneBundle\Model\CartInterface;
use ExampleOneBundle\Model\PriceInterface;
use ExampleOneBundle\Service\Price\Director;
use ExampleOneBundle\Service\Price\ItemBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OperatorController extends Controller
{
    protected $operator;

    /**
     * @Route("/", name="example_one_operator")
     */   
    public function indexAction(CartInterface $cart, PriceInterface $price, Director $director): Response
    {
        $this->initCartItems($cart, $director);

        $oldTotal = $cart->getTotal();
        $newTotal = $price->recalculatePrice($oldTotal);
       
        return $this->render('ExampleOneBundle:Operator:index.html.twig', [
            'oldTotal' => $oldTotal,
            'newTotal' => $newTotal,
        ]);
    }

    private function initCartItems(CartInterface $cart, Director $director): void
    {
        $item = $director->build(new ItemBuilder("TV LCD", 150, 'PLN')); 
        $item2 = $director->build(new ItemBuilder("Samsung S1000", 200, 'PLN')); 

        $cart->addItem($item);
        $cart->addItem($item2);
    }
}
