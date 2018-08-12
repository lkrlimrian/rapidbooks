<?php
	function includePartial($partial) {
		foreach (glob("partials/".$partial."*.php") as $filename) {
		    include $filename;
		}
	}
?>
<!DOCTYPE html>
<head>
	<?php includePartial('head'); ?>
</head>
<body>
	<? includePartial('sidebar'); ?>
	
	<div id="right-panel" class="right-panel">
		<? includePartial('header'); ?>
	</div>
</body>
</html>