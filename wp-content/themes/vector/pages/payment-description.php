<?php
  //Template Name: Payment Description
?>

<?php get_header(); ?>

  <main class='payment-description'>
    <section>
      <div class='container'>
        <h2>
          <?php echo get_field('payment_title') ?>
        </h2>
        <ul>
          <?php if (have_rows('payment_instruction')) :
            while (have_rows('payment_instruction')) :
              the_row(); ?>
              <li>
                <div>
                  <?php echo get_sub_field('text') ?>
                  <?php $link = get_sub_field('link'); ?>
                  <a href='<?php echo esc_url($link['url']) ?>' target='_blank'>
                    <?php echo esc_html($link['title']) ?>
                  </a>
                </div>
                <img src='<?php echo get_sub_field('image') ?>' alt=''>
              </li>
            <?php endwhile;
          endif; ?>
        </ul>
      </div>
    </section>
  </main>

<?php get_footer(); ?>