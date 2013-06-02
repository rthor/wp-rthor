<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" class="main big" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header>
      <p class="meta"><time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time> | <?php the_category(', ') ?></p>
      <h2><?php the_title(); ?></a></h2>
    </header>
    <?php the_content('Read the rest of this entry &raquo;'); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

    <?php comments_template(); ?>

  </article>

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>

<?php get_footer(); ?>
