<?php
   $conn = mysqli_connect("localhost", "root", "clang7467", "opentutorials");
   $sql = "
    SELECT * FROM topic;
   ";
   $result = mysqli_query($conn, $sql);

  $list = '';
  $article = [
    "title" => "Welcome",
    "description" => "Mysql을 배워봅시다."
  ];

  while($row = mysqli_fetch_array($result)) {
    $title = $row['title'];
    $id = $row['id'];
    $list = $list . "
      <li><a href=\"index.php?id=$id\">$title</a></li>
    ";

    if($id== $_GET['id']) {
      $article = [
        "title" => htmlspecialchars($row['title']),
        "description" => htmlspecialchars($row['description'])
      ];
    }
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
    <?php echo $list; ?>
  </ol>
  <a href="create.php">create</a>
  <h2><?php echo $article['title']; ?></h2>
  <?php echo $article['description']; ?>
</body>
</html>
