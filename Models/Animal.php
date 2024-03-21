<?php

/**
 * Represents a dog.
 */
class Dog
{
    /**
     * Constructor for Dog class.
     *
     * @param string $image The URL of the dog image.
     * @param string $breed The breed of the dog.
     */
    public function __construct(public string  $image, public string  $breed)
    {
        $this->image = $image;
        $this->breed = $breed;
    }
}

/**
 * Represents a cat.
 */
class Cat
{
    /**
     * Constructor for Cat class.
     *
     * @param string $image The URL of the cat image.
     * @param string $breed The breed of the cat.
     */
    public function __construct(public string  $image, public string  $breed)
    {
        $this->image = $image;
        $this->breed = $breed;
    }
}
