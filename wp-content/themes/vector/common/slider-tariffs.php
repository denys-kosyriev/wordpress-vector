<?php
  if (have_rows('slider_tariffs')) :
    while (have_rows('slider_tariffs')) :
      the_row(); ?>
      <div class='sliders-js'>
        <div class='container'>
          <h3 class='title-slider'>
            <?php echo get_sub_field('title') ?>
          </h3>
        </div>
      </div>
      <div class='swiper tariffs-slider action-section'>
        <div class='swiper-wrapper tariffs-wrapper'>
          <?php
            $featured_posts = get_sub_field('selected_tariff');
            if ($featured_posts): ?>
              <?php foreach ($featured_posts as $post):
                setup_postdata($post);
                $have_location = false;
                $tariffs_selected_location = get_field('tariffs_selected_location');
                if (isset($_GET['location'])) {
                  foreach ($tariffs_selected_location as $location) {
                    if (get_field('select_location', $location->ID) === $_GET['location']) {
                      $have_location = true;
                    }
                  }
                } else {
                  $have_location = true;
                }
                if ($have_location) {
                  if (isset($_GET['type'])) {
                    if ((get_field('tariffs_select_type_tariff') === $_GET['type'] &&
                        get_field('tariffs_select_type_tariff') === 'Інтернет') ||
                      ($_GET['type'] === 'Інтернет' &&
                        get_field('tariffs_select_type_tariff') === 'Інтернет GPON')): ?>
                      <?php get_template_part('./common/slide-internet') ?>
                    <?php elseif (get_field('tariffs_select_type_tariff') === $_GET['type'] &&
                      get_field('tariffs_select_type_tariff') === 'Телебачення'): ?>
                      <?php get_template_part('./common/slide-tv') ?>
                    <?php endif ?>
                    <?php
                  } else {
                    if (get_field('tariffs_select_type_tariff') === 'Інтернет' ||
                      get_field('tariffs_select_type_tariff') === 'Інтернет GPON'):?>
                      <?php get_template_part('./common/slide-internet') ?>
                    <?php elseif (get_field('tariffs_select_type_tariff') === 'Телебачення'): ?>
                      <?php get_template_part('./common/slide-tv') ?>
                    <?php endif;
                  }
                } endforeach; ?>
              <?php
              wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <div class='swiper-button-prev swiper-button-tariffs d-none'></div>
        <div class='swiper-button-next swiper-button-tariffs d-none'></div>
        <div class='swiper-pagination'></div>
      </div>
      <div class='description'>
        <div class='container'>
          <div class='description-content'>
            <div>!</div>
            <?php if (isset($_GET['type'])) {
              if ($_GET['type'] === 'Інтернет') {
                echo get_sub_field('info_tariff_internet');
              } else {
                echo get_sub_field('info_tariff_tv');
              }
            } else {
              echo get_sub_field('info_tariff_tv');
            } ?>
          </div>
        </div>
      </div>
    <?php endwhile;
  endif; ?>