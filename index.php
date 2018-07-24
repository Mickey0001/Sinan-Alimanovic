<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta "description" content="<?php bloginfo('description');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    <?php bloginfo('name');?> |
    <?php wp_title(); ?>
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
  </title>
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
          <ul class="navbar-nav my-2 my-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="#">PHOTOS</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">BIOGRAPHY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">NEWS</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">CONTACT</a>
              </li>
          </ul>
        </div>
      </nav>

      <div class="main-container">
  
  <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="carousel-image" src="images/Sinan1.jpg" alt="Sinan Alimanovic">
        <h2 class="carousel-caption">Sinan <br> Alimanovic</h2 >
      </div>
      <div class="carousel-item">
        <img class="carousel-image" src="images/Sinan2.jpg" alt="Sinan Alimanovic">
        <h2 class="carousel-caption">Sinan <br> Alimanovic</h2 >
      </div>
      <div class="carousel-item">
       <img class="carousel-image" src="images/Sinan3.jpg" alt="Sinan Alimanovic">
       <h2 class="carousel-caption">Sinan <br> Alimanovic</h2 >
      </div>
    </div>
  
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  
  </div>
</div>


<footer></footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>