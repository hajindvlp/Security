<html>
<head>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <link rel="stylesheet" href="../style/global.css">
  <title>
    <?php print_title() ?>
  </title>
</head>
<body class="container">
  <h1><a href="./getdirFunc.php">WEB</a></h1>
  <ol>
    <?php print_list(); ?>
  </ol>

  <h2>
    <?php print_title(); ?>
  </h2>

  <?php print_desc(); ?>
</body>
</html>

<?php

$id = $_GET['id'];

function print_list() {
  $files = scandir("../data");
  for($i=0; $i < sizeof($files) ; $i++) {
    if($files[$i] != '.' && $files[$i] != '..' && $files[$i] != "Welcome") {
      echo "<li><a href=\"./getdirFunc.php?id=$files[$i]\">$files[$i]</a></li>";
    }
  }
}

function print_title() {
  if(!isset($_GET['id'])) {
    $id = "Welcome";
  }
  echo $id;
}

function print_desc() {
  echo nl2br(file_get_contents("../data/".$_GET['id']));
}

?>