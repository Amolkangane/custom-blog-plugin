<?php get_header(); ?>

<h2>Blog Posts</h2>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="blog-card">
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
    <h3><?php the_title(); ?></h3>
    <p><?php the_excerpt(); ?></p>
  </a>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
