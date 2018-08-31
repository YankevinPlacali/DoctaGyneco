<!-- Recent News section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<div id="wrapper">
    <span class="anchor" id="blog"></span>
	<div class="bg">
	    <div class="enigma_blog_area">
		    <?php if($wl_theme_options['project_home'] !='') { ?>
		    <div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="enigma_heading_title">
							<h3><?php echo esc_attr($wl_theme_options['home_news_heading']); ?></h3>		
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="container">	
				<div class="row home-blog-2" id="" >
					<div class="swiper-container home-blog">
						<div class="swiper-wrapper ">
							<?php for($i=1 ; $i<=7; $i++) { ?>
								<?php if($wl_theme_options['proj_'.$i.'_img'] !='') { ?>
									<div class="swiper-slide">
										<div class="row enigma-home-blog"> 
											<div class="enigma_blog_thumb_wrapper_showcase img-thumbnail">
												<img class="enigma_img_responsive wp-post-image" alt="<?php the_title_attribute(); ?>" src="<?php echo esc_url($wl_theme_options['proj_'.$i.'_img']); ?>">
												<div class="enigma_blog_thumb_wrapper_showcase_overlay">
													<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner">
														<div class="enigma_blog_thumb_wrapper_showcase_icons">
															<a title="<?php echo esc_attr($wl_theme_options['proj_'.$i.'_title']); ?>" href="<?php echo esc_url($wl_theme_options['proj_'.$i.'_link']); ?>"><i class="fa fa-link"></i></a>
														</div>
													</div>
												</div>
											</div>
											<?php if($wl_theme_options['proj_'.$i.'_title'] !='') { ?>	
											<h2 class="entry-title"><a href="<?php echo esc_url($wl_theme_options['proj_'.$i.'_link']); ?>"><?php echo esc_attr($wl_theme_options['proj_'.$i.'_title']); ?></a></h2>
											<?php } ?>
											<div class="row enigma-entry-footer">
												<span class="enigma-category"><i class="fa fa-tags"></i>Tags :&nbsp;<a href="" rel="tag">Conversion</a>, <a href="" rel="tag">Optimized</a>, <a href="" rel="tag">Rate</a></span>
											</div>
											<?php if($wl_theme_options['proj_'.$i.'_text'] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['proj_'.$i.'_text'], true); ?></p><?php } ?>	
											<a href="" class="btn enigma_blog_read_btn">Read More</a>
											<div class="row enigma-entry-header">
												<span class="enigma-author"><i class="fa fa-user"></i>
													<a href="">weblizar</a>
												</span>
												<span class="enigma-calendar"><i class="fa fa-clock-o"></i>October 17 ,2016</span>
											</div>
										</div>
									</div>	
								<?php } ?>
							<?php } ?>
						</div>
						<div class="swiper-button-prev blog-prev"><i class="fa fa-angle-left"></i></div>
						<div class="swiper-button-next blog-next"><i class="fa fa-angle-right"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /Recent News section -->