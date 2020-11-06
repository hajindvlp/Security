<?php
  $result=$_POST['select'];
  if($result == "h1") {
    echo "정답입니다!!";
  } else {
    echo "$result (은/는) input 태그의 입력요소입니다. 다시 푸세여!";
  }
  echo '<input type="button" value="문제로 돌아가기" onclick="location.href=\'quiz.html\'">';
?>


<!--
  그레이브 악센트가 안되는듯 하다
아 그레이브 악센트 좋은데...
아 ㅋㅋ
아 ./ 좋은데...
?
ㅋㅋ
그거나그거나 ㅋㅋ
-->