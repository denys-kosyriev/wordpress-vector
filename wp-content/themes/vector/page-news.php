<?php get_header(); ?>

<main class='news'>
  <?php if (have_rows('news')) :
    while (have_rows('news')) :
      the_row(); ?>
      <section>
        <div class='container'>
          <h2><?php echo get_sub_field('title') ?></h2>
          <div class='carts'>
            <?php if (have_rows('action')) :
              while (have_rows('action')) :
                the_row(); ?>
                <div class='cart p-relative shadow'>
                  <div class='img'>
                    <img src='<?php echo get_sub_field('image') ?>' alt='' class='p-relative'>
                  </div>
                  <div class='content'>
                    <h3><?php echo get_sub_field('title') ?></h3>
                    <p><?php echo get_sub_field('subtitle') ?></p>
                    <div class='bottom'>
                      <?php $action_btn = get_sub_field('button'); ?>
                      <a href='<?php echo esc_url($action_btn['url']) ?>' class='btn btn-full'>
                        <?php echo esc_html($action_btn['title']) ?>
                      </a>
                      <div><?php echo get_sub_field('date') ?></div>
                    </div>
                  </div>
                </div>
              <?php endwhile;
            endif; ?>
          </div>
        </div>
      </section>
    <?php endwhile;
  endif; ?>
</main>

<?php get_footer(); ?>
