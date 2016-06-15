<article class="entry">
	<div class="entry-head">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<span class="fa fa-calendar"></span>
			<span><?php the_time('Y-m-d') ?></span>
			&bull;
			<span class="fa fa-comments-o"></span>
			<span><?php comments_number(); ?></span>
		</div>
	</div>
	<div class="entry-content">
		<?php the_content(''); ?>
	</div>
	<div class="entry-footer"></div>
</article>