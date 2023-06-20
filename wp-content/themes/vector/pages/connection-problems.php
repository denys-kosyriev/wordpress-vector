<?php
  //Template Name: Connection Problem
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
      <ul class='questions-list'>
        <?php if (have_rows('accordion')) :
          while (have_rows('accordion')) :
            the_row(); ?>
            <li class='questions-select'>
              <div class='question'>
                <div class='number-error'>
                  <h3>Помилка:</h3>
                  <?php echo get_sub_field('question') ?>
                </div>
                <svg class='icon-select' width="25" height="24" viewBox="0 0 25 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.45888 24L6.04688 22.588L15.9279 12.707C16.1153 12.5195 16.2207 12.2652 16.2207 12C16.2207 11.7349 16.1153 11.4806 15.9279 11.293L6.06388 1.43103L7.47788 0.0170288L17.3399 9.87903C17.9023 10.4416 18.2182 11.2045 18.2182 12C18.2182 12.7955 17.9023 13.5584 17.3399 14.121L7.45888 24Z"
                    fill="#03BF6A" />
                </svg>
              </div>
              <div class='questions-answer d-none'>
                <h3>Рішення:</h3>
                <?php echo get_sub_field('answer') ?>
            </li>
          <?php endwhile;
        endif; ?>
      </ul>
    </div>
  </section>
</main>

<?php get_footer(); ?>
