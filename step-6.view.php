<!DOCTYPE html>
<html>
<head>
	<title>For each</title>
</head>
<body>

	<ul>
		<?php foreach($animal as $name):?>
		<li><?= $name;?></li>
	<?php endforeach; ?>
	</ul>

</body>
</html>