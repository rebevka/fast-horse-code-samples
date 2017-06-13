<?php
/*Template Name: Recipes
*/ 
get_header(); 
?>
<main>
  <div class="row banner" style="background-image: url('<?php the_field('BannerImage'); ?>');">
    <div class="bannertext">
      <h1><?php the_field('BannerTitle'); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="container infographic">
      <?php 
        if( have_posts()):
          while(have_posts()): the_post();
            the_content(); 
          endwhile;
        endif;
      ?>
      <?php
        $args = array(
          'posts_per_page' => 10,
          'post_type' => 'post',
          'post_status' => 'publish',
          'category_name' => 'recipes'
          );
        $the_query = new WP_Query( $args ); ?>
      <?php if( $the_query->have_posts() ): ?>
      <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="row">
        <div class="three columns recipe">
          <img src="<?php the_field('recipe_image'); ?>">
        </div>
        <div class="nine columns recipe">
          <h5><?php the_field('recipe_name'); ?></h5>              
          <a href="<?php the_field('recipe_source') ?>" target="_blank">View the full recipe here</a>
          <p><?php the_field('recipe_about'); ?></p>
        </div>
      </div>
      <hr>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>  
    </div>
  </div>
</main>
<?php get_footer(); ?>