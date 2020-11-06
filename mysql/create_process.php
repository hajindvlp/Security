<?php
  $conn = mysqli_connect("localhost", "root", "clang7467", "opentutorials");
  $title =  mysqli_real_escape_string($coon, $_POST['title']);
  $description =  mysqli_real_escape_string($coon, $_POST['description']);
  $sql = "
    INSERT INTO topic 
      (title, description, created) 
      VALUES 
      ('{$title}', '{$description}', NOW());
  ";
  $result = mysqli_query($conn, $sql);

  if($result == false) {
    echo '오류요!';
    error_log(mysqli_error($conn));
  } else {
    echo '데이터 저장에 성공했습니다! <a href="./index.php">돌아가기</a>';
  }
?>