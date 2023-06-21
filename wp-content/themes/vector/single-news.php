<?php
  //Template Name: Blog
?>

<?php get_header(); ?>

<main class='blog'>
  <section class='top'>
    <div class='container'>
      <div class='content'>
        <h1><?php the_title() ?></h1>
      </div>
    </div>
  </section>
  <section>
    <?php the_post_thumbnail() ?>
  </section>
  <section class='bottom'>
    <div class='container'>
      <div class='content'>
        <?php the_excerpt() ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
