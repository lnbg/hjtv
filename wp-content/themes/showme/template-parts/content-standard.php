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

  <?php showme_post_excerpt();?>

  <?php if(is_single()){?>
  <footer class="entry-footer clearfix">
    <?php showme_entry_footer(); ?>
  </footer><!-- .entry-footer -->
    <?php }?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
