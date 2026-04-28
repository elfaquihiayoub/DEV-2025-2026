<?php
class Articles {
    private $title;
    private $contenu;
    public function setTitle($title){
        if(!empty($title) && strlen($title)>3){
            $this->title=$title;
        }
        else{
            echo " title invalid";
        }
    }
    public function getTitle($title){
      return $this->title;
    }
    public function setContenu ($contenu){
        $this->contenu=htmlspecialchars($contenu);
    }
    public function getContenu($contenu){
      return $this->contenu;
    }
    public function show(){
        return "TITLE : {$this->title} - Contenu {$this->contenu} " ;
    }
    


}





?>