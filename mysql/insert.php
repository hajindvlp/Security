<?php
  $conn = mysqli_connect("localhost", "root", "**********", "opentutorials");
  $sql = "
    INSERT INTO topic 
      ( title, description, created ) 
      VALUES 
      ( 'Mysql', 'Mysql is ...', NOW() );
  ";

  echo $sql;
  $result = mysqli_query($conn, $sql);
  echo mysqli_error($conn);
?>