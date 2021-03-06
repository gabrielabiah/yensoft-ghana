<?php
/**
 * Template for Maintenance Page
 *
 * @package qik
 */

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<!-- wraper_maintenance_main -->
		<div class="wraper_maintenance_main style-<?php echo esc_attr( radiantthemes_global_var( 'maintenance_mode_style', '', false ) ); ?>">
		    <div class="table">
		        <div class="table-cell">
		            <div class="container">
        		        <!-- row -->
        		        <div class="row maintenance_main">
                			<?php if ( 'one' === radiantthemes_global_var( 'maintenance_mode_style', '', false ) ) : ?>
                				<!-- START OF MAINTENANCE MODE STYLE ONE CONTENT -->
            					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            						<!-- maintenance_main_item -->
            						<div class="maintenance_main_item">
        								<?php
        								if ( radiantthemes_global_var( 'maintenance_mode_one_content', '', false ) ) {
        									echo wp_kses_post( radiantthemes_global_var( 'maintenance_mode_one_content', '', false ) );
        								}
        								?>
            						</div>
            						<!-- maintenance_main_item -->
                				</div>
                				<!-- END OF MAINTENANCE MODE STYLE ONE CONTENT -->
                			<?php elseif ( 'two' === radiantthemes_global_var( 'maintenance_mode_style', '', false ) ) : ?>
                				<!-- START OF MAINTENANCE MODE STYLE TWO CONTENT -->
                				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">
            						<!-- maintenance_main_item -->
            						<div class="maintenance_main_item">
        								<?php
        								if ( radiantthemes_global_var( 'maintenance_mode_two_content', '', false ) ) {
        									echo wp_kses_post( radiantthemes_global_var( 'maintenance_mode_two_content', '', false ) );
        								}
        								?>
            						</div>
            						<!-- maintenance_main_item -->
                				</div>
                				<!-- END OF MAINTENANCE MODE STYLE TWO CONTENT -->
                			<?php elseif ( 'three' === radiantthemes_global_var( 'maintenance_mode_style', '', false ) ) : ?>
                				<!-- START OF MAINTENANCE MODE STYLE THREE CONTENT -->
                				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left">
            						<!-- maintenance_main_item -->
            						<div class="maintenance_main_item">
        								<?php
        								if ( radiantthemes_global_var( 'maintenance_mode_three_content', '', false ) ) {
        									echo wp_kses_post( radiantthemes_global_var( 'maintenance_mode_three_content', '', false ) );
        								}
        								?>
            						</div>
            						<!-- maintenance_main_item -->
                				</div>
                				<!-- END OF MAINTENANCE MODE STYLE THREE CONTENT -->
                			<?php endif; ?>
            			</div>
            			<!-- row -->
        			</div>
		        </div>
			</div>
		</div>
		<!-- wraper_maintenance_main -->

	</main><!-- #main -->
</div><!-- #primary -->
