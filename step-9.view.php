<!DOCTYPE html>
<html>
<head>
	<title>conditional</title>
</head>
<body>
	<h1>Task For the day</h1>

	<ul>
		<li>
			<strong>Name :</strong><?= $task['title']; ?>
		</li>

	  <li> <strong> Due Date: </strong><?= $task['due'];?></li>

	 <li> <strong> Person Resonsible:</strong> <?= $task['assigned'];?></li>

	 <li><strong>status:</strong>
        <?php if($task['completed']):?>
        	<span class="icon">&#9989;</span>

        <?php else: ?>
        	<span class="icon">Incompleted</span>
        <?php endif; ?>
	 	
	 	</li>
	</ul>

</body>
</html>