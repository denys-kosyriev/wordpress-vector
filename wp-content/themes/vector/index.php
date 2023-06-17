<?php
  //Template Name: Home
?>

<?php get_header(); ?>

<main class='home'>
  <div class='modal section-form modal-form d-none'>
    <?php get_template_part('Tariffs-form') ?>
  </div>
  <section class='banners'>
    <div class="container">
      <div class='swiper swiper-banners'>
        <div class='swiper-wrapper'>
          <?php if (have_rows('slider_shares')) :
            while (have_rows('slider_shares')) :
              the_row(); ?>
              <div class='swiper-slide hidden'>
                <div class='p-relative'>
                  <h2><?php echo get_sub_field('title') ?></h2>
                  <p><?php echo get_sub_field('description') ?></p>
                  <?php
                    $btn_slider_banners = get_sub_field('button');
                  ?>
                  <a href='<?php echo esc_url($btn_slider_banners['url']) ?>' class='btn btn-black'>
                    <?php echo esc_html($btn_slider_banners['title']) ?>
                  </a>
                </div>
                <img src='<?php echo get_sub_field('image') ?>' alt=''>
              </div>
            <?php endwhile;
          endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <section class='action'>
    <div class='container'>
      <h2><?php echo get_field('tariffs_title') ?></h2>
      <?php if (have_rows('tariffs_types')) :
        while (have_rows('tariffs_types')) :
        the_row(); ?>
      <div class='swiper tariffs-slider action-section'>
        <div class='swiper-wrapper tariffs-wrapper'>
          <?php if (have_rows('select_net_or_tv_and_all')) :
            while (have_rows('select_net_or_tv_and_all')) :
              the_row(); ?>
              <?php
              if (get_sub_field('Select_type_tariff') === 'Internet'): ?>
                <?php if (have_rows('net')) :
                  while (have_rows('net')) :
                    the_row(); ?>
                    <div class='swiper-slide '>
                      <div class='tariff tariff-internet'>
                        <div class='modal-net-info d-none'>
                          <div>!</div>
                          <p><?php echo get_sub_field('info_net') ?></p>
                        </div>
                        <img src='./assets/icons/info.svg' alt='' class='info'>
                        <h4><?php echo get_sub_field('title') ?></h4>
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
                          <button class='btn btn-full'>
                            <?php echo get_sub_field('button') ?>
                          </button>
                        </div>
                      </div>
                    </div>
                  <?php endwhile;
                endif; ?>
              <?php else: ?>
                <?php if (have_rows('tv_and_all')) :
                  while (have_rows('tv_and_all')) :
                    the_row(); ?>
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
                          <button class='btn btn-full'>
                            <?php echo get_sub_field('button') ?>
                          </button>
                          <p class='detail'> <?php echo get_sub_field('details') ?></p>
                        </div>
                      </div>
                    </div>
                  <?php endwhile;
                endif; ?>
              <?php endif ?>
            <?php endwhile;
          endif; ?>
          <?php endwhile;
            endif; ?>
        </div>
        <div class='swiper-button-prev swiper-button-tariffs d-none'></div>
        <div class='swiper-button-next swiper-button-tariffs d-none'></div>
        <div class='swiper-pagination'></div>
      </div>
  </section>
  <section class='show-all-tariffs'>
    <div class='container'>
      <div class='content '>
        <h2><?php echo get_field('fee_increase_title') ?></h2>
        <?php echo get_field('fee_increase_description') ?>
        <?php
          $increase_subscription_fee_btn = get_field('fee_increase_button');
        ?>
        <a href='<?php echo esc_url($increase_subscription_fee_btn['url']) ?>' class='btn btn-outlined'>
          <?php echo esc_html($increase_subscription_fee_btn['title']) ?>
        </a>
      </div>
    </div>
  </section>
  <section class='about about-company'>
    <div class='container'>
      <div class='content'>
        <div class='left p-relative'>
          <img src='<?php echo get_field('about_company_image') ?>' alt='' class='main-img'>
          <div>
            <img src='<?php echo get_field('about_company_logotype') ?>' alt=''>
          </div>
        </div>
        <div class='right'>
          <h2><?php echo get_field('about_company_title') ?></h2>
          <?php echo get_field('about_company_description') ?>
          <?php
            $about_company_btn = get_field('about_company_button');
          ?>
          <a href='<?php echo esc_url($about_company_btn['url']) ?>' class='btn btn-outlined'>
            <?php echo esc_html($about_company_btn['title']) ?>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class='about-internet'>
    <div class='container'>
      <div class='wrapper p-relative'>
        <div class='content bg-green'>
          <img src='<?php echo get_field('internet_image') ?>' alt=''>
          <h2><?php echo get_field('internet_title') ?></h2>
          <?php echo get_field('internet_description') ?>
          <?php $internet_btn = get_field('internet_button'); ?>
          <a href='<?php echo esc_url($internet_btn['url']) ?>' class='btn btn-black'>
            <?php echo esc_html($internet_btn['title']) ?>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class='about about-tv'>
    <div class='container'>
      <div class='content'>
        <img src='<?php echo get_field('tv_image') ?>' alt=''>
        <div class='right color-gray'>
          <h2><?php echo get_field('tv_title') ?></h2>
          <?php echo get_field('tv_description') ?>
          <?php $internet_btn = get_field('tv_button'); ?>
          <a href='<?php echo esc_url($internet_btn['url']) ?>' class='btn btn-full'>
            <?php echo esc_html($internet_btn['title']) ?>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class='accordion'>
    <div class='container'>
      <h2>Найчастіші запитання</h2>
      <ul class='questions-list'>
        <?php if (have_rows('accordion')) :
          while (have_rows('accordion')) :
            the_row(); ?>
            <li class='questions-select'>
              <div class='question'>
                <h3><?php echo get_sub_field('question') ?></h3>
                <img class='icon-select' src='./assets/icons/angle-right.svg' alt=''>
              </div>
              <p class='questions-answer d-none'>
                <?php echo get_sub_field('answer') ?>
              </p>
            </li>
          <?php endwhile;
        endif; ?>
      </ul>
    </div>
  </section>
  <section class='payment'>
    <div class='container'>
      <div class='payment-content shadow'>
        <img src='<?php echo get_field('payment_image') ?>' alt=''>
        <h2>
          <?php echo get_field('payment_text') ?>
          <span>
          <span><?php echo get_field('payment_bank') ?></span>
          </span>
        </h2>
        <?php $link = get_field('payment_link'); ?>
        <a
          target='_blank'
          class='btn btn-full'
          href='<?php echo esc_url($link['url']) ?>' class='btn btn-full'>
          <?php echo esc_html($link['title']) ?>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

