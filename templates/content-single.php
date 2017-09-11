<div class="content-post">
    <div class="single--post">
        <div class="on--left">
            <div class="content--left--post">
                <a href="<?php the_permalink();?>">
                    <?php echo get_the_post_thumbnail( null, $size, $attr ); ?>
                </a>
            </div>
        </div>
        <div class="on--right">
            <div class="content--right--post">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <hr>
                <?php while (have_posts()) : the_post(); ?>
                <h6>
                    <?php the_content(); ?>
                </h6>
                <h6>
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                </h6>
                <h6>
                </h6> 
                <?php endwhile; ?>



                <?php
                  $html = get_field('html');
                  $js = get_field('js');
                  $php = get_field('php');
                  $gulp = get_field('gulp');
                  $wp = get_field('wp');
                ?>
                    <?php if( !empty($html) ): ?>
                       <hr>
                        <div class="languages">
                           <h3>Wykorzystane technologie:</h3>
                            <div class="display_tech">
                                <img class="html_img" src="<?php echo $html['url']; ?>" alt="html">
                            </div>
                        </div>
                    <?php endif; ?>



            </div>
        </div>
    </div>
</div>
