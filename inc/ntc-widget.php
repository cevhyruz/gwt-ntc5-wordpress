<?php
/**
 * ntc_wp default widgets
 *
 * @package GWT-NTC5
 * @since Government Website Template 26
 */

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
  public function widget($args, $instance) {
    echo $args['before_widget'];
    include( get_stylesheet_directory() . '/widgets/citizens_charter.php');
    echo $args['after_widget'];
  }
}
function citizens_charter_register_widgets() {
  register_widget( 'ntc_widget_citizens_charter' );
}
add_action( 'widgets_init', 'citizens_charter_register_widgets' );

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