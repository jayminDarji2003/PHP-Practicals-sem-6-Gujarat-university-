<?php
    $data = $_GET['checkselect'];
    echo count($data);

    // $str = explode(" ",$r);
    // echo "<br>";
    // echo count($str);
    // echo "<br>";
    for($i=0; $i<count($data); $i++){
        echo $data[$i]."<br>";
    }

    // if($r == ""){
    //     echo "You have not selected any items.";
    // }
    // else{
    //     echo "You have selected items. <span style="color:red">".$r"</span>";
    // }
?>