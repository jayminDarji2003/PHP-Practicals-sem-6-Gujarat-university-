<?php
    $arr = array(1,7,5,9,0,1,2,5,4,2,6,3,7,3,6,4);
    $val = 6;
    $count = 0;

    for($i=0; $i<count($arr); $i++){
        echo $arr[$i]." ";
    }
    
    for($i=0; $i<count($arr); $i++){
        if($arr[$i] == $val){
            $count++;
        }
    }


    

    echo "<br> Count : ".$count;

?>