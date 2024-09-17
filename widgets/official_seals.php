<?php
  $ntc_logo     = get_stylesheet_directory_uri() . "/images/ntc_logo_95x95.png";
  $transparency = get_stylesheet_directory_uri() . "/images/transparency-seal-96x96.png";
  $foi          = get_stylesheet_directory_uri() . "/images/foi_logo_95x95.png";
?>


<center>
  <h2>Official Seals</h2>
</center>

<div class="official-seals">
  <a href="https://ntc.gov.ph/" target="_blank" alt="National Telecommunications Commission" title="National Telecommunications Commission">
    <img src="<?php echo $ntc_logo; ?>" alt="Image 2">
  </a>
  <a href="<?php echo home_url('/index.php/transparency'); ?>" title="Transparency">
    <img src="<?php echo $transparency; ?>" alt="Image 1">
  </a>
  <a href="https://www.foi.gov.ph/agencies/ntc/" target="_blank" title="Freedom of Information">
    <img src="<?php echo $foi; ?>" alt="Image 3">
  </a>
</div>
