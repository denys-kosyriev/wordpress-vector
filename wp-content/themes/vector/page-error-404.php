<?php
  //Template Name: Error 404
?>

<?php get_header(); ?>

<main class='error-404'>
  <section>
    <div class='container'>
      <div class='content'>
        <img src='<?php echo get_field('error_404_image') ?>' alt=''>
        <?php echo get_field('error_404_text') ?>
        <?php $link = get_field('error_404_link'); ?>
        <a href='<?php echo esc_url($link['url']) ?>' class='btn btn-full'>
          <?php echo esc_html($link['title']) ?>
        </a>
      </div>
    </div>
  </section>
</main>

<script src="./assets/js/main.js"></script>
</body>
</html>
