<?php
  //Template Name: Tariffs TV and All
?>

<?php get_header(); ?>

<main class='tariffs-page internet'>
  <div class='modal section-form modal-form d-none'>
    <?php get_template_part('./common/tariffs-form') ?>
  </div>
  <?php get_template_part('./modals/modal-channels') ?>
  <section class='top-radio-buttons'>
    <div>
      <div class='container'>
        <h2><?php echo get_field('slider_tariffs_title') ?></h2>
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
                    ?>
                    <a href='<?php echo esc_url($btn['url']) ?>'
                       class='btn btn-switch btn-small
                      <?php
                         if (get_sub_field('action_tab') === 'Активна'): ?>
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
          <div class='selected'>
            <div class='select'>
              <p>Для мешканців</p>
              <label>
                <select name='address'>
                  <option>
                    <a href='./all.html'>смт. Краснопавлівка</a>
                  </option>
                  <option>
                    <a href='./lozova.html'>м. Лозова, смт. Панютине</a>
                  </option>
                </select>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='tv all'>
    <div class='container'>
      <?php get_template_part('./common/slider-tariffs') ?>
    </div>
  </section>
  <section class='connection-tv'>
    <div class='container'>
      <div class='content'>
        <img src='<?php echo get_field('connection_tv_image') ?>' alt=''>
        <div>
          <?php echo get_field('connection_tv_title') ?>
          <p>
            <?php echo get_field('connection_tv_description') ?>
          </p>
          <button class='btn btn-full scroll-up'>
            <?php echo get_field('connection_tv_button') ?>
          </button>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
