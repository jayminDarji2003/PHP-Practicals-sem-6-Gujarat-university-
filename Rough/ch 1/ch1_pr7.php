<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter string 1 : <input type="text" name="str1">
        <br><br>
        Enter string 2 : <input type="text" name="str2">
        <br><br>
        <input type="submit" name="submit" value="concate">
    </form>
</body>
</html>

<?php
    $str1 = $_POST['str1'];
    $str2 = $_POST['str2'];
    echo $str1."<br>";
    echo $str2."<br>";
?>