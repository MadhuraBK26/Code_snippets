<ul>
<li>
<strong>Name</strong><?=$task['title'];?>
</li>
<li>
<strong>status</strong><?=$task ['completed']? 'complete':'incomplete' ;?>
</li>
<?php
if($task ['completed']){
	echo "complete";
	}
	else {
	echo "incomplete";
	}
?>