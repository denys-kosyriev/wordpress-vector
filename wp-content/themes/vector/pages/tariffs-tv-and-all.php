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
            <?php
              $locations = [];
              //              $locations['address'] = [];
              if (have_rows('slider_tariffs')) :
                while (have_rows('slider_tariffs')) :
                  the_row(); ?>
                  <?php $tariffs_posts = get_sub_field('selected_tariff');
                  if ($tariffs_posts): ?>
                    <?php foreach ($tariffs_posts as $post):
                      setup_postdata($post);
                      $locations_posts = get_field('tariffs_selected_location');
                      if (get_field('tariffs_select_type_tariff') === 'Інтернет' ||
                        get_field('tariffs_select_type_tariff') === 'Інтернет GPON'):
                        ?>
                        <?php
                        if ($locations_posts): ?>
                          <?php foreach ($locations_posts as $post):
                            setup_postdata($post); ?>
                            <?php array_push($locations, ["title" => get_the_title(), "link" => get_field('select_location')]) ?>
                          <?php endforeach; ?>
                          <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                    <?php
                    wp_reset_postdata(); ?>
                  <?php endif; ?>
                <?php endwhile;
              endif;
            ?>
            <div class='select'>
              <p>Для мешканців</p>
              <label>
                <?php
                  $titles = [];
                  $newLocations = [];
                  foreach ($locations as $location) {
                    if (!in_array($location['title'], $titles)) {
                      $newLocations[] = $location;
                      $titles[] = $location['title'];
                    }
                  }
                ?>
                <select class='change-location' name='address'>
                  <?php foreach ($newLocations as $location) { ?>
                    <option value='<?php echo $location['link']; ?>'>
                      <?php echo $location['title']; ?>
                    </option>
                  <?php } ?>
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
