<html>
  <head></head>
  <body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>

    <?php
      $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
      $when_it_happend = $_POST['whenithappend'];
      $how_long = $_POST['howlong'];
      $how_many = $_POST['howmany'];
      $alien_desc = $_POST['aliendescription'];
      $what_they_did = $_POST['whattheydid'];
      $dolly_spotted = $_POST['dollyspotted'];
      $email = $_POST['email'];
      $other = $_POST['other'];

      $to = 'harryhajinchung@gmail.com';
      $subject = 'Aliens Abducted Me - Abduction Report';
      $msg = "$name was aubducted $when_it_happend and was gone for $how_long\n".
             "Number of aliens: $how_many\n".
             "What they did: $what_they_did\n".
             "Dolly spotted : $dolly_spotted".
             "Other comments: $other";
      $msg = wordwrap($msg);
      mail($to, $subject, $msg, 'From:' . $email);

      echo '<h1>Thanks for submitting the form.</h1><br/>';
      echo 'You were abducted ' . $when_it_happend;
      echo ' and were gon for '. $how_long . '<br/>';
      echo 'Number of aliens: ' . $how_many . '<br/>';
      echo 'Describe them: ' . $alien_desc . '<br/>';
      echo 'The aliens did this: ' . $what_they_did . '<br/>';
      echo 'Was Dolly there: ' . $dolly_spotted . '<br/>';
      echo 'Other comments' . $other . '<br/>';
      echo 'Your email address is ' . $email . '<br/>';
    ?>
  </body>
</html>