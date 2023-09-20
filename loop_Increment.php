<?php
function increament_numbers($start, $end){
    for ($i = $start; $i <= $end; $i++) {

        if ($i % 2 == 0) {
            echo "even number :"."$i <br/>"  ;
        }
    }
}
increament_numbers(1, 20);

////////////// while loop ///////////


$x = 0;

while($x <= 20) {
  echo "even number is: $x <br>";
  $x+=2;
}
?>