<?php get_header(); ?>

<main class='blog'>
  <?php if (have_rows('blog')) :
    while (have_rows('blog')) :
    the_row(); ?>
  <section class='top'>
    <div class='container'>
      <h1><?php echo get_sub_field('title') ?></h1>
      <?php if (have_rows('text_before_image')) :
        while (have_rows('text_before_image')) :
          the_row(); ?>
          <p>
            <?php echo get_sub_field('text') ?>
          </p>
        <?php endwhile;
      endif; ?>
    </div>
  </section>
  <section>
    <img src='<?php echo get_sub_field('image') ?>' alt='' class='blog-img'>
  </section>
  <section class='bottom'>
    <div class='container'>
      <?php if (have_rows('text_after_image')) :
        while (have_rows('text_after_image')) :
          the_row(); ?>
          <p>
            <?php echo get_sub_field('text') ?>
          </p>
        <?php endwhile;
      endif; ?>
      <?php endwhile;
        endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
