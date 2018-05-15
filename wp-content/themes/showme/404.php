<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package showme
 */

get_header(); ?>

<div id="content" class="site-content clearfix">
  <div class="container">
    
    <div id="primary" class="content-area">
      <main id="main" class="site-main">

        <section class="error-404 not-found">
          <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'showme' ); ?></h1>
          </header><!-- .page-header -->

          <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'showme' ); ?></p>

            <?php
              get_search_form();
            ?>

          </div><!-- .page-content -->
        </section><!-- .error-404 -->

      </main><!-- #main -->
    </div><!-- #primary -->

  </div>
</div><!-- #content -->

<?php
get_footer();
