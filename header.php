<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo bloginfo('name'); } ?><?php wp_title(''); ?></title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>