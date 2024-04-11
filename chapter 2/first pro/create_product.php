<?php
    
    include("db.php");

// Collect form data
$pro_id = $_POST['pro_id'];
$pro_name = $_POST['pro_name'];
$pro_price = $_POST['pro_price'];
$qoh = $_POST['qoh'];

// Prepare SQL statement to insert data into product table
$sql = "INSERT INTO products (Pro_id, Pro_name, Pro_price, QOH) 
        VALUES ('$pro_id', '$pro_name', '$pro_price', '$qoh')";

$result = mysqli_query($conn,$sql);
if($result){
    echo "product inserted successfully";
}else{
    echo "product not created successfully";
}
?>
