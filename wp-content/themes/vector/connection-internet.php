<section class='connection-internet'>
  <div class='container'>
    <div class='wrapper'>
      <div class='left'>
        <div class='content'>
          <h2><?php echo get_field('connecting_internet_title', 'option') ?></h2>
          <?php echo get_field('connecting_internet_description', 'option') ?>
          <?php if (have_rows('connecting_internet_description2', 'option')) :
            while (have_rows('connecting_internet_description2', 'option')) :
              the_row(); ?>
              <p>
                <?php echo get_sub_field('description2') ?>
                <span><?php echo get_sub_field('additional_description') ?></span>
              </p>
            <?php endwhile;
          endif; ?>
          <button class='btn btn-full'>
            <?php echo get_field('connecting_internet_button', 'option') ?>
          </button>
        </div>
      </div>
      <div class='right p-relative'>
        <div class='green-circle'></div>
        <div class='references shadow'>
          <?php if (have_rows('connecting_internet_phones', 'option')) :
            while (have_rows('connecting_internet_phones', 'option')) :
              the_row(); ?>
              <?php echo get_sub_field('title_list') ?>
              <ul>
                <?php if (have_rows('phones')) :
                  while (have_rows('phones')) :
                    the_row(); ?>
                    <li class='tel-link'>
                      <?php
                        $phone = get_sub_field('phone');
                      ?>
                      <a href='<?php echo esc_url($phone['url']) ?>'>
                        <?php echo esc_html($phone['title']) ?>
                        <img src='./assets/icons/phone.svg' alt=''>
                      </a>
                    </li>
                  <?php endwhile;
                endif; ?>
              </ul>
            <?php endwhile;
          endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>