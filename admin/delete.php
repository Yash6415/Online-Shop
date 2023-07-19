<?php
include 'db.php';

if(isset($_GET['product_id'])){
    $id = $_GET['product_id'];

    $sql = "delete from `products` where product_id= $id";
    $result= mysqli_query($con,$sql);
    if($result){
        header("location:productlist.php");
    }
    else{
        die(mysqli_error($con));
    }
}
?>
