<article class="entry">
	<?php if(is_sticky()) {
		echo "<div class=\"featured\" title=\"置顶推荐\"><p><i class=\"fa fa-star\"></i></p></div>";
	} ?>
	<div class="entry-head">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="entry-meta">
			<span class="fa fa-calendar"></span>
			<span><?php the_time('Y-m-d') ?></span>
			&bull;
			<span class="fa fa-folder-o"></span>
			<a href=""><?php the_category(', ') ?></a>
			&bull;
			<span class="fa fa-comments-o"></span>
			<span><?php comments_number(); ?></span>
		</div>
	</div>
	<div class="entry-content">
		<?php the_content(''); ?>
	</div>
	<div class="entry-footer">
		<div class="tag-list hidden-xs"><i class="fa fa-tags"></i>
			<?php the_tags(''); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="btn entry-more"><?php _e('阅读全文', 'paranoid') ?></a>
	</div>
</article>