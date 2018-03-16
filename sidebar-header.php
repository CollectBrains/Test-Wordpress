<?php if(!is_page() && is_active_sidebar('sidebar-top')): ?>
	<div  class="header-bottom">
		<?php dynamic_sidebar('sidebar-top') ?>
	</div>
<? endif; ?>