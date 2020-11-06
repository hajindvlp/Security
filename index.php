<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./css/reset.css"/>
    <link rel="stylesheet" href="./css/main.css"/>
  </head>
  <body>
    <div id="content">

    <div id="header" class="wrapper">
      <a href="./" class="title">BLOG</a>
    </div>

    <div id="nav" class="wrapper">
      <a href="./index.php" class="link">posts</a>
      <a href="./dolly/report.html" class="link">dolly</a>
      <a href="./form1/id.html" class="link">Form 1</a>
    </div>

    <div id="post_list">
      <div id="search" class="wrapper">
        <form action="./search.php" method="get">
          <input type="text" name="title"/>
          <input type="submit" value="GO!"/>
        </form>
        <a href="./add_post.php">new post</a>
      </div>
      <?php
        $conn = new mysqli("localhost", "root", "clang7467", "bloggy");
        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, title, author, created FROM post";

        if($result = $conn -> query($sql)) {
          while($row = $result -> fetch_assoc()) {
            $post_card = sprintf("
              <div class=\"post_card wrapper\" id=\"%s\">
                <div class=\"title\"> %s </div>
                <div class=\"created\"> %s </div>
                <div class=\"author\"> %s </div>
                <a href=\"./view_post.php?id=%s\"> <div class=\"link\"> >> </div> </a>
              </div>
            ", $row['id'], $row['title'], $row['created'], $row['author'], $row['id']);

            echo $post_card;
          }
        } else {
          echo("0 results");
        }
      ?>
    </div>

    </div>
  </body>
</html>