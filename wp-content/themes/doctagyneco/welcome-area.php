<!-- Search Area
    ================================================== -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<div  class="refeman_welcome_area">
    <div class="container" >
		<div class="row">
		    <?php if($wl_theme_options['header_social_media_in_enabled']=='1') { ?>
			<div class="col-md-3 col-sm-4">
			     <div class="social-icons">
				    <?php if($wl_theme_options['fb_link']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="facebook fa fa-facebook"></i></a></li>
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>					
					<li class="youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']); ?>"><i class="youtube fa fa-youtube"></i></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']); ?>"><i class="twitter fa fa-twitter"></i></a></li>
					<?php } if($wl_theme_options['riseup_link']!='') { ?>
					<li class="riseup" data-toggle="tooltip" data-placement="bottom" title="Technicalsite refeman"><a href="<?php echo esc_url($wl_theme_options['riseup_link']); ?>"><i class="riseup fa fa-star"></i></a></li>
					<?php } ?>
				</div>  
			</div>
		   <?php } ?>
		   <?php if($wl_theme_options['welcome_text'] !='') { ?>
		    <div class="col-md-7 col-sm-5 refeman_welcome_area_heading" id="">
				<h3><?php echo esc_attr($wl_theme_options['welcome_text']); ?></h3>		
			</div>
			<?php } ?>
			<div class=" col-md-2 col-sm-3">
				<div class="home-search-area wl_rtl search_section">
					<div class="input-group">
						<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>"> 	
						    <input type="text" class="form-control"  name="s" id="s" placeholder="<?php _e( "Search in RefEmancipation", 'enigma' ); ?>" />
							<span class="input-group-btn">
								<button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</form> 
					</div>
				</div>
			</div>
	    </div>
	</div>
	<div class=""></div>
</div>
	
	<!-- /.Search Area -->