<?php
    include("db.php"); 

    $id = $_GET['id'];

    $sql = "DELETE FROM `product` WHERE `product`.`pro_id` = $id";
    $qry = mysqli_query($conn,$sql);

    if($qry){
        echo "Product Deleted successfully <br>";
        echo "<a href='products.php'>View Products</a>";
    }
    else{
        echo "Product not Deleted";
    }
?>
