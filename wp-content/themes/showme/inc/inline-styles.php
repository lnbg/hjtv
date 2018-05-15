<?php
/**
 * custom stylesheet
 *
 * @package showme
 */

function showme_inline_styles() {

  $inline_styles = '';

  $theme_color = esc_attr( get_theme_mod( 'theme_color' ) );
  if ($theme_color) {
    $theme_color = '#'.$theme_color;
    $inline_styles .= '
blockquote{
  border-left: 4px solid '.$theme_color.';
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"]{
  background: '.$theme_color.';
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus{
  border:1px solid '.$theme_color.';
}
a {
  color: '.$theme_color.';
}
a:hover,
a:focus,
a:active {
  color: '.$theme_color.';
}
.site-title a{
  color: '.$theme_color.';
}
.main-navigation .menu >li >a:hover,
.main-navigation .menu >li >a:focus{
  color:'.$theme_color.';
}
.main-navigation .menu >li ul li a:hover,
.main-navigation .menu >li ul li a:focus{
  color:'.$theme_color.';
}
.site-main .sticky{
  box-shadow: 0 0 3px '.$theme_color.';
}
.sticky .entry-title,
.sticky .entry-title a{
  color:'.$theme_color.';
}
.entry-content .more-link:hover{
  background:'.$theme_color.';
  border: 1px solid '.$theme_color.';
}
.widget li a:hover{
  color:'.$theme_color.';
}
.pagination .nav-links a:hover,
.pagination .nav-links a:focus{
  background:'.$theme_color.';
}
.pagination .nav-links .current{
  background:'.$theme_color.';
}
.site-info a:hover{
  color:'.$theme_color.';
}
#back_top{
  background:'.$theme_color.';
}
    ';
  }

  wp_add_inline_style('showme-style', $inline_styles);

}
add_action('wp_enqueue_scripts', 'showme_inline_styles');
