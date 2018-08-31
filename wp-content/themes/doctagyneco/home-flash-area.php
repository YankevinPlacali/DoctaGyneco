<!-- flash_section_begin
    ================================================== -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="wrapper">
<div class="refeman_flash_section">
	<div class="container">
		<div class="row">		 
			
			 <div class="col-md-3 col-sm-6">
			     <div class="appear-animation bounceIn appear-animation-visible">
					<div class="media-body">
						<div class="slide" data-ride="carousel">
							<div class="carousel-inner">
								<?php $wl_theme_options = weblizar_get_options(); $j=1;
								for($i=1; $i<=18; $i++){  ?>
								<?php if($wl_theme_options['ourneed_image_'.$i]!='') { ?>	
								<div class="item <?php if($j==1) echo "active"; ?> ">
									<img src="<?php echo esc_url($wl_theme_options['ourneed_image_'.$i]); ?>" class="img-responsive home_team_thumb wp-post-image" alt="<?php echo esc_attr($wl_theme_options['ourneed_image_'.$i.'_alt']); ?>">		  
								</div>
								<?php $j++; }  } ?>	
							</div> 
						</div>
					</div>
				</div>
			 </div>
			 
		    <div class="col-md-3 col-sm-6">
			    <p><?php if($wl_theme_options['flash_fix_text'] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['flash_fix_text'], true); ?></p><?php } ?></p>
				<p><a class="" href=" http://localhost/wordpress/index.php/our-need/">Click here &raquo;</a></p>
			</div>
			
			<div class="col-md-3 col-sm-6">
				<div class="appear-animation bounceIn appear-animation-visible">
					<div class="media-body">					
						<div class="slide" data-ride="carousel">
								<div class="carousel-inner">
									<?php $wl_theme_options = weblizar_get_options(); $j=1;
									for($i=1; $i<=8; $i++){  ?>
									<?php if($wl_theme_options['rsidebar_'.$i.'_img']!='') { ?>	
									<div class="item <?php if($j==1) echo "active"; ?> ">
										<img src="<?php echo esc_url($wl_theme_options['rsidebar_'.$i.'_img']); ?>" class="img-responsive home_team_thumb wp-post-image" alt="">		  
									</div>
									<?php $j++; }  } ?>	
								</div> 
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-3 service ">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<div class="enigma_service_detail media-body"><i class="fa fa-info">
                        <div class="slide" data-ride="carousel">
							<div class="carousel-inner">					
								<?php $wl_theme_options = weblizar_get_options(); $j=1;
									for($i=1; $i<=8; $i++){  ?>
									<?php  { ?>	
									<div class="item <?php if($j==1) echo "active"; ?>">
										<p class="border"><?php echo esc_attr($wl_theme_options['flash_'.$i.'_text']); ?></p>
									</div>
								<?php $j++; }  } ?>	
							</div>
						</div>
					</div></i>
				</div>
			</div> 
			 
		</div>
	</div>
</div>	
</div>
<!-- /.flash_section-->