</div> <!-- end #container -->
<footer id="footer" class="clearfix">
	<div id="text">
		<!-- <p>ALL RIGHTS RESERVED. COPYRIGHT © 2015 <span>THE CURSEBORN SAGA</span></p> -->
		<?php  
			$posts = new WP_Query(
				array(
					'post_type' => 'post',
					'order' => 'ASC',
					'orderby' => 'id',
					'p' => 94
				)
			);
		?>
		<?php if($posts-> have_posts()) : $posts -> the_post();?>
			<?php the_content(); ?>
		<?php endif; ?>
	</div>
	<div id="icon">
		<?php  
			$posts = new WP_Query(
				array(
					'post_type' => 'post',
					'order' => 'ASC',
					'orderby' => 'id',
					'p' => 69
				)
			);
		?>
		<?php if($posts-> have_posts()) : $posts -> the_post();?>
			<?php the_content(); ?>
		<?php endif; ?>
	</div>
</footer>
<?php //do_action('admin_menu'); ?>
<?php wp_footer(); ?>
<?php //do_action('pre_get_posts'); ?>
</body>
</html>