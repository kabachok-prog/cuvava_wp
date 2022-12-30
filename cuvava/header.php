<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cuvava
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>MDsimple</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="header-container">
			<div class="header-top">
				<div class="top-left-side">
					<div class="nav-bottom">
						<nav class="header__nav nav-bar">
							<div class="toggle-menu">
								<div class="line line1"></div>
								<div class="line line2"></div>
								<div class="line line3"></div>
							</div>
							<div class="ul" style="display: flex; flex-direction: column;">
								<ul class="nav-list">
									<li class="nav-list-item"><a href="/index.html" class="nav-link">Home</a></li>
									<li class="nav-list-item"><a href="/pages/doctor.html" class="nav-link">Doctor</a>
									</li>
									<li class="nav-list-item">
										<a href="/pages/dispensaries.html" class="nav-link">Dispensaries</a>
									</li>
									<li class="nav-list-item"><a href="/pages/products.html"
											class="nav-link">Products</a></li>
									<li class="nav-list-item">
										<a href="/pages/blog.html" class="nav-link">Blog</a>
									</li>
								</ul>
								<ul class="nav-list" style="flex-direction: row; margin-top: 50px;">
									<li class="nav-list-item"><a href="/pages/logIn.html" class="nav-link">Log In</a>
									</li>
									<li class="nav-list-item" style="margin-left: 30px;"><a href="/pages/signup.html"
											class="nav-link">Sign Up</a></li>
								</ul>
							</div>
						</nav>
					</div>
					<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php bloginfo('template_url') ?>/assets/img/logo.png" alt="">
					</a>
					<form class="search__form">
						<input class="search__form-input" type="text" name="text" class="search" placeholder="Dispensaties, doctors, products...">
						<!-- <input type="submit" name="submit" class="submit" value="Search"> -->
					</form>
				</div>
				<div class="profile">
					<img src="" alt="">
				</div>
			</div>
			<div class="header-list">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
						'menu_class' => 'cf',
						'container' => 'nav'
					)
				);
				?>
				<!-- <ul class="cf">
					<li><a href="/index.html">Home</a></li>
					<li><a href="./pages/doctor.html">Doctor</a></li>
					<li><a href="./pages/dispensaries.html">Dispensaries</a></li>
					<li><a href="./pages/products.html">Products</a></li>
					<li><a href="./pages/blog.html">Blog</a></li>
				</ul>
				<ul class="cf">
					<li><a href="/pages/logIn.html">Log In</a></li>
					<li><a href="/pages/signup.html">Sign Up</a></li>
				</ul> -->
			</div>
		</div>
	</header>