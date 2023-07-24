<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package customTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-icons/favicon.png">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-icons/touch-icon.png">
        <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/images/favicon-icons/icon.png">

	   <!--/ 
            Avoid FOUC.
            Cover the body with a full screen white pseudo element.
        /-->
        <style type="text/css">
            #fouc::before {
                content: "";
                display: block;
                width: 100%;
                height: 100%;
                background: #21603e url('<?php echo get_template_directory_uri();?>/images/loading.svg') no-repeat center;
                position: fixed;
                top: 0;
                left: 0;
                z-index: 9999999999999999;
            }
        </style>


	<?php wp_head(); ?>
</head>

<body itemscope="itemscope" itemtype="https://schema.org/WebPage" <?php body_class(); ?> id="fouc">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'customtheme' ); ?></a>

	<header id="masthead" class="site-header">
		<?php get_template_part('inc/header/nav-logo'); ?>
	</header><!-- #masthead -->
