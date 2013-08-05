<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<!DOCTYPE HTML>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui-1.10.1.custom.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" id="camera-css"  href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css" type="text/css" media="screen">
	
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
	 
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.1.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider/functions.js" ></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slider/script.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/radio.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
	
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/js.js"></script>
	
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.src.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#ajax-contact-form").submit(function() {
				var str = $(this).serialize();		
				$.ajax({
					type: "POST",
					url: "contact_form/contact_process.php",
					data: str,
					success: function(msg) {
						// Message Sent - Show the 'Thank You' message and hide the form
						if(msg == 'OK') {
							result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
							$("#fields").hide();
						} else {
							result = msg;
						}
						$('#note').html(result);
					}
				});
				return false;
			});

		});		
	</script>
	<script type="text/javascript">$($.date_input.initialize);</script>
	<?php wp_head(); ?>
	
</head>

<body  <?php body_class(); ?>>
	
<div class="menu">	
	<div class="container clearfix">

		<div id="logo" class="fleft">
			<a href="javascript:void(0);"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" ><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
		</div>
		
		
			<?php if ( is_active_sidebar( 'top-header' ) ) : ?>
				<?php dynamic_sidebar( 'top-header' ); ?>			
			<?php endif; ?>
	
		 <?php /*wp_nav_menu( array('theme_location'  => 'primary',	'menu'  => '',	'container'       => 'div',	'container_class' => 'fright','container_id'    => 'nav',		'menu_class'      => 'navigation',	'menu_id'         => '',	)); */ ?>
		

	
	</div>
</div>