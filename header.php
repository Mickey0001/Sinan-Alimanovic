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
  <?php wp_head(); ?>
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