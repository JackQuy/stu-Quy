<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="profile" type="text/css" href="http://gmgp.org/xfn/11">
	<link rel="pingback" type="text/css" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php //wp_nav_menu(); ?>
	<div id="container"> 
		<div class="logo clearfix">
			<?php //quyjack_header();
				echo '<img src="http://localhost:8888/quy/wp-content/uploads/2020/06/logo.png">';
			 ?>
			<!--  -->
			<?php//jack_menu('primary-menu'); ?>
			<?php wp_nav_menu( array( // Hiển thị menu Desktop
		        'theme_location' => 'primary-menu',
		        'container' => 'nav',
		        'container_class' => 'primary-menu'
			 ) ); ?>

		</div>
		<div id="icon-menu" class="clearfix"><i class="fa fa-bars fa-2x"></i></div>
		<?php wp_nav_menu( array( // Hiển thị menu Desktop
		        'theme_location' => 'respon-menu',
		        'container' => 'nav',
		        'container_class' => 'respon-menu'
		) ); ?>
		<!-- <div id="respon-menu">
			<div>
				<ul>
					<li>
						<a href="#night_and_day" >HOME</a>
					</li>
					<li>
						<a href="#info" >INFO</a>
					</li>
					<li>
						<a href="#the_novellas">THE BOOK SERIES</a>
					</li>
					<li>
						<a href="#see_our_world">SEE OUR WORLD</a>
					</li>
					<li>
						<a href="#bazaar">BAZAAR</a>
					</li>
					<li>
						<a href="#the_crew">THE CREW</a>
					</li>
				</ul>
			</div>
		</div> -->
