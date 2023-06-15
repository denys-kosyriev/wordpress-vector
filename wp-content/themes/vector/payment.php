<section class='payment'>
  <div class='container'>
    <div class='payment-content shadow'>
      <img src='<?php echo get_field('payment_image') ?>' alt=''>
      <h2>
        <?php echo get_field('payment_text') ?>
        <span>
          <span><?php echo get_field('payment_bank') ?></span>
          </span>
      </h2>
      <?php $link = get_field('payment_link'); ?>
      <a
        target='_blank'
        class='btn btn-full'
        href='<?php echo esc_url($link['url']) ?>' class='btn btn-full'>
        <?php echo esc_html($link['title']) ?>
      </a>
    </div>
  </div>
</section>