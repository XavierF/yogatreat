<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<!-- Google Chrome Frame for IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>

	<!-- mobile meta (hooray!) -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<!-- or, set /favicon.ico for IE10 win -->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

			<!-- FONTS -->
			<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>

			<!-- wordpress head functions -->
			<?php wp_head(); ?>
			<!-- end of wordpress head -->

			<!-- drop Google Analytics Here -->
			<!-- end analytics -->
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/css/child.css">
		</head>

		<body <?php body_class(); ?>>
			<div class="wrapper">

				<header class="header" role="banner">
					<nav role="navigation">
						<div class="navbar navbar-inverse navbar-fixed-top">
							<div class="container">
								<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>

									<a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo( 'name' ) ?></a>

								</div><!-- end .navbar-header -->

								<div class="navbar-collapse collapse navbar-responsive-collapse">
									<?php bones_main_nav(); ?>
								</div><!-- end .navbar-collapse -->
										<div class="banner">
											<p>Save 15% Off Thru June 7th</p>
											<a href="http://clients.mindbodyonline.com/ws.asp?studio=YogaTreatCA&stype=40&prodid=101" class="btn btn-primary" target="_blank" >Sign up now</a>
										</div><!-- end #banner -->
							</div><!-- end .container -->
						</div> <!-- end .navbar navbar-inverse navbar-fixed-top -->
						
					</nav>

				</header> <!-- end header -->
