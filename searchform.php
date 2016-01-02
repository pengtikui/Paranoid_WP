<form method="get" action="<?php echo esc_url( home_url() ); ?>">
	<div class="input-group">
		<input type="text"	name="s" class="form-control" placeholder="<?php _e('请输入关键词', 'paranoid') ?>">	
		<div class="input-group-addon">
			<a type="submit"><span class="glyphicon glyphicon-search"></span></a>
		</div>
	</div>
</form>