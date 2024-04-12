<?php
    $arr = array("boys"=>array("jaymin","deep","jeel"), "girls"=>array("neha","piya","payal"));

    foreach($arr as $key=>$value){
        echo "Printing data of : ".$key."<br/><br/>";
        foreach($value as $val){
            echo $val."<br/>";
        }

        echo "<br/>";
    }

?>