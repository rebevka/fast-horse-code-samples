    <footer>
      <div class="row">
        <div class="four columns">
          <?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
        </div>
        <div class="four columns social">
          <?php echo DISPLAY_ULTIMATE_PLUS(); ?>
        </div>
        <div class="four columns">
          <div id="footerlogo">
            <?php 
              if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
              }
            ?>
          </div>
        </div>
      </div>
      <div class="row">
        <p>&copy; Plantwise 2017</p>
      </div>
    </footer>
    <?php 
    wp_footer();
    ?>
  </body>
</html>