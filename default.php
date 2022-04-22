<?php
function sum(...$num) {
    $account = 0;
    foreach ($num as $n) {
        $account += $n;
    }
    return $account;
}

echo sum(1, 2, 3, 4);
?>