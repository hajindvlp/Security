<?php

  $new_title = $_POST['new_title'];
  $old_title = $_POST['old_title'];
  $desc = $_POST['desc'];

  rename("../data/".$old_title, "../data/".$new_title);
  file_put_contents("../data/".$new_title, $desc);

  header("Location: ./main.php");
  exit;
?>