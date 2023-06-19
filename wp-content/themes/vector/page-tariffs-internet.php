<?php
  //Template Name: Tariffs internet
?>

<?php get_header(); ?>

<main class='tariffs-page internet'>
  <div class='modal section-form modal-form d-none'>
    <?php get_template_part('Tariffs-form') ?>
  </div>
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
        </div>
      </div>
    </div>
  </section>
  <section class='tariffs-page internet'>
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
            </div>
            <div class='swiper-button-prev d-none'></div>
            <div class='swiper-button-next d-none'></div>
            <div class='swiper-pagination'></div>
          </div>
        <?php endwhile;
      endif; ?>
    </div>
  </section>
  <?php get_template_part('connection-internet') ?>
</main>

<?php get_footer(); ?>
