<?php
  require_once('./lib/print.php');
  require('./view/top.php');
?>

<h2> Update : <?php print_title(); ?> </h2>

<form action="update_process.php" method="post">
  <input type="text" name="new_title" id="title" value="<?php print_title(); ?>">
  <input type="hidden" name="old_title" value="<?php print_title();?>">
  <textarea name="desc" id="desc" cols="30" rows="10"><?php print_desc(); ?></textarea>
  <input type="submit" name="" id="">
</form>

<?php
  require('./view/bottom.php');
?>