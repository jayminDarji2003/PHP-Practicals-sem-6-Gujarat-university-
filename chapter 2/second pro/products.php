<?php
    include("db.php");
    // include("delete.php");

    $sql = "SELECT * FROM `product`";
    $qry = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($qry);

    echo "  <button>
                <a href='home.html'>Go to home</a>
            </button>";

    echo "<h1>
            <center>
                Product List
            </center>
        </h1>";

    echo "<center>";

    if($num > 0){

        while($row = mysqli_fetch_assoc($qry)){
            echo "<b>";
            echo "Product ID = ".$row['pro_id']."<br/>";
            echo "Product Name = ".$row['pro_name']."<br/>";
            echo "Product Price = ".$row['pro_price']."<br/>";
            echo "Product Description = ".$row['pro_desc']."<br/>";
            echo "</b>";
            echo "<br>";

            echo "
            <button>
                <a href=update.php?id=$row[pro_id]>Update</a>
            </button>";

            echo "
                <button>
                    <a href=delete.php?id=$row[pro_id]>Delete</a>
                </button>";

            echo "<br/>";
            echo "--------------------------------------------------------------------------------------<br/>";
           
        }
    }

    echo "</center>";
?>
