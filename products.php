<?php 
/*Template Name: Products*/ 
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
          'category_name' => 'products'
        );
        $the_query = new WP_Query( $args );
      ?>
      <?php if( $the_query->have_posts() ): ?>
      <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="row products">
			<div class="four columns complogo">
				<img src="<?php the_field('company_logo'); ?>">
			</div>
			<div class="three columns">
				<h5>Products</h5>
				<p><?php the_field('product_list'); ?></p>
			</div>
			<div class="five columns">
				<h5>Where To Find in MPLS</h5>
				<p><?php the_field('store_list'); ?></p>
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