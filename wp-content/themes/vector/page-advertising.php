<?php get_header(); ?>

<main class='advertising'>
  <?php if (have_rows('advertising_services')) :
    while (have_rows('advertising_services')) :
      the_row(); ?>
      <section class='advertising-services'>
        <div class='container'>
          <h2><?php echo get_sub_field('title') ?></h2>
          <div class='table'>
            <?php if (have_rows('table_header')):
              while (have_rows('table_header')):
                the_row() ?>
                <div class='table-header'>
                  <div class='table-row'>
                    <div><span><?php echo get_sub_field('column_title_service') ?></span></div>
                    <div><span><?php echo get_sub_field('column_number') ?></span></div>
                    <div><span><?php echo get_sub_field('column_cost') ?></span></div>
                  </div>
                </div>
              <?php endwhile;
            endif; ?>
            <div class='table-body'>
              <?php if (have_rows('table_body')):
                while (have_rows('table_body')):
                  the_row() ?>
                  <div class='table-row'>
                    <div>
                      <span><?php echo get_sub_field('title_service') ?></span>
                      <span><?php echo get_sub_field('service_description') ?></span>
                    </div>
                    <div>
                      <span><?php echo get_sub_field('number') ?></span>
                      <span><?php echo get_sub_field('number_plus') ?></span>
                    </div>
                    <div><span><?php echo get_sub_field('cost') ?></span></div>
                  </div>
                <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile;
  endif; ?>
  <?php if (have_rows('advertising')):
    while (have_rows('advertising')):
      the_row() ?>
      <section class='billboard'>
        <div class='container'>
          <div class='wrapper p-relative'>
            <div class='content'>
              <div class='left'>
                <h2><?php echo get_sub_field('title') ?></h2>
                <p class='subtitle'><?php echo get_sub_field('description') ?></p>
                <p class='subtitle'>
                  <?php echo get_sub_field('districts') ?>
                </p>
                <?php $internet_btn = get_sub_field('button'); ?>
                <a href='<?php echo esc_url($internet_btn['url']) ?>' class='btn btn-black'>
                  <?php echo esc_html($internet_btn['title']) ?>
                </a>
              </div>
              <img src='<?php echo get_sub_field('image') ?>' alt=''>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile;
  endif; ?>
</main>

<?php get_footer(); ?>
