<?php

namespace APP\Model;

class Product{
    private string $product;
    private string $description;
    private float $value;
    private string $image;

    public function __construct(string $product, string $description, float $value,string $image )
    {
        $this-> product = $product;
        $this-> description = $description;
        $this-> value = $value;
        $this-> image = $image;
    }
    public function __get($attribute)
    {
        return $this->$attribute;
    }
    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }

}