<html>
<head></head>
<body>
  <h1>function</h1>
  <?php
    $str = "함수를 배워볼까요?";
    echo $str;

    $str_br = "함수를 배워볼까요? 
    줄바꿈 할 수 있나요?
    이렇게 하면 줄바꿈 될까요?";
    echo $str_br;
  ?>
  
  <h2>strlen()</h2>
  <?php
    echo strlen($str);
  ?>

  <h2>nl2br()</h2>
  <?php
    echo nl2br($str_br);
  ?>
</body>
</html>