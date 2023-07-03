<?php
  //Template Name: Shares
?>

<?php get_header(); ?>

<main class='shares'>
  <section>
    <div class='container'>
      <h2><?php echo get_the_title() ?></h2>
      <div class='carts'>
        <?php query_posts(array(
          'post_type' => 'shares'
        ));
          while (have_posts()) : the_post(); ?>
            <div class='cart p-relative'>
              <p><?php the_title() ?></p>
              <a href='<?php the_permalink() ?>'
                 class='btn
                  <?php
                   if (get_field('choice_color_button') === 'Зелена'): ?>
                   btn-full
                   <?php elseif (get_field('choice_color_button') === 'Чорна'): ?>
                      btn-black
                <?php endif; ?>
                  '>
                Детальніше
              </a>
              <div class='img'>
                <?php the_post_thumbnail() ?>
              </div>
            </div>
          <?php endwhile; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
