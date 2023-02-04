<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bingeworthy_Theme
 */

?>

<?php if(is_front_page()): ?>

    <footer class="frontfoot">
    <p>Food Innovation Group: Bon Appétit and Epicurious</p>
  </footer>

  <? else: ?>



  <footer>
    <div class="wrapper">
    <a href="https://www.bonappetit.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/bonwhite.png"></a>

    <ul>
      <li><a href="https://www.youtube.com/user/bgfilms"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png"></a></li>
      <li><a href="https://www.instagram.com/nathanspinetti/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png"></a></li>
     <li> <a href="https://vimeo.com/user95946317"><img src="<?php echo get_template_directory_uri(); ?>/img/vimeo.png"></a></li>
    </ul>
  </div>
  </footer>

	<!-- Add your footer HTML here -->

<?php wp_footer(); ?>

</body>
</html>

<?php endif; ?>
