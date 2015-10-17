<?php
/**
 * Created by PhpStorm.
 * User: evgen
 * Date: 16.10.15
 * Time: 14:32
 */

function luk($n)
{
    if ($n == 1) {
        return 2;
    }
    elseif ($n == 2) {
        return 1;
    }
    else {
        return luk($n-1) + luk($n-2);
    }
}

echo "Ряд Люка:\n";
echo nl2br("\n");
echo nl2br("\n");
for ($n = 1; $n <= 19; $n++) {
    echo(luk($n) . ", ");
}
echo("...\n")
?>
