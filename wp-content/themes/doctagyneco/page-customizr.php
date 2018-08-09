<?php 
/*
Template Name: Custom page
*/
get_header(); 
get_template_part('breadcrums');?>

<div class="container">
    <div class="row ">
	    <!--<div class="col-md-2 enigma_sidebar_widget">
			<?php if(!$post->post_parent){
				$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				}else{
				if($post->ancestors)
				{
				$ancestors = end($post->ancestors);
				$children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0");
				}
				}
				if ($children) {
				?>
				<h2><?php echo hallo; ?></h2>
				<ul> <?php echo $children; ?></ul>
				<?php } ?>
		</div>--> <!-- to display the childrens of the current item -->
		
		<div class="col-md-2" id="left_content">
		
		    <div class="appear-animation bounceIn appear-animation-visible">
				<div class="media-body refeman_custom_left_sidebar">					
					<div class="img-thumbnail  slide" data-ride="carousel">
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
					<?php if($wl_theme_options['ourneed_text'] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['ourneed_text'], true); ?></p><?php } ?>
					<div class="blog-post-details-item"><p><a class="" href=" http://localhost/wordpress/index.php/our-need/">More &raquo;</a></p></div>
				</div>
				<div class="refeman_widget_sep"></div>
			</div>
			
			<!-- <div class="appear-animation bounceIn appear-animation-visible">
				<div class="refeman_left_widget media-body">										
					<h3><?php echo 'Information'; ?></h3>
					<ul>
					    <li><a href="">Current</a></li>
						<li><a href="">Refemancipation and education</a></li>
						<li><a href="">How to support Refemancipation</a></li>
						<li><a href="">Be a voluntier by Refemancipation </a></li>
						<li><a href="">Pratikum by Refemancipation </a></li>
					</ul>
				</div>
				<div class="refeman_widget_sep"></div>
			</div> -->	
			<div class="appear-animation bounceIn appear-animation-visible">
				<div class="refeman_right_widget media-body">					
					<?php if($wl_theme_options['spende_heading'] !='') { ?>					
						<h3><?php echo esc_attr($wl_theme_options['spende_heading']); ?></h3>
					<?php } ?>
					<div class="bank_info">
						<p><?php echo esc_attr($wl_theme_options['spende_text']); ?></p>
						<p><span><?php echo esc_attr($wl_theme_options['bankverbinding_text']); ?></span></p>
						<p><?php echo esc_attr($wl_theme_options['inhaber_name']); ?></p>
						<p><?php echo esc_attr($wl_theme_options['bank_name']); ?></p>
						<p>
						<span><?php echo esc_attr($wl_theme_options['kontonr']); ?></span>
						<br><span><?php echo esc_attr($wl_theme_options['blz']); ?></span>
						</p>
						<p>
						<span><?php echo esc_attr($wl_theme_options['bank_iban']); ?></span>
						<span><?php echo esc_attr($wl_theme_options['bank_bic']); ?></span>
						</p>
					</div>
				</div>
				<div class="refeman_widget_sep"></div>
			</div>	
				
            <div class="appear-animation bounceIn appear-animation-visible">
				 <?php if($wl_theme_options['header_social_media_in_enabled']=='1') { ?>
					 <div class="social-icons">
					    <?php } if($wl_theme_options['riseup_link']!='') { ?>
						<li class="riseup" data-toggle="tooltip" data-placement="bottom" title="Technicalsite refeman"><a href="<?php echo esc_url($wl_theme_options['riseup_link']); ?>"><i class="riseup fa fa-star"></i></a></li>
						<?php if($wl_theme_options['fb_link']!='') { ?>
						<li class="facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="facebook fa fa-facebook"></i></a></li>
						<?php } if($wl_theme_options['linkedin_link']!='') { ?>					
						<li class="youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']); ?>"><i class="youtube fa fa-youtube"></i></a></li>
						<?php } if($wl_theme_options['twitter_link']!='') { ?>
						<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']); ?>"><i class="twitter fa fa-twitter"></i></a></li>
						<?php } ?>
					</div>  
			   <?php } ?>
			</div>	

		</div>
		
		<div class="col-md-8" id="center_content">
		    <div class="refeman_custom_content">
        	    <p><?php get_template_part('post','page'); ?></p>
            </div>			
	    </div>
		
		<div class="col-md-2" id="right_content">
			<div class="appear-animation bounceIn appear-animation-visible">
				<div class="refeman_right_widget media-body">					
					<div class="slide" data-ride="carousel">
							<div class="carousel-inner">
								<?php $wl_theme_options = weblizar_get_options(); $j=1;
								for($i=1; $i<=6; $i++){  ?>
								<?php if($wl_theme_options['rsidebar_'.$i.'_img']!='') { ?>	
								<div class="item <?php if($j==1) echo "active"; ?> ">
									<img src="<?php echo esc_url($wl_theme_options['rsidebar_'.$i.'_img']); ?>" class="img-responsive home_team_thumb wp-post-image" alt="">		  
								</div>
								<?php $j++; }  } ?>	
							</div> 
					</div>
					<div class="img-thumbnail slide" data-ride="carousel">
						<div class="carousel-inner" >
							<?php $wl_theme_options = weblizar_get_options(); $j=1;
							for($i=1; $i<=8; $i++){  ?>
							<?php if($wl_theme_options['slide_image_'.$i]!='') { ?>	
							<div class="item <?php if($j==1) echo "active"; ?>">
								<p><?php echo esc_attr($wl_theme_options['flash_'.$i.'_text']); ?></p>
							</div>
							<?php $j++; }  } ?>	
						</div> 		  
					</div>
				</div>
				<div class="refeman_widget_sep"></div>
			</div>
			
			<div class="appear-animation bounceIn appear-animation-visible">
				<div class="refeman_right_widget media-body">					
					<?php if($wl_theme_options['contact_heading'] !='') { ?>					
						<h3><?php echo esc_attr($wl_theme_options['contact_heading']); ?></h3>
					<?php } ?>
					<p><?php echo esc_attr($wl_theme_options['contact_text']); ?></p>
					<p><?php echo esc_attr($wl_theme_options['refeman_location']); ?></p>
					<p><?php echo esc_attr($wl_theme_options['location_city']); ?></p>
					<p><?php echo esc_attr($wl_theme_options['tel']); ?></p>
					<p><?php echo esc_attr($wl_theme_options['fax']); ?></p>
					<p><?php echo esc_attr($wl_theme_options['mobile']); ?></p>
					<!--<p><?php echo esc_attr($wl_theme_options['email']); ?></p>-->
				</div>
				<div class="refeman_widget_sep"></div>
			</div>		
			
			<div class="appear-animation bounceIn appear-animation-visible">
				<div class="refeman_right_widget media-body">					
					<?php if($wl_theme_options['opening_time_heading'] !='') { ?>					
						<h3><?php echo esc_attr($wl_theme_options['opening_time_heading']); ?></h3>
					<?php } ?>
					<div class="opening_time">
					<p><?php echo esc_attr($wl_theme_options['opening_text']); ?></p>
					<span><?php echo esc_attr($wl_theme_options['day_time']); ?></span>
					</div>
				</div>
				<div class="refeman_widget_sep"></div>
			</div>
			
			<div class="appear-animation bounceIn appear-animation-visible">
				<div class="refeman_left_widget media-body">
                    <h3><?php echo "Partner"?></h3>				
					<div class="img-thumbnail  slide" data-ride="carousel">
							<div class="carousel-inner">
								<?php $wl_theme_options = weblizar_get_options(); $j=1;
								for($i=1; $i<=6; $i++){  ?>
								<?php if($wl_theme_options['part_'.$i.'_img']!='') { ?>	
								<div class="item <?php if($j==1) echo "active"; ?> ">
									<img src="<?php echo esc_url($wl_theme_options['part_'.$i.'_img']); ?>" class="img-responsive home_team_thumb wp-post-image" alt="<?php the_title_attribute(); ?>">										
								</div>
								<?php $j++; }  } ?>	
							</div> 
					</div>
				</div>
			</div>
			
			<!--<div class="col-md-6 refeman_widget_support"> 
			<a href""><img src="<?php echo esc_url($wl_theme_options['support_img']); ?>" class="img-responsive home_team_thumb wp-post-image" alt="make a donation" /title="Donate now"></a>
			</div> -->
			
		 </div>
	</div>
</div>
<?php get_footer(); ?>