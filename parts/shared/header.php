<?php $page_number = get_query_var('paged') ? get_query_var('paged') : 1; ?>
<?php if(is_front_page() && $page_number ==1): ?>
	
<?php else: ?>
	
<?php endif; ?>