<div class='swiper-slide'>
  <div class='tariff tariff-tv'>
    <p class='title-tariff'><?php echo get_the_title() ?></p>
    <h4 class='title title-tariff-for-modal'
    ><?php echo get_field('tariffs_select_type_tariff') ?></h4>
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
        грн/міс
      </p>
      <button class='btn btn-full open-connect-tv-modal-js get-title-tariff'>
        Підключити
      </button>
      <div class='open-details-tv-block'>
        <p class='open-details-tv'>Детальніше</p>
      </div>
    </div>
  </div>
</div>
