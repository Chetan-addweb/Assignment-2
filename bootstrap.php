<?php

 
	require 'Connection.php';
	require 'QueryBuilder.php';

	return new QueryBuilder(
		Connection::make()
	);
	?>
