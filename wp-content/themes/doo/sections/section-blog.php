<?php $doo_option = doo_option(); ?>

<?php if( esc_attr($doo_option['section_blog_show'])) : ?>
    <!-- ========== blog section ========== -->
    <section id="blog" class="pb90 pt90 bg-light">
        <div class="container">
            <div class="section_title text-center">
                <i class=" <?php echo esc_html($doo_option['blog_title_icon']); ?> "></i>
                <h2>
                    <?php echo esc_html($doo_option['blog_title']); ?>
                </h2>
                <p><?php echo esc_html($doo_option['blog_section_desc']); ?></p>
            </div>
            <div class="blog_carousel owl-carousel">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status'=>'publish',
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>

                    <div class="blog_item">
                        <div class="blog_box">
                            <div class="post-media">
                                <?php if (has_post_thumbnail()) { ?>
                                    <img src="<?php  the_post_thumbnail_url('doo_home_blog_img'); ?>" alt="<?php echo esc_attr(the_title()); ?>">
                               <?php }  ?>

                            </div>
                            <div class="blog_content">
                                <h5><?php the_title(); ?></h5>
                                <p><?php echo substr(get_the_excerpt(), 0, 120) . '...'; ?></p>
                            </div>
                            <div class="blog_footer_btn">
                                <i class="fa fa-comment-o"></i> <?php comments_number(); ?>
                                <a href="<?php the_permalink() ?>"><?php echo esc_html__('read more','doo'); ?> <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata();} ;?>
            </div>
        </div>
    </section>
    <!-- ========== blog section end ========== -->
<?php endif ; ?>