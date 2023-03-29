<?php

namespace App\Advanced;

class ShoppingOrder
{

    public int $orderNumber;
    public Product $product;


    /**
     * to implement Dependence Injection through a constructor,  a setter method or a property

     */



    /**
     * @param int $orderNumber
     */
    public function __construct(int $orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }



    public function calculateTotalPayment()
    {
        $this->product->calculatePriceWithTax();
    }

}