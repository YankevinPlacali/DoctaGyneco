<!-- portfolio section -->

<?php $wl_theme_options = weblizar_get_options(); ?>
<div id="wrapper">
	<div class="enigma_project_section">
		<?php if($wl_theme_options['project_home'] !='') { ?>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="enigma_heading_title">
							<h3><?php echo esc_attr($wl_theme_options['home_project_heading']); ?></h3>		
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="container">
			<div class="row enigma-home-portfolio2">
				<div class="enima_photo_gallery" id="enigma_portfolio_section">
					<div class="swiper-container home-portfolio2">
					    <div class="swiper-wrapper">
							<?php for($i=1 ; $i<=7; $i++) { ?>
								<?php if($wl_theme_options['proj_'.$i.'_img'] !='') { ?>
										<div class="swiper-slide">
											<div class="row enigma-portfolio"> 
												<div class="img-wrapper">
													<div class="enigma_home_portfolio_showcase">
														<img class="enigma_img_responsive wp-post-image" alt="<?php echo esc_attr($wl_theme_options['proj_'.$i.'_alt']); ?>" src="<?php echo esc_url($wl_theme_options['proj_'.$i.'_img']); ?>">
														<div class="enigma_home_portfolio_showcase_overlay">
															<div class="enigma_home_portfolio_showcase_overlay_inner ">
																<div class="enigma_home_portfolio_showcase_icons">
																	<a title="<?php echo esc_attr($wl_theme_options['proj_'.$i.'_title']); ?>" href="<?php echo esc_url($wl_theme_options['proj_'.$i.'_link']); ?>"><i class="fa fa-link"></i></a>			
																	<a class="photobox_a" href="<?php echo esc_url($wl_theme_options['proj_'.$i.'_img']); ?>"><i class="fa fa-search-plus"></i><img src="<?php echo esc_url($wl_theme_options['proj_'.$i.'_img']); ?>" alt="<?php echo esc_attr($wl_theme_options['proj_'.$i.'_title']); ?>" style="display:none !important;visibility:hidden"></a>
																</div>
															</div>
														</div>
													</div>
													<?php if($wl_theme_options['proj_'.$i.'_title'] !='') { ?>	
													<div class="enigma_home_portfolio_caption">
													    <div class="enigma_portfolio_footer">
														    <h4><a href="<?php echo esc_url($wl_theme_options['proj_'.$i.'_link']); ?>"><?php echo esc_attr($wl_theme_options['proj_'.$i.'_title']); ?></a></h4>
														</div>
														<?php if($wl_theme_options['proj_'.$i.'_text'] !='') { ?>
														    <!--<p><i class="fa fa-book"></i><?php echo apply_filters('the_content', $wl_theme_options['proj_'.$i.'_text'], true); ?></p>
															<a class="enigma_blog_read_btn btn animated bounceInUp" href="<?php echo esc_url($wl_theme_options['proj_'.$i.'_link']); ?>" role="button"><i class="fa fa-plus-circle"></i><?php echo esc_attr($wl_theme_options['proj_btn_text_'.$i]) ; ?></a> -->
														<?php } ?>
													</div>
													<?php } ?>
												</div>
												<div class="enigma_portfolio_shadow"></div>
											</div>
										</div>						
								<?php } ?>
							<?php } ?>								
					    </div>
						<div class="swiper-button-prev portfolio2-prev"><i class="fa fa-angle-left"></i></div>
						<div class="swiper-button-next portfolio2-next"><i class="fa fa-angle-right"></i></div> 
					</div>					
				</div>					
		    </div>
		</div>
	</div>
</div>

<!-- /portfolio section -->