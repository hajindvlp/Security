<?php
  $mysql_hostname = "localhost";
  $mysql_username = "root";
  $mysql_password = "********";
  $mysql_database = "opentutorials";
  $mysql_port = "3306";
  $mysql_charset = "utf-8";
  $conn = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);

  if($conn->connect_errno) {
    echo '[연결실패] : '. $conn->connect_errno.'';
  } else {
    echo '[연결성공]<br>';
  }

  mysqli_select_db($conn, $mysql_database) or die('DB 선택 실패');
  $sql = "
    INSERT INTO topic 
      ( title, description, created ) 
      VALUES 
      ( 'Mysql', 'Mysql is ...', NOW() );
  ";

  $result = mysqli_query($conn, $sql);
  echo $sql."<br>";
  echo mysqli_error($conn);
?>