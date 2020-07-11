<?php

Session_start();

class database {

    public function connect(){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=lab-projekti", 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOException $e){
            $e->getMessage();
        }   
    }


    public function checkIfUser($username){
        $sql = $this->connect()->prepare("SELECT username FROM users WHERE username = :username");
        $sql->bindParam(":username",$username);
        $sql->execute();
        

        if($sql->rowCount() === 1){
            return true;
        }else{
            return false;
        }
    }


    public function insertUser($name,$surname,$email,$username,$password){

        $sql = $this->connect()->prepare("INSERT INTO users (name,surname,email,username,password) VALUES (:name, :surname, :email, :username, :password)");
        
        $sql->bindParam(":name",$name);
        $sql->bindParam(":surname",$surname);
        $sql->bindParam(":email",$email);
        $sql->bindParam(":username",$username);
        $sql->bindParam(":password",$password);

        if(!$this->checkIfUser($username)){
           $sql->execute();
            header("location:../SignUp.php?AccountCreated"); 
        }else{
            header("location:../SignUp.php?UsernameIsTaken");
        }
    }


    public function getUser($username,$password){

        if($this->checkIfUser($username)){
            $query = $this->connect()->prepare("SELECT * FROM users WHERE username = :username;");
            $query->bindParam(":username",$username);
            $query->execute();
            $row = $query->fetch();
            

            if(password_verify("$password", $row["password"])){
                return $row;
            }
            else{
                header("Location:../LogIn.php?IncorrectPassword");
            }

    }else{
        return null;
    }
}





}