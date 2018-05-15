<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package showme
 */

if ( ! function_exists( 'showme_posted_on' ) ) :
  /**
   * Prints HTML with meta information for the current post-date/time and author.
   */
  function showme_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
      $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf( $time_string,
      esc_attr( get_the_date( 'c' ) ),
      esc_html( get_the_date() ),
      esc_attr( get_the_modified_date( 'c' ) ),
      esc_html( get_the_modified_date() )
    );

    $posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

    $byline = sprintf(
      /* translators: %s: post author. */
      esc_html_x( 'by %s', 'post author', 'showme' ),
      '<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
    );

    echo '<span class="byline"> ' . $byline . '</span><span>/</span><span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

    if ( 'post' === get_post_type() ) {
      /* translators: used between list items, there is a space after the comma */
      $categories_list = get_the_category_list( esc_html__( ', ', 'showme' ) );
      if ( $categories_list ) {
        /* translators: 1: list of categories. */
        printf( '<span>/</span><span class="cat-links">%1$s</span>', $categories_list ); // WPCS: XSS OK.
      }
    }
  }
endif;

if ( ! function_exists( 'showme_entry_footer' ) ) :
  /**
   * Prints HTML with meta information for the categories, tags and comments.
   */
  function showme_entry_footer() {
    // Hide category and tag text for pages.
    if ( 'post' === get_post_type() ) {
      /* translators: used between list items, there is a space after the comma */
      $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'showme' ) );
      if ( $tags_list ) {
        /* translators: 1: list of tags. */
        printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'showme' ) . '</span>', $tags_list ); // WPCS: XSS OK.
      }
    }
  }
endif;

function showme_posts_navigation() {
  the_posts_navigation(array(
    'prev_text' => '<i class="fa fa-caret-left" aria-hidden="true"></i> '.esc_html__('Older posts','showme'),
    'next_text'  => esc_html__('Newer posts','showme').' <i class="fa fa-caret-right" aria-hidden="true"></i>'       
  ));
}

function showme_post_navigation(){
  the_post_navigation( array(
        'prev_text' => '<i class="fa fa-caret-left" aria-hidden="true"></i> %title',
        'next_text' => '%title <i class="fa fa-caret-right" aria-hidden="true"></i>'
  ) );
}

function showme_comments_navigation(){
  the_comments_navigation(array(
    'prev_text' => '<i class="fa fa-caret-left" aria-hidden="true"></i> '.esc_html__( 'Older comments' ,'showme'),
    'next_text' => esc_html__( 'Newer comments' ,'showme').' <i class="fa fa-caret-right" aria-hidden="true"></i>'
  ));
}

function showme_posts_pagination(){
  the_posts_pagination(array(
    'prev_text' => '<i class="fa fa-caret-left" aria-hidden="true"></i>',
    'next_text' => '<i class="fa fa-caret-right" aria-hidden="true"></i>'
  ));
}
