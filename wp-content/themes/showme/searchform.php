<?php
/**
 * Template for displaying search forms
 *
 * @package showme
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label for="<?php echo $unique_id; ?>">
    <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'showme' ); ?></span>
  </label>

  <div class="input-group">
    <input type="search" id="<?php echo $unique_id; ?>" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'showme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />

    <span class="input-group-btn">
      <button type="submit" class="search-submit" aria-label="<?php esc_attr_e( 'Search', 'showme' ); ?>" value="<?php echo esc_attr_x( 'Search', 'submit button', 'showme' ); ?>"><i class="fa fa-search" aria-hidden="true"></i><span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'showme' ); ?></span></button>
    </span>
  </div>
</form>
