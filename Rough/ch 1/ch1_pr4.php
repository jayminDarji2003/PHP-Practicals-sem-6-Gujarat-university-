<?php
    $sub = array("C++","java","Python","Javascript","php");

    echo "Displaying using for loop <br>";
    for($i=0; $i<count($sub); $i++){
        echo $sub[$i]."<br>";
    }

    echo "<br>";
    echo "Displaying using foreach loop <br>";
    foreach($sub as $value){
        echo $value."<br>";
    }
?>