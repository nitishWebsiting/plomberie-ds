<?php $doo_option = doo_option(); ?>

<?php if( esc_attr($doo_option['section_contact_us_show'])) : ?>
    <!--========== contact us section ========== -->
    <section class="pb90 pt90 bg-light" id="contact">
        <div class="container">
            <div class="section_title text-center">
                <i class="<?php echo esc_html($doo_option['contact_us_title_icon']); ?> "></i>
                <h2>
                    <?php echo esc_html($doo_option['contact_title']); ?>
                </h2>
                <p><?php echo esc_html($doo_option['contact_desc']); ?></p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!--map -->
                    <div id="map">
                        <?php $content = $doo_option['map_src'];
                        echo wp_kses($content,
                            array(
                                'iframe' => array(
                                    'src' => array(),
                                    'allowfullscreen' => array()
                                )
                            ) );
                        ?>
                    </div>
                    <!--map end-->
                </div>
                <div class=" col-md-6">
                    <?php

                    if(isset($doo_option['contact_form'])){
                        $c = $doo_option['contact_form'];
                        echo do_shortcode($c);
                    }

                    ?>
                </div>
            </div>
        </div>

    </section>
    <!--========== contact us section end ========== -->
<?php endif ; ?>