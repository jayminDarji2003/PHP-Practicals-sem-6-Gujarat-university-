<?php
    include("db.php"); 

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];

    // echo $id;
    // echo $name;
    // echo $price;
    // echo $desc;


    $sql = "UPDATE `product` SET `pro_id` = '$id', `pro_name` = '$name', `pro_price` = '$price', `pro_desc` = '$desc' WHERE `product`.`pro_id` = $id ";

    $qry = mysqli_query($conn,$sql);

    if($qry){
        echo "Product updated successfully.<br>";
        echo "<a href='products.php'>View Product</a>";
    }
    else{
        echo "Product not updated successfully.<br>";
    }

?>