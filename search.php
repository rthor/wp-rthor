<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

  <div id="main" class="main post" role="main">

  <?php if (have_posts()) : ?>

    <h2>Search Results</h2>

    <nav>
      <div><?php next_posts_link('&laquo; Older Entries') ?></div>
      <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </nav>

    <?php while (have_posts()) : the_post(); ?>

      <article class="archive">
        <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <time><?php the_time('l, F jS, Y') ?></time>
      </article>

    <?php endwhile; ?>

    <nav>
      <div><?php next_posts_link('&laquo; Older Entries') ?></div>
      <div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
    </nav>

  <?php else : ?>

    <div class="main">
      <div class="">
        <header><h2><em>No</em> posts found. Try a <em>different search</em>?</h2></header>
        <?php get_search_form(); ?>
      </div>
    </div>

  <?php endif; ?>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
