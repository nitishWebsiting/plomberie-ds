<?php $doo_option = doo_option(); ?>

<?php if( esc_attr($doo_option['section_testimonial_show'])) : ?>

    <!-- ========== brands section (trusted by ) ========== -->
    <div class="bg-gray pb90 pt90">
        <div class="container">
            <div class="brand_carousel owl-carousel">

                <?php
                $args = array(
                    'post_type'         => 'brands',
                    'post_status'       => 'publish',
                );

                $service_query = new WP_Query( $args );?>
                <?php while($service_query->have_posts()): $service_query->the_post(); ?>
                    <div class="brand_item text-center">
                        <img src="<?php echo esc_url(get_post_meta( get_the_ID(), 'brand_img', true )); ?>" alt="<?php echo esc_html(the_title()); ?>">
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <!-- ========== brands section (trusted by ) end ========== -->

<?php endif ; ?>