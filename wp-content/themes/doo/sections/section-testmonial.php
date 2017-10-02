<?php $doo_option = doo_option(); ?>

<?php if( esc_attr($doo_option['section_testimonial_show'])) : ?>
    <!-- ========== Testimonial Section ========== -->
    <section id="testmonial" class="testmonial_section pb90 pt90 ">
        <div class="bg-overlay"></div>
        <div class="testmonial_section_inner">
            <div class="container">
                <div class="testimonial_carousel owl-carousel">
                    <?php
                    $args = array(
                        'post_type'         => 'testimonial',
                        'post_status'       => 'publish',
                    );

                    $service_query = new WP_Query( $args );?>
                    <?php while($service_query->have_posts()): $service_query->the_post(); ?>
                        <div class="item">
                            <div class="testimonial-box">
                                <h5> <?php echo esc_html(get_post_meta( get_the_ID(), 'test_description', true )); ?></h5>
                                <img src="<?php echo esc_url(get_post_meta( get_the_ID(), 'test_image', true )); ?>" class="img-circle" alt="<?php echo esc_html(get_post_meta( get_the_ID(), 'test_name', true )); ?>">
                                <h6><?php echo esc_html(the_title()); ?></h6>
                                <p>
                                    <?php echo esc_html(get_post_meta( get_the_ID(), 'test_job', true )); ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </section>
    <!-- ========== Testimonial Section End ========== -->

<?php endif ; ?>