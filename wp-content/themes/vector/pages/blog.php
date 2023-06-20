<?php
  //Template Name: Blog
?>

<?php get_header(); ?>

<main class='blog'>
  <section class='top'>
    <div class='container'>
      <div class='content'>
        <h1><?php echo get_field('blog_title') ?></h1>
      </div>
    </div>
  </section>
  <section>
    <img src='<?php echo get_field('blog_image') ?>' alt='' class='blog-img'>
  </section>
  <section class='bottom'>
    <div class='container'>
      <div class='content'>
        <?php echo get_field('blog-content') ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
