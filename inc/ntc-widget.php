<?php
/**
 * ntc_wp default widgets
 *
 * @package GWT-NTC5
 * @since Government Website Template 2.0
 */

class ntc_widget_apps extends WP_Widget {
  function __construct() {
    parent::__construct(
      'app_grid_buttons',
      __('My Custom Widget', 'text_domain'),
      array('description' => __('A Custom Widget for my child theme', 'text_domain')) // Args
    );
  }

  public function widget( $args, $instance ) {
    // Widget output 
		echo $args['before_widget'];
    echo '<table class="widget_wrapper">
    <tr class="widget_content" >
      <td><img src="http://localhost/wordpress/wp-content/uploads/2024/09/GAD-Corner-Icon.png" alt="Image 1"></td>
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
          array('description' => __('A Custom Widget for my child theme', 'text_domain')) // Args
      );
  }
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo '<div class="container">
    <div class="buttons">
      <button class="button"><h2>Citizens Charter</h2></button>
      <button class="button"><h2>Internal Services<h2></button>
      <button class="button"><h2>External Services</h2></button>
      <button class="button"><h2>Pursuant to RA No. 11032</h2></button>
    </div>
  </div>';
    echo $args['after_widget'];
  }
}

function citizens_charter_register_widgets() {
  register_widget( 'ntc_widget_citizens_charter' );
}

add_action( 'widgets_init', 'citizens_charter_register_widgets' );
