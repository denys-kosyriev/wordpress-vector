<?php
  //Template Name: News
?>

<?php get_header(); ?>

<main class='news'>
  <section>
    <div class='container'>
      <h2><?php echo get_the_title() ?></h2>
      <div class='carts'>
        <?php
          query_posts(array(
            'post_type' => 'news'
          ));
          while (have_posts()) : the_post(); ?>
            <div class='cart p-relative shadow'>
              <div class='img'>
                <?php the_post_thumbnail() ?>
              </div>
              <div class='content'>
                <h3><?php the_title() ?></h3>
                <p><?php the_excerpt(); ?></p>
                <div class='bottom'>
                  <a href='<?php the_permalink() ?>' class='btn btn-full'>
                    Детальніше
                  </a>
                  <div><?php the_date() ?></div>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
