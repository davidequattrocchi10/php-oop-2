<?php
require_once __DIR__ . '/CategoryProduct.php';

//DOG PRODUCTS

/**
 * Class representing a food product for dogs.
 */
class FoodDog extends DogProduct
{

    /**
     * Constructor for Food class.
     * 
     * @param string $image The URL of the product image.
     * @param string $name The name of the product.
     * @param int $price The price of the product.
     * @param string $breed The breed of the dog.
     * @param string $size The size of the dog product.
     * @param string $brand The brand of the dog food.
     * @param string $flavor The flavor of the dog food.
     */
    public function __construct(string $image, string $name, int $price, string $breed, string $size, public string $brand, public string $flavor)
    {
        parent::__construct($image, $name, $price, "Dog", $breed, $size);
        $this->brand = $brand;
        $this->flavor = $flavor;
    }
}

/**
 * Class representing a toy product for dogs.
 */
class ToyDog extends DogProduct
{

    /**
     * Constructor for Toy class.
     * 
     * @param string $image The URL of the product image.
     * @param string $name The name of the product.
     * @param int $price The price of the product.
     * @param string $breed The breed of the dog.
     * @param string $size The size of the dog product.
     * @param string $material The material of the dog toy.
     * @param bool $interactive Indicates if the toy is interactive or not.
     */
    public function __construct(string $image, string $name, int $price, string $breed, string $size, public string $material, public bool $interactive)
    {
        parent::__construct($image, $name, $price, "Dog", $breed, $size);
        $this->material = $material;
        $this->interactive = $interactive;
    }
}

/**
 * Class representing a kennel product for dogs.
 */
class KennelDog extends DogProduct
{

    /**
     * Constructor for Kennel class.
     * 
     * @param string $image The URL of the product image.
     * @param string $name The name of the product.
     * @param int $price The price of the product.
     * @param string $breed The breed of the dog.
     * @param string $size The size of the dog product.
     * @param string $material The material of the dog kennel.
     * @param bool $weatherproof Indicates if the kennel is weatherproof or not.
     */
    public function __construct(string $image, string $name, int $price, string $breed, string $size, public string $material, public bool $weatherproof)
    {
        parent::__construct($image, $name, $price, "Dog", $breed, $size);
        $this->material = $material;
        $this->weatherproof = $weatherproof;
    }
}

// CAT PRODUCTS

/**
 * Class representing a food product for cats.
 */
class FoodCat extends CatProduct
{

    /**
     * Constructor for Food class.
     * 
     * @param string $image The URL of the product image.
     * @param string $name The name of the product.
     * @param int $price The price of the product.
     * @param string $breed The breed of the cat.
     * @param string $size The size of the cat product.
     * @param string $brand The brand of the cat food.
     * @param string $flavor The flavor of the cat food.
     */
    public function __construct(string $image, string $name, int $price, string $breed, string $size, public string $brand, public string $flavor)
    {
        parent::__construct($image, $name, $price, "Cat", $breed, $size);
        $this->brand = $brand;
        $this->flavor = $flavor;
    }
}

/**
 * Class representing a toy product for cats.
 */
class ToyCat extends CatProduct
{

    /**
     * Constructor for Toy class.
     * 
     * @param string $image The URL of the product image.
     * @param string $name The name of the product.
     * @param int $price The price of the product.
     * @param string $breed The breed of the cat.
     * @param string $size The size of the cat product.
     * @param string $material The material of the cat toy.
     * @param bool $interactive Indicates if the toy is interactive or not.
     */
    public function __construct(string $image, string $name, int $price, string $breed, string $size, public string $material, public bool $interactive)
    {
        parent::__construct($image, $name, $price, "Cat", $breed, $size);
        $this->material = $material;
        $this->interactive = $interactive;
    }
}

/**
 * Class representing a kennel product for cats.
 */
class KennelCat extends CatProduct
{

    /**
     * Constructor for Kennel class.
     * 
     * @param string $image The URL of the product image.
     * @param string $name The name of the product.
     * @param int $price The price of the product.
     * @param string $breed The breed of the cat.
     * @param string $size The size of the cat product.
     * @param string $material The material of the cat kennel.
     * @param bool $weatherproof Indicates if the kennel is weatherproof or not.
     */
    public function __construct(string $image, string $name, int $price, string $breed, string $size, public string $material, public bool $weatherproof)
    {
        parent::__construct($image, $name, $price, "Cat", $breed, $size);
        $this->material = $material;
        $this->weatherproof = $weatherproof;
    }
}
