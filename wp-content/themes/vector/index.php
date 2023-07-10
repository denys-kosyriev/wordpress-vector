<?php
  //Template Name: Home

  get_header();
  wp_enqueue_script('home', get_stylesheet_directory_uri() . '/assets/js/home.js');
?>

<main class='home'>
  <div class='modal section-form modal-form d-none'>
    <?php get_template_part('./common/tariffs-form') ?>
  </div>
  <?php get_template_part('./modals/modal-channels') ?>
  <section class='banners' id='banners'>
    <div class="container">
      <div class='swiper swiper-banners'>
        <div class='swiper-wrapper'>
          <?php if (have_rows('main_slider')) :
            while (have_rows('main_slider')) :
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
  <section class='action' id='action'>
    <div class='container'>
      <?php get_template_part('./common/slider-tariffs') ?>
    </div>
  </section>
  <section class='show-all-tariffs' id='show-all-tariffs'>
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
  <section class='about about-company' id='about-company'>
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
          <a href='<?php echo esc_url($about_company_btn['url']) ?>' class='btn btn-full'>
            <?php echo esc_html($about_company_btn['title']) ?>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class='about-internet' id='about-internet'>
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
  <section class='about about-tv' id='about-tv'>
    <div class='container'>
      <div class='content'>
        <img src='<?php echo get_field('tv_image') ?>' alt='' class='left'>
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
  <section class='accordion' id='accordion'>
    <div class='container'>
      <h2><?php echo get_field('accordion_title') ?></h2>
      <ul class='questions-list'>
        <?php if (have_rows('accordion')) :
          while (have_rows('accordion')) :
            the_row(); ?>
            <li class='questions-select'>
              <div class='question'>
                <?php echo get_sub_field('question') ?>
                <svg class='icon-select' width="25" height="24" viewBox="0 0 25 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.45888 24L6.04688 22.588L15.9279 12.707C16.1153 12.5195 16.2207 12.2652 16.2207 12C16.2207 11.7349 16.1153 11.4806 15.9279 11.293L6.06388 1.43103L7.47788 0.0170288L17.3399 9.87903C17.9023 10.4416 18.2182 11.2045 18.2182 12C18.2182 12.7955 17.9023 13.5584 17.3399 14.121L7.45888 24Z"
                    fill="#03BF6A" />
                </svg>
              </div>
              <div class='questions-answer'>
                <?php echo get_sub_field('answer') ?>
              </div>
            </li>
          <?php endwhile;
        endif; ?>
      </ul>
    </div>
  </section>
  <section class='payment' id='payment'>
    <div class='container'>
      <div class='swiper swiper-payment'>
        <div class='swiper-wrapper'>
          <?php if (have_rows('payment_banks')) :
            while (have_rows('payment_banks')) :
              the_row(); ?>
              <div class='swiper-slide payment-content'>
                <img src='<?php echo get_sub_field('logotype') ?>' alt=''>
                <div class='content'>
                  <h2>
                    Оплатити онлайн через
                    <span><?php echo get_sub_field('title') ?></span>
                  </h2>
                  <a
                    target='_blank'
                    class='btn btn-full'
                    href='<?php echo get_sub_field('link') ?>'>
                    Оплатити
                  </a>
                </div>
              </div>
            <?php endwhile;
          endif; ?>
        </div>
        <div class='swiper-button-prev swiper-button-tariffs'></div>
        <div class='swiper-button-next swiper-button-tariffs'></div>
        <div class='swiper-pagination'></div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

