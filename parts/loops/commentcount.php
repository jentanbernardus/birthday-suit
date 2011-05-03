<?php if(comments_open()): ?>
//&nbsp;<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
<?php elseif(!comments_open() || get_comments_number() > 0): ?>	
//&nbsp;<?php comments_popup_link('', '1 Comment', '% Comments'); ?>	
<?php endif; ?>
