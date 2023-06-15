<section class='connection-internet'>
  <div class='container'>
    <div class='wrapper'>
      <div class='left'>
        <div class='content'>
          <h2><?php echo get_field('connecting_internet_title', 'option') ?></h2>
          <?php echo get_field('connecting_internet_description1', 'option') ?>
          <p>
            <?php echo get_field('connecting_internet_description2', 'option') ?>
            <span><?php echo get_field('connecting_internet_description2-1', 'option') ?></span>
          </p>
          <p>
            <?php echo get_field('connecting_internet_description3', 'option') ?>
            <span><?php echo get_field('connecting_internet_price', 'option') ?></span>
          </p>
          <button class='btn btn-full'>
            <?php echo get_field('connecting_internet_button', 'option') ?>
          </button>
        </div>
      </div>
      <div class='right p-relative'>
        <div class='green-circle'></div>
        <div class='references shadow'>
          <?php echo get_field('connecting_internet_references', 'option') ?>
          <ul>
            <?php if (have_rows('connecting_internet_phones1', 'option')) :
              while (have_rows('connecting_internet_phones1', 'option')) :
                the_row(); ?>
                <li class='tel-link'>
                  <?php
                    $phone_references = get_sub_field('connecting_internet_phone');
                  ?>
                  <a href='<?php echo esc_url($phone_references['url']) ?>'>
                    <?php echo esc_html($phone_references['title']) ?>
                    <img src='./assets/icons/phone.svg' alt=''>
                  </a>
                </li>
              <?php endwhile;
            endif; ?>
          </ul>
          <?php echo get_field('connecting_internet_details', 'option') ?>
          <ul>
            <?php if (have_rows('connecting_internet_phones2', 'option')) :
              while (have_rows('connecting_internet_phones2', 'option')) :
                the_row(); ?>
                <li class='tel-link'>
                  <?php
                    $phone_details = get_sub_field('connecting_internet_phone', 'option');
                  ?>
                  <a href=' <?php echo esc_url($phone_details['url']) ?>'>
                    <?php echo esc_html($phone_details['title']) ?>
                    <img src='./assets/icons/phone.svg' alt=''>
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