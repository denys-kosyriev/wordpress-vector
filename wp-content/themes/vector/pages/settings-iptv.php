<?php
  //Template Name: Settings IPTV
?>

<?php get_header(); ?>

  <main class='settings-iptv'>
    <section>
      <div class='container'>
        <h2><?php echo get_the_title() ?></h2>
        <?php echo get_field('settings_iptv_content_before_image') ?>
        <img src='<?php echo get_field('settings_iptv_image') ?>' alt=''>
        <?php echo get_field('settings_iptv_content_after_image') ?>
      </div>
    </section>
  </main>

<?php get_footer(); ?>