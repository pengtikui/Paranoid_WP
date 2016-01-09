<?php get_header(); ?>

<div class="main-content-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="archive-title"><?php _e('404 Not Found', 'paranoid') ?></div>
				<div><p><?php _e('对不起，未找到此页面！', 'paranoid') ?></p></div>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>