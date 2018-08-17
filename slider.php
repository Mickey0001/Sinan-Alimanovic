<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img style="height:100vh; margin-top:60px; width:100%; padding-top:50px;" src="<?php echo get_theme_mod('home-slider-first-image');?>" alt="Sinan" >
      </div>

      <div class="item header-image">
        <img style="height:100vh; margin-top:50px; width:100%; padding-top:50px; "  src="<?php echo get_theme_mod('home-slider-second-image');?>" alt="Sinan" >
      </div>
    
      <div class="item header-image">
        <img style="height:100vh; margin-top:50px; width:100%; padding-top:50px; " src="<?php echo get_theme_mod('home-slider-third-image');?>" alt="Sinan" >
      </div>
    </div>

    <!-- Left and right controls -->
 
  </div>


</body>
</html>
