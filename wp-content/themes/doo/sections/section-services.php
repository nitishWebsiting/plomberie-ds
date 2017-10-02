<?php $doo_option = doo_option(); ?>
<?php if( esc_attr($doo_option['section_services_show'])) : ?>
    <!-- ========== service section ========== -->
    <section id="services" class="pb90 pt90 bg-gray">
        <div class="container">
            <div class="section_title text-center">
                <i class="<?php echo esc_html($doo_option['services_title_icon']); ?> "></i>
                <h2>
                    <?php echo esc_html($doo_option['services_title']); ?>
                </h2>
                <p><?php echo esc_html($doo_option['services_desc']); ?></p>
            </div>
            <div class="row">
                <?php
                $args = array(
                    'post_type'         => 'service',
                    'post_status'       => 'publish',
                );

                $service_query = new WP_Query( $args );
                $i = 1;
                ?>
                <?php while($service_query->have_posts()): $service_query->the_post(); ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="icon_box_three text-center animated fadeInLeft wow animated"  data-wow-delay="<?php echo '0.'.$i.'s' ; ?>">
                            <i class=""><img src=" <?php echo esc_attr(get_post_meta( get_the_ID(), 'service_icon', true )); ?>" style="cursor: pointer;height: 80px;"></i>
                            <h3><?php echo esc_html(the_title()); ?></h3>
                            <p><?php echo esc_html(get_post_meta( get_the_ID(), 'service_small_desc', true )); ?></p>
                        </div>
                    </div>
                <?php $i++ ; endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <!-- ========== service section end ========== -->
<?php endif ; ?>