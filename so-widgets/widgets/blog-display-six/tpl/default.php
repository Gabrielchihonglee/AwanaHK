<div class="row" style="">
    <div class="container">
        <div class="row">
            <?php
$posts = new WP_Query($query);
while($posts->have_posts()) : $posts->the_post(); ?>
                <div class="col-md-4 col-sm-6 newholder">
                    <div class="newsimg" style="width:100%; height: 200px; background-image:url('<?php if ( has_post_thumbnail() ) {
    the_post_thumbnail_url(); } else { echo 'http://gabriellee.esy.es/awanahkdemo/wp-content/themes/awanahk/awanalogo.png';}?>'); background-position:center; background-size:contain; background-color:#bbb; background-repeat:no-repeat;"></div>
                    <h5 class="newstitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <h6 class="newsdate"><?php echo get_the_date(); ?></h6> </div>
                <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <style>
        .newholder {
            margin-bottom: 20px;
        }
        
        .newstitle {
            margin-bottom: 4px;
            margin-top: 7px;
        }
    </style>
</div>