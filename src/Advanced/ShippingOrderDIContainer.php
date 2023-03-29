<?php

namespace App\Advanced;

class ShippingOrderDIContainer
{

    public array $parameters;

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    public function createProduct()
    {
        return new Product(
            $this->parameters['name'],
            $this->parameters['quantity'],
            $this->parameters['price'],
            $this->parameters['tax'],
        );
    }

    public function createShippingOrder()
    {
        $order = new ShoppingOrder($this->parameters['orderNumber']);
        $order->setProduct($this->createProduct());
        return $order;
    }
}