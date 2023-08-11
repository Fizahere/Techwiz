<?php

class Auth
{
    //before signup check if user already exist in database
    function findUserWithEmail($email, $pdo)
    {
        $query = $pdo->prepare('select * from users where userEmail = :email');
        $query->bindParam(':email', $email);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    //signup
    function signup($username,$fullname, $email, $password, $pdo)
    {
        //encrypt password in database
        $password = password_hash($password, PASSWORD_DEFAULT);
        //inert data into signup tabel (in database)
        $query = $pdo->prepare('insert into users (firstName,lastName,userEmail,userPassword) values(:username,:fullname,:email,:password)');
        //bind placeholders with parameters
        $query->bindParam(':username', $username);
        $query->bindParam(':fullname', $fullname);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        //query execute
        $query->execute();
    }

    //update 
    function update($userName,$fullName,$emailAddress,$userID,$pdo)
    {
        $query = $pdo->prepare("update users set firstName = :name, lastName = :fullname, userEmail = :email where UserID = :id");
        $query->bindParam('name', $userName);
        $query->bindParam('fullname', $fullName);
        $query->bindParam('email', $emailAddress);
        $query->bindParam('id', $userID);
        $query->execute();
    }

    function submitReview($review,$productID,$userID,$pdo){
        $query = $pdo->prepare('insert into productreviews(reviews,productID,userID) values(:review,:p_ID,:u_ID)');
        $query->bindParam('review',$review);
        $query->bindParam('p_ID',$productID);
        $query->bindParam('u_ID',$userID);
        $query->execute();
    }
}
;
