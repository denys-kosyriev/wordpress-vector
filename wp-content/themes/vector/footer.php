<?php wp_footer(); ?>

<footer class="footer p-relative">
  <div class='content'>
    <div class="container">
      <div class='wrapper'>
        <div class='flex'>
          <div class='navigation'>
            <img src='<?php echo get_field('footer_logotype', 'option') ?>'
                 alt=''
                 class='logo'>
            <?php
              wp_nav_menu([
                'theme_location' => 'footer-navigation',
                'container' => null,
                'item_wrap' => '<ul>%3$s</ul>',
              ]);
            ?>
          </div>
          <div class='phone-numbers'>
            <?php if (have_rows('footer_phones_list', 'option')) :
              while (have_rows('footer_phones_list', 'option')) :
                the_row(); ?>
                <ul>
                  <li>
                    <h3><?php echo get_sub_field('title_phones') ?></h3>
                  </li>
                  <?php if (have_rows('phones', 'option')):
                    while (have_rows('phones', 'option')):
                      the_row(); ?>
                      <li class='tel-link'>
                        <?php $phone = get_sub_field('phone'); ?>
                        <a href='tel:<?php echo get_sub_field('phone') ?>'>
                          <?php echo get_sub_field('phone') ?>
                          <svg viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M16.9234 1.36508L16.1359 0.682578C15.2284 -0.224922 13.7584 -0.224922 12.8509 0.682578C12.8284 0.705078 11.4409 2.51258 11.4409 2.51258C10.5859 3.41258 10.5859 4.83008 11.4409 5.72258L12.3109 6.81758C11.2159 9.30008 9.51336 11.0101 7.11336 12.0301L6.01836 11.1526C5.12586 10.2901 3.70086 10.2901 2.80836 11.1526C2.80836 11.1526 1.00086 12.5401 0.978356 12.5626C0.0708554 13.4701 0.0708555 14.9401 0.940855 15.8101L1.69086 16.6726C2.55336 17.5351 3.71586 18.0076 4.97586 18.0076C10.7059 18.0076 18.2959 10.4101 18.2959 4.68758C18.2959 3.43508 17.8234 2.26508 16.9234 1.37258V1.36508ZM4.97586 16.5001C4.12086 16.5001 3.33336 16.1851 2.79336 15.6376L2.04336 14.7751C1.73586 14.4676 1.72086 13.9651 2.01336 13.6426C2.01336 13.6426 3.80586 12.2626 3.82836 12.2401C4.13586 11.9326 4.67586 11.9326 4.99086 12.2401C5.01336 12.2626 6.52086 13.4701 6.52086 13.4701C6.73086 13.6351 7.00836 13.6801 7.25586 13.5826C10.3609 12.3976 12.5884 10.1776 13.8709 6.97508C13.9684 6.72758 13.9309 6.44258 13.7584 6.22508C13.7584 6.22508 12.5509 4.71008 12.5359 4.69508C12.2134 4.37258 12.2134 3.85508 12.5359 3.53258C12.5584 3.51008 13.9384 1.71758 13.9384 1.71758C14.2609 1.42508 14.7634 1.43258 15.1084 1.77758L15.8959 2.46008C16.4734 3.03758 16.7959 3.82508 16.7959 4.68008C16.7959 9.90008 9.46836 16.5001 4.97586 16.5001Z"
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
        <div class='links'>
          <ul class='addresses'>
            <?php if (get_field('footer_email', 'option')) { ?>
              <li>
                <svg id="Layer_1"
                     xmlns="http://www.w3.org/2000/svg"
                     x="0px" y="0px" viewBox="-0.5 0.5 42 42" xml:space="preserve">
<path d="M40.5,31.5v-18c0,0-18.2,12.7-19.97,13.359C18.79,26.23,0.5,13.5,0.5,13.5v18c0,2.5,0.53,3,3,3h34
	C40.029,34.5,40.5,34.061,40.5,31.5z M40.471,9.971c0-1.821-0.531-2.471-2.971-2.471h-34c-2.51,0-3,0.78-3,2.6l0.03,0.28
	c0,0,18.069,12.44,20,13.12C22.57,22.71,40.5,10.1,40.5,10.1L40.471,9.971z" />
</svg>
                <a href='mailto:<?php echo get_field('footer_email', 'option') ?>'>
                  <?php echo get_field('footer_email', 'option') ?></a>
              </li>
            <?php }
              if (have_rows('footer_links_sites', 'option')) { ?>
                <li>
                  <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M9 0C7.21997 0 5.47991 0.527841 3.99987 1.51677C2.51983 2.50571 1.36628 3.91131 0.685088 5.55585C0.00389957 7.20038 -0.17433 9.00998 0.172937 10.7558C0.520204 12.5016 1.37737 14.1053 2.63604 15.364C3.89472 16.6226 5.49836 17.4798 7.24419 17.8271C8.99002 18.1743 10.7996 17.9961 12.4442 17.3149C14.0887 16.6337 15.4943 15.4802 16.4832 14.0001C17.4722 12.5201 18 10.78 18 9C17.9974 6.61384 17.0484 4.32616 15.3611 2.63889C13.6738 0.951621 11.3862 0.00258081 9 0ZM15.4853 5.25H13.0695C12.5287 3.99674 11.8167 2.82456 10.9538 1.767C12.8636 2.2867 14.4917 3.5381 15.4853 5.25ZM12.375 9C12.3688 9.76361 12.2485 10.522 12.018 11.25H5.982C5.75149 10.522 5.63116 9.76361 5.625 9C5.63116 8.2364 5.75149 7.47801 5.982 6.75H12.018C12.2485 7.47801 12.3688 8.2364 12.375 9ZM6.5835 12.75H11.4165C10.7799 14.0068 9.96612 15.1656 9 16.191C8.03353 15.1659 7.21968 14.007 6.5835 12.75ZM6.5835 5.25C7.22008 3.9932 8.03389 2.83437 9 1.809C9.96648 2.83408 10.7803 3.99297 11.4165 5.25H6.5835ZM7.05 1.767C6.18575 2.82434 5.47244 3.99652 4.9305 5.25H2.51475C3.50915 3.53732 5.13875 2.28582 7.05 1.767ZM1.84575 6.75H4.425C4.23057 7.48436 4.12977 8.24035 4.125 9C4.12977 9.75965 4.23057 10.5156 4.425 11.25H1.84575C1.38476 9.78542 1.38476 8.21458 1.84575 6.75ZM2.51475 12.75H4.9305C5.47244 14.0035 6.18575 15.1757 7.05 16.233C5.13875 15.7142 3.50915 14.4627 2.51475 12.75ZM10.9538 16.233C11.8167 15.1754 12.5287 14.0033 13.0695 12.75H15.4853C14.4917 14.4619 12.8636 15.7133 10.9538 16.233ZM16.1543 11.25H13.575C13.7694 10.5156 13.8702 9.75965 13.875 9C13.8702 8.24035 13.7694 7.48436 13.575 6.75H16.1528C16.6137 8.21458 16.6137 9.78542 16.1528 11.25H16.1543Z"
                    />
                  </svg>
                  <div>
                    <?php while (have_rows('footer_links_sites', 'option')):
                      the_row();
                      $link = get_sub_field('link'); ?>
                      <a href='<?php echo $link ?>'>
                        <?php echo $link ?>
                      </a>
                    <?php endwhile; ?>
                  </div>
                </li>
              <?php }
              if (get_field('footer_address', 'option')) { ?>
                <li class='footer-location'>
                  <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_305_265)">
                      <path
                        d="M9.79688 4.5C9.20353 4.5 8.62351 4.67595 8.13017 5.00559C7.63682 5.33524 7.2523 5.80377 7.02524 6.35195C6.79817 6.90013 6.73876 7.50333 6.85452 8.08527C6.97028 8.66721 7.256 9.20176 7.67556 9.62132C8.09511 10.0409 8.62966 10.3266 9.21161 10.4424C9.79355 10.5581 10.3967 10.4987 10.9449 10.2716C11.4931 10.0446 11.9616 9.66006 12.2913 9.16671C12.6209 8.67336 12.7969 8.09334 12.7969 7.5C12.7969 6.70435 12.4808 5.94129 11.9182 5.37868C11.3556 4.81607 10.5925 4.5 9.79688 4.5ZM9.79688 9C9.50021 9 9.2102 8.91203 8.96352 8.7472C8.71685 8.58238 8.52459 8.34811 8.41106 8.07403C8.29753 7.79994 8.26782 7.49834 8.3257 7.20736C8.38358 6.91639 8.52644 6.64912 8.73622 6.43934C8.946 6.22956 9.21327 6.0867 9.50424 6.02882C9.79521 5.97094 10.0968 6.00065 10.3709 6.11418C10.645 6.22771 10.8793 6.41997 11.0441 6.66665C11.2089 6.91332 11.2969 7.20333 11.2969 7.5C11.2969 7.89783 11.1388 8.27936 10.8575 8.56066C10.5762 8.84196 10.1947 9 9.79688 9Z"
                        fill="#11AF4C" />
                      <path
                        d="M9.79516 18C9.16362 18.0033 8.54049 17.8551 7.97796 17.5681C7.41542 17.281 6.92985 16.8633 6.56191 16.35C3.70366 12.4073 2.25391 9.44328 2.25391 7.53979C2.25391 5.53972 3.04843 3.62157 4.46269 2.20732C5.87695 0.793058 7.79509 -0.00146484 9.79516 -0.00146484C11.7952 -0.00146484 13.7134 0.793058 15.1276 2.20732C16.5419 3.62157 17.3364 5.53972 17.3364 7.53979C17.3364 9.44328 15.8867 12.4073 13.0284 16.35C12.6605 16.8633 12.1749 17.281 11.6124 17.5681C11.0498 17.8551 10.4267 18.0033 9.79516 18ZM9.79516 1.63579C8.22947 1.63757 6.72842 2.26033 5.62131 3.36744C4.5142 4.47455 3.89144 5.9756 3.88966 7.54129C3.88966 9.04879 5.30941 11.8365 7.88641 15.3908C8.10518 15.6921 8.39218 15.9374 8.72394 16.1065C9.0557 16.2756 9.42278 16.3638 9.79516 16.3638C10.1675 16.3638 10.5346 16.2756 10.8664 16.1065C11.1981 15.9374 11.4851 15.6921 11.7039 15.3908C14.2809 11.8365 15.7007 9.04879 15.7007 7.54129C15.6989 5.9756 15.0761 4.47455 13.969 3.36744C12.8619 2.26033 11.3608 1.63757 9.79516 1.63579Z"
                        fill="#11AF4C" />
                    </g>
                    <defs>
                      <clipPath id="clip0_305_265">
                        <rect width="18" height="18" fill="white" transform="translate(0.796875)" />
                      </clipPath>
                    </defs>
                  </svg>
                  <?php $address = get_field('footer_address', 'option'); ?>
                  <a href='<?php echo esc_html($address['url']) ?>' target='_blank'>
                    <?php echo esc_html($address['title']) ?>
                  </a>
                </li>
              <?php } ?>
          </ul>
          <ul class='socials'>
            <?php if (get_field('footer_facebook', 'option')) { ?>
              <li>
                <a href='<?php echo get_sub_field('footer_facebook', 'option') ?>' target='_blank'>
                  <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/facebook.svg' alt=''>
                </a>
              </li>
            <?php }
              if (get_field('footer_instagram', 'option')) { ?>
                <li>
                  <a href='<?php echo get_sub_field('footer_instagram', 'option') ?>' target='_blank'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/instagram.svg' alt=''>
                  </a>
                </li>
              <?php }
              if (get_field('footer_telegram', 'option')) { ?>
                <li>
                  <a href='<?php echo get_sub_field('footer_telegram', 'option') ?>' target='_blank'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/telegram.svg' alt=''>
                  </a>
                </li>
              <?php }
              if (get_field('footer_viber', 'option')) { ?>
                <li>
                  <a href='<?php echo get_sub_field('footer_viber', 'option') ?>' target='_blank'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/viber.svg' alt=''>
                  </a>
                </li>
              <?php }
              if (get_field('footer_youtube', 'option')) { ?>
                <li>
                  <a href='<?php echo get_sub_field('footer_youtube', 'option') ?>' target='_blank'>
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/youtube.svg' alt=''>
                  </a>
                </li>
              <?php } ?>
          </ul>
        </div>
      </div>
      <p class='copywriting'>©
        <span class='currentYear'></span>
        <?php echo get_field('footer_copywriting', 'option') ?></p>
    </div>
  </div>
</footer>

</body>
</html>