<?php get_header(); ?>

<main class='shares'>
  <section>
    <div class='container'>
      <h2>Акції</h2>
      <div class='carts'>
        <?php if (have_rows('shares')) :
          while (have_rows('shares')) :
            the_row(); ?>
            <div class='cart p-relative'>
              <p><?php echo get_sub_field('title1') ?></p>
              <p><?php echo get_sub_field('title2') ?></p>
              <?php $internet_btn = get_sub_field('button'); ?>
              <a href='<?php echo esc_url($internet_btn['url']) ?>' class='btn btn-black'>
                <?php echo esc_html($internet_btn['title']) ?>
              </a>
              <img src='<?php echo get_sub_field('image') ?>' alt='' class='bg-cover-absolute'>
            </div>
          <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
