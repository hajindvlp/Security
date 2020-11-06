<html>
<head>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" href="./style/global.css">
</head>
<body class="container">
  <h1><a href="parameter2.php">WEB</a></h1>
  <ol>
    <li><a href="parameter2.php?id=HTML">HTML</a></li>
    <li><a href="parameter2.php?id=CSS">CSS</a></li>
    <li><a href="parameter2.php?id=JS">JavaScript</a></li>
  </ol>

  <h2>
    <?php 
      if(isset($_GET['id'])) {
        echo $_GET['id']; 
      } else {
        echo "Welcome";
      }
    ?>
  </h2>

  <?php
    if(isset($_GET['id'])) {
      echo nl2br(file_get_contents("./data/".$_GET['id']));
    } else {
      echo nl2br(file_get_contents("./data/home"));
    }
  ?>
</body>
</html>