<!-- portfolio section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="enigma_project_section">
	<div class="container">
		<div class="row" >
			<div id="enigma_portfolio_section" class="enima_photo_gallery">
				<div class="col-lg-12 col-md-12 col-sm-12 left-section">
					<div class="col-lg-6 col-md-4 col-sm-4 pull-left scrollimation fade-left ">
							<div class="img-wrapper">
									<div class="enigma_home_portfolio_showcase">
										<img class="enigma_img_responsive " alt="<?php the_title_attribute(); ?>" src="<?php echo esc_url($wl_theme_options['port_1_img']); ?>">
										<div class="carousel-caption">
												<p class="bloc-text animated bounceInUp rdm_1"><?php echo esc_attr($wl_theme_options['port_1_title']); ?></p>
										</div>
										<div class="enigma_home_portfolio_showcase_overlay">
											<div class="enigma_home_portfolio_showcase_overlay_inner ">
												<div class="enigma_home_portfolio_showcase_icons">
													<a title="<?php echo esc_attr($wl_theme_options['port_'.$i.'_title']); ?>" href="<?php echo esc_url($wl_theme_options['port_'.$i.'_link']); ?>"><i class="fa fa-book" ></i></a>
												</div>
											</div>
										</div>	
									</div>
							</div>	
							<!--<div class="enigma_portfolio_shadow"></div>-->
					</div>
					<div class="col-lg-6">
						<?php for($i=2 ; $i<=5; $i++) { ?>
							<?php if($wl_theme_options['port_'.$i.'_img'] !='') { ?>
							<div class="col-lg-6 col-md-6 col-sm-6 pull-right scrollimation fade-right d1"> 
								<div class="img-wrapper">
									<div class="enigma_home_portfolio_showcase ">
										<img class="enigma_img_responsive" alt="<?php the_title_attribute(); ?>" src="<?php echo esc_url($wl_theme_options['port_'.$i.'_img']); ?>">
										<div class="carousel-caption">
											<p class="bloc-text animated bounceInDown rdm_<?php echo $i ?>"> <?php echo esc_attr($wl_theme_options['port_'.$i.'_title']); ?></p>
										</div>
										<div class="enigma_home_portfolio_showcase_overlay">
											<div class="enigma_home_portfolio_showcase_overlay_inner ">
												<div class="enigma_home_portfolio_showcase_icons">
													<a title="<?php echo esc_attr($wl_theme_options['port_'.$i.'_title']); ?>" href="<?php echo esc_url($wl_theme_options['port_'.$i.'_link']); ?>"><i class="fa fa-book" ></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--<div class="enigma_portfolio_shadow"></div>-->
							</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			
	</div>
</div>
<!-- /portfolio section -->