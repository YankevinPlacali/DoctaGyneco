<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<meta charset="<?php bloginfo('charset'); ?>" />	
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>
<body <?php if($wl_theme_options['box_layout']==2) { body_class('boxed'); } else body_class(); ?>>
<div>
		<!-- Header Section -->
		<div class="header_section hd_cover" >		
			<div class="container" >
				<!-- Logo & Contact Info -->
				<div class="row ">
					<div class="wl_rtl" >	
						<div class="site-topbar-left">					
								<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
								$image = wp_get_attachment_image_src( $custom_logo_id,'full' ); ?>
								<?php if (has_custom_logo()) { ?> <img src="<?php echo $image[0]; ?>" height="<?php echo $wl_theme_options['logo_height'] ?>" width="<?php echo $wl_theme_options['logo_width'] ?>"> <?php } else { ?> <h1><?php echo get_bloginfo('name'); } ?></h1>
								</a>
								<p><?php bloginfo( 'description' ); ?></p>
						</div>
						<div class="site-topbar-right head-contact-info">
							<?php if($wl_theme_options['email_id'] || $wl_theme_options['phone_no'] !='') { ?>
									<?php if($wl_theme_options['email_id'] !='') { ?>
									<span data-toggle="tooltip" data-placement="bottom" title="Mail us"><a href="mailto:<?php echo $wl_theme_options['email_id']; ?>"><i class="fa fa-envelope"></i></a></span>
									<?php } ?>
									<?php if($wl_theme_options['phone_no'] !='') { ?>
									<span data-toggle="tooltip" data-placement="bottom" title="phone us"><a href="tel:<?php echo $wl_theme_options['phone_no']; ?>"><i class="fa fa-phone"></i></a></span>
									<?php } ?>
									<?php if($wl_theme_options['fb_link']!='') { ?>
									<span class="facebook" data-toggle="tooltip" data-placement="bottom" title="facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></span>
									<?php } ?>
									<?php if($wl_theme_options['whatsapp_link']!='') { ?>
									<span class="linkedin" data-toggle="tooltip" data-placement="bottom" title="<?php echo $wl_theme_options['whatsapp_title']; ?>"><a href="tel:<?php echo esc_attr($wl_theme_options['whatsapp_link']) ; ?>"><i class="fa fa-whatsapp"></i></a></span>
									<?php } ?>
							<?php } ?>	
						</div>
					</div>
				</div>
				<!-- /Logo & Contact Info -->
			</div>	
		<!-- /Header Section -->
		<!-- Navigation  menus -->
		<div class="navigation_menu "  data-spy="affix" data-offset-top="95" id="enigma_nav_top">
			<span id="header_shadow"></span>
			<div class="container navbar-container" >
				<nav class="navbar navbar-default " role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<span class="sr-only"><?php _e('Toggle navigation','enigma');?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="menu" class="collapse navbar-collapse ">	
						<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => 'weblizar_fallback_page_menu',
						'walker' => new weblizar_nav_walker(),
						)
						);	?>	
						<div class="hsearch">
							 <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>"> 	
								<input type="text" class="form-control"  name="s" id="s" placeholder="<?php _e( "Que desirez-vous?", 'enigma' ); ?>" />
								<span class="input-group-btn">
									<button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
								</span>
							 </form> 
						</div>					
					</div>	
					
				</nav>
			</div>
		</div>
	</div>