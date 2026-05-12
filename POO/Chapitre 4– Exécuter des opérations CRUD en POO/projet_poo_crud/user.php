<?php

class user{
    private $connection;
    private $table='users';
    public $id;
    public $name;
    public $email;

    public function __construct($database)

    {
        $this->connection=$database; // important part for connection
    }
    
    public function create(){
        $sql="INSERT INTO {$this->table} (name,email) VALUES (:name,:email)";
        $stmt=$this->connection->prepare($sql);
        return $stmt->execute(
            ["name" =>$this->name,
            "email" =>$this->email]);
    }
    public function read(){
        $sql="SELECT * FROM {$this->table}";
        $stmt=$this->connection->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
    public function update(){
        $sql="UPDATE {$this->table} SET name-:name , email=:email WHERE id=:id";
        $stmt=$this->connection->prepare($sql);
            return $stmt->execute(
            ["name" =>$this->name,
            "email" =>$this->email,
            "id" => $this->id]);
    }
    public function delete(){
        $sql="DELETE FROM {$this->table} WHERE id=:id";
        $stmt=$this->connection->prepare($sql);
        return $stmt->execute(["id"=>$this->id]);
        
    }
    

}




?>