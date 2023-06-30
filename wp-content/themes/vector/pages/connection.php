<?php
  //Template Name: Connection

  wp_enqueue_script('connection', get_template_directory_uri() . '/assets/js/connection.js');
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
              <?php if (have_rows('tabs')) :
                while (have_rows('tabs')) :
                  the_row(); ?>
                  <li>
                    <?php $btn = get_sub_field('tab'); ?>
                    <a href='<?php echo esc_url($btn['url']) ?>'
                       class='btn btn-switch
                   <?php if (get_sub_field('action_tab') === 'Активна'): ?>
                       active
                       <?php endif; ?>
                    '>
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
        <?php get_template_part('./common/tariffs-form') ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

