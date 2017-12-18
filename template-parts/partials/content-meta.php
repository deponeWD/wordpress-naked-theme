<?php
  $contentMeta = '';
  $contentMeta .= '<div class="entry-publication-meta">';
    $contentMeta .= ' ' . __('By', 'naked-theme') . ' ';
    $contentMeta .= '<address class="author p-author vcard hcard h-card" itemprop="author" itemscope="" itemtype="http://schema.org/Person">';
      $contentMeta .= '<a class="url uid u-url u-uid fn p-name" href="'. get_author_posts_url( get_the_author_meta( 'ID' ) ) .'"><span itemprop="name">'. get_the_author() .'</span></a>';
    $contentMeta .= __(' on', 'naked-theme') . ' ';
    $contentMeta .= '<a href="'. get_permalink() .'" rel="bookmark" class="url u-url"><time class="entry-date updated published dt-updated dt-published" datetime="'. get_the_date( 'c' ) .'" itemprop="dateModified datePublished">'. get_the_date() .'</time></a>.';
    $contentMeta .= '</address>';
  $contentMeta .= '</div>';

  echo $contentMeta;
