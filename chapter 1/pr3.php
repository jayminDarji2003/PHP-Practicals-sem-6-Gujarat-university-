<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>you can vote or not</title>
</head>
<body>
    <h1>
        <center>
            Check you can vote or not.
        </center>
    </h1>

    <div>
        <center>
            <form method="post">
                <label for="age">Enter your age : </label>
                <input type="number" name="age" required>
                <br><br>
                <input type="submit" name="submit" value="check your status">
            </form>
        </center>
    </div>
</body>
</html>


<?php
    if(isset($_POST['submit'])){
        $age = $_POST['age'];
        if($age > 18){
            echo "<center><h1>You can vote</h1></center>";
        }else{
            echo "<center><h1>You can not vote</h1></center>";
        }
    }
?>