<?php
$arr = array(
    array(1, 2, 3, "A"),
    array(1, 2, "B", "C"),
    array(1, "D", "E", "F")
);


for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) {
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}

for ($i = 0; $i < 3; $i++) {
    for ($j = 3 - $i; $j < 4; $j++) {
        echo $arr[$i][$j] . " ";
    }
    echo "<br>";
}
?>
