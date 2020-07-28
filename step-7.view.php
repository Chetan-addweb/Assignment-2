<!DOCTYPE html>
<html>
<head>
	<title>task</title>
</head>
<body>

      <ul>
      	<?php foreach ($task as $key => $feature) : ?>

      		<li><strong><?= $key;?>:</strong><?= $feature; ?></li>

      	
      	<?php endforeach; ?>
      </ul>
	

</body>
</html>