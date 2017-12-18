<header>
  <?php
    $contentHeaderTitle = '';

    if ( is_singular() ) {
      $contentHeaderTitle .= get_the_title();
    } else {
      $contentHeaderTitle .= '<a href="'. esc_url(get_permalink()) .'">'. get_the_title() .'</a>';
    }

    echo '<h2 class="entry-title p-name" itemprop="name headline">'. $contentHeaderTitle . '</h2>';

    if ( is_singular() ) {
      get_template_part( 'template-parts/partials/content', 'meta' );
    }
  ?>
</header>
