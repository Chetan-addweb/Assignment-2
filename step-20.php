<?php

	  try
	   {
		$conn = new PDO("mysql:host=127.0.0.1;dbname=Assignment", 'root', '');

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully done"."<br>";
	  }
	  catch(PDOException $e)
	  {
		  echo "Connection failed: " . $e->getMessage();
	  }
	$sql = "INSERT INTO user
	(name,email)
	VALUES
	(:name,:email)";
	$query = $conn -> prepare($sql);
	$query->bindParam(':name',$name,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);

	$name = "chetan singhal";
	$email = "chetansingh@gmail.com";
	$query -> execute();
	if($query==true)
	{
	  echo "Data inserted";
	}
	else {
	  echo "Data not inserted";
	}
?>
