<?php
	function includePartial($partial) {
		foreach (glob("partials/".$partial."*.php") as $filename) {
		    include $filename;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php includePartial('header'); ?>
	body
</body>
</html>