<?php
  echo '<article id="post-'. get_the_ID() .'"';
    post_class();
  echo '>';
    get_template_part( 'template-parts/partials/content', 'header' );
    echo '<div class="e-content">';
      if ( is_singular() ) {
        the_content();
      } else {
        the_excerpt();
      }
    echo '</div>';
    get_template_part( 'template-parts/partials/content', 'footer' );
  echo '</article>';
