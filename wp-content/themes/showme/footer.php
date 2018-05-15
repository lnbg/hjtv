<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package showme
 */

?>

  <footer id="colophon" class="site-footer clearfix">
    <div class="container">
    <div class="site-info">
      <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'showme' ) ); ?>"><?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( 'Proudly powered by %s', 'showme' ), 'WordPress' );
      ?></a>
      <span class="sep"> | </span>
      <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( 'Theme: %1$s by %2$s.', 'showme' ), 'ShowMe', '<a href="http://nethemes.com/">NEThemes</a>' );
      ?>
    </div><!-- .site-info -->
    </div>
  </footer><!-- #colophon -->
  
<?php
$show_back_to_top = get_theme_mod('general_show_totop_btn', 1);
if ($show_back_to_top) { 
?> 
  <button id="back_top" aria-label="<?php esc_attr_e( 'Top', 'showme' ); ?>" value="<?php echo esc_attr_x( 'Top', 'top button', 'showme' ); ?>"><i class="fa fa-angle-up" aria-hidden="true"></i><span class="screen-reader-text"><?php echo esc_html_x( 'Top', 'top button', 'showme' ); ?></span></button>
<?php
}
?>
  
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>