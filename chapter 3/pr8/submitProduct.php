<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "db_1";
    $conn = mysqli_connect($host,$user,$password,$db);

    $name = $_GET["pro_name"];
    $price = $_GET["pro_price"];
    $quantity = $_GET["pro_qut"];
    
    $qry = "INSERT INTO `product` (`pro_id`, `product name`, `product price`, `Quantity`) VALUES (NULL, '$name', '$price', '$quantity')";
    $res = mysqli_query($conn,$qry);
    if($res){
        echo "Product submitted successfully.";
    }else{
        echo "error while submitting product";
    }


    echo "<br><br><a href='index.html'>Go to home page</a><br><br>";


    $pro_query = "select * from product";
    $result = mysqli_query($conn,$pro_query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<br>".$row['pro_id']. "  ";
            echo $row["product name"]."  ";
            echo $row["product price"]."  ";
            echo $row["Quantity"]."  ";
            echo "<br>------------------------------------";
        }
    }
?>