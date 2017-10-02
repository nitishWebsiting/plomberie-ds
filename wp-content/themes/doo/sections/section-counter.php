<?php $doo_option = doo_option(); ?>

<?php if( esc_attr($doo_option['section_counter_show'])) : ?>
    <!-- ========== facts section ========== -->
    <section  class="pb90 pt90 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!--counter box-->
                    <div class="icon_box_two text-center   fadeInDown wow animated" data-wow-delay=".1s">
                        <div class="counter_info">
                            <i class=""><img src="<?php echo esc_attr( $doo_option['counter_one_icon']); ?>" style="cursor: pointer;height: 80px; width: 64px;"></i>
                            <span class="counter">
                            <?php echo esc_attr( $doo_option['counter_one_value']); ?>
                            </span>
                        </div>
                        <h4><?php echo esc_html( $doo_option['counter_one_title']); ?></h4>
                    </div>
                    <!--counter box end-->
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="icon_box_two text-center   fadeInUp wow animated"  data-wow-delay=".2s">
                        <div class="counter_info">
                            <i class="<?php echo esc_attr( $doo_option['counter_two_icon']); ?>"><img src="<?php echo esc_attr( $doo_option['counter_two_icon']); ?>" style="cursor: pointer;height: 80px;"></i>
                            <span class="counter">
                            <?php echo esc_attr( $doo_option['counter_two_value']); ?>
                            </span>
                        </div>
                        <h4><?php echo esc_html( $doo_option['counter_two_title']); ?></h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="icon_box_two text-center   fadeInDown wow animated"  data-wow-delay=".3s">
                        <div class="counter_info">
                            <i class="<?php echo esc_attr( $doo_option['counter_three_icon']); ?>"><img src="<?php echo esc_attr( $doo_option['counter_three_icon']); ?>" style="cursor: pointer;height: 80px;"></i>
                            <span class="counter">
                            <?php echo esc_attr( $doo_option['counter_three_value']); ?>
                            </span>
                        </div>
                        <h4><?php echo esc_html( $doo_option['counter_three_title']); ?></h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="icon_box_two text-center   fadeInUp wow animated"  data-wow-delay=".4s">
                        <div class="counter_info">
                            <i class="<?php echo esc_attr( $doo_option['counter_four_icon']); ?>"><img src="<?php echo esc_attr( $doo_option['counter_four_icon']); ?>" style="cursor: pointer;height: 80px;"></i>
                            <span class="counter">
                            <?php echo esc_attr( $doo_option['counter_four_value']); ?>
                            </span>
                        </div>
                        <h4><?php echo esc_html( $doo_option['counter_four_title']); ?></h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========== facts section end ========== -->
<?php endif ; ?>