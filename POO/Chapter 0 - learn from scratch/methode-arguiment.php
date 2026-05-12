<?php
class product{
    public $name="game";
    public $price=600;
    public function priceAsCurrency($divisor,$currentSymbole="$"){
        $priceAsCurrency=$this->price/ $divisor;
        return $currentSymbole . $priceAsCurrency;
    }
}
$product1=new product();
print $product1->priceAsCurrency(100). PHP_EOL;
$product1->price=1400;
print $product1->priceAsCurrency(50). PHP_EOL;

