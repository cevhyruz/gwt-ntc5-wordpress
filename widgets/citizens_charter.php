<?php
  $citizens_charter = get_stylesheet_directory_uri() . "/images/citizen_charter.jpg";

  $internal = get_stylesheet_directory_uri() . "/images/R5-FAD-INTERNAL-SERVICES-Revision.pdf";
  $external = get_stylesheet_directory_uri() . "/images/R5-EOD-EXTERNAL-SERVICES-1.pdf";
  $pursuant = get_stylesheet_directory_uri() . "/images/Pursuant to RA No. 11032.pdf";
?>

<div class="citizens-charter">
 <center>
<h2>
<i class="fa fa-bookmark" aria-hidden="true"></i>
Citizens Charter
<i class="fa fa-bookmark" aria-hidden="true"></i>
</h2>
<br />
<h4><a class="charter-links" href="<?php echo $internal;?>" target="_blank" title="Internal Services">internal services</a></h4>
<h4><a class="charter-links" href="<?php echo $external;?>" target="_blank" title="Enternal Services">external services</a></h4>
<h4><a class="charter-links" href="<?php echo $pursuant;?>" target="_blank" title="Pursuant to RA No. 11032">pursuant to ra no. 11032</a></h4>
</center>

<center>
<a href="<?php echo home_url('/index.php/citizens-charter')?>">
  <img class="widget-image" src="<?php echo $citizens_charter; ?>" /></a>
</center>
</div>
