<?php
    $amount = 250;
    $vat = 0.15 * $amount;
    $total = $amount + $vat;
    echo "Amount:" . $amount . "<br>";
    echo "VAT (15%): ". $vat . "<br>";
    echo "Including VAT: " . $total . "<br>";
?>