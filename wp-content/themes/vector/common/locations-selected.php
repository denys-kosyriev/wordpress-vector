<?php
  wp_enqueue_script('locations-selected', get_template_directory_uri() . '/assets/js/locations-selected.js');
?>

<div class='selected'>
  <?php
    $locationsArray = [];
    if (have_rows('slider_tariffs')) :
      while (have_rows('slider_tariffs')) :
        the_row(); ?>
        <?php $tariffs_posts = get_sub_field('selected_tariff');
        if ($tariffs_posts): ?>
          <?php foreach ($tariffs_posts as $post):
            setup_postdata($post);
            $locations_posts = get_field('tariffs_selected_location');
            if ($locations_posts) {
              foreach ($locations_posts as $locations) { ?>
                <?php array_push($locationsArray, ["title" => $locations->post_title, "link" => get_field('select_location', $locations->ID)]) ?>
              <?php };
            }
          endforeach;
          wp_reset_postdata();
        endif;
      endwhile;
    endif; ?>
  <div class='select'>
    <p>Для мешканців</p>
    <label>
      <?php
        $titles = [];
        $newLocations = [];
        foreach ($locationsArray as $location) {
          if (!in_array($location['title'], $titles)) {
            $newLocations[] = $location;
            $titles[] = $location['title'];
          }
        }
      ?>
      <select class='change-location' name='address'>
        <option value='all'>Всі локації</option>
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
