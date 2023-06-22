<?php
  //Template Name: Documents
?>

<?php get_header(); ?>

  <main class='documents'>
    <section>
      <div class='container'>
        <h2><?php echo get_the_title() ?></h2>
        <div class='content'>
          <?php if (have_rows('documents_document')) :
            while (have_rows('documents_document')) :
              the_row();
              $file = get_field('document');
              var_dump($file);
              ?>
              <a href='<?php echo get_sub_field('document') ?>' target='_blank' class='shadow'>
                <h3>
                  <?php echo get_sub_field('title') ?>
                </h3>
                <p>
                  <?php echo get_sub_field('description') ?>
                </p>
                <div>
                  <div class='button'>
                    Відкрити
                    <svg viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464466C11.9763 0.269204 11.6597 0.269204 11.4645 0.464466C11.2692 0.659728 11.2692 0.976311 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM0 4.5H15V3.5H0V4.5Z"
                        fill="#03BF6A" />
                    </svg>
                  </div>
                </div>
              </a>
            <?php endwhile;
          endif; ?>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>