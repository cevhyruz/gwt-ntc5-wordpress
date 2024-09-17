<?php
$citizens_charter = get_stylesheet_directory_uri() . "/images/citizen_charter.jpg"
?>

<center>
  <h2>Citizen's Charter<h2>
</center>

<div id="charter-container" title="Citizen's Charter" >
  <h2 title="Internal Services"><a id="charter-item" href="#">INTERNAL SERVICES</a></h2>
  <h2 title="External Services"><a id="charter-item" href="#">EXTERNAL SERVICES</a></h2>
  <h2 title="Pursual To RA No. 11032"><a id="charter-item" href="#">PURSUANT TO RA No. 11032</a></h2>
  <a href="<?php echo home_url('/index.php/citizens-charter'); ?>">
    <img src="<?php echo $citizens_charter; ?>">
  </a>
</div>
