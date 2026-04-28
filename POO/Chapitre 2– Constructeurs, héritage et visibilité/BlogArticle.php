<?php
require "article.php";
class BlogArticle extends article{
    private $auteur;
    public function __construct($title, $contenu,$auteur){
        parent::__construct($title,$contenu);
        $this->auteur=$auteur;
    }
    public function afficher (){
        return parent::affichage()."- auteur :". $this->auteur;
    }
   
    }
   





?>