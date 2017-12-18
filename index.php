<?php
  get_header();
  echo '<section class="page-content">';
  echo '<main id="main" class="main-content" role="main">';
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/post/content', get_post_format() );
      endwhile;
        the_posts_pagination( array( 'mid_size' => 2 ) );
      else :
        echo '<p>'. __('Nothing Found. Sorry.', 'naked-theme') .'</p>';
    endif;
  echo '</main>';
  echo '</section>';
  get_footer();
