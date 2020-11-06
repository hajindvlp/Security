<html>
  <head>
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"> 
  </head>
  <body>
    <h1>Cross Site Scripting</h1>
    <?php
      echo htmlspecialchars('<script> alert("babo"); </script>');
    ?>
  </body>
</html>