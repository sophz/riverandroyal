<?php /*
Theme Name: River & Royal
Theme URI: https://riverandroyal.com
Author: Sophie
Author URI: https://riverandroyal.com
Description: A basic theme using the Bootstrap framework.
Version: 1.0
Text Domain: bootstrapstarter
*/ ?>

<div id="ttr_sidebar" class="col-lg-3 col-md-3 col-sm-12">
  <div class="about-me">
    <div class="photo">
      <img src="http://localhost:8888/riverandroyal/wp-content/uploads/2019/12/itsme.png" alt="Photo of Sophie" />
    </div>
    <div class="summary">
      <h3>Hello</h3>
      <p>I'm Sophie. I have been a devourer of stories since I was a tiny one with no words. This is my place to talk about stories I love or like or hate or love to hate (I am a fan of bad movies). I review things as well as rant about specific characters.</p>
    </div>
  </div>
<h2 ><?php _e('Categories'); ?></h2>
<ul > <?php wp_list_cats('sort_column=namonthly'); ?> </ul>
<h2 ><?php _e('Archives'); ?></h2>
<ul > <?php wp_get_archives(); ?> </ul>
</div>
