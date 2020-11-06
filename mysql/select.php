<?php
   $conn = mysqli_connect("localhost", "root", "clang7467", "opentutorials");
   $sql = "
    SELECT * FROM topic;
   ";
   $result = mysqli_query($conn, $sql);

   
  if($result == false) {
    echo '오류요!';
    error_log(mysqli_error($conn));
  } else {
    echo '성공했습니다! <a href="./index.php">돌아가기</a>';
  }

  while($row = mysqli_fetch_array($result)) {
    echo '<h2>'. $row['title'] .'</h2>';
    echo $row['description'];
  }
?>