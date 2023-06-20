<?php
  //Template Name: Shares
?>

<?php get_header(); ?>

<main class='shares'>
  <section>
    <div class='container'>
      <h2><?php echo get_field('shares_title') ?></h2>
      <div class='carts'>
        <?php if (have_rows('shares_action')) :
          while (have_rows('shares_action')) :
          the_row(); ?>
        <div class='cart p-relative'>
          <?php if (have_rows('title')) :
            while (have_rows('title')) :
              the_row(); ?>
              <p><?php echo get_sub_field('word_title') ?></p>
            <?php endwhile;
          endif; ?>
          <?php $action_btn = get_sub_field('button'); ?>
          <a href='<?php echo esc_url($action_btn['url']) ?>'
             class='btn <?php
//               if (get_sub_field('choice_color_button') === 'Зелена'): ?>
<!--                   btn-full-->
<!--                   --><?php //if (get_sub_field('choice_color_button') === 'Чорна'): ?>
<!--                      btn-black'>-->
<!--            --><?php //endif; ?>
            <?php echo esc_html($action_btn['title']) ?>
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
