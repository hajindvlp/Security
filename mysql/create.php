<?php
   $conn = mysqli_connect("localhost", "root", "clang7467", "opentutorials");
   $sql = "
    SELECT * FROM topic;
   ";
   $result = mysqli_query($conn, $sql);

  $list = '';

  while($row = mysqli_fetch_array($result)) {
    $title = $row['title'];
    $id = $row['id'];
    $list = $list . "
      <li><a href=\"index.php?id=$id\">$title</a></li>
    ";
  }
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEB</title>
</head>
<body>
  <h1>WEB</h1>
  <ol>
    <?php echo $list;?>
  </ol>
  <form action="create_process-1.php" method="POST">
    <p><input type="text" name="title" placeholder="title"></p>
    <p><textarea name="description" cols="30" rows="10" placeholder="description"></textarea></p>
    <p><input type="submit" name="" id=""></p>
  </form>
</body>
</html>