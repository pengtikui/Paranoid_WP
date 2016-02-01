<!-- footer start -->
<footer>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span>Copyright &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span> |
					<span>Powered by <a href="//cn.wordpress.org">WordPress</a></span> |
					<span>Theme by <a href="//pengtikui.cn" target="_blank">Paranoid_K</a></span>
					<?php
						if(!empty(get_option('paranoid_analyze_code'))){
							echo " | <span>".get_option('paranoid_analyze_code')."</span>";
						}
						if(!empty(get_option('paranoid_icp_number'))){
							echo " | <span><a href=\"http://www.miitbeian.gov.cn/\" target=\"_blank\">".get_option('paranoid_icp_number')."</a></span>";
						}
					?>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- jQuery -->
<script src="<?php bloginfo('template_url'); ?>/statics/js/jquery-1.11.2.min.js"></script>
<!-- Boostrap -->
<script src="<?php bloginfo('template_url'); ?>/statics/js/bootstrap.min.js"></script>
</body>
</html>