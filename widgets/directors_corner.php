<?php
$regional_director = get_stylesheet_directory_uri() . "/images/rdoic.png";
$orgchart = get_stylesheet_directory_uri(). "/images/orgchart_names_only.png";
?>

<div id="directors-corner">
  <div id="directors-corner-wrapper">
    <h3>
<i class="fa fa-tag" aria-hidden="true"></i>
Director's Corner</h3>
   <!-- <?php echo do_shortcode('[iheu_ultimate_oxi  id="7"]'); ?> -->
    <img src="<?php echo $regional_director;?>" rel="lightbox">
  </div>
</div>

<a class="link" href="<?php echo $orgchart; ?>">
  <h3>View Organizational Chart</h3>
</a>