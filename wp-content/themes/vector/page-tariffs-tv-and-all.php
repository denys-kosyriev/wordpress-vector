<?php
  //Template Name: Tariffs tv and all
?>

<?php get_header(); ?>

<main class='tariffs-page internet'>
  <div class='modal section-form modal-form d-none'>
    <?php get_template_part('Tariffs-form') ?>
  </div>
  <?php get_template_part('modal-channels') ?>
  <section class='top-radio-buttons'>
    <div>
      <div class='container'>
        <h2><?php echo get_field('tariffs_title') ?></h2>
      </div>
    </div>
    <div class='flex'>
      <div class='container'>
        <div class='wrapper'>
          <div class='buttons'>
            <ul>
              <?php if (have_rows('switch')) :
                while (have_rows('switch')) :
                  the_row(); ?>
                  <li>
                    <?php
                      $btn = get_sub_field('button');
                    ?>
                    <a href='<?php echo esc_url($btn['url']) ?>' class='btn btn-switch btn-small'>
                      <?php echo esc_html($btn['title']) ?>
                    </a>
                  </li>
                <?php endwhile;
              endif; ?>
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
  <section class='tariffs-page tv'>
    <div class='container'>
      <?php if (have_rows('tariffs_types')) :
        while (have_rows('tariffs_types')) :
          the_row(); ?>
          <div>
            <div class='container'>
              <h3>
                <?php echo get_sub_field('title') ?>
                <span><?php echo get_sub_field('title2') ?></span>
              </h3>
            </div>
          </div>
          <div class='swiper tariffs-slider action-section'>
            <div class='swiper-wrapper tariffs-wrapper'>
              <?php if (have_rows('select_net_or_tv_and_all')) :
                while (have_rows('select_net_or_tv_and_all')) :
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
                          <p class='detail'><?php echo get_sub_field('details') ?></p>
                        </div>
                      </div>
                    </div>
                <?php endwhile;
              endif; ?>
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
                  <?php if (have_rows('info')) :
                    while (have_rows('info')) :
                      the_row(); ?>
                      <li>
                        <?php echo get_sub_field('item') ?>
                      </li>
                    <?php endwhile;
                  endif; ?>
                </ul>
              </div>
            </div>
          </div>
        <?php endwhile;
      endif; ?>
    </div>
  </section>
  <?php get_template_part('connection-tv') ?>
</main>

<?php get_footer(); ?>
