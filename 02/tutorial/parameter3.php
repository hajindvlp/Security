<html>
<head>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" href="./style/global.css">
</head>
<body class="container">
  <h1><a href="parameter3.php">WEB</a></h1>
  <ol>
    <li><a href="parameter3.php?id=HTML">HTML</a></li>
    <li><a href="parameter3.php?id=CSS">CSS</a></li>
    <li><a href="parameter3.php?id=JS">JavaScript</a></li>
    <li><a href="parameter3.php?id=PHP">PHP</a></li>
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
    echo nl2br(file_get_contents("./data/".$id));
  ?>
</body>
</html>