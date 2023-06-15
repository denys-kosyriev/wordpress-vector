<?php
  //Template Name: Інтернет
?>

<?php get_header(); ?>

<main class='tariffs-page internet'>
  <div class='modal section-form modal-form d-none'>
    <div class='form p-relative modal-content'>
      <div class='close-modal'>
        <img src='../assets/images/icons/close.svg' alt=''>
      </div>
      <h3>Назва пакету</h3>
      <form class='form-order'>
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
        <button type='submit' class='btn btn-full btn-big shadow'>
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
  <section class='top-radio-buttons'>
    <div>
      <div class='container'>
        <h2>Тарифи</h2>
      </div>
    </div>
    <div class='flex'>
      <div class='container'>
        <div class='wrapper'>
          <div class='buttons'>
            <ul>
              <li>
                <a href='internet.html' class='btn btn-switch btn-small active'>
                  Інтернет
                </a>
              <li>
                <a href='./tv/tv.html' class='btn btn-switch btn-small'>
                  Телебачення
                </a>
              </li>
              <li>
                <a href='./all/all.html' class='btn btn-switch btn-small btn-all'>
                  Все разом
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='internet'>
    <div class='container'>
      <div class='swiper tariffs-slider'>
        <div class='swiper-wrapper tariffs-wrapper'>
          <div class='swiper-slide '>
            <div class='tariff tariff-internet'>
              <div class='modal-net-info d-none'>
                <div>!</div>
                <p>
                  Вартість реальної динамічної ІР адреси + 20,00грн до щомісячної абонплати.
                </p>
              </div>
              <img src='../assets/images/icons/info.svg' alt='' class='info'>
              <h4>Інтернет</h4>
              <p class='speed'>до <span>50</span> Мбіт</p>
              <p class='no-limited'>не обмежена</p>
              <div class='network network1'>
                <img src='../assets/images/icons/language.svg' alt=''>
                Безлімітний
                <span>170</span>
              </div>
              <div class='network network2'>
                <img src='../assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>50</span>
              </div>
              <p class='price'>
                <span>170</span>
                грн/міс
              </p>
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
              <img src='../assets/images/icons/info.svg' alt='' class='info'>
              <h4>Інтернет</h4>
              <p class='speed'>до <span>70</span> Мбіт</p>
              <p class='no-limited color-gray'>не обмежена</p>
              <div class='network network1'>
                <img src='../assets/images/icons/language.svg' alt=''>
                Безлімітний
                <span>180</span>
              </div>
              <div class='network network2'>
                <img src='../assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>70</span>
              </div>
              <p class='price'>
                <span>180</span>
                грн/міс
              </p>
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
              <img src='../assets/images/icons/info.svg' alt='' class='info'>
              <h4>Інтернет</h4>
              <p class='speed'>до <span>100</span> Мбіт</p>
              <p class='no-limited color-gray'>не обмежена</p>
              <div class='network network1'>
                <img class='icon-15' src='../assets/images/icons/language.svg' alt=''>
                Безлімітний
                <span>180</span>
              </div>
              <div class='network network2'>
                <img class='icon-15' src='../assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>100</span>
              </div>
              <p class='price'>
                <span>185</span>
                грн/міс
              </p>
              <button class='btn btn-full'>
                Підключити
              </button>
            </div>
          </div>
        </div>
        <div class='swiper-button-prev d-none d-none'></div>
        <div class='swiper-button-next d-none d-none'></div>
        <div class='swiper-pagination'></div>
      </div>
      <div>
        <div class='container'>
          <h3>Інтернет <span>(Gpon)</span></h3>
        </div>
      </div>
      <div class='swiper tariffs-slider'>
        <div class='swiper-wrapper tariffs-wrapper'>
          <div class='swiper-slide '>
            <div class='tariff tariff-internet'>
              <div class='modal-net-info d-none'>
                <div>!</div>
                <p>
                  Вартість реальної динамічної ІР адреси + 20,00грн до щомісячної абонплати.
                </p>
              </div>
              <img src='../assets/images/icons/info.svg' alt='' class='info'>
              <h4 class='uppercase'>Gpon</h4>
              <p class='speed'>до <span>50</span> Мбіт</p>
              <p class='no-limited color-gray'>не обмежена</p>
              <div class='network network1'>
                <img class='icon-15' src='../assets/images/icons/language.svg' alt=''>
                Безлімітний
                <span>170</span>
              </div>
              <div class='network network2'>
                <img class='icon-15' src='../assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>50+</span>
              </div>
              <p class='price'>
                <span>170</span>
                грн/міс
              </p>
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
                  Вартість реальної динамічної ІР адреси + 2 class='info'0,00грн до щомісячної абонплати.
                </p>
              </div>
              <img src='../assets/images/icons/info.svg' alt='' class='info'>
              <h4 class='gpon uppercase'>Gpon</h4>
              <p class='speed'>до <span>100</span> Мбіт</p>
              <p class='no-limited color-gray'>не обмежена</p>
              <div class='network network1'>
                <img class='icon-15' src='../assets/images/icons/language.svg' alt=''>
                Безлімітний
                <span>185</span>
              </div>
              <div class='network network2'>
                <img class='icon-15' src='../assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>100+</span>
              </div>
              <p class='price'>
                <span>185</span>
                грн/міс
              </p>
              <button class='btn btn-full'>
                Підключити
              </button>
            </div>
          </div>
        </div>
        <div class='swiper-button-prev d-none'></div>
        <div class='swiper-button-next d-none'></div>
        <div class='swiper-pagination'></div>
      </div>
      <div>
        <div class='container'>
          <h3>Інтернет <span>(Wi-fi)</span></h3>
        </div>
      </div>
      <div class='swiper tariffs-slider'>
        <div class='swiper-wrapper tariffs-wrapper'>
          <div class='swiper-slide'>
            <div class='tariff tariff-internet'>
              <div class='modal-net-info d-none'>
                <div>!</div>
                <p>
                  Вартість реальної динамічної ІР адреси + 20,00грн до щомісячної абонплати.
                </p>
              </div>
              <img src='../assets/images/icons/info.svg' alt='' class='info'>
              <h4>120 Wi-Fi</h4>
              <p class='speed'>до <span>2</span> Мбіт</p>
              <p class='no-limited'>не обмежена</p>
              <div class='network network1'>
                <img class='icon-15' src='../assets/images/icons/language.svg' alt=''>
                Безлімітний
              </div>
              <div class='network network2'>
                <img class='icon- network215' src='../assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>2048170</span>
              </div>
              <p class='price'>
                <span>120</span>
                грн/міс
              </p>
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
              <img src='../assets/images/icons/info.svg' alt='' class='info'>
              <h4>150 Wi-Fi</h4>
              <p class='speed'>до <span>5</span> Мбіт</p>
              <p class='no-limited'>не обмежена</p>
              <div class='network network1'>
                <img class='icon-15' src='../assets/images/icons/language.svg' alt=''>
                Безлімітний
              </div>
              <div class='network network2'>
                <img class='icon- network215' src='../assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>5120</span>
              </div>
              <p class='price'>
                <span>150</span>
                грн/міс
              </p>
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
              <img src='../assets/images/icons/info.svg' alt='' class='info'>
              <h4>220 Wi-Fi</h4>
              <p class='speed'>до <span>10</span> Мбіт</p>
              <p class='no-limited'>не обмежена</p>
              <div class='network network1'>
                <img class='icon-15' src='../assets/images/icons/language.svg' alt=''>
                Безлімітний
              </div>
              <div class='network network2'>
                <img class='icon- network215' src='../assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>10</span>
              </div>
              <p class='price'>
                <span>220</span>
                грн/міс
              </p>
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
              <img src='../assets/images/icons/info.svg' alt='' class='info'>
              <h4>Wi-Fi</h4>
              <p class='speed'>до <span>70</span> Мбіт</p>
              <p class='no-limited'>не обмежена</p>
              <div class='network network1'>
                <img class='icon-15' src='../assets/images/icons/language.svg' alt=''>
                Безлімітний
                <span>180</span>
              </div>
              <div class='network network2'>
                <img class='icon-15' src='../assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>70</span>
              </div>
              <p class='price'>
                <span>180</span>
                грн/міс
              </p>
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
              <img src='../assets/images/icons/info.svg' alt='' class='info'>
              <h4>Wi-Fi</h4>
              <p class='speed'>до <span>100</span> Мбіт</p>
              <p class='no-limited'>не обмежена</p>
              <div class='network network1'>
                <img class='icon-15' src='../assets/images/icons/language.svg' alt=''>
                Безлімітний
                <span>180</span>
              </div>
              <div class='network network2'>
                <img class='icon-15' src='../assets/images/icons/house-chimney-crack.svg' alt=''>
                Домашній
                <span>100</span>
              </div>
              <p class='price'>
                <span>185</span>
                грн/міс
              </p>
              <button class='btn btn-full'>
                Підключити
              </button>
            </div>
          </div>
        </div>
        <div class='swiper-button-prev d-none'></div>
        <div class='swiper-button-next d-none'></div>
        <div class='swiper-pagination'></div>
      </div>
    </div>
  </section>
  <?php get_template_part('connection-internet') ?>
</main>

<?php get_footer(); ?>
