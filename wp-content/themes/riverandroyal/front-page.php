<?php /*
Theme Name: River & Royal
Theme URI: https://riverandroyal.com
Author: Sophie
Author URI: https://riverandroyal.com
Description: A basic theme using the Bootstrap framework.
Version: 1.0
Text Domain: bootstrapstarter
*/
 get_header(); ?>

  <div id="ttr_main" class="row">

    <div id="ttr_content" class="col-lg-9 col-sm-12 col-md-9 col-xs-12">

      <div class="row">
        <?php while ( have_posts() ) : the_post();?>
        <div id="blog-post" class="col-lg-9 col-sm-12 col-md-9 col-xs-12">

            <div>
              <h2><span><?php the_title(); ?></span></h2>
              <?php the_excerpt(); ?>
            </div>


        </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
      </div>


    </div>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>
