<?php
    include("db.php");

    $sql = "CREATE TABLE IF NOT EXISTS products (
        Pro_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Pro_name VARCHAR(255) NOT NULL,
        Pro_price DECIMAL(10, 2) NOT NULL,
        QOH INT(6) UNSIGNED
    )";

    $result = mysqli_query($conn,$sql);

    if(!$result){
        echo "Could not create table";
    }
    echo "table created successfully";



    $sql2 = "drop database exam";
    $res = mysqli_query($conn,$sql);
?>  