<?php
    $str1 = $_POST['str1'];
    $str2 = $_POST['str2'];
    concate($str1,$str2);
    echo "<br>";
    add();

    function concate($str1,$str2){
        echo "Displaying from parameterized function : ";
        echo "<b>".$str1.$str2."</b>";
    }

    function add(){
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];
        echo "Displaying from non-parameterized function : ";
        echo "<b>".$str1.$str2."</b>";
    }

?>