<?php
/*
Template Name: android
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header' ) ); ?>

<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: http://market.android.com/details?id=com.splickit.app");
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>