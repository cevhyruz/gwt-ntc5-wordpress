<?php
  $licensing = get_stylesheet_directory_uri() . "/images/licensing.png";
  $monitoring = get_stylesheet_directory_uri() . "/images/monitoring.png";
  $inspection = get_stylesheet_directory_uri() . "/images/inspection.png";
?>
<div id="frontline-services">

  <center>
    <h2>
<i class="fa fa-bookmark" aria-hidden="true"></i>
Frontline Services
<i class="fa fa-bookmark" aria-hidden="true"></i>
</h2>
  </center>

  <div class="service-item">
  <a href="<?php echo home_url('index.php/monitoring');?>">
      <div class="image-wrapper">
        <img src="<?php echo $monitoring; ?>">
      </div>
      <h4>Monitoring</h4>
  </a>
  </div>

  <div class="service-item">
    <a href="<?php echo home_url('index.php/mobile-licensing');?>">
        <div class="image-wrapper">
          <img src="<?php echo $licensing; ?>">
        </div>
        <h4>Licensing</h4>
    </a>
  </div>

  <div class="service-item">
    <a href="<?php echo home_url('index.php/monitoring');?>">
        <div class="image-wrapper">
          <img src="<?php echo $inspection; ?>">
        </div>
        <h4>Inspection</h4>
    </a>
  </div>

</div>
