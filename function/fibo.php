<?php
/**
 * Created by PhpStorm.
 * User: evgen
 * Date: 16.10.15
 * Time: 14:32
 */

function fibonacci($n)
{
    if ($n < 3) {
        return 1;
    }
    else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

echo "Ряд Фибоначчи:\n";
echo nl2br("\n");
echo nl2br("\n");
for ($n = 1; $n <= 19; $n++) {
    echo(fibonacci($n) . ", ");
}
echo("...\n")
?>
