<?php
  $post_title = $_POST['title'];
  $post_author = $_POST['author'];
  $post_authorID = "1213";
  $post_content = $_POST['content'];
  $post_created = date("Y-m-d");

  $conn = new mysqli("localhost", "root", "clang7467", "bloggy");
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = sprintf("INSERT INTO post VALUES(NULL, \"%s\", \"%s\", \"%s\", \"%s\", \"%s\");", 
                  $post_title, $post_content, $post_author, $post_authorID, $post_created);

  echo $sql;

  $result = $conn -> query($sql);

  echo $result;
  header('Location: ./');
?>