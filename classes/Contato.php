<?php

class Contato{
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=crudpoo;charset=utf8", "root", "");
    }

    public function create($nome, $email){
        if($this->existeEmail($email) == false){
            $sql = "INSERT INTO contatos(nome, email) VALUES(?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nome, $email]);
        }
    }

    public function read(){
        $sql = "SELECT * FROM contatos";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll();
        }else{
            return array();
        }
    }

    public function readOne($id){
        $sql = "SELECT * FROM contatos WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        if($stmt->rowCount() > 0){
            return $stmt->fetch();
        }else{
            return array();
        }
    }

    public function update($nome, $email, $id){
        $sql = "UPDATE contatos SET nome = ?, email = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $id]);
    }

    public function delete($id){
        $sql = "DELETE FROM contatos WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    private function existeEmail($email){
        $sql = "SELECT email FROM contatos WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

}