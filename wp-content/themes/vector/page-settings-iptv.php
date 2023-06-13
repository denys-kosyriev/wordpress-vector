<?php get_header(); ?>

<main class='settings-iptv'>
  <section>
    <div class='container'>
      <h2><?php echo get_field('settings_iptv_title') ?></h2>
      <?php if (have_rows('settings_iptv_text_before_image')) :
        while (have_rows('settings_iptv_text_before_image')) :
          the_row(); ?>
          <p>
            <?php echo get_sub_field('text') ?>
            <?php $link = get_sub_field('link'); ?>
            <a href='<?php echo esc_url($link['url']) ?>' target='_blank'>
              <?php echo esc_html($link['title']) ?>
            </a>
            <?php echo get_sub_field('text2') ?>
            <?php $link2 = get_sub_field('link2'); ?>
            <a href='<?php echo esc_url($link2['url']) ?>' target='_blank'>
              <?php echo esc_html($link2['title']) ?>
            </a>
          </p>
        <?php endwhile;
      endif; ?>
      <img src='<?php echo get_field('settings_iptv_image') ?>' alt=''>
      <?php if (have_rows('settings_iptv_text_after_image')) :
        while (have_rows('settings_iptv_text_after_image')) :
          the_row(); ?>
          <p>
            <?php echo get_sub_field('text') ?>
          </p>
        <?php endwhile;
      endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
