<?php
  //Template Name: Connection
?>

<?php get_header(); ?>

<main class='connection net'>
  <section class='top-radio-buttons'>
    <div class='container'>
      <h2><?php echo get_field('connection_title') ?></h2>
    </div>
    <div class='flex'>
      <div class='container'>
        <div class='wrapper'>
          <div class='buttons'>
            <ul>
              <?php if (have_rows('switch')) :
                while (have_rows('switch')) :
                  the_row(); ?>
                  <li>
                    <?php $btn = get_sub_field('button'); ?>
                    <a href='<?php echo esc_url($btn['url']) ?>' class='btn btn-switch btn-small <?php echo get_sub_field('class_name') ?>'>
                      <?php echo esc_html($btn['title']) ?>
                    </a>
                  </li>
                <?php endwhile;
              endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='section-form block-form'>
    <div class='container'>
      <div class='wrapper-form p-relative'>
        <div class='circle'></div>
        <div class='circle'></div>
        <div class='circle'></div>
        <?php get_template_part('Tariffs-form') ?>
      </div>
    </div>
  </section>
  <?php get_template_part('connection-internet') ?>
  <?php get_template_part('connection-tv') ?>
</main>

<?php get_footer(); ?>

