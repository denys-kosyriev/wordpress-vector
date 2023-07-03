<?php
  wp_enqueue_script('selected', get_template_directory_uri() . '/assets/js/selected.js');
?>

<div class='selected'>
  <?php
    $locations = [];
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
          <?php wp_reset_postdata(); ?>
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
        <option value=''>Всі локації</option>
        <?php foreach ($newLocations as $location) { ?>
          <option <?php
            if (isset($_GET['location']) && $_GET['location'] === $location['link']) {
              echo 'selected';
            } ?> value='<?php echo $location['link']; ?>'>
            <?php echo $location['title']; ?>
          </option>
        <?php } ?>
      </select>
    </label>
  </div>
</div>
