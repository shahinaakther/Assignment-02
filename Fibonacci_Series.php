<?php
function evenNumberDoWhile($startPoint, $endPoint, $step)
{
   $i = $startPoint;
    do {
        if ($i % 2 != 0) {

            echo $i+1;
            for ($j = 1; $j <= $i - 1; $j++) {
            }
            if ($j == $endPoint) {
                echo ".";
            } else {
                echo ", ";
            }
        }
        $i = $i + $step;
    } while ($i <= $endPoint);
}

    echo "\n";