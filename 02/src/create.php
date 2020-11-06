<?php
  require_once('./lib/print.php');
  require('./view/top.php');
?>
  <h1>Create</h1>
  <form action="create_process.php" method="post">
    <input type="text" name="title" id="title" placeholder="제목을 입력하세요"> 
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="본문을 입력하세요"></textarea> 
    <input type="submit" name="" id="">
  </form>  

<?php
  require('./view/bottom.php');
?>