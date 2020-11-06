<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Function</h1>
    <h2>Parameter & arguments</h2>
    <?php
      function basic() {
        echo "Basic User Defined Function";
      }

      function sum($left, $right) {
        print($right + $left);
      }

      function sum2($left, $right) {
        return $left + $right;
      }
      
      print(sum2(2, 4));
    ?>
  </body>
</html>