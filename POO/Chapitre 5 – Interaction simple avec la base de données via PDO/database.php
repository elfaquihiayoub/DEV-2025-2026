<?php

    class database{
        private $host="localhost";
        private $db_name="crudDb";
        private $username ="root";
        private $password="";
        public $conection;


        public function getConnection(){
            $this->conection=null;

            try{
                $this->conection=new PDO(
                    "mysql:host={$this->host};dbname={$this->db_name};charset=utf8",$this->username,$this->password);
                    $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo "Erreur de connection :".$e->getMessage();

            }
            return $this->conection;
        }

    }