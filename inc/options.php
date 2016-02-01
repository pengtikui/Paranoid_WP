<?php
function add_paranoid_options_page(){
	add_theme_page('Paranoid WP', '主题选项', 'administrator', 'paranoid_wp', 'paranoid_options_page');
}
add_action('admin_menu', 'add_paranoid_options_page');

function paranoid_options_page(){ ?>
	<div class="wrap">
		<h1>Paranoid WP 主题设置选项</h1>
		<form method="post" name="paranoid_options" id="paranoid_options" action="options.php">
			<table class="form-table">
				<tbody>
					<tr>
						<th><label for="paranoid_icp_number">备案号</label></th>
						<td><input name="paranoid_icp_number" type="text" class="regular-text" value="<?php echo get_option('paranoid_icp_number'); ?>"></td>
					</tr>
					<tr>
						<th><label for="paranoid_analyze_cod">统计代码</label></th>
						<td><textarea name="paranoid_analyze_code" rows="3" cols="40"><?php echo get_option('paranoid_analyze_code'); ?></textarea></td>
					</tr>
				</tbody>
			</table>
			<?php wp_nonce_field('update-options'); ?>
    		<input type="hidden" name="action" value="update">
    		<input type="hidden" name="page_options" value="paranoid_icp_number,paranoid_analyze_code">
			<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="保存设置"></p>
		</form>
	</div>
<?php } ?>