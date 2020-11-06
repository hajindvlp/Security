<html>
<head>

<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
</head>
  <body>
    <?php
      $dimigo207 = array("2701", "2702", "2703", "2704");

      echo $dimigo207[1];
      echo "<br>";
      echo $dimigo207[3];
      echo "<br>";

      echo sizeof($dimigo207);
      echo "<br>";

      array_push($dimigo207, "dolly");
      echo "<pre>";
      print_r($dimigo207);
      echo "</pre>";
    ?>
  </body>
</html>