<?php
/* template name:Contact
*/

get_header(); ?>

<div id="main_news_wrapper">
  <div id="row"> 
    <!-- Left wrapper Start -->
    <div id="left_wrapper">
      <div id="post_wrapper"> 
        <!-- Leave a response Start -->
		
		<div id="response" class="contact_form">
          <?php while ( have_posts() ) : the_post(); ?><?php the_content(); ?><?php endwhile; ?>
        </div>
        <div class="clear"> </div>
      </div>
    </div>
    <!-- Left wrapper end -->
    
    <?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('page')) : ?>
      <div id="right_wrapper">
               <?php dynamic_sidebar('page'); ?>
      </div>
           <?php endif; ?>
    <div class="clear"> </div>
  </div>
</div>
<?php get_footer(); ?>