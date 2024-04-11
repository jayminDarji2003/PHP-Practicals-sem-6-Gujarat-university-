<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "db_1";
    $conn = mysqli_connect($host,$user,$password,$db);

    if(!$conn){
        die("Could not connect to database");
    }

    //echo "<br><b>connected successfully!!</b><br>";
    echo "<br>";

    $id = $_GET["id"];
    // echo $id;
    $sql = "select * from product where pro_id=$id";
    $data = mysqli_query($conn,$sql);
    if(mysqli_num_rows($data) > 0){
        $row = mysqli_fetch_array($data);
        echo "Product name : " . $row["product name"];
        echo "<br>";
        echo "Product price : " . $row["product price"];
        echo "<br>";
        echo "Product Quantity : " . $row["Quantity"];
        echo "<br>";
    }else{
        echo "<br>You don't have any products in database<br>";
        echo "<a href='addProduct.php'>Add Product</a>";
    }
?>