<?php
  require_once('./lib/print.php');
  require('./view/top.php');
?>

<?php print_crud(); ?>
<h2> <?php print_title(); ?> </h2>
<?php print_desc(); ?>

<?php
  require('./view/bottom.php');
?>