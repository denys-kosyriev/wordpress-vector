<?php
  //Template Name: Support
?>

<?php get_header(); ?>

<main class='support'>
  <section class='possibilities'>
    <div class='container'>
      <h2><?php echo get_field('support_title') ?></h2>
      <div class='swiper swiper-support'>
        <div class='swiper-wrapper'>
          <?php if (have_rows('support_info')) :
            while (have_rows('support_info')) :
              the_row(); ?>
              <div class='swiper-slide'>
                <div class='possibility'>
                  <div class='circle'>
                    <img src='<?php echo get_sub_field('image') ?>' alt=''>
                  </div>
                  <?php echo get_sub_field('description') ?>
                  <?php $link = get_sub_field('link'); ?>
                  <a href='<?php echo esc_url($link['url']) ?>' target='_blank'>
                    <?php echo esc_html($link['title']) ?>
                  </a>
                </div>
              </div>
            <?php endwhile;
          endif; ?>
        </div>
        <div class='swiper-pagination'></div>
      </div>
    </div>
  </section>
  <section class='help'>
    <div class='container'>
      <h2><?php echo get_field('support_title2') ?></h2>
      <div class='content'>
        <?php if (have_rows('support_questions')) :
          while (have_rows('support_questions')) :
            the_row(); ?>
            <?php $question = get_sub_field('question'); ?>
            <a href='<?php echo esc_url($question['url']) ?>'>
              <?php echo esc_html($question['title']) ?>
            </a>
          <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
