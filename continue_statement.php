<?php
for ($i = 1; $i <= 10; $i++){
  echo("5 x " . $i . "=" . $i *5);
  echo ("<br/>");
}


////////////
for ($x = 1; $x <= 50; $x++) {
  if ($x == 5) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>