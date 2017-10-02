<?php $doo_option = doo_option(); ?>

<?php if( esc_attr($doo_option['section_welcome_show'])) : ?>
    <!-- ========== feature section ========== -->
    <section id="about" class="pb90 pt90 bg-light">
        <div class="container">
            <div class="section_title text-center">
                <i class="<?php echo esc_html($doo_option['feature_one_icon']); ?>"></i>
                <span style="color:#74bbe3"><h2>
                    <?php echo esc_html($doo_option['welcome_title']); ?>
                </h2></span>
                <p><?php echo esc_html($doo_option['welcome_description']); ?></p>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="icon_box_one text-center"  >
                        <i class="<!--<?php echo esc_html($doo_option['feature_one_icon']); ?>-->"><img src="wp-content/themes/doo/assets/img/Picto-presentation-Qualite╠ü.svg" style="cursor: pointer;height: 80px;"></i>
                        <h3> <?php echo esc_html($doo_option['feature_one_title']); ?></h3>
                        <p> <?php echo esc_html($doo_option['feature_one_text']); ?></p>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="icon_box_one text-center"  >
                        <i class="<!--<?php echo esc_html($doo_option['feature_two_icon']); ?>-->"><img src="wp-content/themes/doo/assets/img/Picto-presentation-rapidite╠ü.svg" style="cursor: pointer;height: 80px;"></i>
                        <h3> <?php echo esc_html($doo_option['feature_two_title']); ?></h3>
                        <p> <?php echo esc_html($doo_option['feature_two_text']); ?></p>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <div class="icon_box_one text-center"  >
                        <i class="<!--<?php echo esc_html($doo_option['feature_three_icon']); ?>-->"><img src="wp-content/themes/doo/assets/img/Picto-presentation-professionnel.svg" style="cursor: pointer;height: 80px;"></i>
                        <h3> <?php echo esc_html($doo_option['feature_three_title']); ?></h3>
                        <p> <?php echo esc_html($doo_option['feature_three_text']); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========== feature section end ========== -->
<?php endif ; ?>