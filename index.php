<?php 
require('cms/config.php') ;
require('cms/parsedown.php');
$Parsedown = new parsedown();
if (isset($_GET['page'])){
    
    $page = $_GET['page'] . ".md";
    if (file_exists(__dir__.'/pages/'.$page)){
        $page = $_GET['page'] . ".md";
    } else {$page = "index.md";};
} else {
    $page = "index.md";
};
?>
<!DOCTYPE html>
<html>
<head>
<style>
<?php require "cms/theme.css.php"?>
</style>
</head>

<body>

  <!-- Header -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 hero">
          <?php echo $Parsedown->text(file_get_contents(__dir__.'/cms/title.md'));?><br>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-xs-12 col-sm-8">
          <?php echo $Parsedown->text(file_get_contents(__dir__. '/pages/'. $page))?>
        
      </div>
      <div class="col-xs-12 col-md-4">
        <h2>Contact Us</h2>
        <div>
        <?php
        echo $Parsedown->text(file_get_contents(__dir__.'/cms/contact.md'))
        ?>
        </div>
        <br/><button class="button">Contact Us</button>
      </div>
    </div>

    <!-- /.row -->

    <hr>

    <div class="text-center">made with 💖 using <a href="http://www.x35gaminghub.ml/cms/?page=typedown">TypeDown CMS</a></div>
    <!-- /.row -->

    <hr>

    <div class="row"></div>
    <!-- /.row -->


  </div>
  <!-- /.container -->

  <footer class="footer" />

</body>

</html>