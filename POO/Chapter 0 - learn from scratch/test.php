<?php

class product{
    public $name="soap";
    public $price=10;
}

$product1= new product();
echo $product1->price ."\n";
$product1->price=16;
echo $product1->price;

