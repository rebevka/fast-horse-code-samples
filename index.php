<?php
get_header();
?>
<main>
  <div class="row banner" style="background-image: url('<?php the_field('BanenrImage'); ?>');">
    <div class="bannertext">
      <h3><?php the_field('SubTitle'); ?></h3>
      <div class="demo-rotate">
        <h1><?php the_field('MainTitle'); ?>
          <br>
          <span class="rotate1"><?php the_field('RotateText'); ?></span>
        </h1>
      </div>
        <h5><?php the_field('LocationTitle'); ?></h5>
    </div>
  </div>
  <div class="row section2">
    <div class="four columns">
      <a href="#">
        <?php 
          $image = get_field('CardImage');
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>      
        <h3><?php the_field('CardTitle'); ?></h3>
      </a>
      <p><?php the_field('CardText'); ?></p>
    </div>
    <div class="four columns">
      <a href="#">       
        <?php 
          $image = get_field('CardImage2');
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        <h3><?php the_field('CardTitle2'); ?></h3>
      </a>
      <p><?php the_field('CardText2'); ?></p>
    </div>
    <div class="four columns">
      <a href="#">
        <?php 
          $image = get_field('CardImage3');
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        <h3><?php the_field('CardTitle3'); ?></h3>
      </a>
      <p><?php the_field('CardText3'); ?></p>
    </div>
  </div>
  <div class="row section3">
    <h4><?php the_field('OurMissionTitle'); ?></h4>
    <p>
      <?php the_field('OurMissionText'); ?>
      <br>
      <br>
      <?php 
        $image = get_field('OurMissionHR');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
    </p>
  </div>
  <div class="row section4">
    <div class="image-grid">
      <div class="image01"></div>
      <div class="image02"></div>
      <div class="image03"></div>
      <div class="image04"></div>
      <div class="image05"></div>
      <div class="image06"></div>
      <div class="image07"></div>
      <div class="image08"></div>
    </div>
  </div> 
  <div class="row section5">
    <div class="six columns">
      <div class="row title">
        <?php 
          $image = get_field('TwoColumnImage');
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        <h4><?php the_field('TwoColumnTitle')?></h4>
      </div>
      <div class="row news">
        <h6>Click any of the following articles to read more</h6>
        <p>
          <?php
            $args = array(
              'posts_per_page' => 10,
              'post_type' => 'post',
              'post_status' => 'publish',
              'category_name' => 'news'
            );
            $the_query = new WP_Query( $args );
          ?>
          <?php if( $the_query->have_posts() ): ?>
          <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
              - <?php the_title(); ?><br>
            </a>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_query(); ?>
        </p>
      </div>
    </div>
    <div class="six columns">
      <div class="row title">
        <?php 
          $image = get_field('TwoColumnImage2');
          if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?>
        <h4><?php the_field('TwoColumnTitle2')?></h4>
        <a class="twitter-timeline"  href="https://twitter.com/search?q=%23vegan%20OR%20%23govegan%20OR%20%23plantbased%20OR%20%23plant-based" data-widget-id="838906571954475009">Tweets about #vegan OR #govegan OR #plantbased OR #plant-based</a>          
      </div>
    </div>
  </div> 
</main>
<?php get_footer(); ?>