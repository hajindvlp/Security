<?php
  echo '<h1>선호하는 과목 조사 결과</h1>';
  $len = count($_POST['subject']);
  if($len < 2) {
    echo '<h1> 2개 이상 고르라고 </h1>';
  }
  else {
      foreach($_POST['subject'] as $value){
      echo $value.'<br/>';
    }
  }
?>