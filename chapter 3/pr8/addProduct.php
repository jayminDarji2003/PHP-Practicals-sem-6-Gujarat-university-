<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
</head>
<body>
    <h1>
        <center>
            Add Product
        </center>
    </h1>

    <div>
        <center>
            <form action="submitProduct.php">
            <label for="pro_name">Product Name</label>
            <input type="text" name="pro_name" id="pro_name" required>
            <br><br>
            <label for="pro_price">Product Price</label>
            <input type="number" name="pro_price" id="pro_price" required>
            <br><br>
            <label for="pro_qut">Product Quantity</label>
            <input type="number" name="pro_qut" id="pro_qut" required>
            <br><br>
            <input type="submit">
            </form>
        </center>
    </div>
</body>
</html>