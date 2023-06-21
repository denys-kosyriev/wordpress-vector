<div class='modal modal-channels d-none'>
  <div class='channels p-relative modal-content'>
    <div class='modal-channels-header'>
      <svg class='close-modal' width="35" height="36" viewBox="0 0 35 36" fill="none"
           xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_201_888)">
          <path
            d="M20.5929 17.9204L34.3591 4.15574C35.2136 3.30121 35.2136 1.91576 34.3591 1.0613C33.5045 0.206779 32.1191 0.206779 31.2646 1.0613L17.5 14.8274L3.73533 1.0613C2.8808 0.206779 1.49535 0.206779 0.640894 1.0613C-0.213563 1.91583 -0.213631 3.30128 0.640894 4.15574L14.407 17.9204L0.640894 31.6851C-0.213631 32.5396 -0.213631 33.925 0.640894 34.7795C1.49542 35.6339 2.88087 35.634 3.73533 34.7795L17.5 21.0134L31.2646 34.7795C32.1191 35.634 33.5045 35.634 34.359 34.7795C35.2135 33.925 35.2135 32.5395 34.359 31.6851L20.5929 17.9204Z"
            fill="#11AF4C" />
        </g>
        <defs>
          <clipPath id="clip0_201_888">
            <rect width="35" height="35" fill="white" transform="translate(0 0.419922)" />
          </clipPath>
        </defs>
      </svg>
      <h2><?php echo get_field('modal_channels_title', 'option') ?></h2>
      <ul class='buttons'>
        <?php if (have_rows('modal_channels_tabs', 'option')) :
          while (have_rows('modal_channels_tabs', 'option')) :
            the_row(); ?>
            <li>
              <button class='btn btn-switch btn-big'>
                <?php echo get_sub_field('tab') ?>
              </button>
            </li>
          <?php endwhile;
        endif; ?>
      </ul>
    </div>
    <?php if (have_rows('modal_channels_channel_network', 'option')) :
      while (have_rows('modal_channels_channel_network', 'option')) :
        the_row(); ?>
        <div class='scroll <?php echo get_sub_field('class-name') ?>'>
          <?php if (have_rows('table')) :
            while (have_rows('table')) :
              the_row(); ?>
              <h3 class='title-channels'>
                <?php echo get_sub_field('title_type_channel') ?>
              </h3>
              <div class='table'>
                <div class='table-header'>
                  <div class='table-row'>
                    <?php if (have_rows('title_columns')) :
                      while (have_rows('title_columns')) :
                        the_row();
                        ?>
                        <div>
                          <span><?php echo get_sub_field('title_column') ?></span>
                        </div>
                      <?php endwhile;
                    endif;
                    ?>
                  </div>
                </div>
                <div class='table-body'>
                  <?php if (have_rows('channels', 'option')) :
                    while (have_rows('channels', 'option')) :
                      the_row(); ?>
                      <div class='table-row'>
                        <div><span>1.</span></div>
                        <div><span><?php echo get_sub_field('title_channel') ?></span></div>
                        <div><span><?php echo get_sub_field('code_channel') ?></span></div>
                      </div>
                    <?php endwhile;
                  endif; ?>
                </div>
              </div>
            <?php endwhile;
          endif; ?>
        </div>
      <?php endwhile;
    endif; ?>
  </div>
</div>
