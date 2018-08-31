<div id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?>>
	<ul class="blog-date-left">
		<li class="enigma_post_author enigma_blog_thumb_wrapper_showcase">
			<?php if(get_the_author_meta('ID') != ''): ?>
			<?php echo get_avatar(get_the_author_meta( 'ID' ),96); ?>
			<div class="enigma_blog_thumb_wrapper_showcase_overlays">
				<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
					<div class="enigma_blog_thumb_wrapper_showcase_icons1">
						<a title="<?php the_title_attribute(); ?>" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author(); ?></a>
					</div>
				</div>
			</div>
			<?php else: ?>
			<div class="no_avatar">
				<a title="<?php the_title_attribute(); ?>" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author(); ?></a>
			</div>
			<?php endif; ?>
		</li>
	</ul>
	<div class="post-content-wrap">
		<?php if(has_post_thumbnail()): 
		$img = array('class' => 'enigma_img_responsive'); ?>
		<div class="enigma_blog_thumb_wrapper_showcase enigma_author">						
			<div class="enigma_blog-img">
			<?php the_post_thumbnail('blog_2c_thumb',$img); ?>	
			</div>
			<?php if (is_home()) : ?>
			<div class="enigma_blog_thumb_wrapper_showcase_overlay">
			<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
				<div class="enigma_blog_thumb_wrapper_showcase_icons">
					<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
				</div>
			</div>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<div class="enigma_fuul_blog_detail_padding">
		<h2><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h2>
		<div class="row">
		<div class="col-md-6 col-sm-3">
		<?php if(get_the_tag_list() != '') { ?>
		<p class="enigma_tags"><?php the_tags( __('Tags : ','enigma'), '', '<br />'); ?></p>
		<?php } ?>
		</div>
		<div class="col-md-6 col-sm-3">
		<?php if(get_the_category_list() != '') { ?>
		<p class="enigma_cats"><span><?php echo __("Category : ",'enigma');
		the_category(' , '); ?></span></p>
		<?php } ?>
		</div>
		</div>
		<?php the_content( __( 'Read More' , 'enigma' ) ); 
		$defaults = array(
              'before'           => '<div class="enigma_blog_pagination"><div class="enigma_blog_pagi">' . __( 'Pages:','enigma'  ),
              'after'            => '</div></div>',
	          'link_before'      => '',
	          'link_after'       => '',
	          'next_or_number'   => 'number',
	          'separator'        => ' ',
	          'nextpagelink'     => __( 'Next page'  ,'enigma' ),
	          'previouspagelink' => __( 'Previous page' ,'enigma'),
	          'pagelink'         => '%',
	          'echo'             => 1
	          );
	          wp_link_pages( $defaults ); ?>
		</div>
		<!-- post information -->
		<div class="post-info">
			<ul class="enigma_blog_thumb_date">
				<li><i class="fa fa-clock-o"></i>
				<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
				<?php echo get_the_date('F d Y'); ?>
				<?php else : ?>
				<?php echo get_the_date(); ?>
				<?php endif; ?>
				</li>
				<li><i class="fa fa-comments-o"></i><?php comments_popup_link( '0', '1', '%', '', '-'); ?></li>
			</ul>
		</div>
	</div>
</div>	