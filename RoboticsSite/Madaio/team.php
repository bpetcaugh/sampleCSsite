<!doctype html>
<html lang="en">
  <head>
    <?php
       include("HEAD.php");
    ?>
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="index.html"><img class="toplogo" src="./pics/fb_logo2.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calendar.html">Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Fundraising</a>
          </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Highlights</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Teams</a>
        </li>
        <li class="nav-item">
          //must fix button later
            <button class="btn btn-danger ml-auto">Login</button>
        </li>
      </ul>
      
    </div>
  </nav>
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
  <?php
      include("FOOTER.php");
  ?>
  </body>
</html>
