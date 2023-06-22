<?php
  if (have_rows('slider_tariffs')) :
    while (have_rows('slider_tariffs')) :
      the_row(); ?>
      <div>
        <div class='container'>
          <h3>
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
                if (get_field('tariffs_select_type_tariff') === 'Інтернет' ||
                  get_field('tariffs_select_type_tariff') === 'Інтернет GPON'): ?>
                  <div class='swiper-slide '>
                    <div class='tariff tariff-internet'>
                      <h4 class='title title-tariff-for-modal'>
                        <?php echo get_field('tariffs_select_type_tariff') ?>
                      </h4>
                      <div class='bottom'>
                        <p class='speed'>
                          до
                          <span><?php echo get_field('tariffs_speed') ?></span>
                          Мбіт
                        </p>
                        <p class='no-limited'><?php echo get_field('tariffs_speed_limit') ?></p>
                        <div class='network'>
                          <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M9 0C7.21997 0 5.47991 0.527841 3.99987 1.51677C2.51983 2.50571 1.36628 3.91131 0.685088 5.55585C0.00389957 7.20038 -0.17433 9.00998 0.172937 10.7558C0.520204 12.5016 1.37737 14.1053 2.63604 15.364C3.89472 16.6226 5.49836 17.4798 7.24419 17.8271C8.99002 18.1743 10.7996 17.9961 12.4442 17.3149C14.0887 16.6337 15.4943 15.4802 16.4832 14.0001C17.4722 12.5201 18 10.78 18 9C17.9974 6.61384 17.0484 4.32616 15.3611 2.63889C13.6738 0.951621 11.3862 0.00258081 9 0ZM15.4853 5.25H13.0695C12.5287 3.99674 11.8167 2.82456 10.9538 1.767C12.8636 2.2867 14.4917 3.5381 15.4853 5.25ZM12.375 9C12.3688 9.76361 12.2485 10.522 12.018 11.25H5.982C5.75149 10.522 5.63116 9.76361 5.625 9C5.63116 8.2364 5.75149 7.47801 5.982 6.75H12.018C12.2485 7.47801 12.3688 8.2364 12.375 9ZM6.5835 12.75H11.4165C10.7799 14.0068 9.96612 15.1656 9 16.191C8.03353 15.1659 7.21968 14.007 6.5835 12.75ZM6.5835 5.25C7.22008 3.9932 8.03389 2.83437 9 1.809C9.96648 2.83408 10.7803 3.99297 11.4165 5.25H6.5835ZM7.05 1.767C6.18575 2.82434 5.47244 3.99652 4.9305 5.25H2.51475C3.50915 3.53732 5.13875 2.28582 7.05 1.767ZM1.84575 6.75H4.425C4.23057 7.48436 4.12977 8.24035 4.125 9C4.12977 9.75965 4.23057 10.5156 4.425 11.25H1.84575C1.38476 9.78542 1.38476 8.21458 1.84575 6.75ZM2.51475 12.75H4.9305C5.47244 14.0035 6.18575 15.1757 7.05 16.233C5.13875 15.7142 3.50915 14.4627 2.51475 12.75ZM10.9538 16.233C11.8167 15.1754 12.5287 14.0033 13.0695 12.75H15.4853C14.4917 14.4619 12.8636 15.7133 10.9538 16.233ZM16.1543 11.25H13.575C13.7694 10.5156 13.8702 9.75965 13.875 9C13.8702 8.24035 13.7694 7.48436 13.575 6.75H16.1528C16.6137 8.21458 16.6137 9.78542 16.1528 11.25H16.1543Z"
                              fill="#03BF6A" />
                          </svg>
                          Безлімітний
                          <span><?php echo get_field('tariffs_package_unlimited_net') ?></span>
                        </div>
                        <div class='network'>
                          <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                               xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_201_267)">
                              <path
                                d="M16.875 4.91405V2.12105C16.875 1.70705 16.5398 1.37105 16.125 1.37105C15.7103 1.37105 15.375 1.70705 15.375 2.12105V3.89555L11.4728 1.2623C10.1985 0.402801 8.5515 0.402801 7.27725 1.2623L2.02725 4.8053C0.993 5.50355 0.375 6.6653 0.375 7.91405V14.871C0.375 16.9388 2.05725 18.621 4.125 18.621H7.05975C7.67625 18.621 8.23875 18.234 8.46 17.6588L9.4275 15.1403C9.516 14.91 9.48525 14.6506 9.34575 14.4466C9.20625 14.2425 8.9745 14.121 8.72775 14.121H6.66075C6.51825 14.121 6.44775 14.0303 6.4185 13.9771C6.38925 13.9231 6.35175 13.8143 6.42375 13.7041L10.1415 8.1773C10.188 8.1068 10.2945 8.10455 10.3448 8.17055C10.3688 8.20355 10.3755 8.2403 10.3628 8.28005L9.336 11.6528C9.267 11.8801 9.30975 12.1268 9.45075 12.3181C9.59175 12.5093 9.816 12.6218 10.0538 12.6218H12.2055C12.2783 12.6218 12.321 12.6608 12.345 12.6938C12.3675 12.7261 12.3908 12.7793 12.3668 12.8483L11.0618 16.632C10.9035 17.0896 10.977 17.5981 11.2583 17.9925C11.5388 18.3863 11.9955 18.6218 12.48 18.6218H14.6258C16.6935 18.6218 18.3758 16.9396 18.3758 14.8718V7.91405C18.3758 6.7283 17.8178 5.62055 16.875 4.91405ZM16.875 14.871C16.875 16.1116 15.8655 17.121 14.625 17.121H12.4793L13.7843 13.3373C13.9598 12.8273 13.8788 12.2611 13.566 11.8223C13.2525 11.3836 12.744 11.1211 12.2055 11.1211H11.0655L11.7983 8.71655C11.949 8.2193 11.8583 7.69505 11.5493 7.27805C11.2403 6.8603 10.764 6.62105 10.245 6.62105C9.69825 6.62105 9.19125 6.89405 8.89275 7.3463L5.17275 12.8768C4.8165 13.4235 4.7895 14.1188 5.1 14.6918C5.41125 15.2648 6.009 15.621 6.66075 15.621H7.6365L7.05975 17.121H4.125C2.8845 17.121 1.875 16.1116 1.875 14.871V7.91405C1.875 7.1648 2.2455 6.4673 2.8665 6.0488L8.1165 2.5058C8.8815 1.9898 9.8685 1.9898 10.6328 2.5058L15.8828 6.0488C16.5038 6.4673 16.8743 7.1648 16.8743 7.91405L16.875 14.871Z"
                                fill="#03BF6A" />
                            </g>
                            <defs>
                              <clipPath id="clip0_201_267">
                                <rect width="18" height="18" fill="white" transform="translate(0.375 0.621094)" />
                              </clipPath>
                            </defs>
                          </svg>
                          Домашній
                          <span><?php echo get_field('tariffs_package_home_net') ?></span>
                        </div>
                        <div class='price'>
                          <span class='relevant-price'><?php echo get_field('tariffs_price') ?></span>
                          <span class='action-price'><?php echo get_field('tariffs_action_price') ?></span>
                          <?php echo get_field('currency_term') ?>
                        </div>
                        <button class='btn btn-full open-connect-net-modal-js'>
                          <?php echo get_field('tariffs_button') ?>
                        </button>
                        <div class='open-details-tv-block'>
                          <p class='open-details-tv'>Детальніше</p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php elseif (get_field('tariffs_select_type_tariff') === 'Телебачення'): ?>
                  <div class='swiper-slide'>
                    <div class='tariff tariff-tv'>
                      <h4><?php echo get_field('tariffs_select_type_tariff') ?></h4>
                      <p class='desc'><?php echo get_field('tariffs_package_tv') ?></p>
                      <div class='bottom'>
                        <div class='header-network'>
                          <p>Телебачення</p>
                          <p>Каналів</p>
                        </div>
                        <div class='network'>
                          Аналогове
                          <span> <?php echo get_field('tariffs_tv_analog') ?></span>
                        </div>
                        <div class='network'>
                          Цифрове
                          <span> <?php echo get_field('tariffs_tv_digital') ?></span>
                        </div>
                        <p class='price'>
                          <span class='relevant-price'><?php echo get_field('tariffs_price') ?></span>
                          <span class='action-price'><?php echo get_field('tariffs_action_price') ?></span>
                          <?php echo get_field('tariffs_currency_term') ?>
                        </p>
                        <button class='btn btn-full open-connect-tv-modal-js'>
                          <?php echo get_field('tariffs_button') ?>
                        </button>
                        <div class='open-details-tv-block'>
                          <p class='open-details-tv'>Детальніше</p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif ?>
              <?php endforeach; ?>
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
            <?php echo get_sub_field('info_tariff') ?>
          </div>
        </div>
      </div>
    <?php endwhile;
  endif; ?>