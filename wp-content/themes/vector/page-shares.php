<?php get_header(); ?>

<main class='shares'>
  <?php if (have_rows('shares')) :
    while (have_rows('shares')) :
    the_row(); ?>
  <section>
    <div class='container'>
      <h2><?php echo get_sub_field('title') ?></h2>
      <div class='carts'>
        <?php if (have_rows('action')) :
          while (have_rows('action')) :
            the_row(); ?>
            <div class='cart p-relative'>
              <p><?php echo get_sub_field('title1') ?></p>
              <p><?php echo get_sub_field('title2') ?></p>
              <?php $action_btn = get_sub_field('button'); ?>
              <a href='<?php echo esc_url($action_btn['url']) ?>' class='btn btn-black'>
                <?php echo esc_html($action_btn['title']) ?>
              </a>
              <img src='<?php echo get_sub_field('image') ?>' alt='' class='bg-cover-absolute'>
            </div>
          <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>
    <?php endwhile;
  endif; ?>
</main>

<?php get_footer(); ?>
