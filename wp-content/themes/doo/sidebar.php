<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package doo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<!-- BLOG SIDEBAR -->
<div class="col-sm-3 sidebar">
    <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->
</div>
<!-- END BLOG SIDEBAR -->