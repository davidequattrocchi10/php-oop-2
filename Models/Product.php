<?php

/**
 * Class representing an animal product.
 */
class AnimalProduct
{
    /**
     * Constructor for AnimalProduct class.
     * 
     * @param string $image The URL of the product image.
     * @param string $name The name of the product.
     * @param int $price The price of the product.
     * @param string $category The category of the product.
     */
    public function __construct(public string $image, public string $name, public int $price, public string $category)
    {
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }
}
