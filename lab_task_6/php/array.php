<?php
    $numbers = array(1, 2, 5, 7, 6);
    $search = 7;
    $found = false;
    foreach($numbers as $num){
        if($num == $search){
            $found = true;
            break;
        }
    }
    if($found){
        echo "Number " . $search . " found in the array.";
    } else {
        echo "Number " . $search . " not found in the array.";
    }
?>