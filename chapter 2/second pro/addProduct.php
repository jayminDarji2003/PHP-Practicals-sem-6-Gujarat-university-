<?php
    include("db.php");
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];


    $sql = "INSERT INTO `product` (`pro_id`, `pro_name`, `pro_price`, `pro_desc`) VALUES (NULL, '$name', '$price', '$desc')";

    $qry = mysqli_query($conn, $sql);

    if($qry){
        echo "Product inserted successfully. <br/>";
        echo "<a href='products.php'>View data</a>";
    }else{
        echo "Product not inserted successfully. <br/>";
    }
?>