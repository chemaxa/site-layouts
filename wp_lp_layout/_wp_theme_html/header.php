<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Заголовок</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/animate/animate.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/linea/styles.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/skins/<?php
	$options = get_option('sample_theme_options');
	echo $options['selectinput']; ?>.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media.css" />
	<?php wp_head(); ?>
</head>

<body>

	<div class="loader">
		<div class="loader_inner"></div>
	</div>
	<header class="main_head  main_color_bg" data-parallax="scroll" data-image-src="<?php echo get_background_image();?>" data-z-index="1"> 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="logo_wrap">

						<?php dynamic_sidebar( 'logo' ); ?>


					</div>
					<div class="toggle_menu">
						<div class="sandwich">
							<div class="sw-topper"></div>
							<div class="sw-bottom"></div>
							<div class="sw-footer"></div>
						</div>
					</div>
					<nav class="top_menu">
						<ul>
							<li>
								<a href="#about">Обо мне</a>
							</li>
							<li>
								<a href="#resume">Резюме</a>
							</li>
							<li>
								<a href="#portfolio">Портфолио</a>
							</li>
							<li>
								<a href="#contacts">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>

			</div>
		</div>
		<div class="top_wrapper">
			<div class="top_text">
				<h1><?php echo get_bloginfo( 'name' ); ?> </h1>
				<p><?php echo get_bloginfo( 'description' ); ?> </p>
			</div>
		</div>
	</header>