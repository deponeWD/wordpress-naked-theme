<footer class="page-footer" role="contentinfo">
  <?php
    echo '<ul class="legal-notice nols">';
      echo '<li>&copy; '. date("Y") .' <strong>'. get_bloginfo("name") .'</strong>.</li>';
      wp_nav_menu( array(
        'theme_location' => 'footer-menu',
        'container' =>  false,
        'fallback_cb' => false,
        'items_wrap' => '%3$s',
        'depth' => 2,
      ) );
    echo '</ul>';
  ?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
