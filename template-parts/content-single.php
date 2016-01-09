<article class="entry">
	<div class="entry-head">
		<h1 class="entry-title"><?php the_title(); ?></h1>
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
		<div class="tag-list"> <i class="fa fa-tags"></i>
			<?php the_tags(''); ?>
		</div>
		<!-- baidu share -->
		<div id="sharebox" class="bdsharebuttonbox">
			<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
			<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
			<a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
			<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
			<a href="#" class="bds_more" data-cmd="more"></a>
		</div>
		<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
		<!-- baidu share end -->
	</div>
</article>