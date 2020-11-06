<html>
  <head>
    <meta charset="utf8">
  </head>
  <body>
    <?php
      $id_name = $_POST['id'];

      $to = 'harryhajinchung@gmail.com';
      $subject = 'You entered the PHP world';
      $msg = "$id_name has entered\n".
             "Welcome!";
      $msg = wordwrap($msg);
      $email = "hehe";

      mail($to, $subject, $msg, 'From: '. $email);

      echo $id_name." 님 어서오세요~!<br/>";
      echo "PHP의 세계에 오신 것을 환영합니다!"
    ?>
  </body>
</html>