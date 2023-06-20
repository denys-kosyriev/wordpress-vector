<?php
  //Template Name: Settings
?>

<?php get_header(); ?>

  <main class='settings'>
    <section>
      <div class='container'>
        <?php if (have_rows('settings')) :
          while (have_rows('settings')) :
            the_row(); ?>
            <h2><?php echo get_sub_field('title') ?></h2>
            <div class='swiper swiper-settings'>
              <div class='swiper-wrapper'>
                <?php if (have_rows('programs')) :
                  while (have_rows('programs')) :
                    the_row(); ?>
                    <div class='swiper-slide'>
                      <div class='setting'>
                        <img src='<?php echo get_sub_field('logotype') ?>' alt=''>
                        <?php echo get_sub_field('setting') ?>
                        <h3><?php echo get_sub_field('title_program') ?></h3>
                        <?php $link = get_sub_field('button'); ?>
                        <a href='<?php echo esc_url($link['url']) ?>' target='_blank' class='btn btn-full'>
                          <?php echo esc_html($link['title']) ?>
                        </a>
                      </div>
                    </div>
                  <?php endwhile;
                endif; ?>
              </div>
              <div class='swiper-pagination'></div>
            </div>
          <?php endwhile;
        endif; ?>
      </div>
    </section>
  </main>

<?php get_footer(); ?>