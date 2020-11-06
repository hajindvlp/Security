<html>
<head>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" href="../style/global.css">
</head>
<body class="container">
  <h1><a href="./getdir.php">WEB</a></h1>
  <ol>
    <?php
      $files = scandir("../data");
      $i = 0;
      while($i < sizeof($files)) {
        if($files[$i] != '.' && $files[$i] != '..' && $files[$i] != "Welcome") {
          echo "<li><a href=\"./getdir.php?id=$files[$i]\">$files[$i]</a></li>";
        }
        $i = $i + 1;
      }
    ?>
  </ol>

  <h2>
    <?php 
      $id = $_GET['id'];
      if(!isset($_GET['id'])) {
        $id = "Welcome";
      }
      echo $id;
    ?>
  </h2>

  <?php
    echo nl2br(file_get_contents("../data/".$id));
  ?>
</body>
</html>