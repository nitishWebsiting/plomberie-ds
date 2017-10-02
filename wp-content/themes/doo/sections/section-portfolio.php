<?php $doo_option = doo_option(); ?>

<?php if( esc_attr($doo_option['section_portfolio_show'])) : ?>
    <!-- ========== projects section ========== -->
    <section id="portfolio" class="pb90 pt90 bg-light">
        <div class="container">
            <div class="section_title text-center">
                <i class=" <?php echo esc_html($doo_option['portfolio_title_icon']); ?> "></i>
                <h2>
                    <?php echo esc_html($doo_option['portfolio_title']); ?>
                </h2>
                <p><?php echo esc_html($doo_option['portfolio_desc']); ?></p>
            </div>

            <!-- Filter Controls -->
            <?php
            $terms = get_terms('filters');
            $count = count($terms);
            if ( $count > 0 ){

                echo '<ul id="filtr-container" class="portfolio-categories mt25">';
                echo '<li  data-filter="all" class="active">'. esc_html__("All","doo").'</li>';
                foreach ( $terms as $term ) {
                    $termname = strtolower($term->name);
                    $termname = str_replace(' ', '-', $termname);
                    echo '<li data-filter="' . esc_html($term->term_id) . '">' . esc_html($term->name) . '</li>';
                }
                echo '</ul>';
            }
            ?>
            <!-- Filter Controls end-->
            <!-- Dynamic Grid -->
            <div class=" row filtr-container">
                <?php
                $args = array(
                    'post_type'         => 'portfolio',
                    'post_status'       => 'publish',
                );

                $portfolio_query = new WP_Query( $args );?>
                <?php while($portfolio_query->have_posts()): $portfolio_query->the_post(); ?>
                    <?php
                    $term_list = wp_get_post_terms($post->ID, 'filters', array("fields" => "all"));
                    ?>
                    <div class="filtr-item col-xs-12 col-sm-6 col-md-4" data-category="<?php
                    $i = 0;
                    $len = count($term_list);
                    foreach($term_list as $term_single) {if ($i == $len - 1){echo  esc_html($term_single->term_id);}else{echo  esc_html($term_single->term_id) .' , ';} $i++ ; }?>">
                        <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'portfolio_img_large', true )); ?>" title="<?php the_title(); ?>">
                            <div class="project_box">
                                <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'portfolio_img_small', true )); ?>" alt="pro1" />
                                <div class="product_info">
                                    <div class="product_info_text text-center">
                                        <h4><?php esc_html(the_title()); ?></h4>
                                        <p><?php echo esc_html($term_single->name); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <!-- Dynamic Grid End-->
        </div>
    </section>
    <!-- ========== projects section end ========== -->
<?php endif ; ?>