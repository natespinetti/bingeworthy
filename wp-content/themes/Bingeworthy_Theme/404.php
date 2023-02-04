<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bingeworthy_Theme
 */

get_header();
?>

	<main id="primary" class="fourthe">

		<section class="error-404 not-found">
			<section class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'Bingeworthy_Theme' ); ?></h1>
			</section><!-- .page-header -->
			<div class="page-content">
				<p><?php esc_html_e( 'It looks there are no recipes at this location. Maybe search for one or click the recipes menu above?', 'Bingeworthy_Theme' ); ?></p>

				<?php 
				get_search_form();
				?>

			</div>
		</section>

			    <h2>404</h2>
    
<iframe autoplay loop class="thevideo" src="https://www.youtube.com/embed/GrokvbrqoT4?autoplay=1&mute=1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" width="100%"  frameborder="0" allowfullscreen></iframe>
      <div class="vidback">



			

	</main>

<?php
get_footer();
