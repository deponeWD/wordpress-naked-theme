<footer class="entry-footer entry-meta">
  <?php if ( is_singular() ) : ?>
    <?php if (!is_singular('page')) : ?>
      <address class="author p-author vcard hcard h-card" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
        <a class="url uid u-url u-uid fn p-name" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
          <span itemprop="name"><?php echo get_the_author(); ?></span>
        </a>
        <div class="note e-note" itemprop="description"><?php echo get_the_author_meta( 'description' ); ?></div>
      </address>
    <?php endif; ?>
  <?php else : ?>
    <?php get_template_part( 'template-parts/partials/content', 'meta' ); ?>
    <?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
      <div class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'naked-theme' ), __( '1 Comment', 'naked-theme' ), __( '% Comments', 'naked-theme' ) ); ?></div>
    <?php endif; ?>
  <?php endif ?>
</footer><!-- #entry-meta -->
