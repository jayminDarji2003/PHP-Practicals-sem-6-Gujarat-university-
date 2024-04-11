<?php
    $sub = array("C++","java","Python","Javascript","php");

    // displaying using for loop
    echo "<h3>Displaying content using for loop</h3>";
    for($i=0; $i<count($sub); $i++){
        echo $sub[$i]. "<br/>";
    }

    // displaying using foreach loop
    echo "<h3>Displaying content using forech loop</h3>";
    foreach($sub as $value){
        echo $value. "<br/>";
    }
?>