

<?php get_header(); ?>

<main class='tariffs-page all'>
  <div class='modal section-form modal-form d-none'>
    <div class='form p-relative modal-content'>
      <div class='close-modal'>
        <img src='../../assets/images/icons/close.svg' alt=''>
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
        <div class='router'>
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
  <div class='modal modal-channels d-none'>
    <div class='channels p-relative modal-content'>
      <div class='modal-channels-header'>
        <div class='close-modal'>
          <img src='../../assets/images/icons/close.svg' alt=''>
        </div>
        <h2>Вектор ТБ</h2>
        <ul class='buttons'>
          <li>
            <button class='btn btn-switch btn-big active'>
              Аналогові канали
            </button>
          </li>
          <li>
            <button class='btn btn-switch btn-big'>
              Цифрові канали
            </button>
          </li>
        </ul>
      </div>
      <div class='scroll'>
        <h3 class='title-channels'>Загальнонаціональні</h3>
        <div class='table'>
          <div class='table-header'>
            <div class='table-row'>
              <div><span>№</span></div>
              <div><span>Назва</span></div>
              <div><span>канал</span></div>
            </div>
          </div>
          <div class='table-body'>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Крим</span></div>
              <div><span>1</span></div>
            </div>
            <div class='table-row'>
              <div><span>2.</span></div>
              <div><span>UA Перший</span></div>
              <div><span>2</span></div>
            </div>
            <div class='table-row'>
              <div><span>3.</span></div>
              <div><span>UA Культура</span></div>
              <div><span>3</span></div>
            </div>
          </div>
        </div>
        <h3 class='title-channels'>Інформаційні</h3>
        <div class='table'>
          <div class='table-body'>
            <div class='table-row'>
              <div><span>547.</span></div>
              <div><span>Парламентський телеканал РАДА</span></div>
              <div><span>678</span></div>
            </div>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Перший</span></div>
              <div><span>2</span></div>
            </div>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Культура</span></div>
              <div><span>3</span></div>
            </div>
          </div>
        </div>
        <h3 class='title-channels'>Розважальні</h3>
        <div class='table'>
          <div class='table-body'>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Крим</span></div>
              <div><span>1</span></div>
            </div>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Перший</span></div>
              <div><span>2</span></div>
            </div>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Культура</span></div>
              <div><span>3</span></div>
            </div>
          </div>
        </div>
        <h3 class='title-channels'>Дитячі</h3>
        <div class='table'>
          <div class='table-body'>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Крим</span></div>
              <div><span>1</span></div>
            </div>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Перший</span></div>
              <div><span>2</span></div>
            </div>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Культура</span></div>
              <div><span>3</span></div>
            </div>
          </div>
        </div>
        <h3 class='title-channels'>Фірмові</h3>
        <div class='table'>
          <div class='table-body'>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Крим</span></div>
              <div><span>1</span></div>
            </div>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Перший</span></div>
              <div><span>2</span></div>
            </div>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Культура</span></div>
              <div><span>3</span></div>
            </div>
          </div>
        </div>
        <h3 class='title-channels'>Познавальні</h3>
        <div class='table'>
          <div class='table-body'>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Крим</span></div>
              <div><span>1</span></div>
            </div>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Перший</span></div>
              <div><span>2</span></div>
            </div>
            <div class='table-row'>
              <div><span>1.</span></div>
              <div><span>UA Культура</span></div>
              <div><span>3</span></div>
            </div>
          </div>
        </div>
      </div>
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
                <a href='../internet.php' class='btn btn-switch'>
                  Інтернет
                </a>
              <li>
                <a href='../tv/tv.html' class='btn btn-switch'>
                  Телебачення
                </a>
              </li>
              <li>
                <a href='./all.html' class='btn btn-switch active'>
                  Все разом
                </a>
              </li>
            </ul>
          </div>
          <div class='selected'>
            <div class='select'>
              <p>Для мешканців</p>
              <label>
                <select name='address'>
                  <option>
                    <a href='./all.html'>смт. Краснопавлівка</a>
                  </option>
                  <option>
                    <a href='./lozova.html'>м. Лозова, смт. Панютине</a>
                  </option>
                </select>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='all'>
    <div class='container'>
      <div>
        <div class='container'>
          <h3>Загальний пакет</h3>
        </div>
      </div>
      <div class='swiper tariffs-slider'>
        <div class='swiper-wrapper tariffs-wrapper'>
          <div class='swiper-slide '>
            <div class='tariff tariff-all'>
              <h4>Загальний пакет</h4>
              <p class='desc'>200 Iнтернет + Цифра + HD</p>
              <div class='bottom'>
                <p class='speed'>до <span>50</span> Мбіт</p>
                <p class='no-limited'>не обмежена</p>
                <div class='header-network'>
                  <p>Телебачення</p>
                  <p>Каналів</p>
                </div>
                <div class='network network1'>
                  Аналогове
                  <span>59</span>
                </div>
                <div class='network network2'>
                  Цифрове
                  <span>120</span>
                </div>
                <p class='price'>
                  <span>250</span>
                  грн/міс
                </p>
                <button class='btn btn-full'>
                  Підключити
                </button>
                <p class='detail'>Детальніше</p>
              </div>
            </div>
          </div>
          <div class='swiper-slide'>
            <div class='tariff tariff-all'>
              <h4>Загальний пакет</h4>
              <p class='desc'>225 Iнтернет (100 +АТВ + Ц + HD)</p>
              <div class='bottom'>
                <p class='speed'>до <span>100</span> Мбіт</p>
                <p class='no-limited'>не обмежена</p>
                <div class='header-network'>
                  <p>Телебачення</p>
                  <p>Каналів</p>
                </div>
                <div class='network network1'>
                  Аналогове
                  <span>66</span>
                </div>
                <div class='network network2'>
                  Цифрове
                  <span>120</span>
                </div>
                <p class='price'>
                  <span>265</span>
                  грн/міс
                </p>
                <button class='btn btn-full'>
                  Підключити
                </button>
                <p class='detail'>Детальніше</p>
              </div>
            </div>
          </div>
        </div>
        <div class='swiper-button-prev d-none'></div>
        <div class='swiper-button-next d-none'></div>
        <div class='swiper-pagination'></div>
      </div>
      <div class='description'>
        <div class='container'>
          <div class='description-content'>
            <div>!</div>
            <ul>
              <li>
                1. За умови розкодування каналів для дорослих, до звичайної абон. плати додається 10,00грн/міс (1САМ
                модуль
                +10,00грн; 2САМ модуля + 20,00грн);
              </li>
              <li>
                2. Якщо канали для дорослих залишаються закодованими, абон. плата не змінюється.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class='connection-tv'>
    <div class='container'>
      <div class='content'>
        <img src='../../assets/images/tv-2.png' alt=''>
        <div>
          <h2>
            Підключення <span>2х чи більше телевізорів</span>
          </h2>
          <p>
            Надаємо послуги по підключенню декількох телевізора.
            <span>Вартість підключення - 30 грн</span>
            , та вартість кабелю для кожного окремого телевізора.
          </p>
          <p>
            Телевізійний кабель підключається безпосередньо до розподільної телевізійної коробки.
            <span>Абонентська плата при підключенні додаткових телевізорів не змінюється.</span>
          </p>
          <a href='#' class='btn btn-full'>
            Підключити
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
