<?php
  //Template Name: Connection problem
?>

<?php get_header(); ?>

<main class='connection-problems'>
  <section class='error'>
    <div class='container'>
      <div class='flex'>
        <div>
          <h2>
            <?php echo get_field('connection_problems_title') ?>
          </h2>
          <?php echo get_field('connection_problems_description') ?>
        </div>
        <img src='<?php echo get_field('connection_problems_image') ?>' alt=''>
      </div>
    </div>
  </section>
  <section class='accordion p-relative'>
    <div class='container'>
      <div class='search bg-green'>
        <?php echo get_field('connection_problems_title_search_error') ?>
        <label>
          <input type='number' placeholder='код'>
        </label>
      </div>
      <ul class='questions-list'>
        <?php if (have_rows('connection_problems_errors')) :
          while (have_rows('connection_problems_errors')) :
            the_row(); ?>
            <li class='questions-select'>
              <div class='question'>
                <h3>Помилка: <?php echo get_sub_field('number_error') ?></h3>
                <img class='icon-select' src='./assets/icons/angle-right.svg' alt=''>
              </div>
              <div class='questions-answer d-none'>
                <h3>Рішення:</h3>
                <?php if (have_rows('decision')) :
                  while (have_rows('decision')) :
                    the_row(); ?>
                    <p>
                      <?php echo get_sub_field('item') ?>
                    </p>
                  <?php endwhile;
                endif; ?>
              </div>
            </li>
          <?php endwhile;
        endif; ?>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>
