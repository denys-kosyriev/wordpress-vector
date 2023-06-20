<?php
  //Template Name: Tariffs Internet
?>

<?php get_header(); ?>

<main class='tariffs-page internet'>
  <div class='modal section-form modal-form d-none'>
    <?php get_template_part('./common/tariffs-form') ?>
  </div>
  <section class='top-radio-buttons'>
    <div>
      <div class='container'>
        <h2><?php echo get_field('tariffs_title') ?></h2>
      </div>
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
                    <?php
                      $btn = get_sub_field('tab');
                      var_dump(get_sub_field('action_tab'));
                      var_dump(get_sub_field('action_tab'=== "Активна"));
                    ?>
                    <a href='<?php echo esc_url($btn['url']) ?>'
                       class='btn btn-switch btn-small
                      <?php
                         if (get_sub_field('action_tab' === 'Активна')): ?>
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
  <section class='tariffs-page internet'>
    <div class='container'>
      <?php get_template_part('./common/slider-tariffs') ?>
    </div>
  </section>
  <?php get_template_part('./sections/connection-internet') ?>
</main>

<?php get_footer(); ?>
