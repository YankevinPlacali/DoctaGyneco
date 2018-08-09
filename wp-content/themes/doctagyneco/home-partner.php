<!-- Partner section -->

<?php $wl_theme_options = weblizar_get_options(); ?>
<div id="wrapper">
	<div class="enigma_client_area">
		<div class="container">
			<div class="row enigma-home-client1">
			    <div class="swiper-container home-client">
				    <?php if($wl_theme_options['partner_home'] !='') { ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="enigma_heading_title2">
									<h3><?php echo esc_attr($wl_theme_options['partner_heading']); ?></h3>		
								</div>
							</div>
						</div>
					<?php } ?>
					<div class="swiper-wrapper">
					    <?php for($i=1 ; $i<=14; $i++) { ?>
							<?php if($wl_theme_options['part_'.$i.'_img'] !='') { ?> 
							    <div class="swiper-slide">
								    <div class="col-md-12 scrollimation fade-left d1">
									    <div class="enigma_client_wrapper">
										    <img class="img_responsive" alt="<?php the_title_attribute(); ?>" src="<?php echo esc_url($wl_theme_options['part_'.$i.'_img']); ?>">
										</div>
									</div>
								</div>
							<?php } ?>
						<?php } ?>	
					</div>
					<div class="swiper-button-prev client-prev"><i class="fa fa-angle-left"></i></div>
					<div class="swiper-button-next client-next"><i class="fa fa-angle-right"></i></div>	
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ./partner section -->