<?php

class Auth
{
    //before signup check if user already exist in database
    function findUserWithEmail($email, $pdo)
    {
        $query = $pdo->prepare('select * from signuptabelname where Email = :email');
        $query->bindParam(':email', $email);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    //signup
    function signup($name, $email, $password, $pdo)
    {
        //encrypt password in database
        $password = password_hash($password, PASSWORD_DEFAULT);
        //inert data into signup tabel (in database)
        $query = $pdo->prepare('insert into signuptabelname (name,email,password) values(:name,:email,:password)');
        //bind placeholders with parameters
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        //query execute
        $query->execute();
    }

    //update 
    function update($name, $email, $password, $id, $pdo)
    {
        $query = $pdo->prepare("update tabelname set Name = :name, Email = :email, Password = :password where ID = :id");
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);
        $query->bindParam('password', $password);
        $query->bindParam('id', $id);
        $query->execute();
    }

    //delete
    function delete($id, $pdo)
    {
        $query = $pdo->prepare(" DELETE FROM tabelname WHERE ID = :id;");
        $query->bindParam('id', $id);
        $query->execute();
    }

}
;


?>