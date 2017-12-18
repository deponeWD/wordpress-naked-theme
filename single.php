<?php
  get_header();
  echo '<section class="page-content">';
  echo '<main id="main" class="main-content page--single" role="main">';
  if ( have_posts() ) :
    /* Start the Loop */
    while ( have_posts() ) : the_post();

      /*
       * Include the Post-Format-specific template for the content.
       * If you want to override this in a child theme, then include a file
       * called content-___.php (where ___ is the Post Format name) and that will be used instead.
       */
      get_template_part( 'template-parts/post/content', get_post_format() );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // the_post();

  endif; // have_posts()
  echo '</main>';
  get_footer();
