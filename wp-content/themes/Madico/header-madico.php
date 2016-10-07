<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’)) ob_start(“ob_gzhandler”); else ob_start();

header('Cache-Control: max-age=900');

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="utf-8">
    <!-- Meta tag used to avoid the zooming -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="robots" content="noindex, nofollow" />
        <meta name="format-detection" content="telephone=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" type="image/x-icon" href="<?php bloginfo( 'template_directory'); ?>/images/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo( 'template_directory'); ?>/images/favicon.ico">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
        <div class="header-container">
                <div class="header-bg">
                    <div class="inner-header-bg">
                        <div class="container">
                                <div class="inner-header">
                                    <div class="branding">
                                        <a href="<?php echo home_url(); ?>" id="siteurl" class="hlogo"><img src="<?php echo get_template_directory_uri(); ?>/images/mad-dd-hdr-logo.png" height="35" alt=""></a>
                                        <div class="htext">
                                            <h4>Dealer <br class="visible-xs visible-sm"/> Directory</h4>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
</header>
