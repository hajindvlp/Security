<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
  <div id="content">
    <div id="header" class="wrapper">
      <a href="./" class="title">new post</a>
    </div>

    <div id="form" class="wrapper">
      <form id="add_post_form" action="add_post_proc.php" method="POST">
        <div class="input_wrapper"> 
          <label class="input_label"> Title </label>
          <input type="text" name="title"/>
        </div>
        <div class="input_wrapper"> 
          <label class="input_label"> Author </label>
          <input type="text" name="author"/>
        </div>
        <div class="input_wrapper"> 
          <label class="input_label"> Content </label>
          <textarea form="add_post_form" name="content"> </textarea>
        </div>
        <input type="submit" value="post!"/>
      </form>
    </div>
  </div>
  </body>
</html>