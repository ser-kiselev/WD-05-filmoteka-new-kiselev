<?php if ( @$notifySuccess != '' ) { ?> 
	<div class="notify notify--success mb-20"><?=$notifySuccess?></div>
<?php } ?>

<?php if ( @$notifyUpdate != '' ) { ?> 
	<div class="notify notify--update mb-20"><?=$notifyUpdate?></div>
<?php } ?>

<?php if ( @$notifyError != '' ) { ?> 
	<div class="notify notify--error mb-20"><?=$notifyError?></div>
<?php } ?>