<?php

class article{
    protected $title;
    protected $contenu;
    public function __construct($title,$contenu){
        $this->title=$title;
        $this->contenu=$contenu;
    }
    public function affichage(){
        return "TITLE :".$this->title. "- contenu :". $this->contenu;
    }
   
}




?>