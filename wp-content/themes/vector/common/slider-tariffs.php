<?php if (have_rows('tariffs_types')) :
  while (have_rows('tariffs_types')) :
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
        <?php if (have_rows('select_net_or_tv_and_all')) :
          while (have_rows('select_net_or_tv_and_all')) :
            the_row(); ?>
            <?php
            if (get_sub_field('Select_type_tariff') === 'Internet'): ?>
              <div class='swiper-slide '>
                <div class='tariff tariff-internet'>
                  <div class='modal-net-info d-none'>
                    <div>!</div>
                    <p><?php echo get_sub_field('info_net') ?></p>
                  </div>
                  <svg class='open-info-net-btn' width="31" height="31" viewBox="0 0 31 31" fill="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_229_4086)">
                      <path
                        d="M30.25 15.5635C30.25 18.5302 29.3703 21.4303 27.722 23.897C26.0738 26.3638 23.7311 28.2864 20.9903 29.4217C18.2494 30.557 15.2334 30.854 12.3237 30.2753C9.41394 29.6965 6.74119 28.2679 4.6434 26.1701C2.54562 24.0723 1.11701 21.3995 0.538228 18.4898C-0.0405508 15.5801 0.256499 12.5641 1.39181 9.82323C2.52713 7.08233 4.44972 4.73965 6.91645 3.09143C9.38319 1.44321 12.2833 0.563477 15.25 0.563477C19.2269 0.567778 23.0397 2.14951 25.8519 4.96163C28.664 7.77374 30.2457 11.5866 30.25 15.5635ZM17.75 15.5635C17.75 14.9004 17.4866 14.2646 17.0178 13.7957C16.5489 13.3269 15.913 13.0635 15.25 13.0635H12.75V15.5635H15.25V24.3135H17.75V15.5635ZM15.25 6.81348C14.8792 6.81348 14.5167 6.92344 14.2083 7.12947C13.9 7.3355 13.6596 7.62833 13.5177 7.97095C13.3758 8.31356 13.3387 8.69056 13.411 9.05427C13.4834 9.41799 13.662 9.75208 13.9242 10.0143C14.1864 10.2765 14.5205 10.4551 14.8842 10.5274C15.2479 10.5998 15.6249 10.5627 15.9675 10.4208C16.3102 10.2788 16.603 10.0385 16.809 9.73017C17.015 9.42183 17.125 9.05932 17.125 8.68848C17.125 8.1912 16.9275 7.71428 16.5758 7.36265C16.2242 7.01102 15.7473 6.81348 15.25 6.81348Z"
                        fill="#03BF6A" />
                    </g>
                    <defs>
                      <clipPath id="clip0_229_4086">
                        <rect width="30" height="30" fill="white" transform="translate(0.25 0.563477)" />
                      </clipPath>
                    </defs>
                  </svg>
                  <h4 class='title title-tariff-for-modal'><?php echo get_sub_field('title') ?></h4>
                  <div class='company'>
                    <?php echo get_sub_field('company') ?>
                  </div>
                  <div class='bottom'>
                    <p class='speed'>
                      до
                      <span><?php echo get_sub_field('speed') ?></span>
                      Мбіт
                    </p>
                    <p class='no-limited'><?php echo get_sub_field('speed_limit') ?></p>
                    <?php if (have_rows('type_net')) :
                      while (have_rows('type_net')) :
                        the_row(); ?>
                        <div class='network'>
                          <img src='<?php echo get_sub_field('icon') ?>' alt=''>
                          <?php echo get_sub_field('title') ?>
                          <span><?php echo get_sub_field('type_speed') ?></span>
                        </div>
                      <?php endwhile;
                    endif; ?>
                    <div class='price'>
                      <span><?php echo get_sub_field('price') ?></span>
                      <?php echo get_sub_field('currency_term') ?>
                    </div>
                    <button class='btn btn-full open-connect-net-modal-js'>
                      <?php echo get_sub_field('button') ?>
                    </button>
                    <div class='open-details-tv-block'>
                      <p class='open-details-tv'><?php echo get_sub_field('details') ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php else: ?>
              <div class='swiper-slide'>
                <div class='tariff tariff-tv'>
                  <h4><?php echo get_sub_field('title') ?></h4>
                  <p class='desc'><?php echo get_sub_field('characteristics_television') ?></p>
                  <div class='company'>
                    <?php echo get_sub_field('company') ?>
                  </div>
                  <div class='bottom'>
                    <p class='speed'>
                      до
                      <span><?php echo get_sub_field('speed') ?></span>
                      Мбіт
                    </p>
                    <p class='no-limited'><?php echo get_sub_field('speed_limit') ?>а</p>
                    <div class='header-network'>
                      <p><?php echo get_sub_field('title_tv') ?></p>
                      <p><?php echo get_sub_field('title_channels') ?></p>
                    </div>
                    <?php if (have_rows('type_tv')) :
                      while (have_rows('type_tv')) :
                        the_row(); ?>
                        <div class='network'>
                          <?php echo get_sub_field('type') ?>
                          <span> <?php echo get_sub_field('numbers') ?></span>
                        </div>
                      <?php endwhile;
                    endif; ?>
                    <p class='price'>
                      <span> <?php echo get_sub_field('price') ?></span>
                      <?php echo get_sub_field('currency_term') ?>
                    </p>
                    <button class='btn btn-full open-connect-tv-modal-js'>
                      <?php echo get_sub_field('button') ?>
                    </button>
                    <div class='open-details-tv-block'>
                      <p class='open-details-tv'> <?php echo get_sub_field('details') ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif ?>
          <?php endwhile;
        endif; ?>
      </div>
      <div class='swiper-button-prev swiper-button-tariffs d-none'></div>
      <div class='swiper-button-next swiper-button-tariffs d-none'></div>
      <div class='swiper-pagination'></div>
    </div>
    <div class='description'>
      <div class='container'>
        <div class='description-content'>
          <div>!</div>
          <?php echo get_sub_field('info') ?>
        </div>
      </div>
    </div>
  <?php endwhile;
endif; ?>