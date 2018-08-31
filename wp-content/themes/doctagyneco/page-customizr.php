<?php 
/*
Template Name: Custom page
*/
get_header(); 
get_template_part('breadcrums');?>

<div class="container">
    <div class="row ">
	 	
		<div class="col-md-2" id="left_content">
			  <p><?php get_template_part('post','page'); ?></p>
		</div>
		
		<div class="col-md-6" id="center_content">
		    <div class="refeman_custom_content">
        	    <p><?php get_template_part('post','page'); ?></p>
            </div>			
	    </div>
		
		<div id="right_content">
			<div class="appear-animation bounceIn appear-animation-visible">
					<?php get_sidebar(); ?>	
			</div>
		 </div>
	</div>
</div>
<?php get_footer(); ?>