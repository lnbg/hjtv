<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package showme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ):?> 
  <div class="entry-media clearfix">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"><?php the_post_thumbnail();?></a>
    </div>
    <?php endif;?>
    
  <div class="post-content clearfix">
  <header class="entry-header">
    <?php
    if ( is_singular() ) :
      the_title( '<h1 class="entry-title">', '</h1>' );
    else :
      the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
    endif;
    ?>

  </header><!-- .entry-header -->
    
  <?php
    if ( 'post' === get_post_type() ) : ?>
    <div class="entry-meta">
        <?php showme_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php
    endif; ?>

  <div class="entry-content clearfix">
    <?php
      the_content( sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'showme' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'showme' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <?php if(is_single()){?>
  <footer class="entry-footer clearfix">
    <?php showme_entry_footer(); ?>
  </footer><!-- .entry-footer -->
    <?php }?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
