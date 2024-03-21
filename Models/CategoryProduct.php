<?php
require_once __DIR__ . '/Product.php';

/**
 * Class representing a dog product.
 */
class DogProduct extends AnimalProduct
{

    /**
     * Constructor for DogProduct class.
     * 
     * @param string $image The URL of the product image.
     * @param string $name The name of the product.
     * @param int $price The price of the product.
     * @param string $breed The breed of the dog.
     * @param string $size The size of the dog product.
     */
    public function __construct(string $image, string $name, int $price, public string $breed, public string $size)
    {
        parent::__construct($image, $name, $price, "Dog");
        $this->breed = $breed;
        $this->size = $size;
    }
}

/**
 * Class representing a cat product.
 */
class CatProduct extends AnimalProduct
{

    /**
     * Constructor for CatProduct class.
     * 
     * @param string $image The URL of the product image.
     * @param string $name The name of the product.
     * @param int $price The price of the product.
     * @param string $breed The breed of the cat.
     * @param string $size The size of the cat product.
     */
    public function __construct(string $image,  string $name,  int $price, public string $breed, public string $size)
    {
        parent::__construct($image, $name, $price, "Cat");
        $this->breed = $breed;
        $this->size = $size;
    }
}
