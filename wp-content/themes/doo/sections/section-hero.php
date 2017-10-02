<?php $doo_option = doo_option(); ?>
<?php
if( esc_attr($doo_option['hero_section_style']) == 'background_video'){ ?>

    <!-- ========== hero section ========== -->
    <section id="home" class="hero hero_full_screen hero_parallax text-center ">
        <div  id="home_intro_video" class=" home_intro_video player" data-property="{videoURL:'https://youtu.be/e452W2Kj-yg',containment:'#home',autoPlay:true, mute:true, startAt:5, opacity:1}"></div>
        <div class="hero_parallax_inner <?php if ( esc_attr($doo_option['hero_section_overlay']) == 'gradient_overlay'){ echo esc_html( 'bg-gradient-overlay opacity-6'); }else{ echo esc_html( 'bg-overlay opacity-6') ; } ?>" <?php if( esc_attr($doo_option['hero_section_style']) == 'snow_fall'){echo "id='particles-circle'";}else if ($doo_option['hero_section_style']== 'particles'){echo "id='particles-tringle'";}?>>
            <div class="container">
                <?php
                if( esc_attr($doo_option['heading_title_animate']) == 'animate_heading'){ ?>
                    <h1 class="animated fadeInDown wow animated tlt"  data-wow-delay=".1s">
                        <?php echo esc_html(  $doo_option['hero_heading']); ?>
                    </h1>
                <?php }else if( esc_attr($doo_option['heading_title_animate']) == 'rotate_heading'){ ?>
                    <h1 class="animated fadeInDown wow animated"  data-wow-delay=".1s">
                        <span class="rotate_font_big rotate"> <?php echo esc_html(  $doo_option['hero_rotate_heading']); ?></span>
                    </h1>
                <?php   }else{ ?>
                    <h1 class="animated fadeInDown wow animated"  data-wow-delay=".1s">
                        <?php echo esc_html(  $doo_option['hero_heading']); ?>
                    </h1>
                <?php }
                ?>

                <p class="animated fadeInDown wow animated heroSize"  data-wow-delay=".2s">
                    <?php echo esc_html(  $doo_option['hero_description']); ?>
                </p>
                <?php if( esc_attr($doo_option['Hero_button_text']) != ""){ ?>
                    <a href="<?php echo esc_url(  $doo_option['Hero_button_link']); ?>" class="btn btn_one animated fadeInDown wow animated"  data-wow-delay=".4s"><?php echo esc_html(  $doo_option['Hero_button_text']); ?></a>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ========== hero section  End ========== -->
<?php }else{ ?>

    <!-- ========== hero section ========== -->
    <section id="home" class="hero hero_full_screen hero_parallax text-center  parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url(  $doo_option['hero_background']['url']); ?>">
        <div class="<?php if ( esc_attr($doo_option['hero_section_overlay']) == 'gradient_overlay'){ echo esc_html( 'bg-gradient-overlay opacity-6'); }else{ echo esc_html( 'bg-overlay opacity-6') ; } ?>" <?php if( esc_attr($doo_option['hero_section_style']) == 'snow_fall'){echo "id='particles-circle'";}else if ($doo_option['hero_section_style']== 'particles'){echo "id='particles-tringle'";}?>></div>
        <div class="hero_parallax_inner">
            <div class="container">
                <?php
                if( esc_attr($doo_option['heading_title_animate']) == 'animate_heading'){ ?>
                    <h1 class="animated fadeInDown wow animated tlt"  data-wow-delay=".1s">
                        <?php echo esc_html(  $doo_option['hero_heading']); ?>
                    </h1>
                <?php }else if( esc_attr($doo_option['heading_title_animate']) == 'rotate_heading'){ ?>
                    <h1 class="animated fadeInDown wow animated"  data-wow-delay=".1s">
                        <span class="rotate_font_big rotate"> <?php echo esc_html(  $doo_option['hero_rotate_heading']); ?></span>
                    </h1>
                <?php   }else{ ?>
                    <h1 class="animated fadeInDown wow animated"  data-wow-delay=".1s">
                        <?php echo esc_html(  $doo_option['hero_heading']); ?>
                    </h1>
                <?php }
                ?>
                
                <p class="animated fadeInDown wow animated heroSise"  data-wow-delay=".2s">
                    <?php echo esc_html(  $doo_option['hero_description']); ?>
                </p>
                <?php if( esc_attr($doo_option['Hero_button_text']) != ""){ ?>
                     <a href="<?php echo esc_url(  $doo_option['Hero_button_link']); ?>" class="btn btn_one animated fadeInDown wow animated"  data-wow-delay=".4s"><?php echo esc_html(  $doo_option['Hero_button_text']); ?></a>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ========== hero section  End ========== -->
<?php } ?>




