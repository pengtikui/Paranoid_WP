<?php get_header(); ?>

<div class="main-content-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="archive-title">归档：<?php if(is_day()) echo the_time('Y年m月j日');elseif(is_month()) echo the_time('Y年m月');elseif(is_year()) echo the_time('Y年'); ?></div>
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