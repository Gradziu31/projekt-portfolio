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
                  $sass = get_field('sass');  
                  $node = get_field('node'); 
                  $jq = get_field('jq'); 
                ?>
                    <?php if( !empty($html) ): ?>
                       <hr>
                        <div class="languages">
                           <h3>Wykorzystane technologie:</h3>
                            <div class="display_tech">
                                <img class="html_img" src="<?php echo $html['url']; ?>">
                                <img class="sass_img" src="<?php echo $sass['url']; ?>">
                                <img class="gulp_img" src="<?php echo $gulp['url']; ?>"> 
                                <img class="wp_img" src="<?php echo $wp['url']; ?>">
                                <img class="node_img" src="<?php echo $node['url']; ?>">
                                <img class="jq_img" src="<?php echo $jq['url']; ?>">
                                <img class="php_img" src="<?php echo $php['url']; ?>">
                                <img class="js_img" src="<?php echo $js['url']; ?>">
                            </div>
                        </div>
                    <?php endif; ?>



            </div>
        </div>
    </div>
</div>
