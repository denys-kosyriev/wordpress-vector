jQuery(document).ready(function ($) {
  $('body').css('opacity', '1');

  $.fn.isInViewport = function () {
    const elementTop = $(this).offset().top;
    const elementBottom = elementTop + $(this).outerHeight();
    const viewportTop = $(window).scrollTop();
    const viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  const isVisible = (selector) => {
    if (selector.length >= 1) {
      if (selector.isInViewport()) {
        selector.addClass('animation');
      } else {
        selector.removeClass('animation');
      }
    }
  }

  // "Повторювані секції"
  const topRadioButtons = $(".top-radio-buttons");

  // "Головна" сторінка
  const banners = $('#banners');
  const action = $('#action');
  const showAllTariffs = $('#show-all-tariffs');
  const aboutCompanyLeft = $('#about-company .left');
  const aboutCompanyRight = $('#about-company .right');
  const aboutInternet = $('#about-internet');
  const aboutTvLeft = $('#about-tv .left');
  const aboutTvRight = $('#about-tv .right');
  const accordion = $('#accordion');
  const payment = $('#payment .swiper');

  // "Проблеми при підключенні" сторінка
  const connectionProblemLeft = $('.connection-problems .left');
  const connectionProblemRight = $('.connection-problems .right');
  const accordionSearch = $('.connection-problems .accordion .search');
  const accordionList = $('.connection-problems .accordion .questions-list');

  // "Підтримка" сторінка
  const possibilities = $('.possibilities');
  const help = $('.help');

  // "Підключення" сторінка
  const sectionForm = $(".section-form");

  // "Реклама" сторінка
  const advertisingServices = $('.advertising-services');
  const billboard = $('.billboard');

  // "Тарифи" сторінка
  const connectionTvLeft = $('.connection-tv .left');
  const connectionTvRight = $('.connection-tv .right');
  const connectionInternetLeft = $('.connection-internet .left');
  const connectionInternetRight = $('.connection-internet .right');
  const tariffsSlider = $('.swiper.tariffs-slider');
  const tariffsPageDescription = $('.tariffs-page .description');
  const tariffsPageSlidersJs = $('.tariffs-page .sliders-js');

  // "Налаштування" сторінка
  const settings = $('.settings .block-settings');

  // "Документи" сторінка
  const documentsTitle = $('.documents h2');
  const documentsLink = $('.documents a');

  // "Новини" сторінка
  const newsTitle = $('.news h2');
  const newsCart = $('.news .cart');

  // "Акції" сторінка
  const sharesTitle = $('.shares h2');
  const sharesCart = $('.shares .cart');

  // "Контакти" сторінка
  const contacts = $('.contacts .content');

  // Footer
  const footer = $('#footer');

  const runAnimations = () => {

    // "Повторювані секції"
    isVisible(topRadioButtons);

    // "Головна" сторінка
    isVisible(banners);
    isVisible(action);
    isVisible(showAllTariffs);
    isVisible(aboutCompanyLeft);
    isVisible(aboutCompanyRight);
    isVisible(aboutInternet);
    isVisible(aboutTvLeft);
    isVisible(aboutTvRight);
    isVisible(accordion);
    isVisible(payment);

    // "Підтримка" сторінка
    isVisible(possibilities);
    isVisible(help);

    // "Підключення" сторінка
    isVisible(sectionForm);

    // "Реклама" сторінка
    $(advertisingServices).each(function () {
      isVisible($(this));
    })
    isVisible(billboard);

    // "Тарифи" сторінка
    isVisible(connectionTvLeft);
    isVisible(connectionTvRight);
    isVisible(connectionInternetLeft);
    isVisible(connectionInternetRight);
    $(tariffsSlider).each(function () {
      isVisible($(this));
    })
    $(tariffsPageDescription).each(function () {
      isVisible($(this));
    })
    $(tariffsPageSlidersJs).each(function () {
      isVisible($(this));
    })

    // "Проблеми при підключенні" сторінка
    isVisible(connectionProblemLeft);
    isVisible(connectionProblemRight);
    isVisible(accordionSearch);
    isVisible(accordionList);

    // "Налаштування" сторінка
    $(settings).each(function () {
      isVisible($(this));
    })

    // "Документи" сторінка
    isVisible(documentsTitle);
    $(documentsLink).each(function () {
      isVisible($(this));
    })

    // "Новини" сторінка
    isVisible(newsTitle);
    $(newsCart).each(function () {
      isVisible($(this));
    })

    // "Акції" сторінка
    isVisible(sharesTitle);
    $(sharesCart).each(function () {
      isVisible($(this));
    })

    // "Контакти" сторінка
    isVisible(contacts);

    // Footer
    isVisible(footer);

  }
  runAnimations();

  // animations on scroll
  $(window).on('scroll', function () {
    runAnimations();
  });

});