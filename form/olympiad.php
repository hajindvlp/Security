<?php
$name  = $_POST['name'];
$loc = $_POST['loc'];
$school = $_POST['school'];
$grade = $_POST['grade'];
$gender = $_POST['gender'];
$birth = $_POST['birth'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$parentPhone = $_POST['parentPhone'];
$address = $_POST['address'];
$image = $_POST['image'];
$targetDir = "uploads/";
$HTML = "";
if(isset($_FILES)) { // 파일이 있는지 검사
  $error = $_FILES['image']['error'];
  if($error == 1 || $error == 2) {
    $HTML = "
    2M 이하의 이미지 파일만 업로드 해주세요. Error code : $error <br>
    <a href=\"olympiad.html\">접수페이지로 돌아가기.</a>
    ";
  } elseif($error == 4) {
    $HTML = "
    파일이 선택되지 않았습니다. Error code : $error <br>
    <a href=\"olympiad.html\">접수페이지로 돌아가기.</a>
    ";
  } elseif($error > 0) {
    $HTML = "
    파일 업로드 오류입니다. Error code : $error <br>
    <a href=\"olympiad.html\">접수페이지로 돌아가기.</a>
    ";
  } else {
    $allowdExts = array("gif", "GIF", "jpeg", "JPEG", "jpg", "JPG", "png", "PNG");
    $temp = explode(".", $_FILES['image']['name']);
    $ext = end($temp);
    $size = $_FILES['image']['size'];
    if($size/1024/1024 <= 2 && in_array($ext, $allowdExts)) {
      $targetFile = $targetDir . basename($_FILES["image"]["name"]);
      move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
      $HTML = "
      <html>
      <head>
        <meta charset=\"utf-8\">
        <style>
          .info {
            margin: 10px;
            font-size: 24px;
          }
        </style>
      </head>
      <body>
        <h1>올림피아드 신청서</h1>
        <div class=\"info\"> 이름 : $name <br> </div>
        <div class=\"info\"> 지역 : $loc <br> </div>
        <div class=\"info\"> 학교 : $school <br> </div>
        <div class=\"info\"> 학년 : $grade <br> </div>
        <div class=\"info\"> 성별 : $gender <br> </div>
        <div class=\"info\"> 생년월일 : $birth <br> </div>
        <div class=\"info\"> 응시분야 : $subject <br> </div>
        <div class=\"info\"> 이메일 : $email <br> </div>
        <div class=\"info\"> 휴대폰번호 : $phone <br> </div>
        <div class=\"info\"> 보호자 휴대폰번호 : $parentPhone <br> </div>
        <div class=\"info\"> 집주소 : $address <br> </div>
        <div class=\"info\"> 사진 <br><img src=\"$targetFile\"> </img> <br> </div>
        
      </body>
      </html>
      ";
    } elseif($size/1024/1024 > 2) {
      $HTML = $size/1024/1024 . "
        Mbytes : 파일 크기를 2M 이하로 업로드 해주세여.
        <a href=\"olympiad.html\">접수페이지로 돌아가기.</a>
      ";
    } else {
      $HTML = $ext . "
        포멧 파일을 지원 하지 않습니다.
        <a href=\"olympiad.html\">접수페이지로 돌아가기.</a>
      ";
    }
  }
} else {
  $HTML = "파일이 선택되지 않았습니다.";
}

echo $HTML;

?>