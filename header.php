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

<!--

                                                                                                                                                             
__        _______ _     ____ ___  __  __ _____   _____ ___    __  ____   __ __        _______ ____ ____ ___ _____ _____                                      
\ \      / | ____| |   / ___/ _ \|  \/  | ____| |_   _/ _ \  |  \/  \ \ / / \ \      / | ____| __ / ___|_ _|_   _| ____|                                     
 \ \ /\ / /|  _| | |  | |  | | | | |\/| |  _|     | || | | | | |\/| |\ V /   \ \ /\ / /|  _| |  _ \___ \| |  | | |  _|                                       
  \ V  V / | |___| |__| |__| |_| | |  | | |___    | || |_| | | |  | | | |     \ V  V / | |___| |_) ___) | |  | | | |___                                      
   \_/\_/  |_____|_____\____\___/|_|  |_|_____|   |_| \___/  |_|  |_| |_|      \_/\_/  |_____|____|____|___| |_| |_____|                                     
                                                                                                                                                             
                                                                                                                                                             
 ____  _     _____    _    ____  _____   __  __    _    _  _______  __   _____  _   _ ____  ____  _____ _     _____      _  _____   _   _  ___  __  __ _____ 
|  _ \| |   | ____|  / \  / ___|| ____| |  \/  |  / \  | |/ | ____| \ \ / / _ \| | | |  _ \/ ___|| ____| |   |  ___|    / \|_   _| | | | |/ _ \|  \/  | ____|
| |_) | |   |  _|   / _ \ \___ \|  _|   | |\/| | / _ \ | ' /|  _|    \ V | | | | | | | |_) \___ \|  _| | |   | |_      / _ \ | |   | |_| | | | | |\/| |  _|  
|  __/| |___| |___ / ___ \ ___) | |___  | |  | |/ ___ \| . \| |___    | || |_| | |_| |  _ < ___) | |___| |___|  _|    / ___ \| |   |  _  | |_| | |  | | |___ 
|_|   |_____|_____/_/   \_|____/|_____| |_|  |_/_/   \_|_|\_|_____|   |_| \___/ \___/|_| \_|____/|_____|_____|_|     /_/   \_|_|   |_| |_|\___/|_|  |_|_____|
                                                                                                                                                             

-->


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
                background: #09234b url('<?php echo get_template_directory_uri();?>/images/loading.svg') no-repeat center;
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

    <script>
    /*
		FOUC: Remove body pseudo element on page load.
		This is part of the method used to avoid the Flash Of Unstyled Content.
	*/
	jQuery(window).load(function () {
		jQuery('body').removeAttr('id');   
	});
    </script>
