<!-- Our Team Section -->

<?php $wl_theme_options = weblizar_get_options(); ?>
<div id="wrapper">
	<div class="container-fluid enigma-home-team">
		<?php if($wl_theme_options['team_home'] !='') { ?>
			<div class="container">
				<div class="row">
					<div class="enigma_heading_title">
						<h3><?php echo esc_attr($wl_theme_options['team_heading']); ?></h3>		
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="container" id="team">
		    <div class="row home-team2 isotope scrollimation scale-in d2 pull-left">
			    <?php for($i=1 ; $i<=4; $i++) { ?>
					<div class="col-md-3 col-sm-6 enigma-team-item scrollimation scale-in d2 pull-left">
						<div class="row enigma-team-detail">
						   <?php if($wl_theme_options['team_img_'.$i] !='') { ?>
							<div class="img-thumbnail">
								<img class="img-responsive home_team_thumb wp-post-image" alt="<?php the_title_attribute(); ?>" src="<?php echo esc_url($wl_theme_options['team_img_'.$i]); ?>">
								<div class="overlay">
									<ul class="social">
										<li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						    <?php } ?>
							<?php if($wl_theme_options['team_name_'.$i] !='') { ?><h3><a href="<?php echo esc_url($wl_theme_options['team_link_'.$i]); ?>"><?php echo esc_attr($wl_theme_options['team_name_'.$i]); ?></a></h3><?php } ?>
							<?php if($wl_theme_options['team_title_'.$i] !='') { ?><span><?php echo esc_attr($wl_theme_options['team_title_'.$i]); ?></span><?php } ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<!-- ./Our Team -->