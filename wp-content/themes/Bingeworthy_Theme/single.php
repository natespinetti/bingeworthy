<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bingeworthy_Theme
 */

get_header();

?>

	<?php
	
		while ( have_posts() ) :
			the_post();

	?>
  

	<main>

		<article id="one">
      <div class="initial">
      <h3 class="foodtitle"><?php the_field('initialtitle'); ?></h3>
      <p class="fooddesc"><?php the_field('initialdesc1'); ?></p>
      <!-- <button href="#inner" id="showone">SHOW MORE</button> -->
      <img src="<?php the_field('initialimg1'); ?>">

<div class="nexttop">
  <p>up next</p>
  <div class="nexttext">

    <?php
  // get a reference to the feature image and size it at 100x100
  $nextPost = get_next_post(true);
  // get a reference to a custom field with the name of 'summary'
  if(!$nextPost){
    $prevthumbnail = get_the_post_thumbnail(10, array(100,100));
    echo '<a href="' . get_permalink(10) . '">' . get_the_post_thumbnail(10, array(100,100)) . '<h3>' . get_the_title(10); '</h3>' . '</a>';
    }else{
      $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100));
    // print link containing a <div> called "next" containing the feature image, a custom field (in a <h3>) and the title of the page (in a <p>)
    next_post_link('%link',"$nextthumbnail <h3>%title</h3>", TRUE);
  }

?>
          

</div>
</div>


        </a>
      <div class="video">
        <div class="colorvideo"></div>
        <div class="bgvideo"></div>
      <iframe autoplay loop class="thevideo" <?php the_field('video1'); ?> width="100%"  frameborder="0" allowfullscreen></iframe>
    </div>
  </div>

    <div id="inner">
    <div id="one" class="innbg">
      <div class="innerrecipe wrapper">
        <h1 class="thetitle"><?php the_field('titleinner'); ?></h1>

      <div class="ingredients">

        <h2>Some things you need:</h2>

        <?php the_field('ingredients_1'); ?>

      </div>

      <iframe autoplay loop class="thevideo" <?php the_field('video1'); ?> width="100%"  frameborder="0" allowfullscreen></iframe>
      <div class="vidback">
        <h3><?php the_field('credit1'); ?></h3>
      </div>

      <p><?php the_field('bodyinner1'); ?></p>

    </div>

      <section class="bottomnav">
        <div class="wrapper">

                <div class="back">
  <p>previously</p>
  <div class="backtext">

<?php

$prevPost = get_previous_post(true);

if(!$prevPost){
    $prevthumbnail = get_the_post_thumbnail(18, array(100,100));
    echo '<a href="' . get_permalink(18) . '">' . get_the_post_thumbnail(18, array(100,100)) . '<h3>' . get_the_title(18); '</h3>' . '</a>';
} else {
    $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100));
    previous_post_link('%link',"$prevthumbnail <h3>%title</h3>", TRUE);
}

?>
          

</div>
</div>


        <div class="next">
  <p>up next</p>
  <div class="nexttext">

    <?php
  // get a reference to the feature image and size it at 100x100
  $nextPost = get_next_post(true);
  // get a reference to a custom field with the name of 'summary'
  if(!$nextPost){
    $prevthumbnail = get_the_post_thumbnail(10, array(100,100));
    echo '<a href="' . get_permalink(10) . '">' . get_the_post_thumbnail(10, array(100,100)) . '<h3>' . get_the_title(10); '</h3>' . '</a>';
    }else{
      $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100));
    // print link containing a <div> called "next" containing the feature image, a custom field (in a <h3>) and the title of the page (in a <p>)
    next_post_link('%link',"$nextthumbnail <h3>%title</h3>", TRUE);
  }

?>
          

</div>
</div>
</div>



      </section>

      <div class="fanmade">
        <div class="wrapper">
        <h2>FAN MADE DISHES</h2>
        <ul>
          <li><a href="<?php the_field('fanimg1link'); ?>"><img src="<?php the_field('fanimg1'); ?>"></a></li>
          <li><a href="<?php the_field('fanimg2link'); ?>"><img src="<?php the_field('fanimg2'); ?>"></a></li>
          <li><a href="<?php the_field('fanimg3link'); ?>"><img src="<?php the_field('fanimg3'); ?>"></a></li>
        </ul>

      </div>

      </div>

  </div>
