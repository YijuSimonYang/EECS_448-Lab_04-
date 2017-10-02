<?php

for($i = 0; $i <= 100; $i++){
  for($j = 0; $j <= 100; $j++){
    if(($i == 0)&&($j==0)){
      echo "&nbsp ";
    }elseif ($j == 0) {
      echo $i;
      echo " ";
    }elseif ($i == 0) {
      echo $j;
      echo " ";
    }else {
      echo $i*$j;
      echo " ";
    }
  }
  echo "<br>";
}
?>
