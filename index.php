<?php get_header(); ?>

  <div class="container">
    
    

   
      <div class="row">
        <?php if(have_posts()) : ?>

          <?php while(have_posts()) : the_post(); ?>

          <?php endwhile;  ?>

          <?php else : ?>

          <p><?php __('No Posts Found');  ?></p>

        <?php endif;  ?>
      </div>

  </div>


<?php get_footer(); ?>