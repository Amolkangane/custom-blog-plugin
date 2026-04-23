<?php get_header(); ?>

<h1><?php the_title(); ?></h1>

<?php the_post_thumbnail(); ?>

<div>
  <?php the_content(); ?>
</div>

<?php get_footer(); ?>
