<?php
    $arr1 = array(9,8,7,6,5,4,3,2,1);
    $arr2 = array(1,2,3,4,5,6,7,8,9);


    echo "Original Array <br>";
    foreach($arr1 as $value){
        echo $value." ";
    }
    
    sort($arr1);

    echo "<br>Ascending order sort <br/>";
    foreach($arr1 as $value){
        echo $value." ";
    }

    echo "<br/><br/>";
    echo "Original Array <br/>";
    foreach($arr2 as $value){
        echo $value." ";
    }

    rsort($arr2);

    echo "<br>Descending order sort <br/>";
    foreach($arr2 as $value){
        echo $value." ";
    }
?>