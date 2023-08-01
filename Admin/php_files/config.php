<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$db_name = "project";

$conn = new mysqli($servername, $username, $password,$db_name);

if(isset($_POST['add_item'])){
    $product_name = $_POST['item_name'];
    $product_price =  $_POST['item_price'];
    $product_description = $_POST['description'];
    $product_image = $_FILES['image']['name'];
    
    $product_image_tmp_name = $_FILES['image']['tmp_name'];
    $product_image_folder = 'images/'.$product_image;

    if(empty($product_name) || empty($product_price) || empty($product_image)){
        $message[] = 'please fill out all';
    }
    else{
        $insert = "INSERT INTO products(name1,price,description1,image1) VALUES('$product_name','$product_price','$product_description','$product_image')" ;
        $upload = mysqli_query($conn,$insert);
        if($upload){
            move_uploaded_file($product_image_tmp_name,$product_image_folder);
            $message[] = 'new product added successfully';
        }
        else{
            $message[] = 'new product not added successfully';
        }
    }
    header("Location: http://localhost/web_final/web_files/Admin/html/admin_page1.html");
}

?>