<?php

$id = $_GET['id'];

function print_list() {
  $files = scandir("../data");
  for($i=0; $i < sizeof($files) ; $i++) {
    if($files[$i] != '.' && $files[$i] != '..' && $files[$i] != "Welcome") {
      $title = htmlspecialchars($files[$i]);
      echo ("<li><a href=\"./main.php?id=$title\">$title</a></li>");
    }
  }
}

function print_crud() {
  echo "<a href=\"./create.php\"> create </a> ";
  if($_GET['id'] != "Welcome") {
    $controls = sprintf("
    <label>|</label>
    <a href=\"./update.php?id=%s\"> update </a>
    <label>|</label>
    <form action=\"delete_process.php\" method=\"post\" id=\"deleteForm\">
      <input type=\"hidden\" name=\"id\" value=%s hidden=\"true\"/>
      <input type=\"submit\" value=\"delete\" id=\"deleteButton\" />
    </form>
    ", $_GET['id'], $_GET['id'], $_GET['id']);

    echo $controls;
  }
}

function print_title() {
  if(!isset($_GET['id'])) {
    $_GET['id'] = "Welcome";
  }
  $_GET['id'] = htmlspecialchars($_GET['id']);

  echo htmlspecialchars($_GET['id']);
}

function print_desc() {

  // echo $_GET['id'];
  // echo "<br>";
  // echo basename($_GET['id']);
  // echo "<br>";
  echo htmlspecialchars(file_get_contents("../data/".basename($_GET['id'])));
}

?>