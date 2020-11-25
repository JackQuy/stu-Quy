<!-- the_ID() trả về số ID, post_class() trả về những class tượng trưng cho post này -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- hiển thị ảnh -->
	<!-- <div class="entry-thumbnail">
		<?php //jack_thumbnail('thumbnail'); ?>
	</div>   -->

	<!-- hiển thị tiêu đề -->
	<div class="entry-header"></div>

	<!-- hiển thị nội dung -->
	<div class="entry-content"></div>

</article>