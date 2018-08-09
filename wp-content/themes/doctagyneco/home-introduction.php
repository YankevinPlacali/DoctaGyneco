<!-- intro Section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<div id="refeman_intro_section">
	<?php if($wl_theme_options['slogan_text'] !='') { ?>
		<div class="container">
			<div class="row">
				<div class="refeman_slogan">	
					<p><?php echo ($wl_theme_options['slogan_text']); ?></p>			
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="container">
		<!-- <div class="enigma_service" id="service">
			<div class="row isotope home-service-2" id="isotope-service-container">
			        
			        <div class="col-md-4 col-sm-6 service">
						<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
							<div class="enigma_service_detail media-body">					
								<?php if($wl_theme_options['service_1_title'] !='') { ?>					
									<h3><u><?php echo esc_attr($wl_theme_options['service_1_title']); ?></u></h3>
								<?php } ?>
								<p><?php echo esc_attr($wl_theme_options['service_1_text']); ?></p>
								<div class="blog-post-details-item"><a class="" href="">More &raquo;</a></div>
							</div>
						</div>
					</div>	 
					
					<div class="col-md-4 col-sm-6 service">
						<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
							<div class="enigma_service_detail media-body">					
								<?php if($wl_theme_options['service_2_title'] !='') { ?>					
									<h3><u><?php echo esc_attr($wl_theme_options['service_2_title']); ?></u></h3>
								<?php } ?>
								<p><?php echo esc_attr($wl_theme_options['service_2_text']); ?></p>
								<div class="blog-post-details-item"><a class="" href="">More &raquo;</a></div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-6 service">
						<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
							<div class="enigma_service_detail media-body">					
								<?php if($wl_theme_options['service_3_title'] !='') { ?>					
									<h3><u><?php echo esc_attr($wl_theme_options['service_3_title']); ?></u></h3>
								<?php } ?>
								<p><?php echo esc_attr($wl_theme_options['service_3_text']); ?></p>
								<div class="blog-post-details-item"><a class="" href="">More &raquo;</a></div>
							</div>
						</div>
					</div>
			</div>
		</div> -->
		<div class="refeman_video_area">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-6  properties-grid scrollimation scale-in d2 pull-left">
						<div class="video appear-animation bounceIn appear-animation-visible">
							<iframe src="https://player.vimeo.com/video/136421779?" align="center" frameborder="0" class="s-12 1-12" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>	
						</div>
					</div>
					<div class="col-md-7  properties-grid1 appear-animation bounceIn appear-animation-visible">
						<h3><u><?php echo esc_attr($wl_theme_options['video_area_heading']); ?></u></h3>
						<div class="care">
							<p><?php echo esc_attr($wl_theme_options['video_area_text']); ?></p>
							<p><span><?php echo esc_attr($wl_theme_options['internet_statement']); ?></span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /intro -->