</div>

    </article>

    <article id="two">
      <div class="initial">
      <h3 class="foodtitle"><?php the_field('initialtitle'); ?></h3>
      <p class="fooddesc"><?php the_field('initialdesc2'); ?></p>
      <!-- <button id="showone">SHOW MORE</button> -->
      <img src="<?php the_field('initialimg2'); ?>">
      <div class="nexttop">
  <p>up next</p>
  <div class="nexttext">

    <?php
  // get a reference to the feature image and size it at 100x100
  $nextPost = get_next_post(true);
  // get a reference to a custom field with the name of 'summary'
  if(!$nextPost){
    $prevthumbnail = get_the_post_thumbnail(10, array(100,100));
    echo '<a href="' . get_permalink(10) . '">' . get_the_post_thumbnail(10, array(100,100)) . '<h3>' . get_the_title(10); '</h3>' . '</a>';
    }else{
      $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100));
    // print link containing a <div> called "next" containing the feature image, a custom field (in a <h3>) and the title of the page (in a <p>)
    next_post_link('%link',"$nextthumbnail <h3>%title</h3>", TRUE);
  }

?>
          

</div>
</div>
      <div class="video">
        <div class="colorvideo"></div>
        <div class="bgvideo"></div>
      <iframe autoplay loop class="thevideo" width="100%" <?php the_field('video2'); ?> allowfullscreen frameborder="0"></iframe>
    </div>
  </div>

    <div id="inner">
    <div id="two" class="innbg">
      <div class="innerrecipe wrapper">
      <h1 class="thetitle"><?php the_field('titleinner'); ?></h1>

      <div class="ingredients">

        <h2>Some things you need:</h2>

        <?php the_field('ingredients_2'); ?>

      </div>
      <iframe autoplay loop class="thevideo" width="100%" <?php the_field('video2'); ?> allowfullscreen frameborder="0"></iframe>
      <div class="vidback">
        <h3><?php the_field('credit2'); ?></h3>
      </div>

      <p><?php the_field('bodyinner2'); ?></p>

    </div>

<section class="bottomnav">
        <div class="wrapper">

                <div class="back">
  <p>previously</p>
  <div class="backtext">

<?php

$prevPost = get_previous_post(true);

if(!$prevPost){
    $prevthumbnail = get_the_post_thumbnail(18, array(100,100));
    echo '<a href="' . get_permalink(18) . '">' . get_the_post_thumbnail(18, array(100,100)) . '<h3>' . get_the_title(18); '</h3>' . '</a>';
} else {
    $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100));
    previous_post_link('%link',"$prevthumbnail <h3>%title</h3>", TRUE);
}

?>
          

</div>
</div>


        <div class="next">
  <p>up next</p>
  <div class="nexttext">

    <?php
  // get a reference to the feature image and size it at 100x100
  $nextPost = get_next_post(true);
  // get a reference to a custom field with the name of 'summary'
  if(!$nextPost){
    $prevthumbnail = get_the_post_thumbnail(10, array(100,100));
    echo '<a href="' . get_permalink(10) . '">' . get_the_post_thumbnail(10, array(100,100)) . '<h3>' . get_the_title(10); '</h3>' . '</a>';
    }else{
      $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100));
    // print link containing a <div> called "next" containing the feature image, a custom field (in a <h3>) and the title of the page (in a <p>)
    next_post_link('%link',"$nextthumbnail <h3>%title</h3>", TRUE);
  }

?>
          

</div>
</div>
</div>



      </section>

      <div class="fanmade">
        <div class="wrapper">
        <h2>FAN MADE DISHES</h2>
        <ul>
          <li><a href="<?php the_field('fanimg1link'); ?>"><img src="<?php the_field('fanimg1'); ?>"></a></li>
          <li><a href="<?php the_field('fanimg2link'); ?>"><img src="<?php the_field('fanimg2'); ?>"></a></li>
          <li><a href="<?php the_field('fanimg3link'); ?>"><img src="<?php the_field('fanimg3'); ?>"></a></li>
        </ul>

      </div>

      </div>

  </div>
</div>

    </article>

<!-- 		<div class="post-nav">

			<?php

				// display an <a> tag with the name of the previous post
				// previous_post_link('%link');

				// display an <a> tag with the name of the next post
				// next_post_link('%link');

			?>

		</div> -->

	</main>

	<?php

		endwhile;

	?>

<?php

get_footer();
