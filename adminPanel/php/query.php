<?php
session_start();
include_once('models/config.php');
include_once("models/auth.php");
$authModel  =  new Auth();
?>
<!-----------------------------------------------------------------------------
|   php tag start for queries to add , update , delete                        |
|   categories  by admin                                                      |
|   [start]                                                                   |  
------------------------------------------------------------------------------>
<?php
//----------------------------------------------------------------------------|                 
// query for insert category                                                  |
//               [start]                                                      |     
// ---------------------------------------------------------------------------|
if(isset($_POST['insertCategory'])){
    $category_name = $_POST['insert-category-name'];
    $category_image = $_FILES['insert-category-image']['name'];
    $category_image_size = $_FILES['insert-category-image']['size'];
    $category_image_tmp_name = $_FILES['insert-category-image']['tmp_name'];
    $category_image_ext = pathinfo($category_image, PATHINFO_EXTENSION);
    $destination = "adminImages/".$category_image;
    if($category_image_size <= 48000000){
    if($category_image_ext == 'jpg' || $category_image_ext == "png" || $category_image_ext== 'jpeg' || $category_image_ext== 'webp'){
        if(move_uploaded_file($category_image_tmp_name,$destination)){
           
            $authModel->insertCategory($category_name, $category_image, $pdo);
            echo "<script>alert('category added succesfully')
            location.assign('category.php')
            </script>";
            exit;
        }
        
    }else{
        echo "<script>alert('not valid extension')
        location.assign('category.php')
        </script>";
    }
    
}else{
    echo "<script>alert('file size is greater')
    </script>";
}



}
// ---------------------------------------------------------------------------|
// query for insert category                                                  |
//               [end]                                                        |     
// ---------------------------------------------------------------------------|

// ---------------------------------------------------------------------------|
// query for update category                                                  |
//               [start]                                                      |     
// ---------------------------------------------------------------------------|
if(isset($_POST['update_category_info'])){
    $category_id= $_POST['update-category-id'];
    $category_name = $_POST['update-category-name'];
    $category_image = $_FILES['update-category-image']['name'];
    $category_image_size = $_FILES['update-category-image']['size'];
    $category_image_tmp_name = $_FILES['update-category-image']['tmp_name'];
    $category_image_ext = pathinfo($category_image, PATHINFO_EXTENSION);
    $destinationcategory = "adminImages/".$category_image;
    if($category_image_size <= 48000000){
        if($category_image_ext === 'jpg' || $category_image_ext === "png" || $category_image_ext === 'jpeg'|| $category_image_ext === "webp"  || $category_image_ext === "" || $category_image === ""){
            if(move_uploaded_file($category_image_tmp_name,$destinationcategory)){
                $authModel->updateCategory( $category_id,$category_name, $category_image, $pdo);                
                echo "<script>alert('Updated succesfully')
                location.assign('category.php')</script>";
                
            }
            
        }else{
            echo "<script>alert('Invalid extension of Image')
            location.assign('category.php')
            </script>";
        }
        
    }else{
        echo "<script>alert('file size is greater')
        </script>";
    }if($category_image_size == 0){
        if($category_image_ext === '' || $category_image === ""   ){
            
            $authModel->updateCategoryInelse( $category_id,$category_name, $pdo);                
            
            echo "<script>alert('Updated succesfully')
            location.assign('category.php')
            </script>";
            
            
       }
       
       }
       
   
       
    }
// ---------------------------------------------------------------------------|
// query for update category                                                  |
//               [end]                                                        |     
// ---------------------------------------------------------------------------|
    
// ---------------------------------------------------------------------------|
// query for delete category                                                  |
//               [start]                                                      |     
// ---------------------------------------------------------------------------|
    if (isset($_POST['delete_category_info'])) {
        $category_delete_id = $_POST['delete_category_id'];
        $authModel->deleteCategory( $category_delete_id, $pdo);                
    echo
       "<script>
       alert('Category deleted')
       location.assign('category.php')
       </script>";
   
}
// ---------------------------------------------------------------------------|
// query for delete category                                                  |
//               [end]                                                        |     
// ---------------------------------------------------------------------------|

?>
<!------------------------------------------------------------------------------
|   php tag end for queries to add , update , delete                           |
|   categories  by admin                                                       |
|   [end]                                                                      |  
------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------
|   php tag start for queries to add , update , delete                         |
|   products  by admin  side                                                   |
|   [start]                                                                    |  
------------------------------------------------------------------------------->
<?php
// ---------------------------------------------------------------------------|
// query for insert products                                                  |
//               [start]                                                      |     
// ---------------------------------------------------------------------------|
if(isset($_POST['insertProduct'])){
    $product_name = $_POST['insert-product-name'];
    $product_description = $_POST['insert-product-description'];
    $product_price = $_POST['insert-product-price'];
    $product_stock= $_POST['insert-product-stock'];
    $product_category= $_POST['insert-product-category'];
    $product_image = $_FILES['insert-product-image']['name'];
    $product_image_size = $_FILES['insert-product-image']['size'];
    $product_image_tmp_name = $_FILES['insert-product-image']['tmp_name'];
    $product_image_ext = pathinfo($product_image, PATHINFO_EXTENSION);
    $destination = "productImages/".$product_image;
    if($product_image_size <= 48000000){
    if($product_image_ext == 'jpg' || $product_image_ext == "png" || $product_image_ext== 'jpeg' || $product_image_ext== 'webp'){
        if(move_uploaded_file($product_image_tmp_name,$destination)){
           
            $authModel->insertProducts($product_name, $product_description,$product_price,$product_stock, $product_category, $product_image, $pdo);
            echo "<script>alert('product added succesfully')
            location.assign('products.php')
            </script>";
            exit;
        }
        
    }else{
        echo "<script>alert('not valid extension')
        location.assign('products.php')
        </script>";
    }
    
}else{
    echo "<script>alert('file size is greater')
    </script>";
}



}
// ---------------------------------------------------------------------------|
// query for insert products                                                  |
//               [end]                                                        |     
// ---------------------------------------------------------------------------|

