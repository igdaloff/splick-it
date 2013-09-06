<?php
/*
Template Name: iphone
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: http://itunes.apple.com/us/app/splick-it/id375047368?mt=8");
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>