<?php get_header(); ?>

<main class='home'>
  <div class='modal section-form modal-form d-none'>
    <div class='form p-relative'>
      <div class='close-modal'>
        <img src='./assets/images/icons/close.svg' alt=''>
      </div>
      <h3>Назва пакету</h3>
      <form>
        <label class='initials'>
          <input type='text' placeholder="ПІБ*">
          <span class='error-message d-none'>
                          <span>!</span>
                          Введіть ініціали
                        </span>
        </label>
        <label class='address'>
          <input type='text' placeholder="Адреса*">
          <span class='error-message d-none'>
                          <span>!</span>
                          Введіть адресу
                        </span>
        </label>
        <label class='phone'>
          <input type='number' placeholder="Телефон*">
          <span class='error-message d-none'>
                          <span>!</span>
                          Введіть телефон
                        </span>
        </label>
        <label class='email'>
          <input type='email' placeholder="Email*">
          <span class='error-message d-none'>
                          <span>!</span>
                          Введіть імейл
                        </span>
        </label>
        <div class='router d-none'>
          <div class='block-checkbox'>
            <label class='checkbox p-relative'>
              <input type='checkbox'>
              <span>з Роутером</span>
            </label>
          </div>
          <div class='price-router'>
            <div>!</div>
            Вартість Роутера 750 грн.
          </div>
        </div>
        <button type='submit' class='btn btn-full shadow'>
          Відправити
        </button>
        <div class='download-receipt'>
          <label for='download-receipt'>
            <input type='file' id='download-receipt'>
            Завантажити Квитанцію
          </label>
        </div>
      </form>
    </div>
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
      <h2>Акції</h2>
      <div class='swiper tariffs-slider action-section'>
        <div class='swiper-wrapper tariffs-wrapper'>
          <div class='swiper-slide '>
            <div class='tariff tariff-internet'>
              <div class='modal-net-info d-none'>
                <div>!</div>
                <p>
                  Вартість реальної динамічної ІР адреси + 20,00грн до щомісячної абонплати.
                </p>
              </div>
              <img src='./assets/images/icons/info.svg' alt='' class='info'>
              <h4>Інтернет</h4>
              <p class='speed'>до <span>50</span> Мбіт</p>
              <p class='no-limited'>не обмежена</p>
              <div class='network network1'>
                <img class='icon-15' src='./assets/images/icons/language.svg' alt=''>
                Безлімітний
                <span>170</span>
              </div>
              <div class='network network2'>
                <img src='./assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>50</span>
              </div>
              <div class='price'>
                <span>170</span>
                грн/міс
              </div>
              <button class='btn btn-full'>
                Підключити
              </button>
            </div>
          </div>
          <div class='swiper-slide '>
            <div class='tariff tariff-internet'>
              <div class='modal-net-info d-none'>
                <div>!</div>
                <p>
                  Вартість реальної динамічної ІР адреси + 20,00грн до щомісячної абонплати.
                </p>
              </div>
              <img src='./assets/images/icons/info.svg' alt='' class='info'>
              <h4>Інтернет</h4>
              <p class='speed'>до <span>70</span> Мбіт</p>
              <p class='no-limited'>не обмежена</p>
              <div class='network network1'>
                <img src='./assets/images/icons/language.svg' alt=''>
                Безлімітний
                <span>180</span>
              </div>
              <div class='network network2'>
                <img class='icon-15' src='./assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>70</span>
              </div>
              <div class='price'>
                <span>180</span>
                грн/міс
              </div>
              <button class='btn btn-full'>
                Підключити
              </button>
            </div>
          </div>
          <div class='swiper-slide'>
            <div class='tariff tariff-internet'>
              <div class='modal-net-info d-none'>
                <div>!</div>
                <p>
                  Вартість реальної динамічної ІР адреси + 20,00грн до щомісячної абонплати.
                </p>
              </div>
              <img src='./assets/images/icons/info.svg' alt='' class='info'>
              <h4>Інтернет</h4>
              <p class='speed'>до <span>100</span> Мбіт</p>
              <p class='no-limited'>не обмежена</p>
              <div class='network network1'>
                <img class='icon-15' src='./assets/images/icons/language.svg' alt=''>
                Безлімітний
                <span>180</span>
              </div>
              <div class='network network2'>
                <img class='icon-15' src='./assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>100</span>
              </div>
              <div class='price'>
                <span>185</span>
                грн/міс
              </div>
              <button class='btn btn-full'>
                Підключити
              </button>
            </div>
          </div>
        </div>
        <div class='swiper-button-prev swiper-button-tariffs d-none'></div>
        <div class='swiper-button-next swiper-button-tariffs d-none'></div>
        <div class='swiper-pagination'></div>
      </div>
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
</main>

<?php get_footer(); ?>

