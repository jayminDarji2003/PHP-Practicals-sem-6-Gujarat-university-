<?php
    include("db.php"); 

    $id = $_GET['id'];

    $sql = "SELECT * FROM product WHERE pro_id = $id";
    $qry = mysqli_query($conn, $sql);

    if($qry){
        $row = mysqli_fetch_assoc($qry);
        $name = $row['pro_name'];
        $price = $row['pro_price'];
        $desc = $row['pro_desc'];
        
    } else {
        echo "Product not found";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>
    <h1>
        <center>
            Update product
        </center>
    </h1>

    <form action="updateProduct.php" method="post">
        <center>
            <label for="name">Enter Product name : </label>
            <input type="text" name="id" id="pro_name" value=" <?php echo $id ?>" required>
            <br><br>
            <label for="name">Enter Product name : </label>
            <input type="text" name="name" id="pro_name" value=" <?php echo $name ?>" required>
            <br><br>
            <label for="price">Enter Product price : </label>
            <input type="text" name="price" id="pro_price" value=" <?php echo $price ?>" required>
            <br><br>
            <label for="desc">Enter Product desc : </label>
            <input type="text" name="desc" id="pro_desc" value=" <?php echo $desc ?>" required>
            <br><br>
            <input type="submit" name="submit" value="Update Product">
        </center>
    </form>


</body>
</html>


