<?php
function add_paranoid_options_page(){
	add_theme_page('Paranoid WP', '主题选项', 'administrator', 'paranoid_wp', 'paranoid_options_page');
}
add_action('admin_menu', 'add_paranoid_options_page');

function paranoid_options_page(){ ?>
	<div class="wrap">
		<h1>Paranoid WP 主题设置选项</h1>
		<p>暂无内容，敬请期待！</p>
	</div>
<?php } ?>