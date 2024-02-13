<section class="related">
    <div class="container">
        <h2 class="related__title">Похожие статьи</h2>
        <div class="related__wrap">
            <div class="swiper-container swiper-related">
                <div class="swiper-wrapper">
                    <?php
                        $args_info = ([
                            'posts_per_page' => '16',
                            'post_type'   => 'info',
                            'post_status' => 'publish',
                            'orderby'   => array(
                                'date' =>'DESC',
                            ),
                            
                        ]);
                        $info_arr = new WP_Query($args_info);
                        /*print_r($info_arr);*/
                        
                        if ($info_arr->have_posts()) :
                            while( $info_arr->have_posts() ) : $info_arr->the_post();
                                get_template_part('template-parts/content-related');
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        
                    ?>
                    
                    
                    
                    
                </div>
            </div>
            <div class="swiper-button-next">
                <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-swiper"></use></svg>
            </div>
            <div class="swiper-button-prev">
                <svg><use xlink:href="<?= get_template_directory_uri() ?>/assets/img/sprite.svg#arrow-swiper"></use></svg>
            </div>
        </div>
    </div>
</section>