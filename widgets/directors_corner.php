<?php
$regional_director = get_stylesheet_directory_uri() . "/images/rdoic.png";
$orgchart = get_stylesheet_directory_uri(). "/images/orgchart_names_only.png";
?>

<div id="directors-corner">

  <div id="directors-corner-wrapper">
    <h3>Director's Corner</h3>

    <img src="<?php echo $regional_director;?>" rel="lightbox">

    <a class="link" href="<?php echo $orgchart; ?>" rel="lightbox">
      View Organizational Chart
    </a>
  </div>

</div>