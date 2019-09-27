<!doctype html>
<html lang="en">
  <head>
    <?php include("./includes/header.php")?>
  </head>
  <body>
    <header>
<?php include("./includes/navbar.php")?>
</header>

<main role="main">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


  <?php 
    //Test Connection to DB
    include("./includes/connectdb.php"); 
  ?>

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer>
    <?php include(".includes/footer.php")?>
  </footer>
    
</body>
</html>
