<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package doo
 */

 $doo_option = doo_option(); ?>

<?php  if( $doo_option['contact_us_address'] != "" || $doo_option['contact_us_phone'] != "" ||  $doo_option['contact_us_email'] != "" ){?>
<!--========== footer========== -->
<footer class="pb50 pt50 bg-dark-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <?php  if( $doo_option['contact_us_phone'] != "" ){ ?>

                <div class="contact-info-box text-center fadeInDown  wow animated" data-wow-delay=".1s" >
                    <i class="icon-mobile"></i>
                    <h4><?php echo esc_html__( "Téléphone", "doo" ) ?></h4>
                    <h5> <?php echo esc_attr( $doo_option['contact_us_phone']);?></h5>
                </div>
            <?php } ?>
            </div>

            <div class="col-sm-4">
                <?php  if( $doo_option['contact_us_address'] != "" ){ ?>

                    <div class="contact-info-box text-center fadeInDown  wow animated" data-wow-delay=".1s">
                        <i class="icon-map"></i>
                        <h4><?php echo esc_html__( "Addresse", "doo" ) ?></h4>
                        <h5> <?php echo esc_attr( $doo_option['contact_us_address']);?></h5>
                    </div>
                <?php } ?>
            </div>

            <div class="col-sm-4">
                <?php  if( $doo_option['contact_us_email'] != "" ){ ?>

                    <div class="contact-info-box text-center fadeInDown  wow animated" data-wow-delay=".1s">
                        <i class="icon-envelope"></i>
                        <h4><?php echo esc_html__( "Email", "doo" ) ?></h4>
                        <h5> <?php echo esc_attr( $doo_option['contact_us_email']);?></h5>
                    </div>
                <?php } ?>
            </div>

            <div class="col-xs-12">
                <ul class="footer_social">
                    <?php  if( $doo_option['tw_account'] != "" ){ ?>
                        <li>
                            <a target="_blank" href="<?php echo esc_url(  $doo_option['tw_account']); ?>" class="bg-twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                    <?php }?>

                    <?php  if( $doo_option['fb_account'] != "" ){ ?>
                        <li>
                            <a  target="_blank" href="<?php echo esc_url(  $doo_option['fb_account']); ?>" class="bg-facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                    <?php }?>

                    <?php  if( $doo_option['ins_account'] != "" ){ ?>
                        <li>
                            <a  target="_blank" href="<?php echo esc_url(   $doo_option['ins_account']); ?>" class="bg-primary"><i class="fa fa-instagram"></i></a>
                        </li>
                    <?php }?>

                    <?php  if( $doo_option['gb_account'] != "" ){ ?>
                        <li>
                            <a  target="_blank" href="<?php echo esc_url(   $doo_option['gb_account']); ?>" class="bg-googleplus"><i class="fa fa-google-plus"></i></a>
                        </li>
                    <?php }?>

                    <?php  if( $doo_option['linked_account'] != "" ){ ?>
                        <li>
                            <a  target="_blank" href="<?php echo esc_url(   $doo_option['linked_account']); ?>" class="bg-linkedin"><i class="fa fa-linkedin"></i></a>
                        </li>
                    <?php }?>

                </ul>
            </div>
        </div>
    </div>
</footer>
<!--========== footer section end ========== -->
<?php }; ?>
<!-- Footer-copyright -->
<div class="footer_author text-center">
    <p><?php echo esc_attr( $doo_option['doo_copyright']);?></p>
</div>
<?php wp_footer(); ?>
</body>
</html>