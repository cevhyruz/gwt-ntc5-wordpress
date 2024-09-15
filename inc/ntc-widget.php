<?php
/**
 * ntc_wp default widgets
 *
 * @package GWT-NTC5
 * @since Government Website Template 26
 */

class ntc_widget_apps extends WP_Widget {
  function __construct() {
    parent::__construct(
      'app_grid_buttons',
      __('App Widget', 'text_domain'),
      array('description' => __('4x4 grid widget', 'text_domain')) // Args
    );
  }

  public function widget( $args, $instance ) {
		echo $args['before_widget'];
    echo '
<center>
  <h2>Widgets Section</h2>
</center>
<table class="widget_wrapper">
    <tr class="widget_content" >
      <td><img src="uploads/2024/09/GAD-Corner-Icon.png" alt="Image 1"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Forms.png" alt="Image 2"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Gallery.png" alt="Image 3"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Org.png" alt="Image 4"></td>
    </tr>
    <tr>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Timeline.png" alt="Image 5"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-NOW.png" alt="Image 6"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Laws.png" alt="Image 7"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-CCharter.png" alt="Image 8"></td>
    </tr>
    <tr>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Amnesty.png" alt="Image 9"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Approved.png" alt="Image 10"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Exam.png" alt="Image 11"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Bac.png" alt="Image 12"></td>
    </tr>
    <tr>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Vacancy.png" alt="Image 13"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-About.png" alt="Image 14"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Contact-Us4.png" alt="Image 15"></td>
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/Icon-Find-Us.png" alt="Image 16"></td>
    </tr>
</table>';
		echo $args['after_widget'];
  }
}

function app_register_widgets() {
  register_widget( 'ntc_widget_apps' );
}

add_action( 'widgets_init', 'app_register_widgets' );


class ntc_widget_citizens_charter extends WP_Widget {
  function __construct() {
      parent::__construct(
          'citizens_charter', // Base ID
          __('Citizens Charter', 'text_domain'), // Name
          array('description' => __('Citizen\'s Charter', 'text_domain')) // Args
      );
  }
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo '
<center>
  <h2>Citizens Charter</h2>
</center>
    <div class="btn-container">
      <a id="buttons" href="#">INTERNAL SERVICES</a>
      <a id="buttons" href="#">EXTERNAL SERVICES</a>
      <a id="buttons" href="#">PURSUANT TO RA No. 11032</a>
    </div>
<div class="container">
</div>';
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
      'official_seals', // Base ID
      __('Official Seals', 'text_domain'), // Name
      array('description' => __('Official Government Seals', 'text_domain')) // Args
    );
  }

  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo '
<center>
 <h2>Official Seals</h2>
</center>
<div class="official-seals">
  <img src="http://localhost/wordpress/wp-content/uploads/2024/09/official_ntc_logo_two-1.png" alt="Image 2">
  <img src="http://localhost/wordpress/wp-content/uploads/2024/09/transparency-seal-160x160-1.png" alt="Image 1">
  <img src="http://localhost/wordpress/wp-content/uploads/2024/09/foi-logo.png" alt="Image 3">
</div>';
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
      'frontline_services',
      __('Frontline Services', 'text_domain'),
      array('description' => __('Frontline Services', 'text_domain')) // Args
    );
  }

  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo '
<center>
  <h2>Frontline Services</h2>
</center>

<div id="frontline-services">
    <div class="service-item">
        <i class="fa fa-address-card" aria-hidden="true"></i>
        <p>Licensing</p>
    </div>

    <div class="service-item">
        <i class="fa fa-desktop" aria-hidden="true"></i>
        <p>Monitoring</p>
    </div>

    <div class="service-item">
        <i class="fa fa-binoculars" aria-hidden="true"></i>
        <p>Inspection</p>
    </div>
</div>

<div class="fs_container">
    <img src="http://localhost/wordpress/wp-content/uploads/2024/09/png-transparent-gender-and-development-symbol-gender-miscellaneous-woman-technology.png" alt="Gender and Development">
    <p>Gender and Development</p>
  </div>

  <div class="fs_container">
    <img src="http://localhost/wordpress/wp-content/uploads/2024/09/315503733_2454779598002357_9211910661321317600_n-374x400-1.jpg" alt="Gender and Development">
    <p>Consumer Welfare and Protection<p>
  </div>

';
    echo $args['after_widget'];
  }
}

function frontline_services_register_widgets() {
  register_widget('ntc_frontline_services');
}

add_action('widgets_init', 'frontline_services_register_widgets');

// Gender and development

class ntc_gender_and_development extends WP_Widget {
  function __construct() {
    parent::__construct(
      'gender_and_development',
      __('Gender and Development', 'text_domain'),
      array('description' => __('Gender and Development', 'text_domain')) // Args
    );
  }

  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo '
  <img src="http://localhost/wordpress/wp-content/uploads/2024/09/png-clipart-logo-gender-and-development-brand-design-product-gender-and-development-logo-text-logo.png" alt="Gender and Development">
    ';
    echo $args['after_widget'];
  }
}

function gender_and_development_register_widgets() {
  register_widget( 'ntc_gender_and_development' );
}

add_action( 'widgets_init', 'gender_and_development_register_widgets' );

class ntc5_site_gmap extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_site_gmap',
      __('NTC5 Site GoogleMap', 'text_domain'),
      array('description' => __('NTC Regional Office No. 5 googlemap location', 'text_domain')) // Args
    );
  }

  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo '<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d476.70178245238924!2d123.75351267029981!3d13.166839810522037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a101a0f3fe6445%3A0x17e72296faa8a00a!2sNATIONAL%20TELECOMMUNICATIONS%20COMMISSION!5e0!3m2!1sen!2sph!4v1726191752613!5m2!1sen!2sph" style="border:0; frameborder=0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
';
    echo $args['after_widget'];
  }
}

function site_gmap_register_widgets() {
  register_widget('ntc5_site_gmap');
}
add_action( 'widgets_init', 'site_gmap_register_widgets' );

// affiliated websites


class ntc5_affiliated_websites extends WP_Widget {
  function __construct() {
    parent::__construct(
      'ntc5_affiliated_websites',
      __('NTC Affiliated Websites', 'text_domain'),
      array('description' => __('NTC affiliated Websites', 'text_domain'))
    );
  }
  public function widget($args, $instance) {
    echo $args['before_widget'];
    echo '
<center>
  <h2>Affiliated Websites </h2>
<div>
      <img src="http://localhost/wordpress/wp-content/uploads/2024/09/dost_logo.png" alt="dost logo"></img>
      <img src="http://localhost/wordpress/wp-content/uploads/2024/09/dict_logo.png" alt="dict logo"></img>
</div>
</center>
';
    echo $args['after_widget'];
  }
}

function affiliated_websites_register_widgets() {
  register_widget('ntc5_affiliated_websites');
}
add_action('widgets_init', 'affiliated_websites_register_widgets');