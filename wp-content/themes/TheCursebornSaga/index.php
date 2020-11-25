<?php get_header(); ?>

<div class="content">

	<div id="night_and_day">
		<?php  
			$curseborn = new WP_Query(
				array(
					'post_type' => 'cursebornsaga',
					// 'posts_per_page' => 1,
					// 'taxonomy' => 'Night and Day ',
					'order' => 'ASC',
					'orderby' => 'id',
					//'p' => 22
				)
			);
		?>
		<?php if($curseborn -> have_posts()) : while( $curseborn -> have_posts()): $curseborn -> the_post();?>
			<?php if(get_the_ID() == 22) : ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php break; ?>
			<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
		<div id="icon"><a href="#info"><img src="http://localhost:8888/quy/wp-content/uploads/2020/06/wrapper1_down.png" alt=""></a></div>
	</div>

	<div id="info" class="clearfix">
		<div id="content">
			<?php if($curseborn -> have_posts()) : while( $curseborn -> have_posts()): $curseborn -> the_post();?>
				<?php if(get_the_ID() == 23) : ?>
					<h1><?php the_title(); ?></h1>
					<hr>
					<?php the_content(); ?>
					<?php break; ?>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div id="image">
			<?php  
				$posts = new WP_Query(
					array(
						'post_type' => 'post',
						'p' => 102
					)
				);
			?>
			<?php if($posts -> have_posts()) : $posts -> the_post();?>
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			<?php endif; ?>
		</div>
	</div>

	<div id="character">
		<?php if($curseborn -> have_posts()) : while( $curseborn -> have_posts()): $curseborn -> the_post();?>
				<?php if(get_the_ID() == 24) : ?>
					<h1><?php the_title(); ?></h1>
					<div id="row1" class="row1"></div>
					<div id="row2" class="row2"></div>
					<?php break; ?>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		<?php  
			$character = new WP_Query(
				array(
					'post_type' => 'Characters',
					// 'posts_per_page' => 4,
					'order' => 'ASC',
					'orderby' => 'id'
				)
			);
		?>
		<ul id="characters">
			<!-- the_post đánh dấu vị trí của mỗi bài viết trong vòng lặp như i++ -->
			<?php if($character -> have_posts()) : while( $character -> have_posts()): $character -> the_post();
			 ?>
			 <li class="character">
			 <?php the_post_thumbnail( 'thumbnail' );  ?>
			<h3><?php the_title(); ?></h3>
			 <p><?php the_content(); ?></p>
			 </li>
			 <?php 
			 	endwhile;
			 endif;
			  ?>

		</ul>
	</div>

	<div id="the_crew">
		<div id="content">
			<?php if($curseborn -> have_posts()) : while( $curseborn -> have_posts()): $curseborn -> the_post();?>
				<?php if(get_the_ID() == 25) : ?>
					<h1><?php the_title(); ?></h1>
					<div id="row1" class="row1"></div>
					<div id="row2" class="row2"></div>
					<?php the_content(); ?>
					<?php break; ?>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>

	<div id="the_novellas">
		<?php if($curseborn -> have_posts()) : while( $curseborn -> have_posts()): $curseborn -> the_post();?>
			<?php if(get_the_ID() == 26) : ?>
				<h1><?php the_title(); ?></h1>
				<div id="row1" class="row1"></div>
				<div id="row2" class="row2"></div>
				<?php break; ?>
			<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>

		<div id="content" >
			<?php  
				$novellas = new WP_Query(
					array(
						'post_type' => 'novellas',
						// 'posts_per_page' => 4,
						'order' => 'ASC',
						'orderby' => 'id'
					)
				);
			?>
			<ul id="novellas">
				<!-- the_post đánh dấu vị trí của mỗi bài viết trong vòng lặp như i++ -->
				<?php if($novellas -> have_posts()) : while( $novellas -> have_posts()): $novellas -> the_post();
				 ?>
				 <li class="novella">
					<p
						<?php if(get_the_ID() == 40) : ?>
							class = "novella_sub"
						<?php endif; ?>
					><?php the_title(); ?></p>
				 </li>
				 <?php 
				 	endwhile;
				 endif;
				  ?>

			</ul>
		</div>
	</div>

	<div id="see_our_world">
		
			<?php if($curseborn -> have_posts()) : while( $curseborn -> have_posts()): $curseborn -> the_post();?>
				<?php if(get_the_ID() == 27) : ?>
					<h1><?php the_title(); ?></h1>
					<div id="row1" class="row1"></div>
					<div id="row2" class="row2"></div>
		<div id="content">
					<?php the_content(); ?>
					<?php break; ?>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		
			<div id="content2" class="clearfix">
				<?php  
					$posts = new WP_Query(
						array(
							'post_type' => 'post',
							'p' => 98
						)
					);
				?>
				<?php if($posts-> have_posts()) : $posts -> the_post();?>
					<?php the_content(); ?>
				<?php endif; ?>
			</div>
			<div id="content3">
				<?php  
					$posts = new WP_Query(
						array(
							'post_type' => 'post',
							'p' => 49
						)
					);
				?>
				<?php if($posts -> have_posts()) : $posts -> the_post();?>
					<?php the_content(); ?>
				<?php endif; ?>
			</div>
			<div id="content4">
				<?php  
					$posts = new WP_Query(
						array(
							'post_type' => 'post',
							'p' => 79
						)
					);
				?>
				<?php if($posts -> have_posts()) : $posts -> the_post();?>
					<?php the_content(); ?>
				<?php endif; ?>
			</div>
		</div>

	</div>

	<div id="bazaar">
		
			<?php if($curseborn -> have_posts()) : while( $curseborn -> have_posts()): $curseborn -> the_post();?>
				<?php if(get_the_ID() == 28) : ?>
					<h1><?php the_title(); ?></h1>
					<div id="row1" class="row1"></div>
					<div id="row2" class="row2"></div>
					<div id="content">
						<?php the_content(); ?>
					</div>
					<?php break; ?>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
		
	</div>

	<div id="contact">
		
		<?php if($curseborn -> have_posts()) : while( $curseborn -> have_posts()): $curseborn -> the_post();?>
			<?php if(get_the_ID() == 29) : ?>
				<h1><?php the_title(); ?></h1>
				<div id="row1" class="row1"></div>
				<div id="row2" class="row2"></div>
				<div id="content">
				<?php the_content(); ?>
				</div>
				<?php break; ?>
			<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>

	</div>

	<pre>
		<?php //print_r( $curseborn ); ?>	
	</pre>
	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
