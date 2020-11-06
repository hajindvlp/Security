<?php
  if(!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'no mysqli :(';
  } else {
    echo 'we got it <br>'; //  we gots it -> we got it ! 
  }
?>

