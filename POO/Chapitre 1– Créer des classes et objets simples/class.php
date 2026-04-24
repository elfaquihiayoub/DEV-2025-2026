<?php
    class book{
        public $title; //this is a proprety
        public $auteur;
        public $discription;
        public $price;
        public function showBook(){ // this is a methode
            return "the book ".$this->title."<br> that talk about : ".$this->discription
            ."<br> is coast ".$this->price;
        }
    }

    $firstBook = new book(); // this one right here create an object 
    $firstBook->title="PHP Objects, Patterns, and Practice";
    $firstBook->auteur="Matt Zandstra";
    $firstBook->discription="Deep dive into OOP, design patterns, and architecture.Best for leveling up after you're comfortable with classes and objects.";
    $firstBook->price=190;

    echo $firstBook->showBook();
    
    
    
    


?>