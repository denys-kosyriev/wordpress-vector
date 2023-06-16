<section class='connection-tv'>
  <div class='container'>
    <div class='content'>
      <img src='<?php echo get_field('connection_tv_image', 'option') ?>' alt=''>
      <div>
        <h2>
          <?php echo get_field('connection_tv_title1', 'option') ?>
          <span><?php echo get_field('connection_tv_title2', 'option') ?></span>
        </h2>
        <?php if (have_rows('connection_tv_description', 'option')) :
          while (have_rows('connection_tv_description', 'option')) :
            the_row(); ?>
            <p>
              <?php echo get_sub_field('text') ?>
              <span><?php echo get_sub_field('highlight text') ?></span>
              <?php echo get_sub_field('text2') ?>
            </p>
          <?php endwhile;
        endif; ?>
        <button class='btn btn-full'>
          <?php echo get_field('connection_tv_button', 'option') ?>
        </button>
      </div>
    </div>
  </div>
</section>