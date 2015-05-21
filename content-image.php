  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'winterlude-theme' ) ); ?>
    </div><!-- .entry-content -->

    <footer class="entry-meta">
      <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'winterlude-theme' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
        <h1><?php the_title(); ?></h1>
        <h2><time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time></h2>
      </a>
      <?php if ( comments_open() ) : ?>
      <div class="comments-link">
        <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'winterlude-theme' ) . '</span>', __( '1 Reply', 'winterlude-theme' ), __( '% Replies', 'winterlude-theme' ) ); ?>
      </div><!-- .comments-link -->
      <?php endif; // comments_open() ?>
      <?php edit_post_link( __( 'Edit', 'winterlude-theme' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
  </article><!-- #post -->