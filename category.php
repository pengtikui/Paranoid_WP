<?php get_header(); ?>

<div class="main-content-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="archive-title">分类：<?php single_cat_title() ?></div>
				<?php if(have_posts()) : ?>
					<?php if ( is_home() && ! is_front_page() ) : ?>
					<!-- code -->
				<?php endif; ?>
				<?php while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', get_post_format() );
					endwhile;
					the_posts_pagination( array(
						'prev_text'          => __( '上一页', 'paranoid' ),
						'next_text'          => __( '下一页', 'paranoid' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'paranoid' ) . ' </span>',
					) );
					else :
					get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
			</div>
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>