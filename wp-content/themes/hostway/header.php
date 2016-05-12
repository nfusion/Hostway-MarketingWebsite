<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
	<link href='//fonts.googleapis.com/css?family=Raleway:400,400italic,600,500,300,600italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Dosis:400,500,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!-- Start header layout -->
	<header class="header">
		<div class="header-top hidden-xs hidden-sm">
			<div class="container">
				<div class="row">
					
					<div class="col-md-4 col-lg-5 header-top-left">
						<?php dynamic_sidebar( 'top_left' ); ?>
					</div>
					<div class="col-md-8 col-lg-7">
						<?php dynamic_sidebar( 'top_right' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					
					<div class="col-xs-6 col-sm-5 col-md-3">
						<?php if ( has_custom_logo() ) : ?>
							<div class="logo">
								<?php the_custom_logo(); ?>
							</div>
						<?php endif; ?>
					</div>

					<div class="col-xs-6 col-sm-7 col-md-9 visible-xs visible-sm">
						
						<div class="header-small-container">
							<div class="row">
								<div class="col-sm-6 hidden-xs">
									<?php dynamic_sidebar( 'top_left' ); ?>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="main_menu-small-container">
										<?php dynamic_sidebar( 'top_right' ); ?>
										<div class="main_menu-small">
											<button class="main_menu-button button-open" type="button">
											  	<span class="main_menu-button-row"></span>
											  	<span class="main_menu-button-row"></span>
											  	<span class="main_menu-button-row"></span>
											</button>
											<div class="page-overflow"></div>
											<div class="main_menu-small-fixedMenu" id="main_menu_fixed">
												<div class="fixedMenu-topPanel">
													<div class="title">Menu</div>
													<div class="button">
														<button class="main_menu-button" type="button"></button>
													</div>
												</div>
												<div class="fixedMenu-search">
													<?php get_search_form(); ?>
												</div>
												<div class="fixedMenu-sales_supports row">
													<?php dynamic_sidebar( 'top_left' ); ?>
												</div>
												<div class="fixedMenu-menu">
													<?php
														wp_nav_menu(
															array(
																'theme_location' => 'primary',
																'menu_class'     => 'main-menu-fixed js--main-menu',
																'container'      => '',
															)
														);
													?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-9 hidden-xs hidden-sm">
						<div class="main_search">
					    	<div class="main_search-button"></div>
					    	<div class="main_search-form">
				    			<?php get_search_form(); ?>
					    	</div>
					    </div>
						<div class="main_menu collapse navbar-collapse hidden-xs hidden-sm" id="main_menu">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_class'     => 'nav navbar-nav main-menu js--main-menu',
										'container'      => '',
									)
								);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- End header layout -->

	<!-- Start content layout -->
	<section class="main">
		<div class="withoutBanner"></div>