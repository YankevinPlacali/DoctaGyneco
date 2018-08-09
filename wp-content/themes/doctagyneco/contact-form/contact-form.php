<?php
/*
Template Name: Contact Form
*/
?>


<?php get_header(); 
get_template_part('breadcrums');?>

	<div class="container">
		<div class="row enigma_blog_wrapper refeman_contact_section">
		
			<div class="col-md-12">
				<div class="refeman_contact_title">
					<h2><?php echo 'Contact Us' ?></h2>		
				</div>
				<div class="map">
					<p>Contact us for more information on our work, goals achievements and how you can help</p>
					<iframe style="border: 0px none;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9744.322071045992!2d13.08754!3d52.36896!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4789aa9588f19709!2sRefugees+Emancipation+e.V!5e0!3m2!1sde!2sde!4v1461156813427" width="100%" height="360" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
				</div>
			</div>
			
			<div class="padding col-md-12 contact">
				<div class="col-md-6">
					<img class="enigma_img_responsive" src="http://localhost/wordpress/wp-content/uploads/2017/01/1-e1485263868351.png" alt="" width="300" height="320" /> 
				</div>
				<div class="col-md-5 contact_info">
					<p><i class="fa fa-map-marker"></i>Zum Jagenstein 1, 14478 Potsdam</p>
					<p><i class="fa fa-phone"></i>Office: 0331 2016927 / 0331 2015759</p>
					<p><i class="glyphicon glyphicon-phone"></i>Mobile: (+49) 17636266043</p>
					<p><i class="fa fa-print"></i>Fax:  0331 2015758 </p>
					<p><i class="fa fa-envelope"></i>E-Mail: info@refugeesemancipation.com</p>
					<p><i class="fa fa-globe"></i>Homepage: http://www.refugeesemancipation.com/</p>
				</div>
			</div>
			
			<div class="col-md-12 padding">
				<?php if(isset($emailSent) && $emailSent == true) { ?>
				<?php } else { ?>
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="refeman_contact_title">
							<h2>Contact Form</h2>
						</div>
						<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php } ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>
	