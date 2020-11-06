<?php
  echo "<h1>로그인 페이지 만들기</h1>";
  $id = $_POST['id'];
  $password = $_POST['password'];
  echo "$id 님이 로그인 하셨습니다<br>";
  echo "비밀번호는 $password 입니다";
?>