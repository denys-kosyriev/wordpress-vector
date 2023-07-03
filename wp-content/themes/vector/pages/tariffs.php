<?php
  //Template Name: Tariffs

  wp_enqueue_script('tariffs', get_template_directory_uri() . '/assets/js/tariffs.js');
?>

<?php get_header(); ?>

<main class='tariffs-page internet'>
  <div class='modal section-form modal-form d-none'>
    <?php get_template_part('./common/tariffs-form') ?>
  </div>
  <?php get_template_part('./modals/modal-channels') ?>
  <section class='top-radio-buttons'>
    <div>
      <div class='container'>
        <h2><?php echo get_the_title() ?></h2>
      </div>
    </div>
    <div class='flex'>
      <div class='container'>
        <div class='wrapper'>
          <div class='buttons'>
            <ul>
              <li>
                <div class='btn btn-switch btn-switch-tariffs btn-net'>Інтернет</div>
              </li>
              <li>
                <div class='btn btn-switch btn-switch-tariffs btn-tv'>Телебачення</div>
              </li>
              <li>
                <div class='btn btn-switch btn-switch-tariffs btn-all'>Все разом</div>
              </li>
            </ul>
          </div>
          <?php get_template_part('./common/selected') ?>
        </div>
      </div>
    </div>
  </section>
  <section class='sliders '>
    <div class='container'>
      <?php get_template_part('./common/slider-tariffs') ?>
    </div>
  </section>
  <?php if (isset($_GET['type'])) {
    if ($_GET['type'] === 'Інтернет'): ?>
      <section class='connection-internet'>
        <div class='container'>
          <div class='wrapper'>
            <div class='left'>
              <div class='content'>
                <h2><?php echo get_field('connecting_internet_title') ?></h2>
                <?php echo get_field('connecting_internet_description') ?>
                <button class='btn btn-full scroll-up'>
                  <?php echo get_field('connecting_internet_button') ?>
                </button>
              </div>
            </div>
            <div class='right p-relative'>
              <div class='green-circle'></div>
              <div class='references shadow'>
                <?php if (have_rows('connecting_internet_phones')) :
                  while (have_rows('connecting_internet_phones')) :
                    the_row(); ?>
                    <?php echo get_sub_field('title_list') ?>
                    <ul>
                      <?php if (have_rows('phones')) :
                        while (have_rows('phones')) :
                          the_row(); ?>
                          <li class='tel-link'>
                            <a href='tel:<?php echo get_sub_field('phone') ?>'>
                              <?php echo get_sub_field('phone') ?>
                              <svg width="19" height="18" viewBox="0 0 19 18" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M16.9234 1.36508L16.1359 0.682578C15.2284 -0.224922 13.7584 -0.224922 12.8509 0.682578C12.8284 0.705078 11.4409 2.51258 11.4409 2.51258C10.5859 3.41258 10.5859 4.83008 11.4409 5.72258L12.3109 6.81758C11.2159 9.30008 9.51336 11.0101 7.11336 12.0301L6.01836 11.1526C5.12586 10.2901 3.70086 10.2901 2.80836 11.1526C2.80836 11.1526 1.00086 12.5401 0.978356 12.5626C0.0708554 13.4701 0.0708555 14.9401 0.940855 15.8101L1.69086 16.6726C2.55336 17.5351 3.71586 18.0076 4.97586 18.0076C10.7059 18.0076 18.2959 10.4101 18.2959 4.68758C18.2959 3.43508 17.8234 2.26508 16.9234 1.37258V1.36508ZM4.97586 16.5001C4.12086 16.5001 3.33336 16.1851 2.79336 15.6376L2.04336 14.7751C1.73586 14.4676 1.72086 13.9651 2.01336 13.6426C2.01336 13.6426 3.80586 12.2626 3.82836 12.2401C4.13586 11.9326 4.67586 11.9326 4.99086 12.2401C5.01336 12.2626 6.52086 13.4701 6.52086 13.4701C6.73086 13.6351 7.00836 13.6801 7.25586 13.5826C10.3609 12.3976 12.5884 10.1776 13.8709 6.97508C13.9684 6.72758 13.9309 6.44258 13.7584 6.22508C13.7584 6.22508 12.5509 4.71008 12.5359 4.69508C12.2134 4.37258 12.2134 3.85508 12.5359 3.53258C12.5584 3.51008 13.9384 1.71758 13.9384 1.71758C14.2609 1.42508 14.7634 1.43258 15.1084 1.77758L15.8959 2.46008C16.4734 3.03758 16.7959 3.82508 16.7959 4.68008C16.7959 9.90008 9.46836 16.5001 4.97586 16.5001Z"
                                  fill="#03BF6A" />
                              </svg>
                            </a>
                          </li>
                        <?php endwhile;
                      endif; ?>
                    </ul>
                  <?php endwhile;
                endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php else: ?>
      <section class='connection-tv'>
        <div class='container'>
          <div class='content'>
            <img src='<?php echo get_field('connection_tv_image') ?>' alt=''>
            <div>
              <h2><?php echo get_field('connection_tv_title') ?></h2>
              <p>
                <?php echo get_field('connection_tv_description') ?>
              </p>
              <button class='btn btn-full scroll-up'>
                <?php echo get_field('connection_tv_button') ?>
              </button>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
  <?php } else { ?>
    <section class='connection-tv'>
      <div class='container'>
        <div class='content'>
          <img src='<?php echo get_field('connection_tv_image') ?>' alt=''>
          <div>
            <h2><?php echo get_field('connection_tv_title') ?></h2>
            <p>
              <?php echo get_field('connection_tv_description') ?>
            </p>
            <button class='btn btn-full scroll-up'>
              <?php echo get_field('connection_tv_button') ?>
            </button>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>
</main>

<?php get_footer(); ?>
