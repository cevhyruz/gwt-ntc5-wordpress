<?php
  $citizens_charter = get_stylesheet_directory_uri() . "/images/citizen_charter.jpg";

  $internal = get_stylesheet_directory_uri() . "/images/R5-FAD-INTERNAL-SERVICES-Revision.pdf";
  $external = get_stylesheet_directory_uri() . "/images/R5-EOD-EXTERNAL-SERVICES-1.pdf";
  $pursuant = get_stylesheet_directory_uri() . "/images/Pursuant to RA No. 11032.pdf";

?>

<center>
  <h2>Citizen's Charter<h2>
</center>

<div id="charter-container" title="Citizen's Charter">
  <h2 title="Internal Services">
    <a id="charter-item"  target="_blank" rel="lightbox" href="<?php echo $internal; ?>">
      INTERNAL SERVICES
    </a>
  </h2>

  <h2 title="External Services">
    <a id="charter-item"  target="_blank" rel="lightbox" href="<?php echo $external; ?>">
       EXTERNAL SERVICES
    </a>
  </h2>

  <h2 title="Pursual To RA No. 11032">
    <a id="charter-item"  target="_blank" rel="lightbox" href="<?php echo $pursuant; ?>">
      PURSUANT TO RA No. 11032
    </a>
  </h2>

  &nbsp;

  <a href="<?php echo home_url('/index.php/citizens-charter'); ?>">
    <img src="<?php echo $citizens_charter; ?>">
  </a>
</div>
