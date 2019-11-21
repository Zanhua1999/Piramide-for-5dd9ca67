<?php
$line = readline("Hoeveel stapels wil je hebben?");
for($i = 1; $i < $line; $i++){
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo PHP_EOL;
}
?>