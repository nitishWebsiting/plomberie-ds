<?php $doo_option = doo_option(); ?>

<?php if( esc_attr($doo_option['section_team_show'])) : ?>
    <!-- ========== team section ========== -->
    <section id="team" class="pb90 pt90 bg-gray">
        <div class="container">
            <div class="section_title text-center">
                <i class=" <?php echo esc_html($doo_option['team_title_icon']); ?> "></i>
                <h2>
                    <?php echo esc_html($doo_option['team_title']); ?>
                </h2>
                <p><?php echo esc_html($doo_option['team_desc']); ?></p>
            </div>
            <div class="team_carousel owl-carousel">

                <?php
                $args = array(
                    'post_type'         => 'team',
                    'post_status'       => 'publish',
                );

                $team_query = new WP_Query( $args );?>
                <?php while($team_query->have_posts()): $team_query->the_post(); ?>
                    <div class="team_item">
                        <div class="team_box">
                            <div class="team_img">
                                <img src="<?php  echo esc_url( get_post_meta( get_the_ID(), 'team_member_image', true )); ?>" alt="<?php echo esc_html( the_title()); ?>">
                                <div class="team_social">
                                    <div>
                                        <ul class="team_social_ul">
                                            <?php
                                            $tw = get_post_meta( get_the_ID(), 'team_twitter_link', true );
                                            if(!empty($tw)){ ?>
                                                <li>
                                                    <a href="<?php echo  esc_url( $tw );?>" class="bg-twitter"><i class="fa fa-twitter"></i></a>
                                                </li>
                                            <?php } ?>

                                            <?php
                                            $fb = get_post_meta( get_the_ID(), 'team_facebook_link', true );
                                            if(!empty($fb)){ ?>
                                                <li>
                                                    <a href="<?php echo  esc_url($fb) ;?>" class="bg-facebook"><i class="fa fa-facebook"></i></a>
                                                </li>
                                            <?php } ?>

                                            <?php
                                            $inst = get_post_meta( get_the_ID(), 'team_instagram_link', true );
                                            if(!empty($inst)){ ?>
                                                <li>
                                                    <a href="<?php echo esc_url( $inst );?>" class="bg-googleplus"><i class="fa fa-instagram"></i></a>
                                                </li>
                                            <?php } ?>

                                            <?php
                                            $link = get_post_meta( get_the_ID(), 'team_linkedin_link', true );
                                            if(!empty($link)){ ?>
                                                <li>
                                                    <a href="<?php echo  esc_url($link) ;?>" class="bg-linkedin"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="team_content">
                                <h3 ><?php echo esc_html( the_title()); ?></h3>
                                <h6 ><?php echo  esc_html( get_post_meta( get_the_ID(), 'team_member_position', true )); ?></h6>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <!-- ========== team section end ========== -->
<?php endif ; ?>