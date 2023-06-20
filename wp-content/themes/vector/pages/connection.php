<?php
  //Template Name: Connection
?>

<?php get_header(); ?>

<main class='connection net'>
  <section class='top-radio-buttons'>
    <div class='container'>
      <h2><?php echo get_field('connection_title') ?></h2>
    </div>
    <div class='flex'>
      <div class='container'>
        <div class='wrapper'>
          <div class='buttons'>
            <ul>
              <?php if (have_rows('tabs')) :
                while (have_rows('tabs')) :
                  the_row(); ?>
                  <li>
                    <?php $btn = get_sub_field('tab'); ?>
                    <a href='<?php echo esc_url($btn['url']) ?>'
                       class='btn btn-switch btn-small <?php echo get_sub_field('class_name') ?>'>
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
  <section class='section-form block-form'>
    <div class='container'>
      <div class='wrapper-form p-relative'>
        <div class='circle'></div>
        <div class='circle'></div>
        <div class='circle'></div>
        <?php get_template_part('./common/tariffs-form') ?>
      </div>
    </div>
  </section>
<?php var_dump(get_field('tab')); ?>
<!--  --><?php //if(get_field('tab') === "Інтернет")
//    get_template_part('./sections/connection-internet')
//  get_template_part('./sections/connection-tv') ?>
</main>

<?php get_footer(); ?>

