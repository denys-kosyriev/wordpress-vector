<section class='connection-tv'>
  <div class='container'>
    <div class='content'>
      <img src='<?php echo get_field('connection_tv_image', 'option') ?>' alt=''>
      <div>
        <h2>
          <?php echo get_field('connection_tv_title', 'option') ?>
        </h2>
        <p>
          <?php echo get_field('connection_tv_description', 'option') ?>
        </p>
        <button class='btn btn-full'>
          <?php echo get_field('connection_tv_button', 'option') ?>
        </button>
      </div>
    </div>
  </div>
</section>