<?php
/**
 * showme Theme Customizer
 *
 * @package showme
 */

function showme_customize_register( $wp_customize ) {

  class showme_customize_number_control extends WP_Customize_Control {
    public $type = 'showme_number_field';
    public function render_content() {
      ?>
      <label>
        <span class="customize-control-title">
          <?php echo esc_html($this->label); ?>
        </span>
        <input type="number" min="1" max="10000" value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
      </label>
      <?php
    }
  }
  
  $wp_customize->add_panel( 'theme_options' ,array(
    'title' => esc_html__( 'Theme Options', 'showme' ),
    'description' => '',
  ));

  //----------------------------------------------------------------------------------
  // Section: Colors
  //----------------------------------------------------------------------------------
  $wp_customize->add_section( 'colors_general' , array(
    'title' => esc_html__('Colors', 'showme'),
    'panel' => 'theme_options',
    'priority' => 1,
  ));
  $wp_customize->add_setting( 'theme_color', array(
    'default' => '#8cc152',
    'sanitize_callback' => 'sanitize_hex_color_no_hash',
    'sanitize_js_callback' => 'maybe_hash_hex_color',
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'theme_color', array(
    'label' => esc_html__( 'Theme Color', 'showme' ),
    'section' => 'colors_general',
  )));
  
  //----------------------------------------------------------------------------------
  // Section: General Settings
  //----------------------------------------------------------------------------------
  $wp_customize->add_section( 'general_settings_section' , array(
    'title' => esc_html__('General Settings', 'showme'),
    'panel' => 'theme_options',
    'priority' => 2,
  ));
  $wp_customize->add_setting('blog_pagination',array(
    'default' => 'pagination',
    'sanitize_callback' => 'showme_sanitize_blog_pagination',
  ));
  $wp_customize->add_control('blog_pagination',array(
    'label' => esc_html__('Blog Pagination or Navigation', 'showme'),
    'section' => 'general_settings_section',
    'settings' => 'blog_pagination',
    'type' => 'radio',
    'choices' => array(
      'pagination' => esc_html__('Pagination', 'showme'),
      'navigation' => esc_html__('Navigation', 'showme'),
    ),
  ));
  $wp_customize->add_setting('header_title',array(
    'default' => false,
    'sanitize_callback' => 'showme_sanitize_checkbox',
  ));
  $wp_customize->add_control('header_title',array(
    'label' => esc_html__('Hide Header Title Text', 'showme'),
    'section' => 'general_settings_section',
    'settings' => 'header_title',
    'type' => 'checkbox',
  ));
  $wp_customize->add_setting('blog_layout',array(
    'default' => 'right_sidebar',
    'sanitize_callback' => 'showme_sanitize_blog_layout',
  ));
  $wp_customize->add_control('blog_layout',array(
    'type' => 'select',
    'label' => esc_html__('Blog Layout', 'showme'),
    'section' => 'general_settings_section',
    'choices' => array(
      'right_sidebar' => esc_html__('Right sidebar', 'showme'),
      'left_sidebar' => esc_html__('Left sidebar', 'showme'),
      'one_column' => esc_html__('One column', 'showme'),
    ),
  ));
  $wp_customize->add_setting('blog_excerpt_type',array(
    'default' => 'excerpt',
    'sanitize_callback' => 'showme_sanitize_blog_excerpt_type',
  ));
  $wp_customize->add_control('blog_excerpt_type',array(
    'type' => 'select',
    'label' => esc_html__('Use Excerpt or "Read More tag"', 'showme'),
    'section' => 'general_settings_section',
    'choices' => array(
      'excerpt' => esc_html__('Excerpt', 'showme'),
      'more-tag' => esc_html__('Read More tag', 'showme'),
    ),
  ));
  $wp_customize->add_setting('blog_excerpt_length',array(
    'default' => 40,
    'sanitize_callback' => 'showme_sanitize_number_intval',
  ));
  $wp_customize->add_control(new showme_customize_number_control($wp_customize,'blog_excerpt_length',array(
    'label' => esc_html__('Excerpt Length (Number of Words)', 'showme'),
    'section' => 'general_settings_section',
    'settings' => 'blog_excerpt_length',
  )));
  $wp_customize->add_setting('general_show_totop_btn',array(
    'default' => 1,
    'sanitize_callback' => 'showme_sanitize_checkbox',
  ));
  $wp_customize->add_control('general_show_totop_btn',array(
    'type' => 'checkbox',
    'label' => esc_html__('Show "Back to top" button', 'showme'),
    'section' => 'general_settings_section',
  ));
}
add_action( 'customize_register', 'showme_customize_register' );
