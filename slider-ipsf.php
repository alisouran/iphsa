<div class="col-lg-12">
    <!--start-->
    <div>
        <div class="col-lg-2 d-lg-block d-md-none d-sm-none col-xl-2 d-xl-block d-none" id="thumbnail-slider1" style="float:left;">
            <div class="inner">
                <ul>
                <?php 
                    $args = array(
                            'posts_per_page'=> 20,
                            'post_type'=>'newsinfo',
                            'category_name' => 'ipsf'
                        );
                    // The Query
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                ?>
                <li>
                    <a class="thumb" href="<?php the_field("news_cover"); ?>"></a>
                </li>
                <?php
                        }
                    }else{}
                ?>
                </ul>
            </div>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12 col-xl-10 col-12" id="ninja-slider1" style="float:left;">
            <div class="slider-inner">
                <ul>
                <?php 
                    $args = array(
                            'posts_per_page'=> 20,
                            'post_type'=>'newsinfo',
                            'category_name' => 'ipsf'
                        );
                    // The Query
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                ?>
                <li>
                    <a class="ns-img" href="<?php the_field("news_cover"); ?>"><a href="<?php echo get_the_permalink(); ?>" id="slider-item-link" class="text_position"><span class="title_position"><?php echo get_the_title(); ?></span><br /><div class="summary_position"><?php echo get_post_meta($post->ID, 'news_summary', true); ?></div></a></a>
                </li>
                <?php
                        }
                    }else{}
                ?>
                </ul>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <!--end-->
</div>
<!--Slider Scripts-->
<script src="<?php bloginfo('template_directory'); ?>/js/ninja-slider1.js"></script>
<!--Slider Scripts-->	
<script src="<?php bloginfo('template_directory'); ?>/js/thumbnail-slider1.js" type="text/javascript"></script>