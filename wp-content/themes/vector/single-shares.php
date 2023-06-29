

<?php get_header(); ?>

<main class='blog'>
  <section class='top'>
    <div class='container'>
      <div class='content'>
        <h1><?php the_title() ?></h1>
        <div class='date'>
          <?php echo get_the_date() ?>
        </div>
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
