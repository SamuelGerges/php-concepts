<?php

namespace App\Advanced;

class Product
{

    public string $productName;
    public int $productQuantity;
    public float $productPrice;
    public float $productTax;

    /**
     * @param string $productName
     * @param int $productQuantity
     * @param float $productPrice
     * @param float $productTax
     */
    public function __construct(string $productName, int $productQuantity, float $productPrice, float $productTax)
    {
        $this->productName = $productName;
        $this->productQuantity = $productQuantity;
        $this->productPrice = $productPrice;
        $this->productTax = $productTax;
    }


    public function calculatePriceWithTax()
    {

    }
}