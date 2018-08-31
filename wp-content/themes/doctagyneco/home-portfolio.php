<!-- portfolio section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="enigma_project_section">
	<?php if($wl_theme_options['services_home'] !='') { ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3><?php echo esc_attr($wl_theme_options['home_service_heading']); ?></h3>		
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="container">
		<div class="row" >
			<div id="enigma_portfolio_section" class="enima_photo_gallery">
				<?php for($i=1 ; $i<=3; $i++) { ?>
				<?php if($wl_theme_options['port_'.$i.'_img'] !='') { ?>
				<div class="col-lg-4 col-md-4 col-sm-6 pull-left scrollimation fade-right d1"> 
					<div class="img-wrapper">
						<div class="enigma_home_portfolio_showcase">
							<img class="enigma_img_responsive" alt="<?php the_title_attribute(); ?>" src="<?php echo esc_url($wl_theme_options['port_'.$i.'_img']); ?>">
							
							<div class="carousel-caption">
								<h2 class="bloc-text animated bounceInDown rdm_<?php echo $i ?>"><?php echo esc_attr($wl_theme_options['service_'.$i.'_title']); ?></h2>
								<p class="bloc-text animated bounceInLeft rdm_<?php echo $i ?>"> <?php echo esc_attr($wl_theme_options['service_'.$i.'_text']); ?></p>
							</div>
							
							<div class="enigma_home_portfolio_showcase_overlay_inner ">
								<div class="enigma_home_portfolio_showcase_icons">
									<a title="<?php echo esc_attr($wl_theme_options['service_'.$i.'_title']); ?>" href="<?php echo esc_url($wl_theme_options['service_'.$i.'_link']); ?>"><i class="fa fa-link" ></i></a>
								</div>
							</div>
	
						</div>
						<?php if($wl_theme_options['service_'.$i.'_title'] !='') { ?>	
						<div class="enigma_home_portfolio_caption">
							<h3 class="animated bounceInUp"><a href="<?php echo esc_url($wl_theme_options['service_'.$i.'_link']); ?>"><?php echo esc_attr($wl_theme_options['service_'.$i.'_title']); ?></a></h3>
						</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>
				<?php } ?>
			</div>
		</div>
		<!--Text with icon-->
		<!--<div class="row isotope" id="isotope-service-container">		
			<?php for($i=1; $i<4; $i++ ) { ?>
			<div class=" col-md-4 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<?php if($wl_theme_options['service_'.$i.'_icons'] !='') { ?><div class="enigma_service_icon"><p><i class="<?php echo esc_attr($wl_theme_options['service_'.$i.'_icons']); ?>"></i></p></div><?php } ?> 
					<div class="enigma_service_detail media-body">
						<?php if($wl_theme_options['service_'.$i.'_title'] !='') { ?><h3 class="head_<?php echo $i ?>"><a href="<?php echo esc_url($wl_theme_options['service_'.$i.'_link']); ?>"><?php echo esc_attr($wl_theme_options['service_'.$i.'_title']); ?></a></h3><?php } ?>
						<?php if($wl_theme_options['service_'.$i.'_text'] !='') { ?><p><?php echo get_theme_mod('service_'.$i.'_text' , $wl_theme_options['service_'.$i.'_text']); ?><?php } ?></p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>-->
	</div>
</div>
<!-- /portfolio section -->