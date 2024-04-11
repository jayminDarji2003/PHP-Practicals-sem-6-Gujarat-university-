<?php
    $student = array("girls"=>array("Neha"=>99, "Hina"=>76,"Pooja"=>77,"Kiya"=>90,"Jiya"=>89), "boys"=>array("Bhargav"=>99,"Harshal"=>90,"Dev"=>98,"Het"=>11,"Kishan"=>77));


    foreach($student as $key=>$value){
        echo "<b>Printing of : ".$key."</b><br/>";
        foreach($value as $name=>$marks){
            echo $name." : ".$marks."<br/>";
        }
        echo "</br/>";
    }
?>