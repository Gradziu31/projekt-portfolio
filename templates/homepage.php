<?php
/*
Template Name: Home Page
*/
?>
<div class="section--one">
<div class="about-me">
  <h2  class="box">O MNIE</h2>
  <p class="about-me--text box">Dowiedz się o mnie więcej!</p>
  <div class="info--box">
    <div class="box--info box">
      <h3>KIM JESTEM?</h3>
      <?php echo $options['open_hours']; ?>
    </div>
    <div class="box--photo box">
      <h3>ZDJĘCIA</h3>
      <img src="<?php echo $options['photo_about_me']; ?>" alt="">
    </div>
    <div class="box--contact box">
    <h3>KONTAKT</h3>
      <div class="social--media">
        <?php echo $options['social_media']; ?>
      </div>
    </div>
  </div>
</div>
</div>

<div class="section--two">
<div class="my--project">
  <h2 class="box">MOJE PRACE</h2>
  <h3 class="box">kilka ostatnich prac!</h3>
  <div class="projects small_photo">
       <?php $args = array( 'numberposts' => 10 );
         $lastposts = get_posts( $args );
        foreach($lastposts as $post) : setup_postdata($post); ?>
              <!-- <h3 class="text-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> -->
              <!-- <span class="post-height"><?php the_excerpt(); ?></span> -->
                <a href="<?php the_permalink();?>"><?php echo get_the_post_thumbnail( null, $size, $attr );?></a>
              <!-- <span class="time time-green"><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></span>
              <a href="<?php the_permalink(); ?>"><span class="next next-green">Czytaj dalej</span></a> -->
        <?php endforeach; ?>
  </div>
</div>
</div>

<div class="section--three">
  <h2 class="box"><?php echo $options['experience']; ?></h2>
  <h3 class="box"><?php echo $options['experience_desc']; ?></h3>
<div class="languages box">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  		<a href="<?php the_permalink(); ?>"></a>
  		<?php the_content(); ?>
  	</div>
  <?php endwhile; ?>
  	<div class="navigation">
  		<div class="next-posts"><?php next_posts_link(); ?></div>
  		<div class="prev-posts"><?php previous_posts_link(); ?></div>
  	</div>
  <?php else : ?>
  	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  		<h1>Not Found</h1>
  	</div>
  <?php endif; ?>
</div>
</div>
