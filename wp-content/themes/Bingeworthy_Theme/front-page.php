<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bingeworthy_Theme
 */

get_header();

?>

<body>

  

<main class="frontmain">
  <div class="gray wrapper">
    <a href=" <?php echo get_site_url(); ?>/fried-rice"><section class="contentlanding">
      <h3 class="recipetop">RECIPES</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/img/bwbfriedrice.jpg">
      <div class="fiverecipe">
      <h1>5 RECIPES<br>FROM "BABISH"<br></h1>
      <h1>5 RECIPES<br>FROM "ME"<br></h1>
      <h2>FEATURING BINGING WITH BABISH'S ANDREW REA</h2>
      <h3>Learn more about YouTube's favorite cook in this review</h3>
    </div>
    </section>
  </a>
  </div>

</main>

<?php

get_footer();
?>

</body>

