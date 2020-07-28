<?php

	$query = require 'bootstrap.php';

	$tasks = $query->selectAll('todos');

	require 'step-14.view.php';
	?>


	






