<?php $doo_option = doo_option(); ?>

<?php if( esc_attr($doo_option['section_price_show'])) : ?>
    <!-- ========== price section ========== -->
    <section id="price" class="pb90 pt90 bg-light">
        <div class="container">
            <div class="section_title text-center">
                <i class=" <?php echo esc_html($doo_option['price_title_icon']); ?> "></i>
                <h2>
                    <?php echo esc_html($doo_option['price_title']); ?>
                </h2>
                <p><?php echo esc_html($doo_option['price_desc']); ?></p>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="pricing_table_one fadeInLeft animated wow"  data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="price_header">
                            <h5> <?php echo  esc_html($doo_option['plan_one_name']); ?></h5>
                            <p> <?php echo  esc_html($doo_option['plan_one_for']); ?> </p>
                        </div>
                        <div class="price_set">
                            <span>$ <?php echo  esc_html($doo_option['plan_one_price']); ?></span>
                            <?php echo esc_html__('/ month','doo'); ?>
                        </div>
                        <ul  class="nav features">
                            <?php $feature_one =  $doo_option['plan_one_feature'] ;

                            foreach($feature_one as $feature){ ?>
                                <li><?php echo esc_attr($feature) ; ?></li>
                            <?php }?>
                        </ul>
                        <div class="pricing_one_footer">
                            <a href="<?php echo esc_url($doo_option['plan_one_btn_url']); ?>" class="btn btn_big  btn-dark-white"><?php echo esc_attr($doo_option['plan_one_btn_text']); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="pricing_table_one active fadeInLeft animated wow"  data-wow-duration="2s" data-wow-delay=".2s">
                        <div class="price_header">
                            <h5> <?php echo  esc_html($doo_option['plan_two_name']); ?></h5>
                            <p> <?php echo  esc_html($doo_option['plan_two_for']); ?> </p>
                        </div>
                        <div class="price_set">
                            <span>$ <?php echo  esc_html($doo_option['plan_two_price']); ?></span>
                            <?php echo esc_html__('/ month','doo'); ?>
                        </div>
                        <ul  class="nav features">
                            <?php $feature_one =  $doo_option['plan_two_feature'] ;

                            foreach($feature_one as $feature){ ?>
                                <li><?php echo esc_attr($feature) ; ?></li>
                            <?php }?>
                        </ul>
                        <div class="pricing_one_footer">
                            <a href="<?php echo esc_url($doo_option['plan_two_btn_url']); ?>" class="btn btn_big  btn-dark-white"><?php echo esc_attr($doo_option['plan_two_btn_text']); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="pricing_table_one fadeInLeft animated wow"  data-wow-duration="2s" data-wow-delay=".3s">
                        <div class="price_header">
                            <h5> <?php echo  esc_html($doo_option['plan_three_name']); ?></h5>
                            <p> <?php echo  esc_html($doo_option['plan_three_for']); ?> </p>
                        </div>
                        <div class="price_set">
                            <span>$ <?php echo  esc_html($doo_option['plan_three_price']); ?></span>
                            <?php echo esc_html__('/ month','doo'); ?>
                        </div>
                        <ul  class="nav features">
                            <?php $feature_one =  $doo_option['plan_three_feature'] ;

                            foreach($feature_one as $feature){ ?>
                                <li><?php echo esc_attr($feature) ; ?></li>
                            <?php }?>
                        </ul>
                        <div class="pricing_one_footer">
                            <a href="<?php echo esc_url($doo_option['plan_three_btn_url']); ?>" class="btn btn_big  btn-dark-white"><?php echo esc_attr($doo_option['plan_three_btn_text']); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== price section end ========== -->
<?php endif ; ?>