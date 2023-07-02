<?php get_header();
  wp_enqueue_script('date-js', get_template_directory_uri() . '/assets/js/date.js');
?>

<main class='blog'>
  <section class='top'>
    <div class='container'>
      <div class='content'>
        <h1><?php the_title() ?></h1>
        <div class='date d-none'><?php echo get_field('date') ?></div>
      </div>
    </div>
  </section>
  <section class='blog-img'>
    <?php the_post_thumbnail() ?>
  </section>
  <section class='bottom'>
    <div class='container'>
      <div class='content'>
        <?php the_content() ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
