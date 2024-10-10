<?php
/**
 * ntc_wp default widgets
 *
 * @package GWT-NTC5
 * @since Government Website Template 26
 */

/**  citizens charter */

class ntc_widget_citizens_charter extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_citizens_charter',
      __(
        'NTC5 Citizen\'s Charter',
        'text_domain'
      ),
      array('description' => __(
        'Citizen\'s Charter',
        'text_domain'
      ))
    );
  }
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    include( get_stylesheet_directory() . '/widgets/citizens_charter.php');
    echo $args['after_widget'];
  }
}
function citizens_charter_register_widgets() {
  register_widget( 'ntc_widget_citizens_charter' );
}
add_action( 'widgets_init', 'citizens_charter_register_widgets' );

/** Official Seals */

class ntc_widget_official_seals extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_official_seals',
      __(
        'NTC5 Official Seals',
        'text_domain'
      ),
      array('description' => __(
        'Official Government Seals',
        'text_domain'
      ))
    );
  }
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    include( get_stylesheet_directory() . '/widgets/official_seals.php');
    echo $args['after_widget'];
  }
}
function official_seals_register_widget() {
  register_widget( 'ntc_widget_official_seals' );
}
add_action( 'widgets_init', 'official_seals_register_widget' );

/**NTC5 frontline services */

class ntc_frontline_services extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_frontline_services',
      __(
        'NTC5 Frontline Services',
        'text_domain'
      ),
      array('description' => __(
        'Frontline Services',
        'text_domain'
      ))
    );
  }
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    include( get_stylesheet_directory() . '/widgets/frontline_services.php');
    echo $args['after_widget'];
  }
}
function frontline_services_register_widgets() {
  register_widget('ntc_frontline_services');
}
add_action('widgets_init', 'frontline_services_register_widgets');

/**
 * Site Googlemap
 */

class ntc5_site_googlemap extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_site_googlemap',
      __(
        'NTC5 Site Google Map',
        'text_domain'
      ),
      array('description' => __(
        'NTC Regional Office No. 5 googlemap location',
        'text_domain'
      ))
    );
  }
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    include( get_stylesheet_directory() . '/widgets/site_googlemap.php');
    echo $args['after_widget'];
  }
}
function site_gmap_register_widgets() {
  register_widget('ntc5_site_googlemap');
}
add_action( 'widgets_init', 'site_gmap_register_widgets' );

/**
 * Affiliated Websites
 */

class ntc5_affiliated_websites extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_affiliated_websites',
      __(
        'NTC Affiliated Websites',
        'text_domain'
      ),
      array('description' => __(
        'NTC affiliated Websites',
        'text_domain'
      ))
    );
  }
  public function widget($args, $instance) {
    echo $args['before_widget'];
    include( get_stylesheet_directory() . '/widgets/affiliated_websites.php');
    echo $args['after_widget'];
  }
}
function affiliated_websites_register_widgets() {
  register_widget('ntc5_affiliated_websites');
}
add_action('widgets_init', 'affiliated_websites_register_widgets');

/** 
 * About Us
 */
class ntc5_about_us extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_about_us',
      __(
        'NTC5 About Us',
        'text_domain'
      ),
      array('description' => __(
        'NTC5 About Us',
        'text_domain'
      ))
    );
  }
  public function widget($args, $instance) {
    echo $args['before_widget'];
    include( get_stylesheet_directory() . '/widgets/about_us.php' );
    echo $args['after_widget'];
  }
}
function about_us_register_widgets() {
  register_widget('ntc5_about_us');
}
add_action('widgets_init', 'about_us_register_widgets');

/**
 * Directors Corner
 */

class ntc_directors_corner extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_directors_corner',
      __(
        'NTC5 Directors Corner',
        'text_doman'
      ),
      array('description' => __(
        'NTC5 Directors Corner',
        'text_domain'
      ))
    );
  }
  public function widget($args, $instance) {
    echo $args['before_widget'];
    include( get_stylesheet_directory() . '/widgets/directors_corner.php' );
    echo $args['after_widget'];
  }
}
function directors_corner_register_widgets() {
 register_widget('ntc_directors_corner');
}
add_action('widgets_init', 'directors_corner_register_widgets');

/**
 * Consumer Welfare and Protection
 */

class ntc_consumer_welfare extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_consumer_welfare',
      __(
        'NTC5 Consumer Welfare and Protection',
        'text_domain'
      ),
      array('description' => __(
        'NTC5 Consumer Welfare and Protectdion',
        'text_domain'
      ))
    );
  }
  public function widget($args, $instance) {
    echo $args['before_widget'];
    include( get_stylesheet_directory() . '/widgets/consumer_welfare.php' );
    echo $args['after_widget'];
  }
}
function ntc_consumer_welfare_register_widgets() {
  register_widget('ntc_consumer_welfare');
}
add_action('widgets_init', 'ntc_consumer_welfare_register_widgets');

class ntc_social_icons extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_social_icons',
      __(
        'NTC5 Social Media Icons',
        'text_domain'
      ),
      array('description' => __(
        'NTC5 Social Media Icons',
        'text_domain'
      ))
    );
  }
  public function widget($args, $instance) {
    echo $args['before_widget'];
    include(get_stylesheet_directory() . '/widgets/social_icons.php');
    echo $args['after_widget'];
  }
}
function ntc_social_icons_register_widgets() {
  register_widget('ntc_social_icons');
}
add_action('widgets_init', 'ntc_social_icons_register_widgets');

/* Announcements */

class NTC5_Announcements extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_announcements',
      __('NTC5 Announcements', 'text_domain'),
      array('description' => __('Displays announcements', 'text_domain'))
    );
  }
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo '<h2>' . esc_html($instance['title']) . '</h2>'; // Display title
    include(get_stylesheet_directory() . '/widgets/announcements.php');
    echo $args['after_widget'];
  }
  public function form($instance) {
    $title = !empty($instance['title']) ? $instance['title'] : '';
    echo '<p>';
    echo '<label for="' . $this->get_field_id('title') . '">' . __('Title:') . '</label>';
    echo '<input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . esc_attr($title) . '">';
    echo '</p>';
  }
  public function update( $new_instance, $told_instance ) {
    $instance = $old_instance;
    $instance['title'] = strip_tags( $new_instance['title'] );
    return $instance;
  }
}
function ntc_announcements_register_widgets() {
  register_widget('NTC5_Announcements');
}
add_action('widgets_init', 'ntc_announcements_register_widgets');
