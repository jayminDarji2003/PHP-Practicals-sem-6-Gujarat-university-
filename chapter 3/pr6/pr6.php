<?php
    $password = $_GET['q'];
    $passLen = strlen($password);
    
    if($passLen == 0 || $passLen <= 5){
        echo "Invalid password, password must be at least 6 characters";
    }else{
        echo "<br>Password is : ".$password;
    }
?>