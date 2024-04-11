<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "second";

    $conn = mysqli_connect($host, $user, $password, $db);

    if(!$conn){
        echo "not connected to database";
    }
    // echo "connection established";

    $sql = "CREATE TABLE IF NOT EXISTS `second`.`product` (`pro_id` INT(22) NOT NULL AUTO_INCREMENT , `pro_name` VARCHAR(100) NOT NULL , `pro_price` INT(100) NOT NULL , `pro_desc` TEXT NOT NULL , PRIMARY KEY (`pro_id`)) ENGINE = InnoDB";

    $qry = mysqli_query($conn,$sql);

    if(!$qry){
        echo "not create table";
    }

    // echo "<br> table created";
?>