<?php
  unlink("../data/".basename($_POST['id']));
  header("Location: ./main.php");
?>