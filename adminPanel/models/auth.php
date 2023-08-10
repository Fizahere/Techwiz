<?php

class Auth
{
//function for insert category;
    function insertCategory($category_name, $category_image, $pdo)
    {
        $query = $pdo->prepare('INSERT into categories(categoryName,categoryImage) values(:c_name,:c_image)');
        $query -> bindParam('c_name', $category_name);
        $query -> bindParam('c_image', $category_image);
        $query -> execute();
    }

//function for update category on image selection;    
    function updateCategory( $category_id,$category_name, $category_image, $pdo)
    {    
        $query= $pdo -> prepare("update categories set categoryName = :category_name,categoryImage=:category_image where categoryID = :category_id");
        $query -> bindParam('category_id', $category_id);
        $query -> bindParam('category_name', $category_name);
        $query -> bindParam('category_image', $category_image);
        $query -> execute();
    }

//function for update category without image selection;    
    function updateCategoryInelse( $category_id,$category_name,  $pdo)
    {    
        $query= $pdo -> prepare("update categories set categoryName = :category_name where categoryID = :category_id");
        $query -> bindParam('category_id', $category_id);
        $query -> bindParam('category_name', $category_name);
        $query -> execute();
    }
//function for delete category;    
    function deleteCategory( $category_delete_id, $pdo)
    {    
      $query = $pdo->prepare(" DELETE FROM categories WHERE categoryID = :id");
      $query->bindParam('id', $category_delete_id);
      $query->execute();
    }
    function findUserWithEmailParent($email, $pdo)
    {
        $query = $pdo->prepare('select * from parent_login where parentEmail = :email');
        $query->bindParam(':email', $email);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function findUserWithEmailHospital($email, $pdo)
    {
        $query = $pdo->prepare('select * from hospital_login where hospitalEmail = :email');
        $query->bindParam(':email', $email);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function findUserWithEmailAdmin($email, $pdo)
    {
        $query = $pdo->prepare('select * from admins where adminEmail = :email');
        $query->bindParam(':email', $email);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function register($name, $email, $password, $pdo)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = $pdo->prepare('insert into parent_login (parentName, parentEmail, parentPassword) values(:name, :email, :password)');
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->execute();
    }

    function registerHospital($name, $email, $password, $location, $pdo)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = $pdo->prepare('insert into hospital_login (hospitalName, hospitalEmail, hospitalPassword, hospitalLocation) values(:name, :email, :password, :location)');
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->bindParam(':location', $location);

        $query->execute();
    }

    function childFormSubmit($childName, $Gender, $dateOfBirth, $hospital, $vaccine, $appointment, $parentID, $phone, $pdo)
    {
        $query = $pdo->prepare('insert into children_details 
    (childName,childGender,childAge,hospitalID,vaccineID,vaccinationDate,parentID,contact)
     values (:name,:gender,:age,:hospital,:vaccine,:date,:parentID,:contact)
    ');
        $query->bindParam(':name', $childName);
        $query->bindParam(':gender', $Gender);
        $query->bindParam(':age', $dateOfBirth);
        $query->bindParam(':hospital', $hospital);
        $query->bindParam(':vaccine', $vaccine);
        $query->bindParam(':date', $appointment);
        $query->bindParam(':parentID', $parentID);
        $query->bindParam(':contact', $phone);
        $query->execute();
    }

    function abc($admin_ID,$admin_name,$admin_email,$admin_password,$pdo){
          $query= $pdo -> prepare("update admins set adminName = :name,adminEmail = :email, adminPassword = :password where adminID = :_id");
            $query -> bindParam('name', $admin_name);
            $query -> bindParam('email', $admin_email);
            $query -> bindParam('password', $admin_password);
            $query -> bindParam('_id', $admin_ID);
            $query -> execute();
    }
}

?>