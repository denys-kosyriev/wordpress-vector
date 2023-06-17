<?php
  //Template Name: Advertising
?>

<?php get_header(); ?>

<main class='blog'>
  <section class='top'>
    <div class='container'>
      <div class='content'>
        <h1><?php echo get_field('blog_title') ?></h1>
        <?php if (have_rows('blog_text_before_image')) :
          while (have_rows('blog_text_before_image')) :
            the_row(); ?>
            <p>
              <?php echo get_sub_field('text') ?>
            </p>
          <?php endwhile;
        endif; ?>
        <?php if (have_rows('blog_link_before_image')) :
          while (have_rows('blog_link_before_image')) :
            the_row(); ?>
            <?php
            $link = get_sub_field('link');
            ?>
            <a href='<?php echo esc_url($link['url']) ?>' target='_blank'>
              <?php echo esc_html($link['title']) ?>
            </a>
          <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>
  <section>
    <img src='<?php echo get_field('blog_image') ?>' alt='' class='blog-img'>
  </section>
  <section class='bottom'>
    <div class='container'>
      <div class='content'>
        <?php if (have_rows('blog_text_after_image')) :
          while (have_rows('blog_text_after_image')) :
            the_row(); ?>
            <p>
              <?php echo get_sub_field('text') ?>
            </p>
          <?php endwhile;
        endif; ?>
        <?php if (have_rows('blog_link_after_image')) :
          while (have_rows('blog_link_after_image')) :
            the_row(); ?>
            <?php
            $link = get_sub_field('link');
            ?>
            <a href='<?php echo esc_url($link['url']) ?>' target='_blank'>
              <?php echo esc_html($link['title']) ?>
            </a>
          <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
