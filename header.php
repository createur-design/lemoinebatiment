<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<style>
			#loader{
				position: fixed;
				top:0;
				left:0;
				width:100%;
				height:100vh;
				background-color:#fff;
				display: flex;
				justify-content: center;
				align-items: center;
				z-index:9999;
			}
		</style>

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

			<div id="loader">
				<p>page en cours de chargement...</p>
			</div>

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="row">
					<div class="small-12 columns">
						<div class="call">
							<img src="<?php echo get_template_directory_uri(); ?>/img/pictos/call.png" alt=""><a href="tel:0321413915">03 21 41 39 15</a>
						</div>						
					</div>
				</div>

				<div class="row align-bottom align-center">
					<div class="small-12 medium-6 large-4 columns">
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img
									src="<?php echo get_template_directory_uri(); ?>/img/lemoine-batiment-logo.jpg" alt="Lemoine Bâtiment Logo"
									class="logo-img bigLogo"
								>
							</a>
						</div>
						<!-- /logo -->
					</div>
					<div class="small-12 medium-12 large-8 columns">
						<!-- nav -->
						<nav class="nav" role="navigation">
							<div class="bt-menu"><span class="ion-navicon"></span>NAVIGATION</div>
							<?php wp_nav_menu(array('menu_id' => 'menu')); ?>
						</nav>
						<!-- /nav -->
					</div>
				</div>

			</header>
			<!-- /header -->
