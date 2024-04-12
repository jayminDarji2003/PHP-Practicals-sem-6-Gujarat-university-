<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ch1 pr2</title>
</head>
<body>
    <form method="post">
        Enter your age : <input type="number" name="age">
        <br><br>
        <input type="submit" name="submit" value="check vot or not">
    </form>
</body>
</html>

<?php
    $age = $_POST["age"];
    // echo $age;
    if($age <= 18){
        echo "You can not vote";
    }else{
        echo "you can vote";
    }

?>