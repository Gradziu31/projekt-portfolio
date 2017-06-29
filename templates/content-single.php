<h6 style="background: white;"><?php the_title(); ?></h6>
<div class="single--post">
  <div class="on--left">
    <div class="content--left--post">
        <a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail( null, $size, $attr );?></a>
    </div>
  </div>
  <div class="on--right">
    <div class="content--right--post">
      <?php while (have_posts()) : the_post(); ?>
            <h6 style="background: pink;"><?php the_content(); ?></h6>
            <h6 style="background: black;"><?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?></h6>
        <h6 style="background: green;"><?php comments_template('/templates/comments.php'); ?></h6>
      <?php endwhile; ?>
    </div>
  </div>
</div>