// ---------------------------------------------------------------------------|
// query for update products                                                  |
//               [start]                                                      |     
// ---------------------------------------------------------------------------|
if(isset($_POST['update_product_info'])){
    $product_id= $_POST['update-product-id'];
    $product_name = $_POST['update-product-name'];
    $product_description = $_POST['update-product-description'];
    $product_price = $_POST['update-product-price'];
    $product_stock = $_POST['update-product-stock'];
    $product_category = $_POST['update-product-category'];
    $product_image = $_FILES['update-product-image']['name'];
    $product_image_size = $_FILES['update-product-image']['size'];
    $product_image_tmp_name = $_FILES['update-product-image']['tmp_name'];
    $product_image_ext = pathinfo($product_image, PATHINFO_EXTENSION);
    $destinationproduct = "ProductImages/".$product_image;
    if($product_image_size <= 48000000){
        if($product_image_ext === 'jpg' || $product_image_ext === "png" || $product_image_ext === 'jpeg'|| $product_image_ext === "webp"  || $product_image_ext === "" || $product_image === ""){
            if(move_uploaded_file($product_image_tmp_name,$destinationproduct)){
    $product_price = $_POST['update-product-price'];
                $authModel->updateProducts( $product_id,$product_name,$product_description,$product_price, $product_image,$product_stock,$product_category, $pdo);                
                echo "<script>alert('Updated succesfully')
                location.assign('products.php')</script>";
                
            }
            
        }else{
            echo "<script>alert('Invalid extension of Image')
            location.assign('products.php')
            </script>";
        }
        
    }else{
        echo "<script>alert('file size is greater')
        </script>";
    }if($product_image_size == 0){
        if($product_image_ext === '' || $product_image === ""   ){
            
            $authModel->updateProductsInelse($product_id,$product_name,$product_description,$product_price,$product_stock,$product_category, $pdo);                
            
            echo "<script>alert('Updated text succesfully')
            location.assign('products.php')
            </script>";
            
            
       }
       
       }
       
   
       
    }
// ---------------------------------------------------------------------------|
// query for update products                                                  |
//               [end]                                                        |     
// ---------------------------------------------------------------------------|
// ---------------------------------------------------------------------------|
// query for delete products                                                  |
//               [start]                                                      |     
// ---------------------------------------------------------------------------|
if (isset($_POST['delete_product_info'])) {
    $product_delete_id = $_POST['delete_product_id'];
    $authModel->deleteProducts( $product_delete_id, $pdo);                
echo
   "<script>
   alert('product deleted')
   location.assign('products.php')
   </script>";

}
// ---------------------------------------------------------------------------|
// query for delete products                                                  |
//               [end]                                                        |     
// ---------------------------------------------------------------------------|
?>
<!------------------------------------------------------------------------------
|   php tag end for queries to add , update , delete                           |
|   products  by admin    side                                                 |
|   [end]                                                                      |  
------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------
|   php tag start for queries to approve and  reject user order                |
|   [start]                                                                    |  
------------------------------------------------------------------------------->
<?php
if (isset($_POST['order-approve-btn'])) {
    $id = $_POST['notification-order-id'];
    $query = $pdo->prepare("UPDATE orders SET orderStatus = 'approved' WHERE orderID = :_id");
    $query->bindParam('_id', $id);
    $query->execute();
}
if (isset($_POST['order-reject-btn'])) {
    $id = $_POST['notification-order-id'];
    $query = $pdo->prepare("UPDATE orders SET orderStatus = 'rejected' WHERE orderID = :_id");
    $query->bindParam('_id', $id);
    $query->execute();
}
?>

<!------------------------------------------------------------------------------
|   php tag end for queries to approve and  reject user order                |
|   [end]                                                                    |  
------------------------------------------------------------------------------->

<?php

if (isset($_POST['update_admin_info'])) {
    $admin_ID = $_POST['model-admin-ID'];
    $admin_name = $_POST['model-admin-name'];
    $admin_email= $_POST['modal-admin-email'];
    $admin_password= $_POST['modal-admin-password'];
            // $query= $pdo -> prepare("update admins set adminName = :name,adminEmail = :email, adminPassword = :password where adminID = :_id");
            // $query -> bindParam('name', $admin_name);
            // $query -> bindParam('email', $admin_email);
            // $query -> bindParam('password', $admin_password);
            // $query -> bindParam('_id', $admin_ID);
            // $query -> execute();

            $authModel->abc($admin_ID,$admin_name,$admin_email,$admin_password,$pdo);
            echo "<script>
        location.assign('adminProfile.php')
        </script>";
        };
     


?>
<!-----------------------------------------------------------------------------------------------
|   php tag end for queries to update  admin  Information                                       |
|   [end]                                                                                       |  
------------------------------------------------------------------------------------------------->





|  











   





 

