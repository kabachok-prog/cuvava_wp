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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cuvava' ); ?></a>


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
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id' => 'primary-menu',
										'menu_class' => 'nav-list',
										// 'container' => 'nav'
									)
								);
								?>
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
					<!-- <?php get_search_form() ?> -->
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
						'menu_id' => 'header-menu',
						'menu_class' => 'cf',
						'container' => 'nav'
					)
				);
       </div>
    </div>
</header>

	
