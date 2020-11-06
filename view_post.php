<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./css/reset.css"/>
    <link rel="stylesheet" href="./css/main.css"/>
  </head>
  <body>
    <div id="header" class="wrapper">
      <a href="./" class="title">BLOG</a>
    </div>

    <?php
      $conn = new mysqli("localhost", "root", "clang7467", "bloggy");
      
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM post WHERE `id`=".$_GET['id'];
      if($result = $conn -> query($sql)) {
        $row = $result -> fetch_assoc();
        $post = sprintf("
          <div id=\"post\" class=\"wrapper\">
            <div class=\"title\">%s</div>
            <div class=\"author\">%s</div>
            <div class=\"created\">%s</div>
            <div class=\"content\">%s</div>
          </div>
        ", $row['title'], $row['author'], $row['created'], $row['content']);

        echo $post;
      }
    ?>
  </body>
</html>