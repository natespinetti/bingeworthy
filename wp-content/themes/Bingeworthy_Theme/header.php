<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bingeworthy_Theme
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

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'Bingeworthy_Theme' ); ?></a>

	<!-- Add your header HTML here -->



  <?php if(is_front_page()): ?>

<a href="https://www.bonappetit.com/"><div class="frontheader">
    <img src="<?php echo get_template_directory_uri(); ?>/img/bonwhite.png">
  </div></a>

<? else: ?>

    <header>
    <div class="recipes">
      <h2>RECIPES</h2>
      <div class="colorbg"></div>
    </div>

        <nav class="toggle-nav">
    <button class="bab" data-tab="one">babish</button>
    <button class="me" data-tab="two">me</button>
  </nav>

  <a class="headimg" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logoblack.png"></a>

  <div class="bottomheader"></div>

<?php get_template_part( 'template-parts/main-menu' ); ?>

        
  </header>

<!-- Do something else -->

<?php endif; ?>